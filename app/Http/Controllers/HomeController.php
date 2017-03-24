<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "这就是一个空白页~";
    }

    public function getAuth($id)
    {
        shell_exec('python /data/wwwroot/default/class.py' . ' ' . $id);
    }

    public function getData()
    {
        $id = Input::get('id');
        $password = Input::get('password');
        $code = Input::get('code');
        shell_exec('python /data/wwwroot/default/class3.py' . ' ' . $id . ' ' . $password . ' ' . $code . '');
    }
}
