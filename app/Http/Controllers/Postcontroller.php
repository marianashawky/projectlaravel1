<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index()
    {
        $allPosts=[ 
            ['title'=>'First Post','posted_by'=>'Ahmed','created_at'=>'2020-08-09'],
            ['title'=>'Second Post','posted_by'=>'Mariana','created_at'=>'2020-08-05'],
            ['title'=>'Third Post','posted_by'=>'Ali','created_at'=>'2020-08-06']
        ];
        return view('posts.index',[
            
            'allPosts' =>  $allPosts
        
        ]);
    

    }

    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {

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
