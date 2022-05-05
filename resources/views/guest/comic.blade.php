@extends('layouts.base')

@section('content')
<div id="banner">
</div>
<div id="wrapper">
    <div class="single-card-box">
        <img id="special" src="{{$card['thumb']}}" alt="{{$card['series']}}">
        <h4 id="special-3">{{$card['type']}}</h4>
        <h4 id="gallery">VIEW GALLERY</h4>
    </div>
</div>

<div class="description-comic">
    <div class="description">
        <h1 style="color: blue">{{$card['title']}}</h1>
        <div class="banner-price">
            <span>U.S. Price {{$card['price']}}</span>
            <div>
                <span style="margin: 5px">AVAILABLE</span>
                <span>Check Availability</span>
            </div>
        </div>
        <div style="margin-top: 20px; line-height: 20px">
            <h5>{{$card['description']}}</h5>
        </div>
    </div>
    <div class="advertisement">
        <h5>ADVERTISEMENT</h5>
        <img style="margin-top: 20px" src="{{asset('img/img.jpg')}}" alt="img-adv">
    </div>
</div>

<div style="border-bottom: 1px solid gray; width: 100% "></div>

<div class="details-comic">
    <div style="margin-right: 30px">
        <h2>Talent</h2> 
        <div style="display: flex; justify-content: space-between; margin-top: 20px">
            <div>
                <h5 style="margin-right: 300px; width: 45px; color: red ">Art by: </h5>
            </div>
            <div>
                @foreach ( $card['artists'] as $artist) {{$artist}} @endforeach 
            </div>
        </div>
        <div style="display: flex; justify-content: space-between; margin-top: 20px">
            <div>
                <h5 style="margin-right: 243px; width: 100px; color: red ">Written by: </h5>
            </div>
            <div>
                @foreach ( $card['writers'] as $writer) {{$writer}} @endforeach 
            </div>
        </div>
    </div>
    <div>
        <h2>Specs</h2>

        <div style="display: flex; justify-content: space-between; width: 200px; margin-top: 20px; margin-bottom: 30px">
            <div>
                <h5 style="margin-right: 5px; color: red">Series:</h5>
            </div>
            <div style="color: blue">
                {{$card['series']}}
            </div>
        </div>

        <div style="display: flex; justify-content: space-between; margin-bottom: 30px">
            <div>
                <h5 style="color: red">U.S. Price:</h5>
            </div>
            <div>
                {{$card['price']}}
            </div>
        </div>

        <div style="display: flex; justify-content: space-between">
            <div>
                <h5 style="color: red">On Sale Date:</h5>
            </div>
            <div>
                {{$card['sale_date']}}
            </div>
        </div>

    </div>
</div>
@endsection