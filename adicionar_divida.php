<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar divida</title>
    <style>
        body{
            background-color : skyblue;
        }
        form{
            
            width: 350px;
            margin : 100px auto;
        }
        input{
            display: block;
            width: 300px;
            padding: 10px;
            outline: none;
            margin: 15px;
        }
        #cadastra{
            width: 325px;
        }
        h3{
           color:  blue;
           text-align: center; 
        }
        .caixa-maior{
           
            width : 200px;
            margin: 0 auto;
        }
        .caixa{
            background-color: white;
            width: 30px;
            text-align: center;
            font-size: 20px;
            color: black;  
            float: left;    
            padding: 5px;      
        }
        a{
            text-decoration: none;
        }
        .itens{
           
            width : 90%;
            padding : 15px;
            color : black;
            margin-left : 40px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="origem" maxlength="100" placeholder="Origem">
        <input type="text" name="descricao" maxlength="100" placeholder="Descrição">
        <input type="text" name="valor" maxlength="12" placeholder="Valor">
        <input type="date" name="vencimento">
        <input type="submit" name="cadastra" id="cadastra" value="Cadastra">
    </form>

    <h3>Adicionar Divida Padrões</h3>
    <div class="caixa-maior">
        <a href="">
            <div class="caixa">
                +
            </div>
        </a>
        <div class="itens">
            Conta de Luz: 100,00
        </div>
    </div>
    <div class="caixa-maior">
        <a href="">
            <div class="caixa">
                +
            </div>
        </a>
        <div class="itens">
            Conta de Luz: 100,00
        </div>
    </div>
    <div class="caixa-maior">
        <a href="">
            <div class="caixa">
                +
            </div>
        </a>
        <div class="itens">
            Conta de Luz: 100,00
        </div>
    </div>
</body>
</html>