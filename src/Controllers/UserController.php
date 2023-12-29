<?php

namespace Phpcatcom\Permission\Gui\Controllers;
//namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use Phpcatcom\Permission\Models\Role;
use Phpcatcom\Permission\Models\User;

//class PermissionController extends BigControllers
class UserController extends Controller
{

    public function index()
    {
        $in = PermissionGuiController::$in;
        $in['data'] = User::addSelect('id', 'name', 'email')->get();

//        for ($o = 1; $o <= 20; $o++) {
////            foreach ($in['data0'] as $dd) {
//                $in['data'][] = ['id'=>rand(),'name'=>rand(),'email'=>rand()];
////            }
//        }

        return view('phpcatcom/permission/gui::users', $in);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function create()
    {
    }

    public function show()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }

    public function edit()
    {
    }

//    public static $in = ['menu' => [
//        [
//            'route' => 'index',
//            'title' => 'Управление',
//            'template' => 'phpcatcom/permission-gui::index'
//        ],
//        [
//            'route' => 'roles',
//            'title' => 'Роли',
//            'template' => 'phpcatcom/permission-gui::roles'
//        ],
//        [
//            'route' => 'places',
//            'title' => 'Места',
//            'template' => 'phpcatcom/permission-gui::places'
//        ],
//        [
//            'route' => 'setter',
//            'title' => 'Назначение ролей пользователям',
//            'template' => 'phpcatcom/permission-gui::setter'
//        ],
//    ]];
//
//
//    public function showIndex()
//    {
//        return view('phpcatcom/permission-gui::index', self::$in);
//    }
//
//    public function showRoles()
//    {
//        return view('phpcatcom/permission-gui::roles', self::$in);
//    }
//
//    public function showSetter()
//    {
//        return view('phpcatcom/permission-gui::setter', self::$in);
//    }
//
//    public function showPlaces()
//    {
//
//        self::$in['places'] = \PhpCatCom\Models\Permission::all();
//
//        return view('phpcatcom/permission-gui::places', self::$in);
//    }

}
