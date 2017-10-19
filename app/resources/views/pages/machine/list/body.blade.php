<div class="wrapper">
    @include('components.header.content')
    @include('components.sidebar.content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Máquinas
                <small>Lista de máquinas</small>
            </h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <div class="pull-right">
                        <a href="/machine/register" class="btn btn-primary"><i class="fa fa-plus"></i> Nova máquina</a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="table-machine" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Observação</th>
                                <th>Situação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0001</td>
                                <td>Máquina 1</td>
                                <td>Descrição da máquina 1...</td>
                                <td>Observação da máquina 1...</td>
                                <td>Ativo</td>
                            </tr>
                            <tr>
                                <td>0002</td>
                                <td>Máquina 2</td>
                                <td>Descrição da máquina 2...</td>
                                <td>Observação da máquina 2...</td>
                                <td>Inativo</td>
                            </tr>
                            <tr>
                                <td>0003</td>
                                <td>Máquina 3</td>
                                <td>Descrição da máquina 3...</td>
                                <td>Observação da máquina 3...</td>
                                <td>Ativo</td>
                            </tr>
                            <tr>
                                <td>0004</td>
                                <td>Máquina 4</td>
                                <td>Descrição da máquina 4...</td>
                                <td>Observação da máquina 4...</td>
                                <td>Inativo</td>
                            </tr>
                            <tr>
                                <td>0005</td>
                                <td>Máquina 5</td>
                                <td>Descrição da máquina 5...</td>
                                <td>Observação da máquina 5...</td>
                                <td>Ativo</td>
                            </tr>
                            <tr>
                                <td>0006</td>
                                <td>Máquina 6</td>
                                <td>Descrição da máquina 6...</td>
                                <td>Observação da máquina 6...</td>
                                <td>Inativo</td>
                            </tr>
                            <tr>
                                <td>0007</td>
                                <td>Máquina 7</td>
                                <td>Descrição da máquina 7...</td>
                                <td>Observação da máquina 7...</td>
                                <td>Ativo</td>
                            </tr>
                            <tr>
                                <td>0008</td>
                                <td>Máquina 8</td>
                                <td>Descrição da máquina 8...</td>
                                <td>Observação da máquina 8...</td>
                                <td>Inativo</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Observação</th>
                                <th>Situação</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>