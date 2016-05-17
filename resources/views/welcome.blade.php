@extends('layout')
@section('content')

    @if (empty($people))
        There are no people.
    @else
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    @endif

@stop