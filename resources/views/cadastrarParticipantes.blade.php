@extends('layouts.main')
@section('title','Cadastrar Participantes')
@section('content')
   <div class="container">
    <div class="row mt-5">
        @if ($errors->any())
            @foreach ( $errors->all() as $erro )
                <div class="alert alert-danger">
                    {{$erro}}
                </div>
            @endforeach
        @endif
        <form   method="post" action="{{route('salva')}}" >
                @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nome </label>
              <input type="text" class="form-control"     name="nome"   aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome"   aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Data Nascimeto</label>
                <input type="text" class="form-control" name="data_nascimento"   aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Endereco</label>
                <input type="text" class="form-control" name="endereco"   aria-describedby="emailHelp">
             </div>
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="text" class="form-control" name="email"   aria-describedby="emailHelp">
             </div>
            <div class="d-flex mt-5">
                <div class="p-2 flex-grow-1" > <a class="btn btn-primary"  href="{{route('index')}}"> voltar </a></div>
                <div class="p-2 ">  <button type="submit" class="btn btn-success">Salvar</button></div>
          </div>
          </form>
    </div>
   </div>
@endsection
