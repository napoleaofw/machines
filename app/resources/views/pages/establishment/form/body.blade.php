<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Estabelecimento
                <small>Cadastro de estabelecimento</small>
            </h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados do estabelecimento</h3>
                </div>
                <div class="box-body">
                    <form role="form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Razão social</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nome fantasia</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Responsável</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Endereço</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Situação</label>
                                <select class="form-control">
                                    <option value="">Selecione</option>
                                    <option value="active">Ativo</option>
                                    <option value="inactive">Inativo</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Telefone 1</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Telefone 2</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Telefone 3</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancelar</button>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-danger">Excluir</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>