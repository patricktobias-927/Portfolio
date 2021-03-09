<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//INCLUDE
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function posts(){
        
        $id = 1;

        //fluent
        // $posts = DB::table('posts')
        //     ->where('id', $id)
        //     ->get(); 

        //query select with pdo params 
        // $posts = DB::select('select * from posts WHERE id = :id', ['id' => 1]);

        // $posts = DB::table('posts')->select('body')->get();

        //orWhere
        // $posts = DB::table('posts')->where('created_at', '<', now()->subDay())
        // ->orWhere('title', 'Prof.')
        // ->get();

        //wherebetween
        // $posts = DB::table('posts')
        // ->whereBetween('id', [1,2])
        // ->get();

        //notnull
        // $posts = DB::table('posts')
        // ->whereNotNull('title')
        // ->get();

        //distinct
        // $posts = DB::table('posts')
        // ->select('title')
        // ->distinct()
        // ->get();

        //orderby
        // $posts = DB::table('posts')
        // ->orderBy('title', 'asc')
        // ->get();

        //latest order
        // $posts = DB::table('posts')
        // ->latest('title')
        // ->get();

        //latest order
        // $posts = DB::table('posts')
        // ->oldest('title')
        // ->get();

        //firstoneonly
        // $posts = DB::table('posts')
        // ->orderBy('title', 'asc')
        // ->first(); //->count(); //->min,max,sum,avg(); 

        //find
        // $posts = DB::table('posts')
        // ->find($id);

        //INSERT, UPDATE, DELETE
        // $posts = DB::table('posts')->insert([
        //     'title' => 'new title', 
        //     'body' => 'newbody'
        //      ]);

        // $posts = DB::table('posts')->where('id', '=', 4)->update([
        //     'title' => '4st Title',
        //     'body' => '4st body'
        // ]);

        // $posts = DB::table('posts')->where('id', '=', 4)->delete();


            dd($posts);

    }
}
