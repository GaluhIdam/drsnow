        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: black;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fab fa-apple"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">Dr.Snow</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if ($title == "Dashboard") echo "active"; ?>">
                <a class="nav-link" href="/Admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item <?php if ($title == "Profil") echo "active"; ?>">
                <a class="nav-link <?php if ($title <> "Profil") echo "collapsed"; ?>" href="#" data-toggle="collapse" data-target="#collapseprofile" aria-expanded="true" aria-controls="collapseprofile">
                    <i class="fas fa-user-alt"></i>
                    <span>Profil</span>
                </a>
                <div id="collapseprofile" class="collapse <?php if ($title == "Profil") echo "show"; ?>" aria-labelledby="headingprofile" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Profile :</h6>
                        <a class="collapse-item <?php if ($exam == "Informasi") echo "active"; ?>" href="/Admin/Profile">Informasi</a>
                        <a class="collapse-item <?php if ($exam == "Ringkasan") echo "active"; ?>" href="/Admin/Ringkasan">Ringkasan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item <?php if ($title == "Kotak Masuk") echo "active"; ?>">
                <a class="nav-link" href="/Admin/Contact">
                    <i class="fas fa-inbox"></i>
                    <span>Kotak Masuk</span></a>
            </li>
            <li class="nav-item <?php if ($title == "Produk") echo "active"; ?>">
                <a class="nav-link <?php if ($title <> "Produk") echo "collapsed"; ?>" href="#" data-toggle="collapse" data-target="#collapseProduk" aria-expanded="true" aria-controls="collapseProduk">
                    <i class="fas fa-project-diagram"></i>
                    <span>Produk</span>
                </a>
                <div id="collapseProduk" class="collapse <?php if ($title == "Produk") echo "show"; ?>" aria-labelledby="headingProduk" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Produk :</h6>
                        <a class="collapse-item <?php if ($exam == "Daftar Produk") echo "active"; ?>" href="/Admin/Product">Daftar Produk</a>
                        <a class="collapse-item <?php if ($exam == "Kategori") echo "active"; ?>" href="/Admin/Category">Kategori Produk</a>
                        <a class="collapse-item <?php if ($exam == "Marketplace") echo "active"; ?>" href="/Admin/Marketplace">Marketplace</a>
                    </div>
                </div>
            </li>
            <li class="nav-item <?php if ($title == "Artikel") echo "active"; ?>">
                <a class="nav-link <?php if ($title <> "Artikel") echo "collapsed"; ?>" href="#" data-toggle="collapse" data-target="#collapseArtikel" aria-expanded="true" aria-controls="collapseArtikel">
                    <i class="fas fa-newspaper"></i>
                    <span>Artikel</span>
                </a>
                <div id="collapseArtikel" class="collapse collapse <?php if ($title == "Artikel") echo "show"; ?>" aria-labelledby="headingArtikel" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Artikel :</h6>
                        <a class="collapse-item <?php if ($exam == "Daftar Artikel") echo "active"; ?>" href="/Admin/Articles">Daftar Artikel</a>
                        <a class="collapse-item <?php if ($exam == "Kategori Artikel") echo "active"; ?>" href="/Admin/CategoryArticles">Kategori Artikel</a>
                        <a class="collapse-item" href="/Admin/CommentarArticles">Komentar</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-comments"></i>
                    <span>Testimoni</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-question-circle"></i>
                    <span>FaQ</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->