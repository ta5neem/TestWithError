<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchace;
class PurchaceController extends Controller
{
  public function showaddview()
  {
    return view('dashboard.purchace.add');
  }

    public function store(Request $request)
    {
      $purchace= new Purchace;
      $purchace->order_num=$request->order_num;
      $purchace->total_price=$request->total_price;
      $purchace->manufacturer_id=$request->manufacturer_id;
      $purchace->user_id=$request->user_id;
      $purchace->pay_date=$request->pay_date;
      $purchace->save();
      return back();
    }
    public function all()
    {  $purchaces = Purchace::all();
      $title = 'All Purchace';
      return view('dashboard.purchace.all',compact('purchaces','title'));
    }
}
