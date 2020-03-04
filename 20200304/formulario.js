function validar(valor1, valor2, valor3, valor4){
    mensagem = "";
   if(valor1==""){
       mensagem += "Não informou o nome! \n";
   }
   if(valor2==""){
    mensagem += "Não informou o email! \n";
    }
    if(valor3==""){
        mensagem += "Não informou o sexo! \n";
    }
    else(valor4==""){
        mensagem += "Não informou a data! \n";
       
    }
    alert(mensagem);
}