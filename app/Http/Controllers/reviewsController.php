<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\review;

class reviewsController extends Controller
{
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
}
