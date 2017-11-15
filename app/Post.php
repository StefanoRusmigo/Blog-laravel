<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['title', 'body','image'];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function scopeFilter($query,$filters)
    {
    	if (isset($filters['month']))
        {
            $query->whereMonth('created_at',Carbon::parse($filters['month'])->month);

        }


        if ($year = isset($filters['year']))
        {
            $query->whereYear('created_at',$filters['year']);

        }
    }
   

   public static function archives(){

   	return static::selectRaw('year(created_at) year,
                                      monthname(created_at) month,
                                      count(*) puplished')
                                      ->groupBy('year','month')
                                      ->orderByRaw('min(created_at) desc')
                                      ->get()->toArray();
      
   }

   public function tags()
   {
    return $this->belongsToMany(Tag::class);
   }
}
