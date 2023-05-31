<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //create function in controller
    public function userView(){
        echo "View User";
    }
    public function update(){
        return "Update";
    }
    public function result(){
      return "data"
    }
}
