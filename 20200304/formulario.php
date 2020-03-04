<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulário</title>
        <script type="text/javascript" src="formulario.js"></script>
    </head>
    <body>
        <form name="f">
        <p>
             <label>Nome:</label>
             <input type="text" name="nome"/>
        </p>
        <p>
             <label>E-mail</label>
             <input type="email" name="email"/>
        </p>
        <p>
             <label>Sexo</label>
             <input type="text" name="sexo"/>
        </p>
        <p>
             <label>Data de Nascimento</label>
             <input type="date" name="data" />
        </p>
        <input type="button" value="Enviar" 
            onclick="validar(document.f.nome.value,document.f.email.value,document.f.sexo.value,document.f.data.value);" />
        </form>
    </body>
</html>
                        