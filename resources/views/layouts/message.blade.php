@extends('layouts.template-main')

<div class='container-fluid'>
    <div class='alert alert-success'>
        @php
        echo $message;
        @endphp
    </div>
    <div>
        <a href="{{$route}}" class='btn btn-primary'>Voltar</a>
    </div>
</div>
