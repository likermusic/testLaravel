<?php
    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\DB;

    class HomeController extends Controller
    {
        public function index()
        {
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
            $posts = DB::table('posts')->pluck('title');




            dd($posts);
            // return view('home', ['page'=>'Home','posts'=>$posts]);
        }

        public function test()
        {
            echo 'TestAction';
        }
    }
    

?>
