<?php
 $nome = $_POST['NomeCliente'];
 $sobrenome = $_POST['SobrenomeCliente'];
 $sexo = $_POST['Sexo'];
 $strcon = new mysqli('db','root','123456','banco_teste');
 if (!$strcon) {
   die('Não foi possível conectar ao MySQL');
 }
 // Criando a declaração SQL:
 $sql = "INSERT INTO Cadastro(NomeCLiente, SobrenomeCLiente, Sexo)
 VALUES ('$nome','$sobrenome','$sexo')";
 // Executando a declaração no banco de dados:
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao executar a inserção dos dados");
 echo "Registro inserido com sucesso";
 mysqli_close($strcon);
 echo "<br><br><a href='index.html'>Voltar à página inicial</a>";
?>