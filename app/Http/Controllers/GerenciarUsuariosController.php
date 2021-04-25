<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GerenciarUsuariosController extends Controller
{
    protected function disableUser($id)
    {
        $user= User::find($id);
        $user->atividade=0;
        $user->save;
    }
}
