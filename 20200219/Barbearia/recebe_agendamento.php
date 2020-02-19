<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Agendamento</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
    <div class="login-form col-xs-10 offset-xs-1 
		col-sm-6 offset-sm-3 col-md-4 offset-md-4">
<?php
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $telefone=$_POST["telefone"];
    $data=$_POST["data"];
    $hora=$_POST["hora"];
    $var=false;
    if(!file_exists("agendamentos.xml"))
    {
            $xml=
        '<?xml version="1.0" encoding="UTF-8"?>
        <clientes>
            <cliente>
                <nome>'.$nome.'</nome>
                <email>'.$email.'</email>
                <telefone>'.$telefone.'</telefone>
                <data>'.$data.'</data>
                <hora>'.$hora.'</hora>
            </cliente>
        </clientes>';
            file_put_contents("agendamentos.xml", $xml);
            echo'<h1>Agendado com sucesso!!! :)</h1>';
    }
    else
    {
        $xml=simplexml_load_file("agendamentos.xml");
        foreach($xml->cliente as $cliente)
        {
            if($cliente->data==$data && $cliente->hora==$hora)
            {
                $var=true;
            }
        }
        if($var==true)
        {
            echo'<h1>Agende em outro horário!!! :(</h1>';
        }
        if($var==false)
        {
            $cliente=$xml->addchild("cliente");
            $cliente->addchild("nome", $nome);
            $cliente->addchild("email", $email);
            $cliente->addchild("telefone", $telefone);
            $cliente->addchild("data", $data);
            $cliente->addchild("hora", $hora);
            file_put_contents("agendamentos.xml" , $xml->asXML());
            echo'<h1>Agendado com sucesso!!! :)</h1>';
        }
    }
   
?>
<a href="form_agendamento.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Voltar ao agendamento</a>
<a href="lista_agendamento.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Ver lista de agendamento</a>
</div>
</body>
</html>

