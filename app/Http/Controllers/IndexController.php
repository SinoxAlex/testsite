<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){

        $users = DB::table('users')->get();

        return view('index', ['users' => $users]);
    }


    public function create(Request $request){

        if(!empty($_POST)){

            $date = str_replace("/", ".", $request->input('dob'));

            DB::table('users')->insert([
                    'name' => $request->input('name'),
                    'surname' => $request->input('surname'),
                    'dob' => $date,
                    'phone' => $request->input('phone'),
                    'email' => $request->input('email'),
                    'created_at' => date("d.m.y H:i:s")
            ]);

            return redirect('/');
        }

        return view('create');
    }


    public function update(Request $request,$id){

        if(!empty($_POST)){
            $date = str_replace("/", ".", $request->input('dob'));

            DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->input('name'),
                    'surname' => $request->input('surname'),
                    'dob' => $date,
                    'phone' => $request->input('phone'),
                    'email' => $request->input('email'),
                    'updated_at' => date("d.m.y H:i:s")
                ]);
            return redirect('/');
        }

        $user = DB::table('users')->where('id', $id)->get();

        return view('update', ['user' => $user]);
    }


    public function delete($id){

        DB::table('users')->where('id', $id)->delete();

        return redirect('/');
    }
}
