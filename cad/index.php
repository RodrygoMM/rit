<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="stylecad.css">
</head>
<body>
    <form action="..\photo\photo.php"method = "POST" class="card">

        <section aria-autocomplete="inline">
            <div class="cadastro">
            <DIV class="cad"><label for="inome"><p>NOME <input required type="text" id="inome" name="inome" class="cad" placeholder="COMPLETO"  maxlength="30"></p></label>
            </DIV><br>

            <DIV class="cad"><label for="imotor"><p class="cad" >PLACA <input class="pl" required type="text" id="imotor" name="imotor" placeholder=" TRAÇÃO" ></p></label>
            </DIV><br>

            <DIV class="cad"><label for="icarretaA"><p class="cad"> PLACA <input  class="pl" type="text" id="icarretaA" name="icarretaA" placeholder=" CARRETA A"></p></label>
            </DIV><br>
                
            <DIV class="cad"><label for="icarretaB"><p class="cad"  >PLACA <input  class="pl" type="text" id="icarretaB" name="icarretaB"  placeholder=" CARRETA B"></p></label></DIV>

            </div>
        
         </section>
        <BUtton class="card">Enviar</BUtton> 


    </form>    
 
   <img src="ritmo.jpg" alt="ritmo">



</body>
</html>