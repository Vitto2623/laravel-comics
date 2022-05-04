@extends('layouts.base')

@section('content')
    <div id="wrapper-cards">
        <div class="contents-container">
            <h1>CURRENT SERIES</h1>
            @foreach ($cards as $cardElement)
                <div class="card-box">
                    <img id="special" src="{{$cardElement['thumb']}}" alt="{{$cardElement['series']}}">
                    <h4 id="special-2">{{$cardElement['series']}}</h4>
                </div>
            @endforeach
            <button id="btn">LOAD MORE</button>
        </div>
    </div>
@endsection
