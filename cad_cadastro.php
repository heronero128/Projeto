
<?php
include_once("connect.php");

 $nome          = $_POST['nome'];
 $email         = $_POST['email'];
 $senha         = $_POST['senha'];
 $repetir_senha = $_POST['repetir_senha'];
 $lembrete      = $_POST['lembrete'];
 $foto          = $_FILES['foto']['name'];
 $tipo          = $_FILES['foto']['type'];

 $target_dir = "uploads/";
 $target_file = $target_dir.basename($_FILES["foto"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 if(isset($_POST["submit"]))
 {
   $check = getimagesize($_FILES["foto"]["tmp_name"]);
   if($check !== false)
   {
      echo "File is an image - ".$check["mime"].".";
      $uploadOk = 1;
   }
   else
   {
      echo "File is not an image.";
      $uploadOk = 0;
   }
 }
 if($uploadOk == 0)
 {
   echo "Sorry, your fle was not uploaded.";
 }
 else
 {
   if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file))
   {
      echo "The file". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
   }
   else
   {
      echo "Sorry, there was an error uploading your file.";
   }
 }

 $sql = "INSERT INTO `cadastro`( `nome`, `email`, `senha`, `repetir_senha`, `lembrete`, `foto`) VALUES 
 ('".$nome."','".$email."','".$senha."','".$repetir_senha."','".$lembrete."','".$foto."')";
echo $sql;

$resultado = mysqli_query($link, $sql);

var_dump($resultado);

   if($resultado == true)
   {
      echo('<script> alert("Contato inserido com sucesso!!!");</script>');
   }
   else
   {
      echo('<script>alert("Falha na inserção do contato")</script>');
   }   

?>