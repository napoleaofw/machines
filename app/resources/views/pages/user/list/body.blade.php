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
                        <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo usuário</a>
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
                                <th>Percentual de comissão</th>
                                <th>Situação</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($recordsUser as $recordUser)
                            <tr>
                                <td>{{ $recordUser->username }}</td>
                                <td>{{ $recordUser->type == 'administrator' ? 'Gerente' : 'Fiscal' }}</td>
                                <td>{{ $recordUser->name }}</td>
                                <td>{{ $recordUser->email }}</td>
                                <td>{{ $recordUser->commission_percentage }}</td>
                                <td>{{ $recordUser->status == 'active' ? 'Ativo' : 'Inativo' }}</td>
                                <td>
                                    <a href="{{ route('users.show', $recordUser->id) }}" class="btn btn-info btn-xs" data-tooltip="tooltip" data-original-title="Visualizar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
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