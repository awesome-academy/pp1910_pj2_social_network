@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('settings.menu')
            @include('settings.personal.main')
        </div>
    </div>
@endsection
