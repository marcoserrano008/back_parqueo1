<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        DB::beginTransaction();
    
        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'apellidoPaterno' => $request->input('paterno'),
                'apellidoMaterno' => $request->input('materno'),
                'ci' => $request->input('ci'),
                'password' => Hash::make($request->input('password')),
                'rol' => 'cliente',
                'fechaNacimiento' => $request->input('fechaNacimiento'),
            ]);
    
            Cliente::create([
                'id_cliente' => intval($request->input('ci')),
                'id_usuario' => $user->id,
            ]);
    
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => 'Ocurrió un error durante el registro'], 500);
        }
    
        return $user;
    }

    public function getRol()
    {
        $user = Auth::user();
        $rol = $user->rol;
        return ['rol' => $rol];
    }
    


    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('email','password'))){
            return response([
                'message' => 'Invalid Credentialss'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;
        $cookie = cookie('jwt', $token, 60*24);
        return response([
            'message' => 'Success'
        ])->withCookie($cookie);


        //
    }

    public function user()
    {
        return Auth::user();
    }

    public function logout()
    {
        $cookie = Cookie::forget('jwt');
        
        return response([
            'message' => 'Success'
        ])->withCookie($cookie);
    }
}
