<?php
    namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Rubric;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Pow;

    class HomeController extends Controller
    {
        public function index()
        {
            // $posts = Post::all();
            $posts = Post::orderBy('created_at','desc')->get();
            return view('home',['title'=>'Home page','posts'=>$posts]);
            // echo 'HomeController / indexAction';
            // $posts = DB::select("SELECT * FROM posts");
            // return $posts;
            // $ins = DB::insert("INSERT INTO posts (title,content) VALUES (?,?)", ['Статья 4', 'Ст 4 Контент']);
            // $ins = DB::insert("INSERT INTO posts (title,content) VALUES (:title,:content)", ['content' => 'Ст 5 Контент', 'title' => 'Статья 5']);
            // dump($ins);            
            // $posts = DB::select("SELECT * FROM posts WHERE id > :id", ['id' => 2]);
            // dd($posts);
            // DB::update("update posts set title = :title, updated_at = :upd where id = :id", ['id'=>4,'title'=>'NEW TITLE', 'upd'=> now()]);
            // DB::delete("delete from posts where id = ?",[5]);
            // $posts = DB::table('posts')->get();
            // $posts = DB::table('posts')->select('title','content')->limit(3)->orderBy('title','desc')->get();
            // $posts = DB::table('posts')->select('title','content')->first();
            // $posts = DB::table('posts')->where('id','=',4)->get();
            // $posts = DB::table('posts')->find(3);
            // $posts = DB::table('posts')->where([
            //     ['id','>',4],
            //     ['id','!=',1],
            //     ])->get();
            // $posts = DB::table('posts')->where('id','>',4)->value('title');
            // $posts = DB::table('posts')->select('title')->get();
            // $posts = DB::table('posts')->pluck('title');
            // $ids = DB::table('posts')->sum('id');
            // dd($ids);
            // return view('home', ['page'=>'Home','posts'=>$posts]);
            // $data = Post::all();
            // $data = Post::limit(2)->get();
            // $data = Post::where('id','>',3)->get();
            // $data = Post::select('title')->get();
            // $data = Post::find(3);
            
            // $post = new Post();
            // $post->fill(['title' => 'PostN', 'content' => 'TestInfo'])
            // $post-<save()
            // Post::create(['title' => 'PostN', 'content' => 'TestInfo']);
            // Post::where('id','=',8)->update(['content'=>'123']);
            // Post::where('id','=',8)->delete();
            // Post::destroy(9);
            // Post::destroy([10,11,12]);

            // dd($data);
            // $post = Post::find(2);
            
            // dd($post->title);
            // dd($post->rubric->title);
            
            // $rubric = Rubric::find(3);
            // dd($rubric->title,$rubric->post->title);
            // $r = Rubric::find(2);
            // dd($r->posts);
            // dd($r->posts[0]->title);
            // dd($r->posts[0]->title);

            // foreach ($r->posts as $post) {
            //     dump($post->title);
            // }
            // $p = new Post();
            // $d = $p->getp();
            // $d = Post::getp();
            // dump($d);  
            
            // $post = Post::find(2);
            // foreach ($post->tags as $tag) {
            //     dump($tag->title);
            // }
            // $tag = Tag::find(3);
            // dd($tag->posts);

            // $post = new Post();
            // $arr = $post->getPosts();
            // dd($arr);
            // $arr = Post::getPosts();
            // dd($arr);

        }

        public function test()
        {
            echo 'TestAction';
        }
    }
    

?>