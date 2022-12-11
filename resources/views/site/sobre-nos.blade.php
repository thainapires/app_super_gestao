@extends('site.layouts.basico')

@section('titulo', 'Sobre nós')

@section('conteudo')

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      
        <h1 class="fw-bold lh-1 mb-3">Olá, eu sou o Super Gestão</h1>
        <p class="lead">O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa. Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
       
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