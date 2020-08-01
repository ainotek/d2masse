<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand font-weight-bold" href="{{route('home')}}">D2messe</a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none mr-auto">

        <li class="nav-item px-3">
            <a class="nav-link" href="{{route('dashboard')}}">{{__('Tableau de bord')}}</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="{{route('parishioners-request.index')}}">{{__('Demandes de messe')}}</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="{{route('parishioners.index')}}">{{__('Paroissiens')}}</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <a href="{{route('logout')}}" class="navbar-toggler" title="{{__('Deconnexion')}}">
            <i class="icon-power font-weight-bold"></i>
        </a>
    </ul>
</header>
