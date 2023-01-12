<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    //
    public function comment(Forum $forum){
        $comment = DB::table('comment')
                    ->select('comment_id', 'users.name as username', 'comment.comment')
                    ->join('users', 'users.id', '=', 'comment.user_id')
                    ->where('comment_on_post', '=', $forum->post_id)
                    ->orderBy('comment_id', 'desc')
                    ->get();
        return view('comment',compact('forum'), ['comment' => $comment]);
    }

    public function commentAdd(Forum $forum){
        $comment = DB::table('comment')
                    ->select('comment_id', 'users.name as username', 'comment.comment')
                    ->join('users', 'users.id', '=', 'comment.user_id')
                    ->where('comment_on_post', '=', $forum->post_id)
                    ->orderBy('comment_id', 'desc')
                    ->get();
        return view('add-comment',compact('forum'), ['comment' => $comment]); 
    }

    public function commentPost(Request $request){
        DB::table('comment')->insert([
            'user_id' => $request->user_id,
            'comment_on_post' => $request->comment_on_post,
            'comment' => $request->comment,
        ]);
        return redirect()->route('forumComment', $request->comment_on_post);
    }
}
