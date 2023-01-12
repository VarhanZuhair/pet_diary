<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function index(){
        return view('forum-page');
    }

    public function edit(Forum $forum){
        return view('forum-update',compact('forum'));
    }

    public function update(Forum $forum, Request $request){
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        // ]);
      
        $affected = DB::table('forum')
              ->where('post_id',  $request->post_id)
              ->update(['title' => $request->title,
                                'description' => $request->description]);
      
        return redirect()->route($request->category);
    }

    public function delete(Forum $forum){
        return view('forum-delete',compact('forum'));  
    }

    public function hide(Request $request){
        $affected = DB::table('forum')
              ->where('post_id',  $request->post_id)
              ->update(['status' => "hide"]);
      
        return redirect()->route($request->category);
    }


    // CAT
    public function cat(){
        $forum = DB::table('forum')
                ->select('post_id', 'forum.title', 'forum.description', 'users.name as username')
                ->join('users', 'users.id', '=', 'forum.user_id')
                ->where('category', '=', 'cat')
                ->where('status', '!=', 'hide')
                ->orderBy('post_id', 'desc')
                ->get();
        return view('forum.cat', ['forum' => $forum]);
    }
    public function catPost(){
        return view('post.post-cat');
    }
    public function catStore(Request $request){
        DB::table('forum')->insert([
            'user_id' => $request->user_id,
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->route('cat');
    }


    // DOG
    public function dog(){
        $forum = DB::table('forum')
                ->select('post_id', 'forum.title', 'forum.description', 'users.name as username')
                ->join('users', 'users.id', '=', 'forum.user_id')
                ->where('category', '=', 'dog')
                ->where('status', '!=', 'hide')
                ->orderBy('post_id', 'desc')
                ->get();
        return view('forum.dog', ['forum' => $forum]);
    }
    public function dogPost(){
        return view('post.post-dog');
    }
    public function dogStore(Request $request){
        DB::table('forum')->insert([
            'user_id' => $request->user_id,
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->route('dog');
    }


    // RABBIT
    public function rabbit(){
        $forum = DB::table('forum')
                ->select('post_id', 'forum.title', 'forum.description', 'users.name as username')
                ->join('users', 'users.id', '=', 'forum.user_id')
                ->where('category', '=', 'rabbit')
                ->where('status', '!=', 'hide')
                ->orderBy('post_id', 'desc')
                ->get();
        return view('forum.rabbit', ['forum' => $forum]);
    }
    public function rabbitPost(){
        return view('post.post-rabbit');
    }
    public function rabbitStore(Request $request){
        DB::table('forum')->insert([
            'user_id' => $request->user_id,
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->route('rabbit');
    }
    
    public function fish(){
        $forum = DB::table('forum')
                ->select('post_id', 'forum.title', 'forum.description', 'users.name as username')
                ->join('users', 'users.id', '=', 'forum.user_id')
                ->where('status', '!=', 'hide')
                ->where('category', '=', 'fish')
                ->orderBy('post_id', 'desc')
                ->get();
        return view('forum.fish', ['forum' => $forum]);
    }
    public function fishPost(){
        return view('post.post-fish');
    }
    public function fishStore(Request $request){
        DB::table('forum')->insert([
            'user_id' => $request->user_id,
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->route('fish');
    }

    public function bird(){
        $forum = DB::table('forum')
                ->select('post_id', 'forum.title', 'forum.description', 'users.name as username')
                ->join('users', 'users.id', '=', 'forum.user_id')
                ->where('category', '=', 'bird')
                ->where('status', '!=', 'hide')
                ->orderBy('post_id', 'desc')
                ->get();
        return view('forum.bird', ['forum' => $forum]);
    }
    public function birdPost(){
        return view('post.post-bird');
    }
    public function birdStore(Request $request){
        DB::table('forum')->insert([
            'user_id' => $request->user_id,
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->route('bird');
    }
    
    public function hamster(){
        $forum = DB::table('forum')
                ->select('post_id', 'forum.title', 'forum.description', 'users.name as username')
                ->join('users', 'users.id', '=', 'forum.user_id')
                ->where('category', '=', 'hamster')
                ->where('status', '!=', 'hide')
                ->orderBy('post_id', 'desc')
                ->get();
        return view('forum.hamster', ['forum' => $forum]);
    }
    public function hamsterPost(){
        return view('post.post-hamster');
    }
    public function hamsterStore(Request $request){
        DB::table('forum')->insert([
            'user_id' => $request->user_id,
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->route('hamster');
    }
}
