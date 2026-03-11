<?php

namespace App\Http\Controllers;  
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contacto::all();
        return view('contactos.contacto_index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contactos.contacto_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
             'nombre'  => 'required|min:3',
             'correo'  => 'required|email',
             'mensaje' => 'required|min:10|max:255',
        ]);

        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        return redirect()->route('contactos.create')->with('info', '¡Formulario Recibido!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        return view('contactos.contacto_show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        return view('contactos.contacto_edit', compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {
        $request->validate([
             'nombre'  => 'required|min:3',
             'correo'  => 'required|email',
             'mensaje' => 'required|min:10|max:255',
        ]);

    
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        return redirect()->route('contactos.show', $contacto);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        return redirect()->route('contactos.index');
    }
}
