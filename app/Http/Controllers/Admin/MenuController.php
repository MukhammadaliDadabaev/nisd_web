<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laracasts\Flash\Flash;

class MenuController extends Controller
{

    public $menu;

    public function __construct(Menu $menu){
        return $this->menu=$menu;
    }

    public function index(){
        $menus=$this->menu->get();
        return view('admin.menu.index',compact('menus'));
    }
}
