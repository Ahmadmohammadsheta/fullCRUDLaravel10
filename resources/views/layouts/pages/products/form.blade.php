<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{ __('Name') }}</label>
      <input name="name" value="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{ __('Email address') }}</label>
      <input name="email" value="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      {{-- <label for="exampleInputEmail1" class="form-label">{{ __('Email address') }}</label> --}}
      <input name="password" value="12345678" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">{{ __('Role') }}</label>
        <select name="role" class="form-select" aria-label="Default select example">
            <option value="0">{{ __('admin') }}</option>
            <option value="1">{{ __('user') }}</option>
          </select>
    </div>
    <button type="submit" id="user_submit_btn" class="btn btn-primary">Submit</button>
</form>
