@extends('layouts.app')

@section('content')
    <h1>Notices Page</h1>
    @if(count($notices) > 0)
        <div class='card m-5 p-5'>
        <ul class='list-group'>
            @foreach($notices as $n)
                <li class='list-group-item'>    
                    <h4><a href="http://localhost/atp/public/notice/{{ $n->id }}">{{ $n->title }}<a></h4>
                    <small>Post Time: {{ $n->created_at }}</small>
                </li>
            @endforeach
        </ul>
        </div>
    @endif
@endsection
