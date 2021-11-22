<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('yonetim.anasayfa')}}" class="brand-link">
        <img src="{{asset('admin/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">HMS Yedek Parça</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="hms">
            </div>
            <div class="info">
                <a href="#" class="d-block">Aydın İlarslan</a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Ana Kategoriler
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('yonetim.anakategori.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Listele</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('yonetim.anakategori.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ekle</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Alt Kategoriler
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('yonetim.altkategori.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Listele</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('yonetim.altkategori.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ekle</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Ürünler
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('yonetim.urunler.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Listele</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('yonetim.urunler.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ekle</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Kullanıcılar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                            Teklifler
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
