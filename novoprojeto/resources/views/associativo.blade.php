<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
        color: #555;
    }
    h1 {
        color: #333;
    }
    ul {
        list-style-type: none;
        padding: 0;
        
    }
    li {
        background: #fff;
        margin: 5px 0;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
</style>

</head>
<body>
    
        <h1>"Associação de dados" pode referir-se à relação estatística entre variáveis em
            análise de dados, à conexão de propriedades de objetos no desenvolvimento de 
            software (data binding),ou à ação de associações profissionais que buscam 
            defender direitos, organizar eventos ou promover a ciência de dados. </h1>


            <ul>
                @foreach ($dados as $chave => $valor)
                <li>{{ $chave }}:{{$valor}}</li>
                @endforeach
            </ul>

</body>
</html>