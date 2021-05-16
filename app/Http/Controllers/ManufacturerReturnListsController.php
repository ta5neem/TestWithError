<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManufacturerReturnList;
class ManufacturerReturnListsController extends Controller
{
  public function showaddview()
  {
    return view('dashboard.manufacturer return list.add');
  }

    public function store(Request $request)
    {
      $manufacturerreturnlist =new ManufacturerReturnList;
      $manufacturerreturnlist->date=$request->date;
      $manufacturerreturnlist->total_price=$request->total_price;
      $manufacturerreturnlist->return_order_num=$request->return_order_num;
      $manufacturerreturnlist->manufactorer_id=$request->manufactorer_id;
      $manufacturerreturnlist->save();
      return back();
    }
    public function all()
    {  $manufactorerreturnlists = ManufacturerReturnList::all();
      $title = 'All Manufactorers Return List';
      return view('dashboard.manufacturer return list.all',compact('manufactorerreturnlists','title'));
    }
}
