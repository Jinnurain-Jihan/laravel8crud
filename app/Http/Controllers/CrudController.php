<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
Use Session;
class CrudController extends Controller
{
    public function showdata(){
        // $showdata=Crud::all();
        $showdata=Crud::simplepaginate(5);
        return view('show_data',compact('showdata'));
    }
    public function adddata(){
        return view('add_data');
    }
    public function storedata(Request $request){
        $rules=[
            'name'=>'required|max:10',
            'email'=>'required|email',
        ];
        $cm=[
            'name.required'=>'Enter Your name',
            'name.max'=>'The name must not be greater than 10 characters',
            'email.required'=>'Enter Your email',
            'email.email'=>'Email must be a valid email'

        ];
        $this->validate($request,$rules,$cm);
        $crud= new Crud();
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->save();
        Session::flash('msg','Data successfully added');
        return redirect('/');
    }

    public function editdata($id=null){
        $editdata= CRud::find($id);
        return view('edit_data',compact('editdata'));
    }

    public function updatedata(Request $request,$id){
        $rules=[
            'name'=>'required|max:10',
            'email'=>'required|email',
        ];
        $cm=[
            'name.required'=>'Enter Your name',
            'name.max'=>'The name must not be greater than 10 characters',
            'email.required'=>'Enter Your email',
            'email.email'=>'Email must be a valid email'

        ];
        $this->validate($request,$rules,$cm);
        $crud= Crud::find($id);
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->save();
        Session::flash('msg','Data successfully updated');
        return redirect('/');
    }
    public function deletedata($id=null){
        $deletedata= CRud::find($id);
        $deletedata->delete();
        Session::flash('msg','Data successfully deleted');
        return redirect('/');
    }
}
