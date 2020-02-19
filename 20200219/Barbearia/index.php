<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Barbearia- Boas Vindas</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class = "p-3 mb-2 bg-info text-white">
    <?php
            echo '<div class="login-form col-xs-10 offset-xs-1 
            col-sm-6 offset-sm-3 col-md-4 offset-md-4">
                <header>
                    <h1 class="text-center" class="img-fluid"></h1>       
                    <h1 class="text-center"><img src="img/barbearia.png" class="img-fluid" style = "margin-top: 300px;"/></h1>
                </header>
                <form action="form_agendamento.php"> 
                    <footer>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Clique aqui para agendar seu horario!</button>
                        </div>
                    </footer>
                </form>
            </div>';
    ?>
</body>
</html>