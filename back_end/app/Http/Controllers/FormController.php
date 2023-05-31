<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //get data
    function getData(){
        $fName = $_GET['fName'];
        $lName = $_GET["lName"];
        $gender = $_GET["gender"];
        echo '
        <h1>Result</h1>
        <h3>First Name:'.$fName.'</h3>
        <h3>Last Name: '.$lName.'</h3>
        <h3>Gender : '.$gender.'</h3>
        ';
        echo 
        "
            <a href='/form'>Back to form </a>
        ";
    }
}
