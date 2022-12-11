@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ asset('img/player_video.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Sistema Super Gestão</h1>
        <p class="lead">Software para gestão empresarial ideal para sua empresa.</p>
        <div class="chamada">
            <img src="{{ asset('/img/check.png') }}">
            <span class="texto-branco">Gestão completa e descomplicada</span>
        </div>
        <div style="margin-bottom:10px;" class="chamada">
            <img src="{{ asset('/img/check.png') }}">
            <span class="texto-branco">Sua empresa na nuvem</span>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>
  <hr class="my-4">

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Contato</h1>
        <p class="col-lg-10 fs-4">Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário ao lado.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        @component('site.layouts._components.form_contato', ['classe' => 'borda-branca', 'motivo_contatos' => $motivo_contatos])
        @endcomponent
      </div>
    </div>
  </div>
    
@endsection