@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nova mensagem</div>

                <div class="card-body">
                    <div class="form-group">
<form method="post" action="{{route('email')}}">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Endereço de email</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Nome</label>
    <input name="nome" id="nome" type="texto" class="form-control">

  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Assunto</label>
    <input name="assunto" id="assunto" type="texto" class="form-control">

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">mensagem</label>
    <textarea class="form-control" name="mensagem" id="mensagem" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-outline-primary">Enviar</button>
</form>
@endsection
