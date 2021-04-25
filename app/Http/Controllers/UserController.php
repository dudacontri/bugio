<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    protected function updateUser(Request $request)
    {
        $user = User::where('id',$request->id)->get()->first();
        $user->email = $request->email;
        $user->n_celular = $request->n_celular;
        $user->faculdade = $request->faculdade;
        $user->curso = $request->curso;
        $user->semestre = $request->semestre;
        $user->save();
        return redirect('/usuario');
    }
    protected function disableUser(Request $request)
    {
        $user = User::where('id',$request->id)->get()->first();
        $user->atividade = 0;
        $user->save();
        return redirect('/gerenciar-usuarios');
    }
    protected function reactivateUser(Request $request)
    {
        $user = User::where('id',$request->id)->get()->first();
        $user->atividade = 1;
        $user->save();
        return redirect('/gerenciar-usuarios');
    }
    protected function changeCargo(Request $request)
    {
        $user = User::where('id',$request->id)->get()->first();
        $user->cargo = $request->cargo;
        $user->save();
        return redirect('/gerenciar-usuarios');
    }
}
