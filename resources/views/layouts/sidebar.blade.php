<section class="nav-color">
<button type="button" class="burger1" onclick="toggleSidebar1()">
    <img class="burger-avatar" src="{{asset('img/user.png')}}" />
    <span class="burger1-icon"></span>
</button>
<button type="button" class="burger2" onclick="toggleSidebar2()">
    <span class="burger2-icon"></span>
</button>
    <!--sidebar kiri-->
    <div class="overlay2"></div>
    <aside class="sidebar2">
        <img class="sidebar-logo" src="{{asset('img/laundry.jpg')}}">
        <div class="sidebar-nama">Kyy Laundry</div>
        <nav class="sidebar2-menu">
            <button type="button">
                <a href="{{ route('karyawan.index') }}">Karyawan</a>
            </button>
            <button type="button">
                <a href="{{ route('pelanggan.index') }}">Pelanggan</a>
            </button>
            <button type="button">
                <a href="{{ route('cucian.index') }}">Cucian</a>
            </button>
            <button type="button">
                <a href="{{ route('transaksi.index') }}">Trasanksi</a>
            </button>
        </nav>
    </aside>
    <!--sidebar kanan-->
    <div class="overlay1"></div>
    <aside class="sidebar1">
        <img class="sidebar-avatar" src="{{asset('img/user.png')}}" />
        <div class="sidebar-username">Hi, {{ auth()->user()->name }}</div>
        <div class="sidebar-role">{{ auth()->user()->getRoleNames()}}</div>
        <nav class="sidebar1-menu">
            <button type="button">
                <img src="{{asset('img/icon-accounts.svg')}}" />
                <a href="{{ route('profile.edit') }}">Profile</a>
            </button>
            <button type="button">
                <img src="{{asset('img/icon-home.svg')}}" />
                <a href="{{ route('outlet.edit') }}">Outlet</a>
            </button>
        </nav>
        <nav class="sidebar1-menu-logout">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">
                    <img src="{{asset('img/icon-lock.svg')}}" />
                    <a>Logout</a>
                </button>
            </form>
        </nav>
    </aside>
    <h2 class="dash"><a href="{{ route('dashboard') }}">Dashboard</a></h2>
</section>

<script type="text/javascript">
    const toggleSidebar1 = () => document.body.classList.toggle("open1");
    const toggleSidebar2 = () => document.body.classList.toggle("open2");
</script>