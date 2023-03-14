@extends('dashboard.index')

@section('title')
    {{ __('users') }}
@endsection

@section('index')
    {{ __('active') }}
@endsection

@section('user_name')
    {{ __('All users') }}
@endsection

@section('content_header')
    {{ __('users of users header') }}
@endsection

@section('content_header_link')
    <a href="#">users of users link</a>
@endsection

@section('content')
    <main>
        <div class="table-responsive">
            {{-- @include('layouts.pages.users.table') --}}
        </div>
    </main>
@endsection
