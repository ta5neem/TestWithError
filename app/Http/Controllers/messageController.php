<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class messageController extends Controller
{
  public function showaddview()
  {
    return view('dashboard.message.add');
  }

    public function store(Request $request)
    {
      $messge=new Message;
      $messge->user_id=$request->user_id;
      $messge->message=$request->message;
      $messge->save();
      return back();
    }
    public function all()
    {  $message = Message::all();
      $title = 'All Messages';
      return view('dashboard.message.all',compact('message','title'));
    }
}
