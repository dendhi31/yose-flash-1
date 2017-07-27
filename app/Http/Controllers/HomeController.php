<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function welcome()
    {
      return view('welcome');  
    }

    public function readme()
    {
    	return view('readme');
    }
}
