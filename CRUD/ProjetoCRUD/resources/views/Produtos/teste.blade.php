<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testecontroller</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

        <h1>Cadastro de Produtos Teste</h1>
        @if(session('ok'))
        <div clas="alert alert-success">{{session('ok')}}</div>
        @endif

        <form>
        @csrf

            <div class="mb-3">
                <label for='nome' class='form-label'>Produto teste</label>
                <input typ= "text" id="nome" name='nome' class='form-contrl' reqired value="{{ old('nome') }}"> </input>
               
            </div>

            <div class="mb-3">                
                <label class='form-label'>Tipo de produto</label>
                <select class='form-select' name='tipos_id' required>
                        <option> - Selecione - </option>
                        @foreach($tipos as $id => $nome)
                        <option value="{{ $id }}">
                             {{ $nome }}            
                        </option>
                        @endforeach 
                    </select>
            </div>
            <button class= "btn btn-primary" type= Submit> Salvar </button>

        </form>

    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>