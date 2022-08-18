<div class="sidebar sidebar-style-2" data-background-color="dark2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar float-left mr-2">
                    <img src="{{ asset('img/user.jpg') }}" class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <span class="user-level">Admin</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ ($title === "Dashboard") ? 'active' : ''  }}">
                    <a href="/" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ ($title === "Daftar Buku") ? 'active' : ''  }}">
                    <a href="/buku" >
                        <i class="fas fa-stream"></i>
                        <p>Daftar Buku</p>
                    </a>
                </li>
                <li class="nav-item {{ ($title === "Daftar Anggota") ? 'active' : ''  }}">
                    <a href="/anggota" class="collapsed" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        <p>Daftar Anggota</p>
                    </a>
                </li>
                <li class="nav-item {{ ($title === "Daftar Peminjaman Buku") ? 'active' : ''  }}">
                    <a href="/peminjaman" class="collapsed" aria-expanded="false">
                        <i class="far fa-share-square"></i>
                        <p>Daftar Peminjaman Buku</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->