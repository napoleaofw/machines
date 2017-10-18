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
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados do usuário</h3>
                </div>
                <div class="box-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Usuário</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="fiscal">Fiscal</option>
                                        <option value="gerente">Gerente</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Situação</label>
                                    <select class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="active">Ativo</option>
                                        <option value="inactive">Inativo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancelar</button>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>