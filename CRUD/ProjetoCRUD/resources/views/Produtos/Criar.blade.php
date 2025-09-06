<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

       <H1> Cadastro de Produto </H1>

     <from>
        @csrf
        
        <div class='mb-3'>

            <label fro='nome' class='form-label' > Nome do Produto:</label>
            <input type= "text" id="nome" name="nome" class="form-control" required value="{{ old('nome') }}">

        </div>

        <div>
            <label class="form-label">Tipode Produto</label>

                <select class="form-select" nome="tipo_id" required  >
                    <option> - Selecione - </option>
                    @foreach($tipos as $id => $nome)
                    <option value="{{ $id }}">
                         {{ $nome }}
                    </option>
                    @endforeach
                </select>

        </div>
     
     <from>     



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>