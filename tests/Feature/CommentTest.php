<?php

namespace Tests\Feature;

use App\Comment;
use App\Match;
use App\Team;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCommentCanBeCreated()
    {
        //first we  need to create two teams
        $teamOne =new Team();
        $teamOne->name ="manchester";
        $teamOne->save();
        $teamTwo =new Team();
        $teamTwo->name ="arsnal";
        $teamTwo->save();
        // second we need to create match
        $match=new Match();
        $match->first_team=$teamOne->id;
        $match->second_team=$teamTwo->id;
        $match->second_team=$teamTwo->id;
        $match->description="any description";
        $match->match_date="2017-10-12";
        $match->match_time="02:00:00";
        $match->save();
        // finally we need to test if comment will be created or not
        $comment = new Comment();
        $comment->id =1;
        $comment->type = 1;
        $comment->content = "any comment";
        $comment->match_id = $match->id;
        $comment->save();
        // we will find the comment and make comparison to ensure the comment added successfully
        $insertedComment=Comment::find(1);
        $this->assertEquals($insertedComment->id,1);
    }
}
