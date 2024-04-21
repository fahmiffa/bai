<ul id="sidebarnav">
    <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Home</span>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('home') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
        </a>
    </li>
    @if (auth()->user()->role == 'admin')
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('padang.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-brand-openvpn"></i>
                </span>
                <span class="hide-menu">Padang Bai</span>
            </a>
        </li>
    @endif
    <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Menu</span>
    </li>

    @if (auth()->user()->role == 'admin')
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.mitra') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-color-filter"></i>
                </span>
                <span class="hide-menu">Mitra</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.agency') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-versions"></i>
                </span>
                <span class="hide-menu">Agency</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.job') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-wallpaper"></i>
                </span>
                <span class="hide-menu">Job</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('invoice.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-file-invoice"></i>
                </span>
                <span class="hide-menu">Invoice</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.siswa') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-user-check"></i>
                </span>
                <span class="hide-menu">Siswa</span>
            </a>
        </li>

        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Master</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('user.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-users"></i>
                </span>
                <span class="hide-menu">Account</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.setting') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-settings"></i>
                </span>
                <span class="hide-menu">Setting</span>
            </a>
        </li>
    @endif

    @if (auth()->user()->role == 'mitra')    

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('interview.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-arrow-autofit-right"></i>
                </span>
                <span class="hide-menu">Peserta Interview</span>
            </a>
        </li>
  
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('reg.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-paper-bag"></i>
                </span>
                <span class="hide-menu">Daftar Job</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('document.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-arrow-autofit-right"></i>
                </span>
                <span class="hide-menu">Peserta Jepang</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('mitra.job') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-broadcast"></i>
                </span>
                <span class="hide-menu">Job</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('bill.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-file-invoice"></i>
                </span>
                <span class="hide-menu">Invoice - Bill</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('complaint.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-presentation"></i>
                </span>
                <span class="hide-menu">Monitoring</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('mitra.setting') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-settings"></i>
                </span>
                <span class="hide-menu">Setting</span>
            </a>
        </li>
    @endif

    @if (auth()->user()->role == 'agency')
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('job.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-broadcast"></i>
                </span>
                <span class="hide-menu">Job</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('company.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-asset"></i>
                </span>
                <span class="hide-menu">Company</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('payment.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-cash"></i>
                </span>
                <span class="hide-menu">Payment</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('agen.setting') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-settings"></i>
                </span>
                <span class="hide-menu">Setting</span>
            </a>
        </li>
    @endif

    @if (auth()->user()->role == 'peserta')
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('peserta.jobs') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-broadcast"></i>
                </span>
                <span class="hide-menu">Job Terdaftar</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('peserta.setting') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-settings"></i>
                </span>
                <span class="hide-menu">Setting</span>
            </a>
        </li>
    @endif

</ul>
