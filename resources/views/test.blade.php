@foreach ($users as $user)
    <p>
        {{ __('role') }} --> {{ $user->role }}
    </p>
@endforeach
