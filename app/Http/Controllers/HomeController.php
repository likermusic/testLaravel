<?php
    namespace App\Http\Controllers;

    class HomeController extends Controller
    {
        public function index()
        {
            // echo 'HomeController / indexAction';
            return view('home', ['page'=>'Home']);
        }

        public function test()
        {
            echo 'TestAction';
        }
    }
    
?>
