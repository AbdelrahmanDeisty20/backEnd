<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class database extends Controller
{
    //
    public function index()
{
    $data = DB::table("job")->get();
    return view("show", compact('data'));
}

public function create(){
    return view("insert");
}

public function insert(Request $req){
    DB::table('job')->insert([
        'firstName'=> $req->fName,
        'secondName'=> $req->sName,
        'Age'=> $req->agName,
        'salary'=> $req->salary
    ]);
    $data = DB::table("job")->get(); // retrieve the updated data
    return view("show", compact('data')); // pass the $data to the view
}

public function edit($id)
{
    $data = DB::table("job")->where("id", $id)->first();
    return view("edit", compact("data"));
}

public function update(Request $req, $id)
{
    DB::table("job")->where("id", $id)->update([
        'firstName' => $req->FName,
        'secondName' => $req->SName,
        'Age' => $req->Age,
        'salary' => $req->Salary
    ]);
    $data = DB::table("job")->get(); // retrieve the updated data
    return view("show", compact('data')); // pass the $data to the view
}

public function delete($id)
{
    DB::table("job")->where("id",$id)->delete();
    $data = DB::table("job")->get(); // retrieve the updated data
    return view("show", compact('data')); // pass the $data to the view
}
}
