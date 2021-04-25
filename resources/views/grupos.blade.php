<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <title>BUGIO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<style>
</style>
<body>
    <header>
        <h1>SISTEMA BUGIO</h1>
    </header>
    @foreach($ficha as $fichas)
    <br>
        <h2>Ficha nº {{$fichas->n_hcv}}</h2>
        Nº Preservas: {{$fichas->n_pre}}<br>
        Nome comum: {{$fichas->nome_comum}}<br>
        Nome científico: {{$fichas->nome_cientifico}}<br>
        Apelido: {{$fichas->apelido}}<br>
        Tipo de identificação própria: {{$fichas->id_propria}}<br>
        Número da identificação: {{$fichas->n_id}}<br>
        Classe: {{$fichas->classe}}<br>
        Nº de Indivíduos: {{$fichas->n_individuos}}<br>
        Sexo: {{$fichas->sexo}}<br>
        Faixa etária: {{$fichas->faixa_etaria}}<br>
        Peso: {{$fichas->peso}}kg<br>
        Histórico: {{$fichas->historico}}<br>
        <h2>Entrada</h2>
        Data de entrada: {{ date( 'd/m/Y' , strtotime($fichas->data_entrada))}}<br>
        Tipo de caso: {{$fichas->tipo_de_caso}}<br>
        Conflito: {{$fichas->conflito}}<br>
        Origem: {{$fichas->origem}}<br>
        Local de origem: {{$fichas->local_origem}}<br>
        Responsável pela entrada: {{$fichas->quem_trouxe}}<br>
        Colaborador responsável pelo tratamento: {{$fichas->name}}<br>
        Observações: {{$fichas->obs_entrada}}<br>
        <h2>Tratamento</h2>
        Sinais clínicos: {{$fichas->sinais_clinicos}}<br>
        Medicações: {{$fichas->medicacoes}}<br>
        Procedimentos: {{$fichas->procedimentos}}<br>
        Exames: {{$fichas->exames}}<br>
        <h2>Saída</h2>
        Data de saída: {{ date( 'd/m/Y' , strtotime($fichas->data_saida))}}<br>
        Número do documento de saída: {{$fichas->n_doc_saida}}<br>
        Destino: {{$fichas->destino}}<br>
        Local de destino: {{$fichas->motivo_saida}}<br>
        Responsável pela soltura/saída: {{$fichas->responsavel_entrega}}<br>
        Resultado da necrópsia (se houver): {{$fichas->res_necropsia}}<br>
        Diagnóstico final: {{$fichas->diag_final}}<br>
        Observações: {{$fichas->obs_saida}}<br>
    @endforeach
</body>