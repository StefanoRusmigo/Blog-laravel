<?php

namespace Tests\Unit;

use App\Post;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
	use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testArchives()
    {
    	$first = factory(Post::class)->create();
    	$second = factory(Post::class)->create([
    		'created_at'=>\Carbon\Carbon::now()->subMonth()]);

    	$posts = Post::archives();

    	$this->assertEquals([
    		[
    		  "year" => $first->created_at->format('Y'),
    		  "month" => $first->created_at->format('F'),
   			  "puplished" => 1
  			],

    		[
    		  "year" => $second->created_at->format('Y'),
    		  "month" => $second->created_at->format('F'),
   			  "puplished" => 1
  			]
    		],$posts);
    	
    }
}
