<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Manufacturer;

class ManufacturerController extends Controller
{
  public function showaddview()
  {
    return view('dashboard.manufacturer.add');
  }

    public function store(Request $request)
    {
      $manufacturer =new Manufacturer;
      $manufacturer->name=$request->name;
      $manufacturer->adress=$request->adress;
      $manufacturer->mobile=$request->mobile;
      $manufacturer->email=$request->email;
      $manufacturer->save();
      return back();
    }

    public function all()
    {  $manufactorers = Manufacturer::all();
      $title = 'All Manufactorers';
      return view('dashboard.manufacturer.all',compact('manufactorers','title'));
    }

    public function delete($manufacturer_id)
    {
      $manufactorers=Manufacturer::where('manufacturer_id',$manufacturer_id)->first();
      //$inventory=Inventory::find($id);
      $manufactorers->delete();
      return back();
    }

    public function edit($manufacturer_id)
    {   $manufactorers =Manufacturer::find($manufacturer_id);
        return view('dashboard.manufacturer.edit',compact('manufactorers'));
    }
}
