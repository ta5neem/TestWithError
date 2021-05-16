<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Inventory;

class InventoryController extends Controller
{
    public function showaddview()
    {
      return view('dashboard.inventory.add');
    }

      public function store(Request $request)
      {
        $inventory =new Inventory;
        $inventory->product_amount=$request->product_amount;
        $inventory->Product_id=$request->product_id;
        $inventory->save();
        return back();
      }

      public function all()
      {  $inventories = Inventory::all();
         $title = 'All Inventories';
         return view('dashboard.inventory.all',compact('inventories','title'));
      }

      public function delete($inventory_id)
      {
        $inventory=Inventory::where('inventory_id',$inventory_id)->first();
        //$inventory=Inventory::find($id);
        $inventory->delete();
        return back();
      }

      public function edit($inventory_id)
      {   $inventory =Inventory::find($inventory_id);
          return view('dashboard.inventory.edit',compact('inventory'));
      }
}
