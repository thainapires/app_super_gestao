{{ $slot }}
<form class="p-4 p-md-5 border rounded-3 bg-light" action={{ route('site.contato') }} method="post">
    @csrf
    <div class="form-floating mb-3">
        <input name="nome" value="{{ old('nome') }}" type="text" class="form-control {{ $classe }}" id="floatingInput" placeholder="Nome">
        <label for="floatingInput">Nome</label>
    </div>
    @if($errors->has('nome'))
        {{ $errors->first('nome')}}
    @endif
    <div class="form-floating mb-3">
        <input name="telefone" value="{{ old('telefone') }}" type="text" class="form-control {{ $classe }}" id="floatingPassword" placeholder="Telefone">
        <label for="floatingPassword">Telefone</label>
    </div>
    {{ $errors->has('telefone') ? $errors->first('telefone') : ''}}
    <div class="form-floating mb-3">
        <input name="email" value="{{ old('email') }}" type="text" class="form-control {{ $classe }}" id="floatingPassword" placeholder="E-mail">
        <label for="floatingPassword">Email</label>
    </div>
    {{ $errors->has('email') ? $errors->first('email') : ''}}
    <div class="form-floating mb-3">
        <select name="motivo_contatos_id" class="form-control {{ $classe }}">
            <option value="">Qual o motivo do contato?</option>
            @foreach($motivo_contatos as $key => $motivo_contato)
                <option value="{{$motivo_contato->id}}" {{ old('motivo_contatos_id')  == $motivo_contato->id ? 'selected' : '' }}>{{$motivo_contato->motivo_contato}}</option>
            @endforeach
        </select>
        {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}
    </div>
    <div class="form-floating mb-3">
        <textarea name="mensagem" class="form-control {{ $classe }}" id="exampleFormControlTextarea1" rows="3">{{ (old('mensagem') != '') ? old('mensagem') : '' }}</textarea>
        <label for="exampleFormControlTextarea1">Preencha aqui a sua mensagem</label>
    </div>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : ''}}
    <button class="w-100 btn btn-lg btn-primary {{ $classe }}" type="submit">Enviar</button>
</form>

@if($errors->any())
    <div style="position:absolute; top:0px; width:100%; background:red">

        @foreach ($errors->all() as $erro)
            {{ $erro }}
            <br >
        @endforeach

    </div>
@endif