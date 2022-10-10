it works!
{{-- 
@php
   //comentario 
   echo $fornecedor
@endphp
--}}


@if (count($fornecedor) > 0 && count($fornecedor) < 10)
  <h1> Existem menos de 10 fornecedores cadastrados <h1><br>
@elseif (count($fornecedor) >= 10 && count($fornecedor) <= 50)
  <h1> temos 10 á 50 fornecedores atualmente</h1><br>
@else
  <h1>estamos indo bem</h1><br>
@endif

{{--@for($i = 0 ; $i <= count($fornecedor) ; $i++) --}}
{{-- Fornecedor: {{$fornecedor[$i]['nome']}}       --}}
{{-- status: {{$fornecedor[$i]['status']}}         --}}
{{--@endfor                                        --}}

Fornecedor: {{$fornecedor[0]['nome']}}
status: {{$fornecedor[0]['status']}}