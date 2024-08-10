@extends('layout')

@section('conteudo')
    <h2 class="col-12 text-center">Agenda</h2>

    <p class="text-muted text-center">Para agendar informe o seu nome e telefone</p>

    <form action="" method="post" class="offset-md-3 col-md-6">
        <div class="mb-2 mx-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome"  class="form-control">
        </div>
        <div class="mb-2 mx-3">
            <label class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control">
        </div>

        <button type="submit" class="btn btn-success btn-block mx-3">Agendar</button>
    </form>
@endsection