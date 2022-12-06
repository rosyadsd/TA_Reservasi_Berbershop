<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Berbershop</div>
                <a class="nav-link {{ Request::is('dashboard/pakets*')? 'active' : '' }}" href="/dashboard/pakets">
                    <div class="sb-nav-link-icon"><i class="fas fa-mobile"></i></div>
                    Paket Barbershop
                </a>
                <a class="nav-link {{ Request::is('dashboard/barbers*')? 'active' : '' }}" href="/dashboard/barbers">
                    <div class="sb-nav-link-icon"><i class="fas fa-mobile"></i></div>
                    Barberman
                </a>
                <div class="sb-sidenav-menu-heading">Reservasi</div>
                <a class="nav-link {{ Request::is('dashboard/reservasis*')? 'active' : '' }}" href="/dashboard/reservasis">
                    <div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div>
                    Reservasi
                </a>
                <a class="nav-link {{ Request::is('dashboard/fakturs*')? 'active' : '' }}" href="/dashboard/fakturs">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    Rincian
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Login Sebagai:</div>
            {{ auth()->user()->nama_admin }}
        </div>
    </nav>
</div>