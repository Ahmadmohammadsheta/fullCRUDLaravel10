@extends('dashbord.index')

@section('title')
    user of users
@endsection
{{--
@section('route.show')
    <a href="{{ route('users.show', ['user'=>auth()->id()]) }}" class="d-block">{{ auth()->user()->name ?: 'login' }}</a>
@endsection --}}


@section('content')
    <main>
        <div class="cards">
            <div class="card-single">
                <div>
                    <h2>32</h2>
                    <span>Project Name</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h2>32</h2>
                    <span>Project Name</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h2>32</h2>
                    <span>Project Name</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h2>32</h2>
                    <span>Project Name</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>

        </div>

        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h3>Recent Project</h3>
                        <button>See All <span class="las la-arrow-right"></span></button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Project</td>
                                        <td>title</td>
                                        <td>status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td><span class="status"></span> 3</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td><span class="status"></span> 3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="customers">
                <div class="card">
                    <div class="card-header">
                        <h3>New customer</h3>
                        <button>See All <span class="las la-arrow-right"></span></button>
                    </div>

                    <div class="card-body">
                        <div class="customer">
                            <div class="info">
                                <img src="" width="40px" height="40px" alt="">
                                <div>
                                    <h4>name</h4>
                                    <small>job</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-user-comment"></span>
                                <span class="las la-user-phone"></span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="customer">
                            <div class="">
                                <img src="" width="40px" height="40px" alt="">
                                <div>
                                    <h4>name</h4>
                                    <small>job</small>
                                </div>
                            </div>
                            <span class="las la-user-circle"></span>
                            <span class="las la-user-comment"></span>
                            <span class="las la-user-phone"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

@section('content_header')
    user of users header
@endsection

@section('content_header_link')
    <a href="#">user of users link</a>
@endsection

@section('content_header_active')
    user of users active
@endsection

