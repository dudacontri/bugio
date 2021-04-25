<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fichas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('login');
    }

    protected function searchTable(Request $request)
    {
        $query = $request->nome_ficha;
        $dados = null;
        if (is_numeric($query)) {
            $dados = Fichas::where('n_hcv',$request->nome_ficha)->get();
        } else {
            $dados = Fichas::where(\DB::raw('lower(nome_comum)'), 'like', '%' . strtolower($query) . '%')->get();
        }
        if(is_null($dados))
        {
            $message='Não há dados que correspondem a esta solicitação.';
            return view('home')->with('message',$message);
        }
        else
        {
            return view ('home',['dados'=>$dados]);
        }
    }
}
