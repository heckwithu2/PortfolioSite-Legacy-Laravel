@extends('layouts.base')
<div class="container">
    @foreach ($purchases as $record)
        <span>{{$record}}</span>
            @endforeach
</div>


{{--@section('title')--}}

{{--    @endsection--}}

{{--@section('content')--}}

{{--    @endsection--}}