@extends('layouts.app')
 
@section('content')
<div class="container" whidth='900px;'>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body  text-sm text-gray-700 dark:text-gray-500 underline" >
                   

                    {{ __('Bem Vindo!') }}
                    <br/>
                    Segue teste >>
                    <a href="{{ url('/cad') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                        SHIPSMART DEV TEST >>
                    </a>
                </div>
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                           <!-- area limpa--> 
                        </div>
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                           <!-- area limpa--> 
                        </div>
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                           <!-- area limpa--> 
                        </div>
            </div>
            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l"><!-- area limpa--> </div>
        </div>
        
    </div>
    
</div>

@endsection
