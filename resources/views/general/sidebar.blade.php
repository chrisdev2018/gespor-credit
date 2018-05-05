<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="/"><i class="fa fa-home"></i></a>
        </div>
            <br>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Tableau de bord </a>
                </li>

                <h3 class="menu-title">DOSSIERS</h3><!-- /.menu-title -->
                <li>
                    <a href="{{route('nouveau_dossier')}}" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus-square"></i>Nouveau</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>Lister les dossiers</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-share"></i><a href="{{route('tous_les_dossiers')}}">Arrivés</a></li>
                        <li><i class="fa fa-thumbs-up"></i><a href="{{route('lister_dossier_ok')}}">Accordés</a></li>
                        <li><i class="fa fa-thumbs-down"></i><a href="{{route('lister_dossier_out')}}">Rejetés</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">SUIVI</h3><!-- /.menu-title -->

                <li>
                    <a href="{{route('choix_traites')}}" > <i class="menu-icon fa fa-money"></i>Solder une traite</a>

                </li>
                <li>
                    <a href="{{route('decouverts_en_cours')}}"> <i class="menu-icon fa fa-money"></i>Solder un découvert </a>
                </li>
                <li>
                    <a href="{{route('echeancier')}}"> <i class="menu-icon fa  fa-file-text"></i>Gestion des échéancier </a>
                </li>

                <h3 class="menu-title">RAPPORTS</h3><!-- /.menu-title -->
                <li >
                    <a href="{{route('choix_etat')}}">  <i class="menu-icon fa fa-clipboard"></i>Etats des prêts</a>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-suitcase"></i>Porte-feuille à risque</a>

                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
