@extends('Layouts.master')

@section('content')
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles.css";>
        <title>

        </title>
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div class="row">
        <div class="col-md-12">
            <p class="quote"> MediService Equipments </p>
        </div>
    </div>


    @foreach($posts as $post)

        <div class="row">
            <div class="column">
                <h1 class="post-title">{{$post->type}}</h1>
                <div class="card">
                        <img style="width: 100%"
                             src="{{$post->imageUrl}}">
                    </div>
                <p>price:{{$post->price}}$</p>
                <p>brand:{{$post->brand}}</p>
                <p>specification:{{$post->specification}}</p>
                <p><a href="{{route('blog.post', ['id' => $post->id])}}">Read more...</a> </p>
                <div class="row">
                    <div class="col-md-12>">
                        <a href="{{route('blog.cart')}}" class="btn btn-success">Buy</a>
                    </div>
                </div>
            </div>
        </div>


    @endforeach
@endsection
