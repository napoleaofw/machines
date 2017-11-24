<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Usuário
                <small>Cadastro de usuário</small>
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados do usuário</h3>
                    <div class="pull-right">
                    @if($record['status'] == 'showing')
                        <a href="{{ route('users.edit', 1) }}" class="btn btn-info"><i class="fa fa-unlock-alt"></i> Editar</a>
                    @else
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
                    @endif
                    </div>
                </div>
                <div class="box-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nome de usuário</label>
                                    <input type="text" class="form-control" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" class="form-control" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="form-control" {{ $record['disabled'] }}>
                                        <option value="">Selecione</option>
                                        <option value="fiscal">Fiscal</option>
                                        <option value="gerente">Gerente</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" {{ $record['disabled'] }}>
                                </div>
                                <div class="form-group">
                                    <label>Situação</label>
                                    <select class="form-control" {{ $record['disabled'] }}>
                                        <option value="">Selecione</option>
                                        <option value="active">Ativo</option>
                                        <option value="inactive">Inativo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>