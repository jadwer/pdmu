<header>
    <nav>
        <ul>
            <li>
                <a href="javascript:void(0)"><?=session('nombre')?></a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Menu</a>
                <div class="dropdown-content">
                    <a href="<?=base_url('/login')?>">Ingresar</a>
                    <a href="#">Productos</a>
                    <a href="#">Ventas</a>
                    <a href="<?=base_url('/logout')?>">Salir</a>
                </div>
            </li>
            </ul>
    </nav>
</header>
