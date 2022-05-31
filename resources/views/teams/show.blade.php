@extends('layouts.app')

@section('title', $team->name)

@section('content')
 <h1>{{$team->name}}</h1>
 <h3>{{$team->city}}</h3>
 <p>Address: {{$team->address}}</p>
 <p>Email: {{$team->email}}</p>
 <hr />
<ul>
    @foreach($team->players as $player)
    <li>
    <a href="/players/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</p>
       
    </li> 
    @endforeach
</ul>
@endsection