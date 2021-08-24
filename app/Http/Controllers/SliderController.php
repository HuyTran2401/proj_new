<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderModel as MainModel;
//use Illuminate\Support\Facades\View;

class SliderController extends Controller
{
    private $pathViewcontroller  ='admin.pages.slider.';
    private $controllerName ='slider';
    private $model;
    public function __construct()
    {
      //View::share('controllerName', $this->controllerName);
      $this-> model = new MainModel();      
      view()->share('controllerName', $this->controllerName); 
    }

    public function index()
    {
        $items = $this -> model -> listItems(null, ['task'=> "admin-list-items"]);

        // foreach ($items as $item) {
        //     echo '<h3 style="color:red">'.$item->name.'</h3>';
        // }    
        return view($this ->pathViewcontroller.'index',[
            'items' => $items
        ]);
    }
    public function form($id = null)
    {    
        $title ="SliderController - form vvv";
        return view($this ->pathViewcontroller.'form',[
            'id'=>$id,
            'title'=>$title
        ]);
    }
    public function delete()
    {
        return view($this ->pathViewcontroller.'delete');
    }
    public function status(Request $request)
    {
        echo '<h3 style="color:red" > ID:'.$request->route('id').'</h3>';
        echo '<h3 style="color:red" > STATUS:'.$request->route('status').'</h3>';
        echo '<h3 style="color:red" > ID:'.$request->id.'</h3>';
        echo '<h3 style="color:red" > STATUS:'.$request->status.'</h3>';
        return redirect() ->route('slider');
    }
}