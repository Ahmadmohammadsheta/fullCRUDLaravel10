<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $response['data']['name'] }}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-response">{{ $response['data']['name'] }}</li>
      <li class="list-group-response">{{ $response['data']['email'] }}</li>
      <li class="list-group-response">{{ $response['data']['role'] }}</li>
    </ul>
    <div class="card-body">
      {{-- <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a> --}}
    </div>
  </div>
