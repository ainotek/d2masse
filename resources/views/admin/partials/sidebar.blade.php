<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="icon-speedometer"></i> {{__('Tableau de bord')}}
                </a>
            </li>
            <li class="nav-title">
                {{__('Paroissiens')}}
            </li>
            <li class="nav-item">
                <a href="{{route('parishioners.index')}}" class="nav-link">
                    <i class="icon-people"></i> {{__('Paroissiens')}}</a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> {{ __('Demande de Messe') }}</a>
                <ul class="nav-dropdown-items">
                    {{-- <li class="nav-item">
                        <a href="{{route('masses.index')}}" class="nav-link">
                            <i class="icon-layers"></i> {{__('Programe des Messes')}}</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('request-types.index') }}"><i class="icon-puzzle"></i> {{ __('Type demande') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('parishioners-request.index')}}" class="nav-link">
                            <i class="icon-layers"></i> {{__('Demandes de messe')}}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-title">
                {{__('Paroisses')}}
            </li>
            <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link"><i class="icon-user"></i> {{__('Utilisateurs')}}</a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{route('masses.index')}}"><i class="icon-bell"></i> {{__('Messes')}}</a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{route('causes.index')}}"><i class="icon-badge"></i> {{__('Causes')}}</a>
            </li>
            <li class="nav-title">
                {{__('Transactions')}}
            </li>
            <li class="nav-item">
                <a href="{{route('transactions.index')}}" class="nav-link">
                    <i class="icon-directions"></i> {{__('Transactions')}}</a>
            </li>
            <li class="nav-title">
                {{__('Paramètres')}}
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{route('admins.index')}}">
                    <i class="icon-shield"></i> {{__('Administrateurs')}}</a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{route('request-types.index')}}">
                    <i class="icon-list"></i> {{__('Types de demande')}}
                </a>
            </li>
            <li class="nav-item nav-dropdown">

                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-bell"></i> {{__('Églises')}}
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="{{route('dioceses.index')}}">
                            <i class="icon-anchor"></i> {{__('Diocèses')}}
                        </a>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="{{route('parishes.index')}}">
                            <i class="icon-home"></i> {{__('Paroisses')}}
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-map"></i> {{__('Lieux')}}
                </a>
                <ul class="nav-dropdown-items">

                    <li class="nav-item">
                        <a href="{{route('countries.index')}}" class="nav-link">
                            <i class="icon-globe"></i> {{__('Pays')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('cities.index')}}" class="nav-link">
                            <i class="icon-location-pin"></i> {{__('Villes')}}</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item fixed-bottom">
                <a class="nav-link" href="{{route('request-types.index')}}">
                    <i class="icon-power"></i> {{__('Deconnexion')}}
                </a>
            </li>
        </ul>
    </nav>
    {{--<button class="sidebar-minimizer brand-minimizer" type="button"></button>--}}
</div>
