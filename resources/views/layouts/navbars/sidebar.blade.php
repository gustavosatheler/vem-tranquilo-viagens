<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pb-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/logo.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    {{-- <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a> --}}
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    {{-- <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a> --}}
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/logo.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">

                <!-- Página Inicial :: FIM -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fas fa-home"></i> {{ __('Página Inicial') }}
                    </a>
                </li>
                <!-- Página Inicial :: FIM -->

                 <!-- Passageiro :: INICIO -->
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('categoria_passageiro.index') }}">
                        <i class="fas fa-users"></i> {{ __('Categoria de Passageiros') }}
                    </a>
                </li>
                <!-- Passageiro :: FIM -->

                 <!-- Funcionário :: INICIO -->
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('funcionario.index') }}">
                        <i class="fas fa-user-cog"></i> {{ __('Funcionários') }}
                    </a>
                </li>
                <!-- Funcionário :: FIM -->

                 <!-- Pagamento :: INICIO -->
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('pagamento.index') }}">
                        <i class="fas fa-money-bill"></i> {{ __('Formas de Pagamentos') }}
                    </a>
                </li>
                <!-- Pagamento :: FIM -->

                <!-- Gerenciar frotas :: INICIO -->
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fas fa-bus"></i>
                        <span class="nav-link-text">{{ __('Gerenciar frotas') }}</span>
                    </a>

                    <div class="collapse" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('onibus_urbano.index') }}">
                                    {{ __('Ônibus Urbano') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('onibus_intermunicipal.index') }}">
                                    {{ __('Ônibus Intermunicipal') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Gerenciar frotas :: FIM -->


                <!-- Gerenciar tarifas :: INICIO -->
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="ni ni-tag"></i>
                        <span class="nav-link-text">{{ __('Gerenciar tarifas') }}</span>
                    </a>

                    <div class="collapse" id="navbar-examples1">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tarifa_urbano.index') }}">
                                    {{ __('Tarifa Urbano') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tarifa_intermunicipal.index') }}">
                                    {{ __('Tarifa Intermunicipal') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Gerenciar tarifas :: FIM -->

                <!-- Gerenciar trajeto :: INICIO -->
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fas fa-road"></i>
                        <span class="nav-link-text">{{ __('Gerenciar trajeto') }}</span>
                    </a>

                    <div class="collapse" id="navbar-examples2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('trajeto_urbano.index') }}">
                                    {{ __('Trajeto Urbano') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('trajeto_intermunicipal.index') }}">
                                    {{ __('Trajeto Intermunicipal') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Gerenciar trajeto :: FIM -->
            </ul>
        </div>
    </div>
</nav>
