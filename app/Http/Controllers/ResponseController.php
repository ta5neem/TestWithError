<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;
class ResponseController extends Controller
{
  public function showaddview()
  {
    return view('dashboard.responses.add');
  }

    public function store(Request $request)
    {
      $response =new Response;
      $response->responset=$request->response;
      $response->message_id=$request->message_id;
      $response->user_id=$request->user_id;
      $response->save();
      return back();
    }
    public function all()
    {  $responses = Response::all();
      $title = 'All Responses';
      return view('dashboard.responses.all',compact('responses','title'));
    }
}
