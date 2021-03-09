@extends('layouts.app')

@section('about')
    

{{-- IF STATEMENTS --}}

@if (5 > 10)
    <h1>{{ 'No' }}</h1>
@elseif ( 5 == 10)
<h1>{{ 'Yes' }}</h1>   
@else
    <h1>{{ 'Wrong' }}</h1>
@endif

{{-- if empty --}}
{{-- @unless (empty($title))
<h1>{{ 'Not Empty' }}</h1>   
@endunless --}}

{{-- if empty --}}
{{-- @empty($title)
<h1>{{ 'Not Empty' }}</h1>   
@endempty --}}


{{-- isset --}}
{{-- @isset($title)
    <h1>Patrick</h1>
@endisset --}}

{{-- SWITCH STATEMENT--}}
{{-- @switch($title)
    @case('John')
        {{ "Wrong!" }}
        @break
    @case('Patrick')
        {{ "Hi, Patrick!" }}
        @break
    @default
        {{  "No name!" }}
@endswitch --}}

{{-- IF STATEMENTS --}}

{{-- LOOPS --}}

{{-- FOREACH --}}
@foreach ($names as $item)
    <h5>{{ $item }}</h5>
@endforeach


{{-- FOR ELSE --}}
@forelse ($names as $item)
<h5>{{ $item }}</h5>
@empty
<h5>{{ "Array is empty! " }}</h5>
@endforelse

{{-- WHILE --}}
{{ $i = 0 }}
@while ( $i <= 10)
<h5> {{ $i++ }} </h5>
   
@endwhile



{{-- LOOPS --}}
@endsection