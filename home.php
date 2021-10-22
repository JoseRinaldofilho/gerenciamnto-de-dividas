<?php
//buca a classe dividas
include_once "Classes/Dividas.php";

$d = new Dividas();
$d->getMeses();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: skyblue;

        }
        a{
           color: black;
            text-decoration: none;
        }
        .caixa{
            background-color: red;
        }
        .mes{
            background-color:gray;
            padding: 5px 12px;
            width: 80px;
            text-align: center;
            margin: 10px;
            float : left;
        }
        .mes:hover{
            background-color: white;
        }
        #sair{
            background-color: white;
            display: block;
            width: 50px;
            clear: both;
            text-align: center;
            padding : 10px;
            margin-left: 80%;
        }
        h2{
            text-align: center;
            margin: 20px;
        }
        table{
            border-collapse: collapse;
            
            margin: auto;
        }
        tr:hover{
            cursor: pointer;
            background-color: gray;
        }
        td{
            width: 150px;
            font-size: 20px;
        }
        .tipo{
            background-color: white;
        }
        .adicionar{
            width: 50px;
            background-color: white;
           text-align: center;
           font-size: 20px;
           margin: 0px 0px 10px 300px;

        }
        .adicionar:hover{
            background-color: gray;
            cursor: pointer;
        }
        .apagar{
            display : block;
            background-color: white;
            width: 25px;
            text-align: center;
            padding: 3px;
        }
        .apagar:hover{
            background-color: gray;
            cursor: pointer;
        }
        .rodape:hover{
            background-color: antiquewhite;
            cursor: none;
            
        }h3{
            color: white;
            width : 100px;
            margin : 50px auto;
            padding : 10px;
        }
        #green{
            background-color: green;
        }
        #red{
            background-color: red;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="caixa">
        <a href="">
            <div class="mes">
                Janeiro
            </div>
        </a>
    
    </div>    
    <a href="" id="sair">SAIR</a>
    <h2>Dividas</h2>
    <div class="adicionar">+</div>
    <table>
        <tr >
        <td class="tipo"></td>
        <td class="tipo">Origem</td>
        <td class="tipo">Descrição</td>
        <td class="tipo">Valor</td>
        <td class="tipo">Vencimento</td>
        </tr>
        <tr>
            <td><a href="" class='apagar'>-</a></td>
            <td>boleto</td>
            <td>compras</td>
            <td>150,00</td>
            <td>05/04/21</td>
        </tr>
        <tr>
            <td><a href="" class='apagar'>-</a></td>
            <td>boleto</td>
            <td>compras</td>
            <td>150,00</td>
            <td>05/04/21</td>
        </tr>
        <tr>
            <td><a href="" class='apagar'>-</a></td>
            <td>boleto</td>
            <td>compras</td>
            <td>150,00</td>
            <td>05/04/21</td>
        </tr>
        <tr class="rodape">
            <td><a href="" class='apagar'>-</a></td>
            <td></td>
            <td></td>
            <td>450,00</td>
            <td></td>
        </tr>
    </table>

    <h2>Entradas</h2>
    <div class="adicionar">+</div>
    <table>
        <tr >
        <td class="tipo"></td>
        <td class="tipo">Origem </td>
        
        <td class="tipo">Valor</td>
        <td class="tipo">Dia Recebimento</td>
        </tr>
        <tr>
            <td><a href="" class='apagar'>-</a></td>
            <td>Pagamento</td>
            
            <td>900,00</td>
            <td>5</td>
        </tr>
        <tr>
            <td><a href="" class='apagar'>-</a></td>
            <td>Pagamento</td>
            
            <td>900,00</td>
            <td>5</td>
        </tr>
        <tr>
            <td><a href="" class='apagar'>-</a></td>
            <td>Pagamento</td>
            
            <td>900,00</td>
            <td>5</td>
        </tr>
        <tr class="rodape">
            <td><a href="" class='apagar'>-</a></td>
            <td></td>
            <td></td>
            <td>450,00</td>
            <td></td>
        </tr>
    </table>
    <h3 id="green">Saldo: Total: 00,00</h3>

</body>
</html>