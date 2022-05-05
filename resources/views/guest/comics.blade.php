@extends('layouts.base')

@section('content')
    <div id="wrapper-cards">
        <div class="contents-container">
            <h1>CURRENT SERIES</h1>
            @foreach ($cards as $index => $cardElement)
                <div class="card-box">
                    <img id="special" src="{{$cardElement['thumb']}}" alt="{{$cardElement['series']}}">
                    <h4 id="special-2">
                        <a id="link" href="{{route('comic-page-detail', [$index => $index])}}">
                            {{$cardElement['series']}}
                        </a>
                    </h4>
                </div>
            @endforeach
            <button id="btn">LOAD MORE</button>
        </div>
    </div>
@endsection
