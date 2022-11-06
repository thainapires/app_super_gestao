<h3>Fornecedor</h3>

{{ 'Teste' }}
<?= 'Teste' ?>

{{--Fica o comentário que será descartado pelo interpretador do blade--}}

@php
    // Comentando utilizando sintaxe nativa php
    echo 'Teste';
@endphp

{{--@dd($fornecedores)--}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif

Fornecedor: {{ $fornecedores2[0]['nome'] }}
<br>
Status: {{ $fornecedores2[0]['status'] }}
<br>

@unless($fornecedores2[0]['status'] == 'S')
    Fornecedor Invativo
@endunless

<br>

@isset($fornecedores3)
    Fornecedores 3
@endisset

@isset($fornecedores2)
    Fornecedores 2
@endisset

<br>

@isset($fornecedores2[0]['cnpj'])
    Cnpj 0
@endisset

@isset($fornecedores2[1]['cnpj'])
    Cnpj 1
@endisset

<br>

@empty($variavelVazia)
    Vazia
@endempty

<br>

<!-- se a variavel nao tiver definida ou for null, valor default -->
CNPJ: {{ $fornecedores2[1]['cnpj'] ?? 'Dado não preenchido'}}

Telefone: ({{ $fornecedores2[1]['ddd'] ?? ''}}) {{ $fornecedores2[1]['telefone'] ?? ''}}
@switch($fornecedores2[2]['ddd'])
    @case ('11')
        São Paulo - SP
        @break
    @case ('85')
        Fortaleza - CE
        @break
    @case ('21')
        Rio de Janeiro - RJ
        @break
    @default
        Nenhum lugar
@endswitch()