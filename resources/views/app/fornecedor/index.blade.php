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