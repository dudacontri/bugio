<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Query\Builder;
use App\Models\Fichas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () { return view('auth/login');})->name('login');

Route::get('/redef', function () { return view('redef');})->name('redef');

Route::get('/home', function () { 
    $dados = DB::table('fichas')
    ->select('n_hcv','nome_comum','conflito','sinais_clinicos','medicacoes')
    ->get();

    //Nº de atendimentos em todo período.
    $total_atendimentos = Fichas::all()->count();

    //Nº de individuos ja atendidos
    $fichas = Fichas::all();
    $total_individuos=0;
    foreach($fichas as $ficha)
    {
        $total_individuos = $total_individuos + $ficha->n_individuos;
    }
    return view('home',['dados' => $dados,'total_atendimentos'=>$total_atendimentos,'total_individuos'=>$total_individuos]);})->name('home');

Route::get('/fichas', function () {
    $usuarios = DB::table('users')
            ->select('name','id')
            ->where('atividade',1)
            ->get();
    return view('fichas', ['usuarios' => $usuarios]);})->name('fichas');

Route::get('/fichas/{n_hcv}', function ($n_hcv) {
        $ficha=DB::table('fichas')
        ->where('n_hcv', $n_hcv)
        ->first();

        $all_users = DB::table('users')
        ->select('name','id')
        ->get();

        return view('dados-ficha',['ficha'=> $ficha,'all_users'=>$all_users]);});

Route::get('fichas/tratamento/{n_hcv}', function ($n_hcv) {
        $ficha=DB::table('fichas')
        ->where('n_hcv', $n_hcv)
        ->first();
        return view('tratamento',['ficha'=> $ficha]);});

Route::get('fichas/saida/{n_hcv}', function ($n_hcv) {
         $ficha=DB::table('fichas')
        ->where('n_hcv', $n_hcv)
        ->first();
        return view('saida',['ficha'=> $ficha]);});

Route::get('fichas/editar/{n_hcv}', function ($n_hcv) {
        $ficha=DB::table('fichas')
        ->where('n_hcv', $n_hcv)
        ->first();

        $usuarios = DB::table('users')
        ->select('name','id')
        ->where('atividade',1)
        ->get();
        return view('edit-ficha',['ficha'=> $ficha, 'usuarios' => $usuarios]);});

Route::get('fichas/pdf/{n_hcv}','App\Http\Controllers\PdfController@geraPdf');

Route::post('relatorios/grupos','App\Http\Controllers\PdfController@relatorioGrupos')->name('relatorios/grupos');

Route::post('relatorios/sema','App\Http\Controllers\PdfController@relatorioSema')->name('relatorios/sema');

Route::any('home/search','App\Http\Controllers\HomeController@searchTable')->name('searchTable');

Route::get('gerenciar-usuarios/{id}', function ($id) {
        $usuario=DB::table('users')
        ->where('id', $id)
        ->first();
        return view('editar',['usuario'=> $usuario]);});

Route::get('/saida', function () {  return view('saida');})->name('saida');

Route::get('/registro', function () {  return view('auth/register');})->name('registro');

Route::get('/usuario', function () {  return view('usuario');})->name('usuario');

Route::get('/edit-usuario', function () {  return view('edit-usuario');})->name('edit-usuario');

Route::get('/gerenciar-usuarios', function () {
    $users = DB::table('users')
            ->select('id','name','email','cargo','n_celular','faculdade','curso','semestre','atividade')
            ->get();
    return view('gerenciar-usuarios',['users'=>$users]);})->name('gerenciar-usuarios');

Route::post('/gerenciar-usuarios/disable','App\Http\Controllers\UserController@disableUser')->name('disableUser');

Route::post('/gerenciar-usuarios/reactivate','App\Http\Controllers\UserController@reactivateUser')->name('reactivateUser');

Route::post('/gerenciar-usuarios/changeCargo','App\Http\Controllers\UserController@changeCargo')->name('changeCargo');

Route::post('/fichas/envio','App\Http\Controllers\FichasController@store')->name('envio');

Route::post('/edit-ficha/tratamento','App\Http\Controllers\FichasController@changeTratamento')->name('changeTratamento');

Route::post('/edit-ficha/saida','App\Http\Controllers\FichasController@changeSaida')->name('changeSaida');

Route::post('/edit-usuario/update','App\Http\Controllers\UserController@updateUser')->name('updateUser');

Route::post('/edit-ficha/edit','App\Http\Controllers\FichasController@updateFicha')->name('updateFicha');

Route::get('/relatorios', function() {
	$fichas = DB::table('fichas')
            ->select('nome_cientifico')
            ->groupBy('nome_cientifico')
            ->get();
    $nome_comum = DB::table('fichas')
            ->select('nome_comum')
            ->groupBy('nome_comum')
            ->get();
    $origem = DB::table('fichas')
            ->select('local_origem')
            ->groupBy('local_origem')
            ->get();
    $usuario = DB::table('users')
            ->select()
            ->where('atividade',1)
            ->get();
    $destinos = DB::table('fichas')
            ->select('destino')
            ->groupBy('destino')
            ->get();

	return view('relatorios', ['fichas'=>$fichas,'nome_comum'=>$nome_comum,'origem'=>$origem,'usuario'=>$usuario,'destinos'=>$destinos]);
})->name('relatorios');

Auth::routes();
