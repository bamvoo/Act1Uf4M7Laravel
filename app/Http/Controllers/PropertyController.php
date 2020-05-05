<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PropertyController extends Controller
{
    function __construct()
    {
//        $this->middleware(['auth','role:admin']);
    }

    /**
     * Llistat de tots els recursos.
     *
     * @return Response
     */
    public function index()
    {
        $properties= Property::all();
        return view('properties.index',compact('properties'));
    }

    /**
     * Renderitza formulari de creació del recurs.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('properties.create');

    }

    /**
     * Acció d'emmagatzemar en la base de dades, cridada des del formulari create.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->visibilidad != null){
            $visibilidad = 0;
        }
        else{
            $visibilidad = 1;
        }
        $user_id = auth()->user()->id;
        $path=$request->file('fotografia');
            $fotto=$path->store('photos','public');
        Property::create(['descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
            'direccion'=>$request->direccion,
            'user_id'=>$user_id,
            'estado'=>$request->estado,
            'tipo'=>$request->tipo,
            'visible'=>$visibilidad,
            'm2'=>$request->m2,
            'fotografia'=>$fotto

        ]);
        return redirect()->route('properties.index');
    }

    /**
     * Mostrar el recurs seleccionat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);
        //compact --> para pasar la variable sin el $ o otra cosa
        return view('properties.show',compact('property'));
    }

    /**
     * Renderitza formulari per modificar recurs.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property=Property::find($id);
        $users=User::all();
        return view('properties.edit',compact('property','users'));
    }

    /**
     * Acció d'actualitzar dades del recurs, cridada des del formulari edit.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property=Property::find($id);
        $property->update(['descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
//            'fotografia'=>$request->fotografia,
            'owner_id'=>$request->owner_id
        ]);

        return redirect()->route('properties.index');
    }
    /**
     * Acció d'eliminar el recurs seleccionat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $property=Property::find($id);
        $property->delete();

        return redirect()->route('properties.index');
    }
}
