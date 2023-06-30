@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de email') }}</div>

                <div class="card-body">
                    

                   <h1> Sr(a) {{$contato->name}}  {{ __('Bem Vindo!') }}</h1>
                    <br/>
                    {{ __('Seu contato foi Registrado com Sucesso!') }}
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
