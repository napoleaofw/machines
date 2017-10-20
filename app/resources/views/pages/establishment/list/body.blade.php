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
                        <a href="/establishment/register" class="btn btn-primary"><i class="fa fa-plus"></i> Novo estabelecimento</a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="table-establishment" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Razão social</th>
                                <th>Nome fantasia</th>
                                <th>Responsável</th>
                                <th>Endereço</th>
                                <th>Telefone(s)</th>
                                <th>E-mail</th>
                                <th>Situação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Razão social 1</td>
                                <td>Nome fantasia 1</td>
                                <td>Responsável 1</td>
                                <td>Rua do estabelecimento, 101 - Centro</td>
                                <td>(11) 91111-1111, (11) 91111-1111</td>
                                <td>estabelecimento1@hotmail.com</td>
                                <td>Ativo</td>
                            </tr>
                            <tr>
                                <td>Razão social 2</td>
                                <td>Nome fantasia 2</td>
                                <td>Responsável 2</td>
                                <td>Rua do estabelecimento, 102 - Centro</td>
                                <td>(11) 92222-2222, (11) 92222-2222</td>
                                <td>estabelecimento2@hotmail.com</td>
                                <td>Inativo</td>
                            </tr>
                            <tr>
                                <td>Razão social 3</td>
                                <td>Nome fantasia 3</td>
                                <td>Responsável 3</td>
                                <td>Rua do estabelecimento, 103 - Centro</td>
                                <td>(11) 93333-3333, (11) 93333-3333</td>
                                <td>estabelecimento3@hotmail.com</td>
                                <td>Ativo</td>
                            </tr>
                            <tr>
                                <td>Razão social 4</td>
                                <td>Nome fantasia 4</td>
                                <td>Responsável 4</td>
                                <td>Rua do estabelecimento, 104 - Centro</td>
                                <td>(11) 94444-4444, (11) 94444-4444</td>
                                <td>estabelecimento4@hotmail.com</td>
                                <td>Inativo</td>
                            </tr>
                            <tr>
                                <td>Razão social 5</td>
                                <td>Nome fantasia 5</td>
                                <td>Responsável 5</td>
                                <td>Rua do estabelecimento, 105 - Centro</td>
                                <td>(11) 95555-5555, (11) 95555-5555</td>
                                <td>estabelecimento5@hotmail.com</td>
                                <td>Ativo</td>
                            </tr>
                            <tr>
                                <td>Razão social 6</td>
                                <td>Nome fantasia 6</td>
                                <td>Responsável 6</td>
                                <td>Rua do estabelecimento, 106 - Centro</td>
                                <td>(11) 96666-6666, (11) 96666-6666</td>
                                <td>estabelecimento6@hotmail.com</td>
                                <td>Inativo</td>
                            </tr>
                            <tr>
                                <td>Razão social 7</td>
                                <td>Nome fantasia 7</td>
                                <td>Responsável 7</td>
                                <td>Rua do estabelecimento, 107 - Centro</td>
                                <td>(11) 97777-7777, (11) 97777-7777</td>
                                <td>estabelecimento7@hotmail.com</td>
                                <td>Ativo</td>
                            </tr>
                            <tr>
                                <td>Razão social 8</td>
                                <td>Nome fantasia 8</td>
                                <td>Responsável 8</td>
                                <td>Rua do estabelecimento, 108 - Centro</td>
                                <td>(11) 98888-8888, (11) 98888-8888</td>
                                <td>estabelecimento8@hotmail.com</td>
                                <td>Inativo</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Razão social</th>
                                <th>Nome fantasia</th>
                                <th>Responsável</th>
                                <th>Endereço</th>
                                <th>Telefone(s)</th>
                                <th>E-mail</th>
                                <th>Situação</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>