

<!DOCTYPE html>
<?php
 session_start();
?>
<html lang="en">
<head>
  <title>The Duwe Kingdom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>

</head><META CHARSET ="UTF-8">
<body background="pixelWallpaper.png">


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
		<a href="http://localhost/The%20Duwe%20Kingdom/The%20Duwe%20Kingdom%20MAIN.php">  
		<img src="TheDuweKingdomBanner.png" alt="banner" id="banner">
		</a>
    </div>

    <div class="item">
      <img src="witcher3banner.jpg" alt="banner2" id="banner2">
    </div>

    <div class="item">
      <img src="darksoulsBanner.jpg" alt="banner3" id="banner3">
	</div>
	
	<div class="item">
      <img src="Geforce.png" alt="banner3" id="banner4">
	</div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




	<center>

<table id="barra">
			<tr id="barriu">
				
				<th> <a href="http://localhost/The%20Duwe%20Kingdom/The%20Duwe%20Kingdom%20MAIN.php" > Main page</th>
				<th> <a href="http://localhost/The%20Duwe%20Kingdom/The%20Duwe%20Kingdom%20MAIN.php" > Novidades</th>
				<th> <a href="http://localhost/The%20Duwe%20Kingdom/The%20Duwe%20Kingdom%20MAIN.php" > Contato</th>
				<th> <a href="http://localhost/The%20Duwe%20Kingdom/The%20Duwe%20Kingdom%20MAIN.php">Sobre</th>
				<th> <a href="http://localhost/The%20Duwe%20Kingdom/The%20Duwe%20Kingdom%20MAIN.php">Promo????es </th>
			   
				<th> <font color="#0174DF">
				
				<script>
	function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
	}
	function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
	}
	</script>
	</head>

	<body onload="startTime()">

	<div id="txt"></div>

	</body>
		</font color="red">

</th>

			</tr>

		</table>
		
 <h2><font color ="white">Tabela Produtos</font color ="white"></h2>

</center>

<center>
<table border ="0" 12px;width=1140 height=50>
<tr>
    <td>
     <p>Pesquise:</p>  
     <input id="myInput" type="text" placeholder="Search.."> 
	<td><center>
	<a href="https://www.nvidia.com/pt-br/geforce/graphics-cards/rtx-2080-ti/"><img src="RTX2080.jpg"></a>
	</td>
	 </td>
	<td>
	<a href="http://localhost/The%20Duwe%20Kingdom/carrinho.php?tarefa=adicionar&idProduto=1"><img src="carrinhoIcon.png" width="70" height="70"></a>
	</td>
</tr>

</table><center>	
<br>
<center>
 


<?php
  // inicia sess??o
  // cria vari??vel para saber quantos foram selecionados
  if (isset($_SESSION["contador"])) $contador=$_SESSION["contador"];
  else
      $contador=0;
  // incrementa contador para pr??ximo produto a ser adicinado
  $contador++;
 
   // obt??m id do produto 
   if (isset($_GET["idProduto"])) $idproduto=$_GET["idProduto"];
  else{
		 $idProduto="?"; 
		 $contador=0;	
	}
	
 if (isset($_GET["Imagem"])) $imagem=$_GET["Imagem"];	
 
 if (isset($_GET["PrecoVenda"])) $imagem=$_GET["PrecoVenda"];	
	
     
  if ($contador>0){
	  //-------- cria e armazena idproduto na sess??o --------------------
	  // cria vari??vel na sess??o -individual para cada sele????o
	  $indice = "'produto$contador'";
	  // relaciona vari??vel com idproduto
	  $_SESSION[$indice]=$idproduto;
	  
	  
	  
	  //-------- cria e armazena nome da imagem do produto na sess??o --------------------	  
	  // cria vari??vel na sess??o -individual para cada sele????o
	  $indice = "'imagem$contador'";
	  // relaciona vari??vel com idproduto
	  $_SESSION[$indice]=$imagem;
	  
	  
	  
	  
	  //atualiza sess??o
	  $_SESSION["contador"]=$contador;	  
	  // lista selecionados
	 
	  echo "Produto adicionado!<p>";
	  
	}  //if
  
             
  
?>


<center><input type="button" value="Finalizar" onclick="window.location='finalizarCarrinho.php'" /></center>

	 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
	
	
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">QUERO RECEBER PROMO????ES!</h4>
        </div>
        <div class="modal-body">
          <p><b>Insira seu email de alerta:<b/></p><br>
		  <img src="setasDireita.gif" width="20" height="20"> <input type="text" id="uname" name="email">
		  <center>
			<input type="button" value="Confirmar">
		</center>	
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<br><br><BR>

<center>
<table border ="0" width=1140 height=50>
<tr>
	<td><center>
	<a href='https://www.amd.com/pt/where-to-buy/2nd-gen-ryzen'><img src='ryzenBanner.png'></a>
	</td>
	
	<img src="ESO NORD.png" width=200 height=150>
</tr>
<tr>
	<td><center>
       <img src="Selo de privacidade.jpg" width="800px" height="230px">
	</td>  
</tr>	
</table>



<?php
  // inicia sess??o
  session_start();
  // cria vari??vel para saber quantos foram selecionados
  if (isset($_SESSION["contador"])) $contador=$_SESSION["contador"];
  else
      $contador=0;
  // incrementa contador para pr??ximo produto a ser adicinado
  $contador++;
 
   // obt??m id do produto 
   if (isset($_GET["idProduto"])) $idproduto=$_GET["idProduto"];
  else{
		 $idProduto="?"; 
		 $contador=0;	
	}
	
 if (isset($_GET["Imagem"])) $imagem=$_GET["Imagem"];	
 
 if (isset($_GET["PrecoVenda"])) $imagem=$_GET["PrecoVenda"];	
	
     
  if ($contador>0){
	  //-------- cria e armazena idproduto na sess??o --------------------
	  // cria vari??vel na sess??o -individual para cada sele????o
	  $indice = "'produto$contador'";
	  // relaciona vari??vel com idproduto
	  $_SESSION[$indice]=$idproduto;
	  
	  
	  
	  //-------- cria e armazena nome da imagem do produto na sess??o --------------------	  
	  // cria vari??vel na sess??o -individual para cada sele????o
	  $indice = "'imagem$contador'";
	  // relaciona vari??vel com idproduto
	  $_SESSION[$indice]=$imagem;
	  
	  
	  
	  
	  //atualiza sess??o
	  $_SESSION["contador"]=$contador;	  
	  // lista selecionados
	 
	  echo "Produto adicionado!<p>";
	  
	}  //if
  
             
  
?>
 
 	 
	   
</body>
</html>
<html>
<body>






