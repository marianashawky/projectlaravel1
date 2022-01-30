<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;

class Postcontroller extends Controller
{
    public function index()
    {
        $allPosts=post::all();
        
        return view('posts.index',[
            
            'allPosts' =>  $allPosts
        
        ]);
    

    }

    public function create()
    {

        $Users=User::all();
        return view('posts.create',[
             'users'=>$Users
        ]);
    }
    public function store()
    {
        $data =request()->all();
        post::create([
            'title'=>$data["title"],
            'description'=>$data["description"],
            'user_id'=>$data["post_creator"]
        ]);
        // db
        return redirect()->route('posts.index');
    }

    public function show($postId)
    {

        // db
        return $postId;
    }

    public function edit($postId)
    {

        // db
        return $postId;
    }


    public function destroy($postId)
    {

        // db
        return $postId;
    }


}
