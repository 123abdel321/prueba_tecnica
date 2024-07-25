<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//MODELS
use App\Models\User;

class RegisterController extends Controller
{
    protected $messages = null;

    public function __construct()
	{
		$this->messages = [
            'id.exists' => 'El id debe existir en la tabla de centro de costos.',
			'required' => 'El campo :attribute es requerido.',
			'numeric' => 'El campo :attribute debe ser un numero',
			'string' => 'El campo :attribute debe ser texto',
			'unique' => 'El :attribute :input ya existe en la tabla de bodegas',
			'max' => 'El :attribute no debe tener más de :max caracteres'
        ];
	}
    
    public function register(Request $request)
    {
        $rules = [
            'name' => 'required|min:1|max:200',
            'email' => 'required|min:1|max:200',
            'password' => 'required|min:1|max:200',
        ];

        $validator = Validator::make($request->all(), $rules, $this->messages);

        if ($validator->fails()){
            
            return response()->json([
                "success"=>false,
                'data' => [],
                "message"=>$validator->errors()
            ], 422);
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return response()->json([
                'success'=>	true,
                'data' => $user,
                'message'=> 'Usuario creada con exito!'
            ]);
            
        } catch (Exception $e) {
            return response()->json([
                "success"=>false,
                'data' => [],
                "message"=>$e->getMessage()
            ], 422);
        }
    }
}
