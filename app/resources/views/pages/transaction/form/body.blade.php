<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Transação
                <small>Cadastro de transação</small>
            </h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados da transação</h3>
                </div>
                <div class="box-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Estabelecimento</label>
                                    <select class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="estabelecimento1">Estabelecimento 1</option>
                                        <option value="estabelecimento2">Estabelecimento 2</option>
                                        <option value="estabelecimento3">Estabelecimento 3</option>
                                        <option value="estabelecimento4">Estabelecimento 4</option>
                                        <option value="estabelecimento5">Estabelecimento 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Máquina</label>
                                    <select class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="maquina1">Máquina 1</option>
                                        <option value="maquina2">Máquina 2</option>
                                        <option value="maquina3">Máquina 3</option>
                                        <option value="maquina4">Máquina 4</option>
                                        <option value="maquina5">Máquina 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Observação</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="despesa">Despesa</option>
                                        <option value="receita">Receita</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Valor</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Data</label>
                                    <input type="text" class="form-control input-date">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <a href="/transaction/list" class="btn btn-default">Cancelar</a>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>