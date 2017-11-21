<div class="modal fade" id="modal-transaction">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Dados da transação</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        campos do cadastro
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                <a href="#" class="btn btn-warning"><i class="fa fa-retweet"></i> Lançar</a>
            </div>
        </div>
    </div>
</div>
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
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados do estabelecimento</h3>
                </div>
                <div class="box-body">
                    <form role="form">
                        <div class="row">
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
                                <div class="form-group">
                                    <label>Fiscal</label>
                                    <select class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="active">Fiscal 1</option>
                                        <option value="active">Fiscal 2</option>
                                        <option value="active">Fiscal 3</option>
                                        <option value="active">Fiscal 4</option>
                                        <option value="active">Fiscal 5</option>
                                    </select>
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
                                <div class="form-group">
                                    <label>Percentual de comissão</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <a href="/establishment/list" class="btn btn-default">Cancelar</a>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
                    </div>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Máquinas vinculadas</h3>
                    <div class="pull-right">
                        <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Novo vínculo</a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="table-machine" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Valor do crédito</th>
                                <th>Observação</th>
                                <th>Situação</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0001</td>
                                <td>Máquina 1</td>
                                <td>Descrição da máquina 1...</td>
                                <td>R$ 1655,98</td>
                                <td>Observação da máquina 1...</td>
                                <td>Ativo</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs" data-tooltip="tooltip" data-original-title="Novo lançamento" data-toggle="modal" data-target="#modal-transaction">
                                        <i class="fa fa-retweet"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>0002</td>
                                <td>Máquina 2</td>
                                <td>Descrição da máquina 2...</td>
                                <td>R$ 849,32</td>
                                <td>Observação da máquina 2...</td>
                                <td>Inativo</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs" data-tooltip="tooltip" data-original-title="Novo lançamento" data-toggle="modal" data-target="#modal-transaction">
                                        <i class="fa fa-retweet"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>0003</td>
                                <td>Máquina 3</td>
                                <td>Descrição da máquina 3...</td>
                                <td>R$ 684,88</td>
                                <td>Observação da máquina 3...</td>
                                <td>Ativo</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs" data-tooltip="tooltip" data-original-title="Novo lançamento" data-toggle="modal" data-target="#modal-transaction">
                                        <i class="fa fa-retweet"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>0004</td>
                                <td>Máquina 4</td>
                                <td>Descrição da máquina 4...</td>
                                <td>R$ 2988,45</td>
                                <td>Observação da máquina 4...</td>
                                <td>Inativo</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs" data-tooltip="tooltip" data-original-title="Novo lançamento" data-toggle="modal" data-target="#modal-transaction">
                                        <i class="fa fa-retweet"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>0005</td>
                                <td>Máquina 5</td>
                                <td>Descrição da máquina 5...</td>
                                <td>R$ 982,65</td>
                                <td>Observação da máquina 5...</td>
                                <td>Ativo</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs" data-tooltip="tooltip" data-original-title="Novo lançamento" data-toggle="modal" data-target="#modal-transaction">
                                        <i class="fa fa-retweet"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>0006</td>
                                <td>Máquina 6</td>
                                <td>Descrição da máquina 6...</td>
                                <td>R$ 184,62</td>
                                <td>Observação da máquina 6...</td>
                                <td>Inativo</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs" data-tooltip="tooltip" data-original-title="Novo lançamento" data-toggle="modal" data-target="#modal-transaction">
                                        <i class="fa fa-retweet"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>0007</td>
                                <td>Máquina 7</td>
                                <td>Descrição da máquina 7...</td>
                                <td>R$ 98,52</td>
                                <td>Observação da máquina 7...</td>
                                <td>Ativo</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs" data-tooltip="tooltip" data-original-title="Novo lançamento" data-toggle="modal" data-target="#modal-transaction">
                                        <i class="fa fa-retweet"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>0008</td>
                                <td>Máquina 8</td>
                                <td>Descrição da máquina 8...</td>
                                <td>R$ 287,64</td>
                                <td>Observação da máquina 8...</td>
                                <td>Inativo</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs" data-tooltip="tooltip" data-original-title="Novo lançamento" data-toggle="modal" data-target="#modal-transaction">
                                        <i class="fa fa-retweet"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-original-title="Excluir">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Valor do crédito</th>
                                <th>Observação</th>
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