<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt');
    }
    public function likeIt(Reply $reply){
        $reply->like()->create(['user_id' => 1]);
        
        return response('Created' ,Response::HTTP_CREATED);
    }

    public function unlikeIt(Reply $reply){
        
        $reply->like()->where('user_id',1)->first()->delete();
        return response('Deleted',Response::HTTP_NO_CONTENT);
    }
}
