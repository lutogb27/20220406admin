<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class AdminTopController extends Controller
{
    function show(){
		return view("admin.admin_top");
	}
}
