내용 작성.

<p>{{ $name }}</p>
<p>{!! $name !!}</p>

<p>@{{ $name }}</p>
<p> 지금은 {{ now() }} 입니다. </p>

@for ($i = 0; $i < 10; $i++)
    <p>숫자 증가 : {{ $i }}</p>
@endfor

@includeIf('inc/incd')

@php
    $a = 10;
    $a++;
    echo "a : $a";
@endphp