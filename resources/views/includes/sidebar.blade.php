<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header d-flex justify-content-center align-items-center">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>    
        <a class="navbar-brand m-0" href="{{ route('index') }}">
            <img src="/template/assets/img/task.png">
        </a>
    </div>    
    <hr class="horizontal dark">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @if (Auth::user()->role == 'ADMIN')
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('menu.index') }}">
                        <div>
                            <img src="/template/assets/img/buk.png">
                        </div>
                        <span class="nav-link-text ms-1">Menu</span>
                    </a>
                </li>
            @endif
            @if (Auth::user()->role == 'WAITER')
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('menu.index') }}">
                        <div>
                            <img src="/template/assets/img/buk.png">
                        </div>
                        <span class="nav-link-text ms-1">Menu</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.create') }}">
                        <div>
                            <img src="/template/assets/img/addorder.png">
                        </div>
                        <span class="nav-link-text ms-1">Buat Pesanan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pesanan.index') }}">                    
                        <div>
                        <img src="/template/assets/img/order.png">
                        </div>
                        <span class="nav-link-text ms-1">Pesanan</span>
                    </a>
                </li>
            @endif
            @if (Auth::user()->role == 'KASIR')
                <li class="nav-item">
                    <a class="nav-link " href="./pages/billing.html">
                        <div>
                            <img src="/template/assets/img/transaksi.png">
                        </div>
                        <span class="nav-link-text ms-1">Transaksi</span>
                    </a>
                </li>
            @endif            
            <li class="nav-item px-1 mt-0">
                <a class="nav-link btn btn-danger" href="{{ route('logout') }}">
                    <span class="text-white">Logout</span>
                </a>
            </li>

        </ul>
    </div>

</aside>
