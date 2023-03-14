@extends('dashboard.index')

@section('title')
    {{ __('users') }}
@endsection

@section('user_name')
    {{ $response['data']['name'] }}
@endsection
{{--
@section('route.show')
    <a href="{{ route('users.users.show', ['user'=>auth()->id()]) }}" class="d-block">{{ auth()->user()->name ?: 'login' }}</a>
@endsection --}}

@section('content_header')
{{ __('users of users header') }}
@endsection

@section('content_header_link')
<a href="#">users of users link</a>
@endsection

@section('content')
<main>
    <div class="table-responsive">
        @include('layouts.pages.users.card')
    </div>
</main>
@endsection
