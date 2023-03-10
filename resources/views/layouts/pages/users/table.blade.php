<a class="btn btn-primary" href="{{ route('users.create') }}">{{ __('Add New User') }}</a>
<table class="table table-bordered border-dark mt-3">
    <thead>
            <tr class="border-dark">
                <th>{{ __('Name') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Role') }}</th>
                <th>{{ __('Created by') }}</th>
                <th>{{ __('Updated by') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
      </thead>
      <tbody>
            @foreach ($users as $user)
            <tr>
                <td class="text-center text-dark"><a href="{{ route('users.show', ['user' => $user->id]) }}">{{ $user->name }}</a></td>
                <td class="text-center text-dark">{{ $user->email }}</td>
                <td class="text-center text-dark">{{ $user->role }}</td>
                <td class="text-center text-dark">{{ $user->created_by }}</td>
                <td class="text-center text-dark">{{ $user->updated_by }}</td>
                <td>
                    <a class="btn btn-primary m-1 w-50" href="{{ route('users.edit', ['user' => $user->id]) }}">{{ __('edit') }}</a>
                    <a class="btn btn-danger m-1 w-50" href="">{{ __('delete') }}</a>
                </td>
            </tr>
            @endforeach
      </tbody>
</table>
