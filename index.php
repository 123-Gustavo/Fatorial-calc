<?php
    //Ver se foi postado o formulario
    if(isset($_POST['acao'])){
        //Coletando o valor do input
        $fator = $_POST['fatorial_number'];

        //Fazer o calculo do fatorial
        $fatorial = 1;
        
        $fat = 0;

        //Condição do fatorial
        if($fator == 0){
            $fat = 1;
        }

        if($fator == 1){
            $fat = 1;
        }

        //Calculo do fatorial
        for ($i= 1; $i < $fator ; $i++) {
            $fatorial += $fatorial * $i;
            $fat = $fatorial;
        }
    }
    

?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Setar a imagem no fundo */
        body{
            background-image: url('https://img.freepik.com/vetores-gratis/fundo-de-quadro-de-matematica-realista_23-2148163817.jpg?w=2000');
            background-position: center 10%;
            background-size: 100%;
        }

        /* Efeito de opacidade */
        div.opaco {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color:rgba(46, 46, 46, 0.5);
            width: 100%;
            height: 100%;
        }
        
        /* Div central onde tem o formulario */
        div.box-meio{
            width: 35%;
            height: 35%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 20px;
            background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190903/pngtree-grainy-wood-red-texture-background-image_311138.jpg');
            border-radius: 8%;
            border:4px solid rgba(60, 60, 60, 1);
            border-top: none;
            box-shadow: 1px 1px 20px #3d3d3d;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            z-index: 0;
            transition: 0.5s;
        }

        /* Titulo do site */
        div.box-meio h2{
            text-align: center;
            font-size: 30pt;
            padding: 10px;
            color: #ccc;
            text-shadow: 1px 1px 3px black;
            transition: 0.5s;
        }

        /* Formulario pra calcular o fatorial */
        div.box-meio form{
            margin: 30px auto;
            display: flex;
            flex-direction: row;
        }

        /* Manipular os inputs */
        div.box-meio form input{
            margin-left: 5px;
        }

        /* Numero para calcular o fatorial */
        div.box-meio form input[type=number]{
            max-width: 150%;
            width: 100%;
            margin-left: 10px;
            padding: 5px;
            border-radius: 10px;
            background-image: linear-gradient(#ccc,#ccc,gray);
        }
        
        /* Botão envio */
        div.box-meio form input[type=submit]{
            padding: 8px;
            font-size: 12pt;
            cursor: pointer;
            border-radius: 10px;
            background-image: linear-gradient(#ccc,#ccc,gray);
            color: white;
            text-shadow: 1px 1px 7px black;
        }

        /* Onde aparecera o resultado */
        div.box-meio h4{
            text-align: center;
            margin-top: 40px;
            font-size: 16pt;
            color: #ccc;
            text-shadow: 1px 1px 3px black;
            transition: 0.5s;
        }

        /* Resultado */
        div.box-meio h4 span{
            font-weight: normal;
        }

        /* Efeito de colocar o mouse em cima */
        div.box-meio:hover{
            width: 40%;
            height: 40%;
        }

        div.box-meio:hover h2{
            font-size: 35pt;
        }

        div.box-meio:hover h4{
            font-size: 21pt;
        }
    </style>
</head>
<body>
    <div class="opaco"></div>
    <div class="box-meio">
        <h2>Fatorial</h2>
        <form action="" method="post">
            <input type="number" name="fatorial_number">
            <input type="submit" value="Enviar" name="acao">
        </form>
        <h4>Resultado: <span><?php echo $fat; ?></span></h2>
    </div>
</body>
</html>