<div class="form-group mb-3">
    <input name="text" id="search" type="search" value="" placeholder="search" class="form-control w-50">
</div>
<input type="hidden" id="url_input" value="{{ route('users.index') }}">
<input type="hidden" id="token_input" value="{{ csrf_token() }}">
<div class="table-responsive">

    <a class="btn btn-primary" href="{{ route('users.create') }}">{{ __('Add New User') }}</a>
    <table class="table table-bordered border-dark mt-3">
        <thead>
                <tr class="border-dark">
                    <th class="text-center text-dark">{{ __('Name') }}</th>
                    <th class="text-center text-dark">{{ __('Email') }}</th>
                    <th class="text-center text-dark">{{ __('Role') }}</th>
                    <th class="text-center text-dark">{{ __('Created by') }}</th>
                    <th class="text-center text-dark">{{ __('Updated by') }}</th>
                    <th class="text-center text-dark">{{ __('Action') }}</th>
                </tr>
          </thead>
          <tbody>
                @foreach ($response['data'] as $user)
                <tr>
                    <td class="text-center text-dark"><a href="{{ route('users.show', ['user' => $user->id]) }}">{{ $user->name }}</a></td>
                    <td class="text-center text-dark">{{ $user->email }}</td>
                    <td class="text-center text-dark">{{ $user->role }}</td>
                    <td class="text-center text-dark">{{ $user->created_by }}</td>
                    <td class="text-center text-dark">{{ $user->updated_by }}</td>
                    <td>
                        <a class="btn bg-dark m-auto p-0" href="{{ route('users.edit', ['user' => $user->id]) }}"><img src="{{ asset('assets/dashboard/icons/Web/icons8-edit-kiranshastry-gradient-32.png') }}" alt=""></a>
                        <a class="btn bg-dark m-auto p-0" href=""><img src="{{ asset('assets/dashboard/icons/Web/icons8-remove-windows-11-color-32.png') }}" alt=""></a>
                    </td>
                </tr>
                @endforeach
          </tbody>
    </table>
</div>


@section('scripts')
<script>
    $(document).ready(function() {
        live_searching();
        function live_searching(query = '') {
            $.ajax({
                url: "#url_input",
                method: "GET",
                data: {query:query},
                dataType: 'html',
                cache: false,
                success: function(data) {
                alert('Data = ' + query);
                },
                error:function() {
                    alert('Data = none');
                }
            });
        }
        $(document).on('click', '#user_submit_btn', function() {
            e.preventDefault();
            let name = $('.name').val();
            let email = $('.email').val();
            live_searching(query);
        });
        $(document).on('keyup', '#search', function() {
            var query = $(this).val();
            live_searching(query);
        });
    });
</script>
@endsection
