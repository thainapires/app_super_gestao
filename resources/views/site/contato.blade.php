@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')

<div class="container col-xxl-8 px-4 py-5">
   

          <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Entre em contato conosco</h1>
        <p class="col-lg-10 fs-4">A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível. Nosso tempo médio de resposta é de 48 horas.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        @component('site.layouts._components.form_contato', ['classe' => 'borda-branca', 'motivo_contatos' => $motivo_contatos])
        @endcomponent
      </div>
    </div>
  </div>

      <hr class="my-4">

<div class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-4">
        <h5>Contato</h5>
        (11) 3333-4444<br>
        supergestao@dominio.com.br
      </div>

      <div class="col-2">
        <h5>Localização</h5>
        <img src="{{ asset('img/mapa.png') }}">
      </div>

      <div class="col-4 offset-1">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of whats new and exciting from us.</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>&copy; 2022 Super Gestão. Todos os direitos reservados.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><i class="fa fa-twitter"></i></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><i class="fa fa-instagram"></i></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
  </footer>
</div>
@endsection