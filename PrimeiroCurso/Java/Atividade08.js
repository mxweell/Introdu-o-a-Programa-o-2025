let mes= parseInt(prompt( "Digite o mes"))

switch(mes){
    case 12:
    case 1:
    case 2: 
        console.log( "É mes de verão")
        break;
    case 3:
    case 4:
    case 5:
        console.log( "É mes de outono")
        break;
    case 6:
    case 7:
    case 8: 
        console.log( "É um mes de inverno") 
        break; 
        default:
            console.log ( "Digite de 1 a 12!!!");      
}