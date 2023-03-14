{{-- {{ dd($response) }} --}}
<form method="POST" action="{{ route('users.update', ['user' => $response['data']['id']]) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input name="name" value="{{ $response['data']['name'] }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input name="email" value="{{ $response['data']['email'] }}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <select name="role" class="form-select" aria-label="Default select example">
            <option value="0" {{ $response['data']['role'] != 'admin' ?: 'selected'}}>{{ __('admin') }}</option>
            <option value="1" {{ $response['data']['role'] != 'user' ?: 'selected'}}>{{ __('user') }}</option>
          </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

