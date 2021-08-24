<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    private $pathViewcontroller  ='admin.dashboard.';
    private $controllerName ='dashboard';
    public function __construct()
    {
      //View::share('controllerName', $this->controllerName);      
       view()->share('controllerName', $this->controllerName);
      
    }

    public function index()
    {
        return view($this ->pathViewcontroller.'index',[]);
    }
    
}