@extends('website.index')

@section('conteudo')
<div class="container">
        <h1>Informações sobre os Materiais</h1>
        <table>
            <thead>
                <tr>
                    <th colspan="3" class="highlight">Rastreamento</th>
                </tr>
                <tr>
                    <th>Funcionário</th>
                    <th>Material</th>
                    <th>Data e Hora</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th colspan="2" class="highlight">Prateleiras</th>
                </tr>
                <tr>
                    <th>Código do Material</th>
                    <th>Localização</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        <div class="status">
            <div class="authorized">Autorizadas</div>
            <div class="pending">Em Aguardo</div>
            <div class="denied">Negadas</div>
        </div>
    </div>
@endsection

@push ('css')
		<link rel='Stylesheet' href='css/styleia.css'>
@endpush