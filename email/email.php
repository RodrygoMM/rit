<?php
  //Variáveis
  $inome = $_POST['inome'];
  $imotor = $_POST['imotor'];
  $icarretaA = $_POST['icarretaA'];
  $icarretaB = $_POST['icarretaB'];

  //file sent via form

  $path = $_FILES['attachment']['tmp_name'];
  $fileType=$_FILES['attachment']['type'];
  $fileName=$_FILES['attachment']['name'];
  

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>NOME: </b>$inome</p>
      <p><b>PLACA: </b>$imotor</p>
      <p><b>PLACA A: </b>$icarretaA</p>
      <p><b>PLACA B: </b>$icarretaB</p>      
    </html>
  ";


   
  //Emails para quem será enviado o formulário
  $destino = "rmujol@gmail.com";
  $assunto = "WHATSAPP: $inome <$imotor>";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "from: $inome <$imotor>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../contato.html'>";
?>