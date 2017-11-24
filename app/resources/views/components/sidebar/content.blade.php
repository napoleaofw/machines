<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU PRINCIPAL</li>
            <li>
                <a href=" {{ route('dashboard') }} ">
                    <i class="fa fa-line-chart"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('establishments.index') }}">
                    <i class="fa fa-bank"></i>
                    <span>Estabelecimentos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('machines.index') }}">
                    <i class="fa fa-gamepad"></i> <span>Máquinas</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transactions.index') }}">
                    <i class="fa fa-list"></i> <span>Transações</span>
                </a>
            </li>
            <li>
                <a href="{{ route('users.index') }}">
                    <i class="fa fa-user"></i> <span>Usuários</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text-o"></i> <span>Relatórios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/reports/establishment">
                            <i class="fa fa-sticky-note-o"></i> <span>Resumido por estabelecimento</span>
                        </a>
                    </li>
                    <li>
                        <a href="/reports/fiscal">
                            <i class="fa fa-sticky-note-o"></i> <span>Resumido por fiscal</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>