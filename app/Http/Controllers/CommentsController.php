<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Match;
use App\Services\MatchStatus;
use App\Team;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CommentsController extends Controller
{

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
        // return back to my view  with success message
        Session::flash('message', 'Comment Added Successfully.');
        return redirect()->to('dashboard/matches/'.$comment->match_id);
    }
}
