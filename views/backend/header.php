<?php if (!$adminPage) { ?>
    <header class="headerbackend">
        <div class="logo">
            <a class="navbar-brand text-white-50 text-uppercase" href="index.php">RESIDENCE</a>
        </div>

        <div class="burger_action">MENU</div>
        <div class="burger_menu">
            <ul>
                <li><a class="nav-link" href="index.php?action=app"><i class="fas fa-home">App</i></a></li>
                <li><a class="nav-link" href="index.php?action=favorite">Favorites</a></li>
                <li><a class="nav-link" href="index.php?action=settings">Settings</a></li>
                <li><a class="nav-link" href="index.php?action=login">logout</a></li>
            </ul>
        </div>
        <ul class="nav_menu">
            <li><a class="nav-link" href="index.php?action=app"><i class="fas fa-map-marked-alt"></i> App</a></li>
            <li><a class="nav-link" href="index.php?action=favorite"><i class="far fa-heart"></i> Favorites</a></li>
            <li><a class="nav-link" href="index.php?action=settings"><i class="fas fa-users-cog"></i> Settings</a></li>
            <li><a class="nav-link" href="index.php">logout</a></li>
        </ul>
        <div>
    </header>
<?php } else { ?>
    <section id="adminHeader">
        <div class="logo">
            <a class="navbar-brand text-white-50 text-uppercase" href="index.php"><i class="fas fa-home"></i> </a>
        </div>
        <nav>
            <div class="burger_action">MENU</div>
            <div class="burger_menu">
                <ul>
                    <li><a class="nav-link" href="index.php?action=app"><i class="fas fa-home">App</i></a></li>
                    <li><a class="nav-link" href="index.php?action=settings">Settings</a></li>
                    <li><a class="nav-link" href="index.php?action=login">logout</a></li>
                </ul>
            </div>
            <ul class="nav_menu">
                <li><a class="nav-link" href="index.php?action=app"><i class="fas fa-home"></i> App</a></li>
                <li><a class="nav-link" href="index.php?action=settings"><i class="fas fa-cogs"></i> Settings</a></li>
                <li><a class="nav-link" href="index.php?action=logout">logout</a></li>
            </ul>
            <div>
        </nav>
    </section>
<?php } ?>