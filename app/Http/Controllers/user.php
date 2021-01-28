<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class user extends Controller
{
    public function pruebas (Request $request){
        return "Accion de pruebas en User controllers";
    }

    // Funcion de registro
    public function register (Request $request){

        $json = $request->input('json', null);
        $params = json_decode($json);
        $params_array = json_decode($json);

    if(!empty($params) && !empty($params_array) ){
        $validate = Validator::make($params_array, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'description' => 'required',
        ]);
        
     if($validate->fails()){
        $data = array (
            'status' => 'error',
            'code' => 404,
            'mensage' => 'El usuario no se ha creado',
            'errors' => $validate -> errors()
        );
    }else{    

            $pwd = password_hash($params->passwrod, PASSWORD_BCRYPT, ['cost' => 4]);

            $user = new User();
            $user->name = $params_array['name'];
            $user->email = $params_array['email'];
            $user->password = $pwd;
            $user->description = $params_array['description'];

            $user->save();

            $data = array (
                'status' => 'success',
                'code' => 200,
                'mensage' => 'El usuario se ha creado'
            );
        }   
    }else{
        $data = array (
            'status' => 'error',
            'code' => 404,
            'mensage' => 'Datos no son correctos',
            'errors' => $validate -> errors()
        );
    }
} 

   

    // Funcion de login
    public function login (Request $request){
        return "Accion de pruebas en User controllers Login";
    }
}
