<header class="main-header">
    <a href="index2.html" class="logo">
        <span class="logo-mini"><b>WN</b></span>
        <span class="logo-lg"><b>WN</b>AP</span>
    </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span>Nome do usuário</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="{{ url('/vendor/adminlte/img/user-160x160.jpg') }}" class="img-circle" alt="User Image">
                                <p>
                                    Nome do usuário - Gerente
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ route('users.show', 1) }}" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('login') }}" class="btn btn-default btn-flat">Sair</a>
                                </div>
                            </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>