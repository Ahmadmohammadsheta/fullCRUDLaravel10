
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars">=</span>
            </label>
        </h2>
        <!-- navbar -->
        @include('layouts.includes.navbar')


        {{-- <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" name="" id="">
        </div>

        <div class="user-wrapper">
            <img src="" width="40px" height="40px" alt="">
            <div>
                <h4>المدير </h4>
                <small>Super Admin</small>
            </div>
        </div>
        <div class="user-wrapper">
            <img src="" width="40px" height="40px" alt="">
            <div>
                <h4>User Name</h4>
                <small> @yield('route.show')</small>
            </div>
        </div> --}}
    </header>

    <!-- Main -->
    @yield('content')
