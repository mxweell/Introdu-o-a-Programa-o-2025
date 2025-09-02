<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Quantidade de itens: {{ $quantidade }}</h1>
    <ul>
        @foreach ($produtos as $produto)
            <li>
                {{ $produto }}
                @if ($produto == 'produtoB')
                    <strong> - Produto em destaque</strong>
                @endif
            </li>
        @endforeach
    </ul> 

</body>
</html>