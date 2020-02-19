<?php
    /*function verifica_arquivo_existente($arquivo)
    {
        if(!file_exists($arquivo))
        {
            $arquivo=fopen($arquivo, "w+");
            $xml="<?xml version="
        }
    }*/
 ?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Agendamento</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body  class = "p-3 mb-2 bg-info text-white">
    <div class="login-form col-xs-10 offset-xs-1 
		col-sm-6 offset-sm-3 col-md-4 offset-md-4">
	<h1 class="text-center" class="img-fluid"></h1>       
    <h1 class="text-center"><img src="img/barbearia.png" class="img-fluid" style = "margin-top: 100px;"/></h1>
        <form action="recebe_agendamento.php" method="POST">
            <div class="row">
				<div class="form-group col-sm-12 col-xs-12">
					<label>Nome completo</label>
					<input type="text" name="nome" id="nome" class="form-control" required="required"/>
				</div>
            </div>

        <p>    
            <div class="row">
				<div class="form-group col-sm-12 col-xs-12">
                    <label>E-mail</label>
					<input type="email" name="email" id="email" class="form-control" required="required" />
				</div>
			</div>
        </p>

        <p>    
            <div class="row">
				<div class="form-group col-sm-12 col-xs-12">
                    <label>Telefone</label>
					<input type="telefone" name="telefone" id="email" class="form-control" required="required" />
				</div>
			</div>
        </p>

        <p>
            <div class="row">
				<div class="form-group col-sm-12 col-xs-12">
                <label>Data:</label>
                    <input type="date" name="data" id="data" class="form-control" required="required"/>
                    </div>
            </div>
        </p>

        <p>    
            <div class="row">
				<div class="form-group col-sm-12 col-xs-12">
                <label>Hora:</label>
                    <input type="time" name="hora" id="hora" class="form-control" required="required"/>
                    </div>
            </div>
        </p>

        <p>
            <footer>
				<div class="float-right">
					<button type="submit" class="btn btn-danger">Entrar</button>
				</div>
			</footer>
        </p>
        </form>
    </div>
    </body>
</html>
