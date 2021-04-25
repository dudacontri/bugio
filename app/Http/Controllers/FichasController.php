<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fichas;

class FichasController extends Controller
{
    function store(Request $request)
    {
        $ficha = new Fichas();

        $ficha->n_hcv           = $request->n_hcv;
        $ficha->n_pre           = $request->n_pre;
        $ficha->id_propria      = $request->id_propria;  
        $ficha->n_id            =$request->n_id;
        $ficha->apelido         =$request->apelido;
        $ficha->nome_comum      =$request->nome_comum;
        $ficha->nome_cientifico =$request->nome_cientifico;
        $ficha->classe          =$request->classe;
        $ficha->n_individuos    =$request->n_individuos;
        $ficha->sexo            =$request->sexo;
        $ficha->faixa_etaria    =$request->faixa_etaria;
        $ficha->peso            =$request->peso;
        $ficha->historico       =$request->historico;
        $ficha->data_entrada    =$request->data_entrada;
        $ficha->tipo_de_caso    =$request->tipo_de_caso;
        $ficha->conflito        =$request->conflito;
        $ficha->origem          =$request->origem;
        $ficha->local_origem    =$request->local_origem;
        $ficha->user_id         =$request->user_id;
        $ficha->quem_trouxe     =$request->quem_trouxe;
        $ficha->obs_entrada     =$request->obs_entrada;

        $ficha->save();

        // isso vai redirecionar pra rota que tu quiser!! só mudar o parametr
        return redirect()->route('fichas');
    }

    function updateFicha(Request $request)
    {
        $data=Fichas::where('n_hcv',$request->n_hcv)->get()->first();
        $data->n_pre           = $request->n_pre;
        $data->id_propria      = $request->id_propria;  
        $data->n_id            =$request->n_id;
        $data->apelido         =$request->apelido;
        $data->nome_comum      =$request->nome_comum;
        $data->nome_cientifico =$request->nome_cientifico;
        $data->classe          =$request->classe;
        $data->n_individuos    =$request->n_individuos;
        $data->sexo            =$request->sexo;
        $data->faixa_etaria    =$request->faixa_etaria;
        $data->peso            =$request->peso;
        $data->historico       =$request->historico;
        $data->data_entrada    =$request->data_entrada;
        $data->tipo_de_caso    =$request->tipo_de_caso;
        $data->conflito        =$request->conflito;
        $data->origem          =$request->origem;
        $data->local_origem    =$request->local_origem;
        $data->user_id         =$request->user_id;
        $data->quem_trouxe     =$request->quem_trouxe;
        $data->obs_entrada     =$request->obs_entrada;
        $data->save();
        
        return redirect('/fichas/'. $data->n_hcv);
    }

    function changeTratamento(Request $request)/*Insere HCV*/
    {
        $data=Fichas::where('n_hcv',$request->n_hcv)->get()->first();
        $data->sinais_clinicos= $request->sinais_clinicos;
        $data->medicacoes     = $request->medicacoes;  
        $data->procedimentos  =$request->procedimentos;
        $data->exames         =$request->exames;

        $data->save();
        return redirect('/fichas/'. $data->n_hcv);
    }

    function changeSaida(Request $request)/*Insere HCV*/
    {
        $data=Fichas::where('n_hcv',$request->n_hcv)->get()->first();
        $data->n_doc_saida         = $request->n_doc_saida;
        $data->data_saida          = $request->data_saida;  
        $data->motivo_saida        =$request->motivo_saida;
        $data->destino             =$request->destino;
        $data->responsavel_entrega =$request->responsavel_entrega;
        $data->res_necropsia       =$request->res_necropsia;
        $data->diag_final          =$request->diag_final;
        $data->obs_saida           =$request->obs_saida;

        $data->save();
        return redirect('/fichas/'. $data->n_hcv);;
    }
}
