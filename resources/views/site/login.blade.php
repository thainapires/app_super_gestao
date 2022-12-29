@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6 text-black">

                <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                </div>

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                <form action={{ route('site.login') }} method="post" style="width: 23rem;">

                    @csrf

                    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                    <div class="form-outline mb-4">
                    <input name="usuario" value="{{ old('usuario') }}" type="text" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example18">Usuário</label>
                    {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}

                    </div>

                    <div class="form-outline mb-4">
                    <input name="senha" value="{{ old('senha') }}" type="password" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example28">Senha</label>
                    {{ $errors->has('senha') ? $errors->first('usuario') : '' }}
                    </div>

                    <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit">Acessar</button>
                    </div>

                    <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Esqueceu a senha?</a></p>
                    <p>Não possui uma conta? <a href="#!" class="link-info">Registre-se aqui</a></p>

                </form>

                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="https://editalconcursosbrasil.com.br/wp-content/uploads/2019/05/Management.jpg"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
            </div>
        </div>
    </section>

@endsection