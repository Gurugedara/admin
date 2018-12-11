<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mcq;
use App\McqAnswer;

class mcqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.mcq.add',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $mcq = new Mcq();
        $mcq->paper_id = $request->paper_id;
        $mcq->description = $request->description;
        $mcq->marks = $request->marks;
        $mcq->save();
        $count=1;
        foreach($request->answers as $answer){
            $mcq_answer = new McqAnswer();
            $mcq_answer->answer = $answer;
            $mcq_answer->mcq_id = $mcq->id;
            ($count==$request->answer)? $mcq_answer->status = 1:$mcq_answer->status=0;
            $mcq_answer->save();
            $count+=1;
        }
        $redirect = "/admin/institute/papers/".$request->paper_id;
        return redirect($redirect);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mcq $mcq)
    {
        return view('admin.mcq.edit',compact('mcq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
