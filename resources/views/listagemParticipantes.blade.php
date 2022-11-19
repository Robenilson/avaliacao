@extends('layouts.main')
@section('title','Listagem participantes')
@section('content')
<div class="container">
        <div class="d-flex mt-5">
            <div class="p-2 flex-grow-1"> <h1>  Listagem  dos Participante</h1></div>
            <div class="p-2"> <a class="btn btn-primary"  href="{{route('cadastro')}}"> Cadastrar novo Participante</a></div>
      </div>
    @if (session()->has('status'))
    <div class="row">
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    </div>
    @endif
    <div class="col mt-5">
    <div class="row">
        <table class="table ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Data Nascimento</th>
                <th scope="col">Endereco</th>
                <th scope="col">E-mail</th>
              </tr>
            </thead>
            @foreach ( $Participantes   as  $Participante)
                <tbody>
                    <tr>
                    <th scope="row">{{  $Participante['id']   }}</th>
                    <td>{{  $Participante['nome']   }}</td>
                    <td>{{  $Participante['sobrenome']   }}</td>
                    <td>{{  $Participante['data_nascimento']   }}</td>
                    <td>{{  $Participante['endereco']   }}</td>
                    <td>{{  $Participante['email']   }}</td>
                    </tr>
              </tbody>
            @endforeach
          </table>
        </div>
    </div>
</div>
@csrf
@endsection
