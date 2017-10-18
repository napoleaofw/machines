<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Máquina
                <small>Cadastro de máquina</small>
            </h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados da máquina</h3>
                </div>
                <div class="box-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Código</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Observação</label>
                                    <textarea class="form-control"></textarea>
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