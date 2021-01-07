<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AddTodo extends Controller
{
    function add(Request $request)
    {
        $Successful =  DB::insert('insert into tasks (task) values (?)', [$request->user['name']]);
        if($Successful){
            return "Successful";
        }

    }
    public function delete($id)
    {
        $deleted = DB::delete('delete from tasks where id = ?',[$id]);
        if($deleted){
            return "Successful delete".$id;
        }
    }
       
}
