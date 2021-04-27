@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    @if(count($type) > 0)
        <ul>
        @foreach ($type as $t)
            <li>{{ $t }}</li>
        @endforeach
        </ul>
    @endif
@endsection