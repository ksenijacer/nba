@extends("layouts.app")

@section('title', 'Teams')

@section('content')
<h1>Teams</h1>

<ul>
    @foreach($teams as $team)
    <li>
        <a href="/show/{{$team->id}}">
            {{$team->name}}
        </a>
        -
        <a >
            {{$team->city}}
        </a>
    </li>
    @endforeach
</ul>

@endsection