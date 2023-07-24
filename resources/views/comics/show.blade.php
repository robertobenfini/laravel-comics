@extends('layouts.app')

@section('content')
<div>
    <img class="jumbotron" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="jumbo">
</div>

<div class="container">
    <div class="row">
        <div class="col-10">
            <div>
                <img src="{{ $comic['thumb']}}"  class="img-show">
            </div>
            <div class="col-10">
                <h2>{{ $comic['title']}}</h2>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>


@endsection