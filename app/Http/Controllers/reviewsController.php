<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\review;
use App\review_comment;

class reviewsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $reviews = review::all();
        return view('admin.institutes.reviews',compact('reviews'));
    }

    public function publish(review $review){
        $review->status = 1;
        $review->save();
        return redirect('/admin/institute/reviews');
    }

    public function hide(review $review){
        $review->status = 0;
        $review->save();
        return redirect('/admin/institute/reviews');
    }

    public function comment(review $review){
        return view('admin.institutes.comments',compact('review'));
    }

    public function addComment(Request $request,$review_id)
    {
        $comment = new review_comment();
        $comment -> comment = $request->comment;
        $comment -> user_id = auth()->user()->id;
        $comment -> type = 1;
        $comment -> review_id = $review_id;
        $comment -> save();
        return redirect("/admin/institute/reviews/comment/$review_id");
    }
}
