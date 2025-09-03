<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p> A quantidade de navios é:{{ $quantidade  }}</p>

    <ul>
        @foreach ($produtos as $produto)
            <li>
                {{ $produto }}
                @if ($produto == 'produtoB')
                    <strong> - produto em destaque</strong>
                @endif
            </li>
        @endforeach
    </ul> 

   
</body>
</html>