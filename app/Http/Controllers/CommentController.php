<?php

namespace App\Http\Controllers;

use App\Models\UserComent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function add_comment(Request $request){
//        dd($request->input('coment'));
        $comment = new UserComent();
        $comment->product_id = "11";
        $comment->name = $request->input('name');
        $comment->data = Carbon::now()->format("d M");
        $comment->marks = $request->input('marks');
        $comment->img = "https://ugc.joomcdn.net/0c411b637d850b155668870a337369a9e4df7b98_100_75.jpeg";
        $comment->coment = $request->input('coment');
        $comment->avatar = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWiMbKG114g5xVYLpdXOA10fZ6sai4E-zeRA&usqp=CAU";
        $comment->save();
        return back();
    }
}
