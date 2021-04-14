<?php
  session_start();
?>
<html
>
<body>



<!DOCTYPE html>
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
<style>


*BARRA DE NAVEGAÇÃO (AINDA NÃO PRONTA)*

#barra {
	 background-color: white;
	   width: 1400px;
	   padding: 6px 40px;
}

#cabecalho {

				 font-family: verdana;
				 color: white;
				 margin: 6px 4px;
				 width: 70%;
				 position: absolute;
				 right: 0px;

					border-radius: 12px;
					

			   }
			   
#banner {
	width : 1150px;
	height : 300px;
		
}
#banner2 {
	width : 1150px;
	height : 300px;
		
}
#banner3 {
	width : 1150px;
	height : 300px;
		
}
#banner4 {
	width : 1150px;
	height : 300px;
}
#barriu{
		   width: 1350px;
	   padding: 6px 100px;
}

td, th {
    border: 2px solid #dddddd;
    text-align: left;
    padding: 6px 40px;
	 background-color: rgba(192,192,192,0.9);
}


</style>
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
				<th> <a href="http://localhost/The%20Duwe%20Kingdom/The%20Duwe%20Kingdom%20MAIN.php">Promoções </th>
			   
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


<table border ="0" width=1140 height=50>
<tr>
    <td>
     <p>Pesquise:</p>  
     <input id="myInput" type="text" placeholder="Search.."> 
    </td>
	<td>
	<a href="http://localhost/The%20Duwe%20Kingdom/carrinho.php?tarefa=adicionar&idProduto=2"><img src="carrinhoIcon.png" width="100" height="100"></a>
	</td>
	<td><center>
	<a href="https://www.nvidia.com/pt-br/geforce/graphics-cards/rtx-2080-ti/"><img src="RTX2080.jpg"></a>
	</td>
</tr>

</table>	
<br><br><BR>
<center>
 
    
	
	
	<?php
  // inicia sessão

  // cria variável para saber quantos foram selecionados
  if (isset($_SESSION["contador"])) $contador=$_SESSION["contador"];
  else
      $contador=0;
  // incrementa contador para próximo produto a ser adicinado
  $contador++;
  // identifica tarefa a ser realizada
  if (isset($_GET["tarefa"])) $tarefa=$_GET["tarefa"];
  else
     $tarefa="?";
	 
   // obtém id do produto 
   if (isset($_GET["idProduto"])) $idproduto=$_GET["idProduto"];
  else{
		 $idproduto="?"; 
		 $contador=0;	
	}
     
  // mostra informações  
  echo "Total: $contador,";
  echo "<br>";
  echo ": $tarefa";
  echo "<br>";
   // finaliza e grava as informações no banco de dados
   if ($tarefa=="finalizar"){
      // mostra total de item adicionados
  	  $contador = $_SESSION["contador"];
	  echo "Total de itens: ".$contador;
	  echo "<br>Selecionados: (";
	  // mostra produtos selecionados
	  $produtosSel="";
	  for($i=1; $i<=$contador;$i++)
	  {
		   // cada produto adicionado é armazenado na sessão
		   // com uma variável composta pela palavra "produto" + indice. Indice corresponde ao
		   // id do produto
		   $indice = "'produto$i'";
		   // valor armazena o id do produto
		   $valor =$_SESSION[$indice];
		   // acumula na variável produtoSel todos os produtos selecionados, separando-os por ","
		   $produtosSel = $produtosSel.$valor.",";		   
	   }
	   echo $produtosSel.")<br>";
	   // conexão
	   $conecta = new PDO("mysql:host=localhost;dbname=TheDuweKingdom", "root", "");

	   // sql de inserção
	   $stmt = $conecta->prepare('INSERT INTO vendas(Produtos) VALUES(?)');
	   
	   $stmt -> bindValue(1, $produtosSel);
	   // executa sql (falta proteção para erro)
	   // finaliza sessão
		$stmt -> execute();
	   $_SESSION = array(); // limpa array
		session_destroy();// finaliza sessão
		echo "<br><b>SESSÃO FINALIZADA </b><br>";	   
  }
  else
  // se contador >0 então adicionar  o id do produto, pois, foi selecionado pelo usuário
  if ($contador>0){
	  // cria variável na sessão -individual para cada seleção
	  $indice = "'produto$contador'";
	  // relaciona variável com idproduto
	  $_SESSION[$indice]=$idproduto;
	  //atualiza sessão
	  $_SESSION["contador"]=$contador;
	  
	  // lista selecionados
	  $i=0;
	  echo "Selecionados: (";
	  for($i=1; $i<=$contador;$i++)
	  {
	   $indice = "'produto$i'";
	   $valor =$_SESSION[$indice];
	   $produto[$i] = $valor;
	   echo "$valor,";
	  }
	  echo ")";
	  
	}  //if
     
   //lista produtos permitindo a escolha de um deles para ser adicionado 
   // falta converter para PDO
   //conexão 
    $conecta = new PDO("mysql:host=localhost;dbname=TheDuweKingdom", "root", "");


   //mostra os produto
   $sql = $conecta->prepare("select * from Produtos");

   // executar a sql
   if($sql -> execute()){
	if ($sql -> rowCount() > 0){
   //cria tabela
	   echo "<table border=1 width=100%>";
	   //cria linha
	   echo "<tr>";
	   //contagem de colunas visualizadas
	   $col=0;
	   // percorre consulta
		while ($campo = $sql -> fetch (PDO::FETCH_OBJ)){
		// extrai campos
			 $col++;// conta colunas
			 echo "<td>";// cria coluna
			 echo "<img src='".$campo -> Imagem ."' width ='100' height='100'>";
			 echo "<br><a href='carrinho.php?tarefa=adicionar&idproduto=".$campo -> idProduto."'>Produtos escolhido por você</a>";// link compra  
			 echo "<a href='removerProduto.php?indiceRemover=$i'>[X]</a>";	
			 echo "</td>";// fecha coluna
			 echo "<a href='http://localhost/The%20Duwe%20Kingdom/The%20Duwe%20Kingdom%20MAIN.php'>Voltar a Página Inicial</a>";
			 // a cada 6 produtos quebrar linha
			 if ($col>=6) { 
				  echo "</tr>";// fecha linha
				  $col=0;// inicia contagem
			 } 
		  } // while
	  } //if
} // if
    
  echo "</table>";// fecha tabela
             
  
?>
<center><input type="button" value="Finalizar" onclick="window.location='carrinho.php?tarefa=finalizar'" /></center>
	
	

	
	 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
	
	
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">QUERO RECEBER PROMOÇÕES!</h4>
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
	   
</body>
</html>
<html>
<body>


<center><input type="button" value="Finalizar" onclick="window.location='finalizarCarrinho.php'" /></center>
</body>
</html>




</body>
</html>








