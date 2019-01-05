<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;

class messageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $user_id = \Auth::user()->id;
        $messages = Message::where('sender_id',$user_id)
        ->orWhere('reciever_id',$user_id)->get(['sender_id','reciever_id']);
        // dd($messages);
        $users = [];
        foreach($messages as $message){
            if(!in_array($message->sender_id,$users)&&($message->sender_id!=$user_id)){
                array_push($users,$message->sender_id);
            }
            if(!in_array($message->reciever_id,$users)&&($message->reciever_id!=$user_id)){
                array_push($users,$message->reciever_id);
            }
        }
        // dd($users);
        return view('admin.message.index',compact('messages','users'));
    }
    public function getUsers($query){
        return User::where("firstname","LIKE","%".$query."%")->get();
    }
    public function getMessages($sender,$reciever){
        $messages = Message::where('sender_id',$sender)->where('reciever_id',$reciever)
        ->orwhere('sender_id',$reciever)->where('reciever_id',$sender)->orderBy('created_at', 'asc')->get();
        return \Response::json($messages);
    }
    public function getAvatar($userId){
        $avatar = User::find($userId)->avatar;
        return response()->json($avatar);
    }
    public function sendMessage(Request $request){
        // dd($request);
        $message = new Message();
        $message->sender_id = \Auth::user()->id;
        $message->reciever_id = $request->reciever;
        $message->content = $request->content;
        $message->sent_time = now();
        $message->save();
        
    }

}
