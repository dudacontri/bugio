<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fichas;
use PDF;
use DB;

class PdfController extends Controller
{
    public function geraPdf($n_hcv)
    {
        $ficha=Fichas::where('n_hcv',$n_hcv)
        ->join('users', 'users.id', '=', 'fichas.user_id')
        ->select('fichas.*', 'users.id','users.name')
        ->first();
        $pdf = PDF::loadView('pdf',compact('ficha'));
        return $pdf->setPaper('a4')->download('Ficha.pdf');

    }
    public function relatorioGrupos(Request $request)
    {
        $options_checked = $request->input('options_to_use');
        $query = "";
        if (!is_null($options_checked)) {
            foreach ($options_checked as $key => $option) {
                $form_value = $request->input($option);
                $query .= "$option = '$form_value' "; 
                echo "\r";
                if ($key >= 0 && $key < (sizeof($options_checked) - 1)) {
                    $query .= " AND ";
                }
            }
            $query .= "AND ";
        }
        $query .= "data_entrada BETWEEN '$request->periodo_inicio' AND '$request->periodo_final'";
        $ficha=Fichas::whereRaw($query)
            ->join('users', 'users.id', '=', 'fichas.user_id')
            ->select('fichas.*', 'users.id','users.name')
        ->get();

        if(!is_null($ficha))
        {
            $pdf = PDF::loadView('grupos',compact('ficha'));
            return $pdf->setPaper('a4')->stream('Fichas.pdf');
        }
        else
        {
            $message='Não há dados que correspondem a esta solicitação.';
            return redirect('relatorios')->with('message',$message);
        }
    }
    public function relatorioSema(Request $request)
    {
        $query = "data_entrada BETWEEN '$request->periodo_inicio' AND '$request->periodo_final'";
        $ficha=Fichas::whereRaw($query)->get();
        if(!is_null($ficha))
        {
            $pdf = PDF::loadView('sema',compact('ficha'));
            return $pdf->setPaper('a4')->stream('Fichas.pdf');
        }
        else
        {
            $message='Não há dados que correspondem a esta solicitação.';
            return redirect('relatorios')->with('message',$message);
        }
    }
}
