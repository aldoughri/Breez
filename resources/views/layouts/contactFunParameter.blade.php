@extends('app')
@section('content')
    <h1>
        Contact page
    </h1>
    @if(count($people))
@foreach($people as $person)
    <ul>
        {{$person}}
    </ul>
@endforeach
    @endif
@endsection
@section('footer')

    <script>alert("Hi visitor")</script>

@endsection
