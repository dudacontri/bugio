<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<style>
</style>
<body>
    <header>
        <h1>RELATÓRIO</h1>
    </header>
    @foreach($ficha as $fichas)
    <br>
        <h2>Nº HCV {{$fichas->n_hcv}}</h2>
        Tipo de caso: {{$fichas->tipo_de_caso}}<br>
        Nome comum: {{$fichas->nome_comum}}<br>
        Nome científico: {{$fichas->nome_cientifico}}<br>
        Tipo de identificação própria: {{$fichas->id_propria}}<br>
        Número da identificação: {{$fichas->n_id}}<br>
        Nº de Indivíduos: {{$fichas->n_individuos}}<br>
        Sexo: {{$fichas->sexo}}<br>
        Faixa etária: {{$fichas->faixa_etaria}}<br>
        Data de entrada: {{ date( 'd/m/Y' , strtotime($fichas->data_entrada))}}<br>
        Conflito: {{$fichas->conflito}}<br>
        Data de saída: {{ date( 'd/m/Y' , strtotime($fichas->data_saida))}}<br>
        Número do documento de saída: {{$fichas->n_doc_saida}}<br>
        Motivo de saída: {{$fichas->motivo_saida}}<br>
        Diagnóstico final: {{$fichas->diag_final}}<br>
        Observações: {{$fichas->entrada}} / {{$fichas->obs_saida}}<br>
    @endforeach
</body>