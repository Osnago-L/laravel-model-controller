@extends('layouts.app')

@section('content')
    @foreach ($movie as $key)
        <div class="card">
            <div>
                <h4>{{$key["title"]}}</h4>
                <h6>{{$key["original_title"]}}</h6>
            </div>
            <div>
                <span>{{$key["nationality"]}}</span>
                <span>{{$key["date"]}}</span>
                <span>{{$key["vote"]}}</span>
            </div>
        </div>
    @endforeach
@endsection

