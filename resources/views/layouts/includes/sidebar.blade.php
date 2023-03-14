
<div class="sidebar">
    <div class="sidebar-brand">
        <h2>
            <span class="lab la-accusoft">AMA</span>
            {{-- <span>@yield('user_name')</span> --}}
        </h2>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="{{ route('index') }}" class="@yield('index')">
                    <span class="las la-igloo">a</span>
                    <span>الرئيسية</span>
                </a>
            </li>
            <li>
                <a href="{{ route('users.index') }}" class="@yield('users')">
                    <span class="las la-igloo">U</span>
                    <span>{{ __('المستخدمين') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('products.index') }}" class="@yield('products')">
                    <span class="las la-igloo">P</span>
                    <span>{{ __('المنتجات') }}</span>
                </a>
            </li>
            <li>
                <a href="" class="@yield('mo')">
                    <span class="las la-igloo">f</span>
                    <span>الحسابات</span>
                </a>
            </li>
        </ul>
    </div>
</div>
