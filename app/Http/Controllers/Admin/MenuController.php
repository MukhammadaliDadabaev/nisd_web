<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MenuRequest;
use App\Models\Language;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laracasts\Flash\Flash;
use Nette\Schema\ValidationException;

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

    public function create(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
    public function store(MenuRequest $request){
//        try {
//            $data = $request->validated();
//            $data['parent_id'] = 0;
//            $this->menu->create($data);
//        } catch (ValidationException $e){
//            echo $e->getMessage();
//        }
        // return redirect(route('admin.menu.index'));

    }
}
