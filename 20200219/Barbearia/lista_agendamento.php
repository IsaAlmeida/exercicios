<!DOOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Lista</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
    <body  class = "p-3 mb-2 bg-info text-white">
    <div class="login-form col-xs-15 offset-xs-15 col-sm-10 offset-sm-10 col-md-15 offset-md-1">
	<header>
		<h1 class="text-center" class="img-fluid"></h1>
		<h2 class="text-center"><b>Lista de Agendamento</b></h2>
	</header>
    <div class="table-light">
        <table  class="table table-striped table-bordered table-hover table-light">
            <tr>
                <td><h3>Nome</h3></td>
                <td><h3>Data</h3></td>
                <td><h3>Hora</h3></td>
            </tr>
            <?php
                $xml=simplexml_load_file("agendamentos.xml");

               
                foreach($xml->cliente as $clientes)
                {
                    echo'<tr>
                        <td>'.$clientes->nome.'</td>
                        <td>'.$clientes->data.'</td>
                        <td>'.$clientes->hora.'</td>
                    </tr>';
                }
            ?>
        </table>
        <footer class="row">
			    <div class="col-sm-6">
                    <a href="form_agendamento.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Voltar ao agendamento</a>
                </div>
        </footer>
	</div>
</div>
    </body>
</html>
