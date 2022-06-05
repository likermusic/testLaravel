<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    // protected $table = 'postsTest';
    protected $fillable = ['title','content'];

    public function rubric() {
        return $this->belongsTo(Rubric::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    // public function getPosts()
    // {
    //         $posts = DB::select("SELECT * FROM posts");
    //         return $posts;
    // }

    public static function getPosts()
    {
        return DB::select("SELECT * FROM posts");
    }
}
