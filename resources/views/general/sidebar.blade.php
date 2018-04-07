<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="/"><i class="fa fa-home"></i></a>
        </div>
            <br>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('home')}}"> <i class="menu-icon fa fa-dashboard"></i>Tableau de bord </a>
                </li>

                <h3 class="menu-title">DOSSIERS</h3><!-- /.menu-title -->
                <li>
                    <a href="{{route('nouveau_dossier')}}" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus-square"></i>Nouveau</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>Lister les dossiers</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-share"></i><a href="{{route('tous_les_dossiers')}}">Arrivés</a></li>
                        <li><i class="fa fa-thumbs-up"></i><a href="#">Accordés</a></li>
                        <li><i class="fa fa-thumbs-down"></i><a href="#">Rejetés</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">SUIVI</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Solder une traite</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-arrow-circle-right"></i><a href="#">Crédit de trésorerie</a></li>
                        <li><i class="menu-icon fa fa-arrow-circle-right"></i><a href="#">Crédit scolaire</a></li>
                        <li><i class="menu-icon fa fa-arrow-circle-right"></i><a href="#">Micro-Crédit</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> <i class="menu-icon fa fa-money"></i>Solder un découvert </a>
                </li>
                <li>
                    <a href="#"> <i class="menu-icon fa  fa-file-text"></i>Echéancier </a>
                </li>

                <h3 class="menu-title">RAPPORTS</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-clipboard"></i>Etats des prêts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-arrow-circle-right"></i><a href="#">Crédit de trésorerie</a></li>
                        <li><i class="menu-icon fa fa-arrow-circle-right"></i><a href="#">Crédit scolaire</a></li>
                        <li><i class="menu-icon fa fa-arrow-circle-right"></i><a href="#">Micro-Crédit</a></li>
                        <li><i class="menu-icon fa fa-arrow-circle-right"></i><a href="#">Découvert</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-suitcase"></i>Porte-feuille à risque</a>

                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
