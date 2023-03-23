<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Gestion Categories</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Categories</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('categorie')}}">
                            <span class="pcoded-mtext">Liste Categories</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel">Géstion Sub Categorie</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                    <span class="pcoded-mtext">Sub categorie</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('subcategorie')}}">
                            <span class="pcoded-mtext">Liste sub categorie</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel">Géstion Produits</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                    <span class="pcoded-mtext">Produits</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('product')}}">
                            <span class="pcoded-mtext">Liste des produits</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel">Géstion Commandes</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                    <span class="pcoded-mtext">Commandes</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('commande')}}">
                            <span class="pcoded-mtext">Liste des commandes</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="alert.htm">
                            <span class="pcoded-mtext">Liste des commandes effectuées</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="alert.htm">
                            <span class="pcoded-mtext">Liste des commandes annulées</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
