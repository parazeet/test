<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class ComController extends Controller
{
    public function show() {
		$re = Comment::where('id', 1)->first()->title;
		//$qw = $re->title;
		dd($re);
		
	}
}
