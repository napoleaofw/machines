<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Usuários
                <small>Lista de usuários</small>
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="pull-right">
                        <a href="/user/register" class="btn btn-primary"><i class="fa fa-plus"></i> Novo usuário</a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="table-user" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome de usuário</th>
                                <th>Tipo</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Situação</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Usuário 1</td>
                                <td>Gerente</td>
                                <td>Nome do usuário 1</td>
                                <td>usuario1@hotmail.com</td>
                                <td>Ativo</td>
                                <td>
                                    <a href="/user/register" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Usuário 2</td>
                                <td>Fiscal</td>
                                <td>Nome do usuário 2</td>
                                <td>usuario2@hotmail.com</td>
                                <td>Inativo</td>
                                <td>
                                    <a href="/user/register" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Usuário 3</td>
                                <td>Fiscal</td>
                                <td>Nome do usuário 3</td>
                                <td>usuario3@hotmail.com</td>
                                <td>Ativo</td>
                                <td>
                                    <a href="/user/register" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Usuário 4</td>
                                <td>Fiscal</td>
                                <td>Nome do usuário 4</td>
                                <td>usuario4@hotmail.com</td>
                                <td>Inativo</td>
                                <td>
                                    <a href="/user/register" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Usuário 5</td>
                                <td>Fiscal</td>
                                <td>Nome do usuário 5</td>
                                <td>usuario5@hotmail.com</td>
                                <td>Ativo</td>
                                <td>
                                    <a href="/user/register" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nome de usuário</th>
                                <th>Tipo</th>
                                <th>Nome</th>
                                <th>E-mail</th>
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