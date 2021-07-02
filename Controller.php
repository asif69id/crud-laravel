--------------------------CONTROLLER---------------------
<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;
use DB;

class CrudController extends Controller
{ 
    public function show(crud $crud)
    {
      $table = crud::all();
      return view('face.home')->with(['data'=> $table]);
    }
 
    public function delete(crud $crud, $id)
    {
      $table = crud::destroy(array('id', $id)); 
      return back(); 
    }

    public function edit(Request $request, crud $crud)
    {
      $id = $request->input('editId');
      $table = crud::find($id);
      return view('Face.editForm')->with('data', $table); 
    }

    public function update(Request $request, crud $crud)
    { 

      $id = $request->input('id');
      $name = $request->input('name');
      $price = $request->input('price'); 
      
      $table = crud::find($id); 
     
      $table->bookName = $name;
      $table->bookPrice = $price;
      $table->save();
      return redirect()->route('home'); 
    }

    public function addNew(Request $request){
          $table =  new crud();   
          $table->bookName = $request->input('name');
          $table->bookPrice = $request->input('price');  
          $table->save(); 

        return redirect()->route('home');  

      
    }
}
