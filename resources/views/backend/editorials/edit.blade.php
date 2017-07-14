@extends('layouts.app')

@section('content')
<div class="page-content">
  <div class="content">

    <!-- BREADCRUMB -->
    <ul class="breadcrumb">
      <li><p>VOCÊ ESTÁ AQUI</p></li>
      <li><a href="{{ route('content.news.index') }}">Notícias</a></li>
      <li><a href="{{ route('editorials.index') }}">Categorias</a></li>
      <li><a class="active">Cadastrar</a></li>
    </ul>

    <!-- TITLE-->
    <div class="page-title">
      <a href="{{ route('content.news.index') }}">
        <i class="icon-custom-left"></i>
      </a>
      <h3>
        Alterar <span class="semi-bold">Categoria</span>
      </h3>
    </div>

    <!-- CONTENT -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple">
          <div class="grid-title no-border">
            <h4>Informações do Categoria</h4>
          </div>

          <div class="grid-body no-border">
            {!! Form::model($editorial, [
                'method' => 'PATCH',
                'route' => ['editorials.update', $editorial->id],
                'files' => true
            ]) !!}

              @include('backend.editorials.form', ['submitButtonText' => 'Alterar'])

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection