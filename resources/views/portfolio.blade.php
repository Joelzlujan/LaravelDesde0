@extends('layout')
@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>
    <ul>

        <h3>Forma con blade</h3>
        @if($portfolio)
            @foreach($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
          @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
        @endif

        <h3>For else con blade</h3>

        @forelse($portfolio as $portfolioItem)
            <li>{{ $portfolioItem['title'] }}<small>{{ $loop-> first ? 'Es el primero': '' }}</small></li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse



    </ul>
@endsection
