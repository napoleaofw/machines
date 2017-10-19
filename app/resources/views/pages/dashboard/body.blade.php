<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Dashboard<small>Painel de controle</small></h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>R$ 15214,34</h3>
                            <p>Último Fechamento</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>R$ 5472,46</h3>
                            <p>Saldo Pendente</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-exclamation"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>R$ 8477,54</h3>
                            <p>Receitas</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-arrow-circle-up"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>R$ 3005,08</h3>
                            <p>Despesas</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-arrow-circle-down"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Últimas Transações</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Estabelecimento</th>
                                            <th>Status</th>
                                            <th>Valor</th>
                                            <th>Máquina</th>
                                            <th>Fiscal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">TR9842</a></td>
                                            <td>Nome Fantasia 3</td>
                                            <td><span class="label label-success">Receita</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">R$ 189,89</div>
                                            </td>
                                            <td>Máquina 2</td>
                                            <td>Fiscal 1</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">TR1848</a></td>
                                            <td>Nome Fantasia 7</td>
                                            <td><span class="label label-success">Receita</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">R$ 489,84</div>
                                            </td>
                                            <td>Máquina 6</td>
                                            <td>Fiscal 4</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">TR7429</a></td>
                                            <td>Nome Fantasia 2</td>
                                            <td><span class="label label-danger">Despesa</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f56954" data-height="20">R$ 165,14</div>
                                            </td>
                                            <td>Máquina 8</td>
                                            <td>Fiscal 3</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">TR7429</a></td>
                                            <td>Nome Fantasia 5</td>
                                            <td><span class="label label-info">Fechamento</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00c0ef" data-height="20">R$ 15214,34</div>
                                            </td>
                                            <td>Máquina 5</td>
                                            <td>Fiscal 1</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">TR1848</a></td>
                                            <td>Nome Fantasia 8</td>
                                            <td><span class="label label-success">Receita</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">R$ 355,26</div>
                                            </td>
                                            <td>Máquina 3</td>
                                            <td>Fiscal 2</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">TR7429</a></td>
                                            <td>Nome Fantasia 1</td>
                                            <td><span class="label label-danger">Despesa</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f56954" data-height="20">R$ 83,95</div>
                                            </td>
                                            <td>Máquina 4</td>
                                            <td>Fiscal 3</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">TR9842</a></td>
                                            <td>Nome Fantasia 8</td>
                                            <td><span class="label label-success">Receita</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">R$ 599,62</div>
                                            </td>
                                            <td>Máquina 1</td>
                                            <td>Fiscal 1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="box-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Nova Transação</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver Todas Transações</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- Info Boxes Style 2 -->
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                        <div class="info-box-content">
                        <span class="info-box-text">Inventory</span>
                        <span class="info-box-number">5,200</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                                50% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

                        <div class="info-box-content">
                        <span class="info-box-text">Mentions</span>
                        <span class="info-box-number">92,050</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                        <span class="progress-description">
                                20% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box bg-red">
                        <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

                        <div class="info-box-content">
                        <span class="info-box-text">Downloads</span>
                        <span class="info-box-number">114,381</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                        <div class="info-box-content">
                        <span class="info-box-text">Direct Messages</span>
                        <span class="info-box-number">163,921</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">
                                40% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-7    ">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa fa-gamepad"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Máquinas Ativas</span>
                                <span class="info-box-number">65</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-gamepad"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Máquinas Inativas</span>
                                <span class="info-box-number">4</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-bank"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Estabelecimentos</span>
                                <span class="info-box-number">43</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-user"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Usuários</span>
                                <span class="info-box-number">4</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>