@extends('dashboard.index')

@section('title')
    {{ __('users') }}
@endsection

@section('user_name')
    {{ __('All users') }}
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
            @include('layouts.pages.users.form')
        </div>
    </main>
@endsection

@section('scripts')
<script>
    var jsonData = JSON.parse('{{ $jsonData }}');
    console.log(jsonData.name); // Output: "John"
    console.log(jsonData.age); // Output: 30
</script>
@endsection
