<form role="form">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Estabelecimento</label>
                <select class="form-control" {{ $record['disabled'] }}>
                    <option value="">Selecione</option>
                @foreach($recordsEstablishment as $recordEstablishment)
                    <option value="{{ $recordEstablishment->id }}" {{ isset($recordTransaction->establishment) && $recordTransaction->establishment->id == $recordEstablishment->id ? 'selected': null }}>{{ $recordEstablishment->trade_name }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Máquina</label>
                <select class="form-control" {{ $record['disabled'] }}>
                    <option value="">Selecione</option>
                @foreach($recordsMachine as $recordMachine)
                    <option value="{{ $recordMachine->id }}" {{ isset($recordTransaction->machine) && $recordTransaction->machine->id == $recordMachine->id ? 'selected': null }}>{{ $recordMachine->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade de créditos</label>
                <input type="text" class="form-control" value="{{ $recordTransaction->credit_quantity }}" {{ $record['disabled'] }}>
            </div>
            <div class="form-group">
                <label>Percentual de comissão</label>
                <input type="text" class="form-control" value="{{ $recordTransaction->commission_percentage }}" disabled>
            </div>
            <div class="form-group">
                <label>Valor total dos créditos</label>
                <input type="text" class="form-control" value="{{ $recordTransaction->credit_amount }}" disabled>
            </div>
            <div class="form-group">
                <label>Observação</label>
                <textarea class="form-control" {{ $record['disabled'] }}>{{ $recordTransaction->observation }}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Tipo</label>
                <select class="form-control" {{ $record['disabled'] }}>
                    <option value="">Selecione</option>
                    <option value="expense" {{ $recordTransaction->type == 'expense' ? 'selected': null }}>Despesa</option>
                    <option value="revenue" {{ $recordTransaction->type == 'revenue' ? 'selected': null }}>Receita</option>
                </select>
            </div>
            <div class="form-group">
                <label>Data</label>
                <input type="text" class="form-control input-date" value="{{ $recordTransaction->date }}" {{ $record['disabled'] }}>
            </div>
            <div class="form-group">
                <label>Valor do crédito</label>
                <input type="text" class="form-control" value="{{ $recordTransaction->credit_value }}" disabled>
            </div>
            <div class="form-group">
                <label>Valor da comissão</label>
                <input type="text" class="form-control" value="{{ $recordTransaction->commission_value }}" disabled>
            </div>
            <div class="form-group">
                <label>Valor total</label>
                <input type="text" class="form-control" value="{{ $recordTransaction->total_amount }}" disabled>
            </div>
        @if($record['status'] != 'creating' && $recordTransaction->id)
            <div class="form-group">
                <label>Usuário</label>
                <select class="form-control" disabled>
                    <option value="">Selecione</option>
                    <option value="{{ $recordTransaction->createdBy->id }}" selected>{{ $recordTransaction->createdBy->name }}</option>
                </select>
            </div>
        @endif
        </div>
    </div>
</form>