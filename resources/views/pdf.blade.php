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
    <br>
        <h2>Ficha nº {{$ficha->n_hcv}}</h2>
        Nº Preservas: {{$ficha->n_pre}}<br>
        Nome comum: {{$ficha->nome_comum}}<br>
        Nome científico: {{$ficha->nome_cientifico}}<br>
        Apelido: {{$ficha->apelido}}<br>
        Tipo de identificação própria: {{$ficha->id_propria}}<br>
        Número da identificação: {{$ficha->n_id}}<br>
        Classe: {{$ficha->classe}}<br>
        Nº de Indivíduos: {{$ficha->n_individuos}}<br>
        Sexo: {{$ficha->sexo}}<br>
        Faixa etária: {{$ficha->faixa_etaria}}<br>
        Peso: {{$ficha->peso}}kg<br>
        Histórico: {{$ficha->historico}}<br>
        <h2>Entrada</h2>
        Data de entrada: {{ date( 'd/m/Y' , strtotime($ficha->data_entrada))}}<br>
        Tipo de caso: {{$ficha->tipo_de_caso}}<br>
        Conflito: {{$ficha->conflito}}<br>
        Origem: {{$ficha->origem}}<br>
        Local de origem: {{$ficha->local_origem}}<br>
        Responsável pela entrada: {{$ficha->quem_trouxe}}<br>
        Colaborador responsável pelo tratamento: {{$ficha->name}}<br>
        Observações: {{$ficha->obs_entrada}}<br>
        <h2>Tratamento</h2>
        Sinais clínicos: {{$ficha->sinais_clinicos}}<br>
        Medicações: {{$ficha->medicacoes}}<br>
        Procedimentos: {{$ficha->procedimentos}}<br>
        Exames: {{$ficha->exames}}<br>
        <h2>Saída</h2>
        Data de saída: {{ date( 'd/m/Y' , strtotime($ficha->data_saida))}}<br>
        Número do documento de saída: {{$ficha->n_doc_saida}}<br>
        Destino: {{$ficha->destino}}<br>
        Local de destino: {{$ficha->motivo_saida}}<br>
        Responsável pela soltura/saída: {{$ficha->responsavel_entrega}}<br>
        Resultado da necrópsia (se houver): {{$ficha->res_necropsia}}<br>
        Diagnóstico final: {{$ficha->diag_final}}<br>
        Observações: {{$ficha->obs_saida}}<br>
</body>