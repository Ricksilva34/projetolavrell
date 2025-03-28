@extends('master')

@section('content')
    @if(!Auth::check())
        <h1 class="text-center mt-3">Projeto de Gerenciamento Escolar</h1>
        <p class="text-justify mt-3">
            Projeto de gerenciamento escolar, é um sistema desenvolvido em Laravel para o gerenciamento de alunos, professores e disciplinas.
            Com ele, é possível cadastrar alunos e professores, criar disciplinas e realizar a matrícula de alunos em matérias específicas.
        </p>
    @else
        <h2 class="text-center mt-3">Bem-vindo, <strong>{{ Auth::user()->name }}</strong></h2>
        <img class="bostonc d-block mx-auto"src="{{ asset('BOSTON.png') }}" width="666px" height="666px">
    @endif
@endsection
