<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Match;
use App\Services\MatchStatus;
use App\Team;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CommentsController extends Controller
{
    // function that add comment of match to database and to socket channel
    public function addComment(Request $request){

        // form validation
        $validator = Validator::make($request->all(), Comment::getRules());
        if($validator->fails()){
            return redirect()->back()->withErrors( $validator->messages())->withInput();
        }
        // if validation pass insert data to my db
        $comment = new Comment($request->all());
        $comment->belongs_to=$request->belongs_to;
        $comment->save();

        // use redis to push comment to socket
        $data = [
            'event' => 'InsertNewComment'.$comment->match_id,
            'data' => [
                'match_id' => $comment->match_id,
                'type' => \App\Services\MatchTypes::getType($comment->type),
                'created_at' =>$comment->created_at->toDateTimeString() ,
                'content' => $comment->content,
            ]
        ];
        // publish data of comment to channel using redis
        Redis::publish('test-channel', json_encode($data));
        // return back to my view  with success message
        Session::flash('message', 'Comment Added Successfully.');
        return redirect()->to('dashboard/matches/'.$comment->match_id);
    }
}
