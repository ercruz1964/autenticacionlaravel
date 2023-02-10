<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TipoDocumento;
use App\Models\Sexo;
use Illuminate\Validation\Rules;

class RegistrarUserController extends Controller
{
    public function create(){
        $tipoDocumento = TipoDocumento::all();
        $sexo = Sexo::all();
    
        return view('auth.registrar',['tipoDocumento'=>$tipoDocumento,'sexo'=>$sexo]);
    }

    public function store(Request $request)
    {
        //return dd($request);
        $request->validate([
            'name' => ['required','string','max:255'],
            'email'  => ['required','string','email','max:255','unique:users'],
            'password' => ['required','confirmed',Rules\Password::defaults()],
            'nombreUsers'=>['required','string','max:255'],
            'apellidosUsers'=>['required','string','max:255'],
            'fechaNacimiento' => ['required'],
            'numeroDocumento' => ['required'],
            'tipoDocumento_id' => ['required'],
            'sexo_id' => ['required'],
        ]);

        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nombreUsers'=>$request->nombreUsers,
            'apellidosUsers'=>$request->apellidosUsers,
            'fechaNacimiento' => $request->fechaNacimiento,
            'numeroDocumento' => $request->numeroDocumento,
            'tipoDocumento_id' => $request->tipoDocumento_id,
            'sexo_id' => $request->sexo_id,
        ]);

        return redirect()->route('login')->with('success','¡Usuario Creado!');
    }
}
