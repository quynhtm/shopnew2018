<?php

namespace App\Http\Controllers;

class BaseSiteController extends Controller{

	public function __construct(){}
    public function head(){
        return view('site.head');
    }
	public function header($catid=0){
        return view('site.header');
	}
    public function slider(){
		echo 'Slider';
    }
    public function footer(){
        return view('site.footer');
	}
    public function master(){
        return view('site.master');
    }
	public function page403(){
		echo '403';
	}
	public function page404(){
		echo '404';
	}
}  