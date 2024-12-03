<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

 // chmando a conexão com o banco 
 include_once("connect.php");

 //Select de pesquisa do usuário
 $sql = "SELECT `id`, `nome`, `email`, `senha`, `lembrete`, `foto` FROM `cadastro` WHERE `email` = '".$email."' AND `senha` = '".$senha."'";

 //Executando a select
 $resultado = mysqli_query($link,$sql);
 
 //Verificando o resultado
 var_dump($resultado);

 //Verificando os dados que vem
 $id=0;
 foreach ($resultado as $valor) {
    var_dump($valor);
    $id = $valor['id'];
 }

 //Se tiver resultado o valor de ID vai ser maior que 0
 if ($id > 0) {
    $_SESSION['nome'] = $valor['nome'];
    $_SESSION['email'] = $valor['email'];
    $_SESSION['id'] = $valor['id'];
    ?>
    <script>
    alert("usuário conectado com sucesso!");
    window.location.replace("index.php?logado=1");
    </script>
<?php
 } else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    ?>
    <script>
    alert("usuário ou senha incorretas!");
    window.location.replace("form_login.php");
    </script>
    <?php
 }

?>