@extends('layouts.base')

@section('content')

    <div class="container">
        @foreach ($purchases as $record)
            <span>{{$record}}</span>
        @endforeach
    </div>

@endsection

{{--@section('content')--}}

{{--    @endsection--}}