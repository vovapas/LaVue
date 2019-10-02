<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
     public function index() {
    	$url_data = [
    		array(
    			'title' 	=> 'DKA-DEVELOP',
    			'url' 		=> 'https://dka-develop.ru'
    		),
    		array(
    			'title' 	=> 'YouTube',
    			'url' 		=> 'http://youtube.ru'
    		)
    	];
    	return view('index',[
    		'url_data' => $url_data
    	]);
    }
}
