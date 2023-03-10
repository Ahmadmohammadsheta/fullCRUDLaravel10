
<form method="PUT" action="{{ route('users.update', ['user' => $user->id]) }}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input name="name" value="{{ $user->name }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input name="email" value="{{ $user->email }}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <select name="role" class="form-select" aria-label="Default select example">
            <option value="0" {{ $user->role != 'admin' ?: 'selected'}}>{{ __('admin') }}</option>
            <option value="1" {{ $user->role != 'user' ?: 'selected'}}>{{ __('user') }}</option>
          </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

