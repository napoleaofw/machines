<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Estabelecimentos
                <small>Lista de estabelecimentos</small>
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="pull-right">
                        <a href="{{ route('establishments.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo estabelecimento</a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="table-establishment" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome fantasia</th>
                                <th>Responsável</th>
                                <th>E-mail</th>
                                <th>Fiscal</th>
                                <th>Percentual de comissão</th>
                                <th>Situação</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nome fantasia 1</td>
                                <td>Responsável 1</td>
                                <td>estabelecimento1@hotmail.com</td>
                                <td>Fiscal 1</td>
                                <td>3</td>
                                <td>Ativo</td>
                                <td>
                                    <a href="{{ route('establishments.show', 1) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome fantasia 2</td>
                                <td>Responsável 2</td>
                                <td>estabelecimento2@hotmail.com</td>
                                <td>Fiscal 2</td>
                                <td>5</td>
                                <td>Inativo</td>
                                <td>
                                    <a href="{{ route('establishments.show', 1) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome fantasia 3</td>
                                <td>Responsável 3</td>
                                <td>estabelecimento3@hotmail.com</td>
                                <td>Fiscal 3</td>
                                <td>2</td>
                                <td>Ativo</td>
                                <td>
                                    <a href="{{ route('establishments.show', 1) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome fantasia 4</td>
                                <td>Responsável 4</td>
                                <td>estabelecimento4@hotmail.com</td>
                                <td>Fiscal 4</td>
                                <td>3</td>
                                <td>Inativo</td>
                                <td>
                                    <a href="{{ route('establishments.show', 1) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome fantasia 5</td>
                                <td>Responsável 5</td>
                                <td>estabelecimento5@hotmail.com</td>
                                <td>Fiscal 5</td>
                                <td>5</td>
                                <td>Ativo</td>
                                <td>
                                    <a href="{{ route('establishments.show', 1) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome fantasia 6</td>
                                <td>Responsável 6</td>
                                <td>estabelecimento6@hotmail.com</td>
                                <td>Fiscal 1</td>
                                <td>4</td>
                                <td>Inativo</td>
                                <td>
                                    <a href="{{ route('establishments.show', 1) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome fantasia 7</td>
                                <td>Responsável 7</td>
                                <td>estabelecimento7@hotmail.com</td>
                                <td>Fiscal 2</td>
                                <td>3</td>
                                <td>Ativo</td>
                                <td>
                                    <a href="{{ route('establishments.show', 1) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome fantasia 8</td>
                                <td>Responsável 8</td>
                                <td>estabelecimento8@hotmail.com</td>
                                <td>Fiscal 3</td>
                                <td>4</td>
                                <td>Inativo</td>
                                <td>
                                    <a href="{{ route('establishments.show', 1) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nome fantasia</th>
                                <th>Responsável</th>
                                <th>E-mail</th>
                                <th>Fiscal</th>
                                <th>Percentual de comissão</th>
                                <th>Situação</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>