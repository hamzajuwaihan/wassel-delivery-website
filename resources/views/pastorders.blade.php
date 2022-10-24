@extends('layouts.app')
@section('content')
    <div style="margin-top:500px">
        @if (session('success'))
            <div class="alert alert-success text-center" role="alert">{{ session('success') }}</div>
        @endif

    </div>
@endsection
