<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Post;
class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
    	$posts = Post::latest()->filter(request(['month','year']))->get();

        // if ($month = request('month'))
        // {
        //     $posts->whereMonth('created_at',Carbon::parse($month)->month);

        // }


        // if ($year = request('year'))
        // {
        //     $posts->whereYear('created_at',$year);

        // }

        // $posts = $posts->get();



        return view('posts.index',compact('posts'));


    }

    public function show(Post $post) 
    {
    	return view('posts.show',compact('post'));

    }


     public function create() 
    {
    	return view('posts.create');

    }  

    public function store() 
    {
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    		]);
     

       $image_path = request('image')->store('public');
    	// $post = new Post;
    	// $post->title=request('title');
    	// $post->body=request('body');
    	// $post->save();
    	// OR
        $post = new Post(request(['title','body']));
    	#Post::create(request(['title', 'body']));
        auth()->user()->publish($post);
        $post->image = Storage::url(basename($image_path));
        $post->save();

        session()->flash('message',"You have successfully created a post".$post->image);

    	return redirect('/');

    }

    public function delete($post){
        $post = Post::find($post);
        if($post->delete()){
            Storage::delete("public/".basename($post->image));

           session()->flash('message',"You have successfully deleted a post");

           return redirect('/');
        }else{
            session()->flash('message',"We couldn't deleted the post");

           return redirect('/');
        }

    }
}
