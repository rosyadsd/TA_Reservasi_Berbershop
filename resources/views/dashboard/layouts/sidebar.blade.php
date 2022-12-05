<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Produk</div>
                <a class="nav-link {{ Request::is('dashboard/handphones*')? 'active' : '' }}" href="/dashboard/handphones">
                    <div class="sb-nav-link-icon"><i class="fas fa-mobile"></i></div>
                    Handphone
                </a>
                <div class="sb-sidenav-menu-heading">Transaksi</div>
                <a class="nav-link {{ Request::is('dashboard/invoices*')? 'active' : '' }}" href="/dashboard/invoices">
                    <div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div>
                    Invoice
                </a>
                <a class="nav-link {{ Request::is('dashboard/fakturs*')? 'active' : '' }}" href="/dashboard/fakturs">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    Faktur
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Login Sebagai:</div>
            {{ auth()->user()->nama_karyawan }}
        </div>
    </nav>
</div>