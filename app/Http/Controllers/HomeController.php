<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

//controlador de inicio
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   //llama al midelware de identificación
        //si quitamos esto no se necesitará iniciar sesión
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        $propiedades=Property::all();
        //$request->user()->authorizeRoles(['user', 'admin']);
        return view('welcome',compact('propiedades'));
    }


    /*
        public function someAdminStuff(Request $request)
        {
            $request->user()->authorizeRoles(‘admin’);
            return view(‘some.view’);
        }
     */
}
