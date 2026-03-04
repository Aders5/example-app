<?php

namespace App\Http\Controllers;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto()
    {
        return view('contacto');
    }

    public function recibeForm(Request $request)
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

        return redirect()->back();
    }

    public function listaContactos()
    {
        $contactos = Contacto::all();
        return view('lista-contactos', ['contactos' => $contactos]);
    }

}
