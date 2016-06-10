<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    
    public function index()
    {
    	//$nama = "Ridlwan Yunus";
    	//$data['nama'] = "Ridlwan Yunus";
    	//$data['umur'] = 20;
    	$nama = "<strong>Ridlwan Yunus</strong>";
    	$umur = 20;
    	//return view('profile')->with('data', $data);
    	return view('profile')->with('data', compact('nama','umur'));
    }
}
