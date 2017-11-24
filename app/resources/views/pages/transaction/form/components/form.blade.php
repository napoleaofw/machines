<form role="form">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Estabelecimento</label>
                <select class="form-control" {{ $record['disabled'] }}>
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
                <select class="form-control" {{ $record['disabled'] }}>
                    <option value="">Selecione</option>
                    <option value="maquina1">Máquina 1</option>
                    <option value="maquina2">Máquina 2</option>
                    <option value="maquina3">Máquina 3</option>
                    <option value="maquina4">Máquina 4</option>
                    <option value="maquina5">Máquina 5</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade de créditos</label>
                <input type="text" class="form-control" {{ $record['disabled'] }}>
            </div>
            <div class="form-group">
                <label>Percentual de comissão</label>
                <input type="text" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label>Valor total dos créditos</label>
                <input type="text" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label>Observação</label>
                <textarea class="form-control" {{ $record['disabled'] }}></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Tipo</label>
                <select class="form-control" {{ $record['disabled'] }}>
                    <option value="">Selecione</option>
                    <option value="despesa">Despesa</option>
                    <option value="receita">Receita</option>
                </select>
            </div>
            <div class="form-group">
                <label>Data</label>
                <input type="text" class="form-control input-date" {{ $record['disabled'] }}>
            </div>
            <div class="form-group">
                <label>Valor do crédito</label>
                <input type="text" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label>Valor da comissão</label>
                <input type="text" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label>Valor total</label>
                <input type="text" class="form-control" disabled>
            </div>
        </div>
    </div>
</form>