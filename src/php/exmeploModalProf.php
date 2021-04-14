<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modal Exemplo	</h2>
  

 
    
	
	
	<?php

	$db = new mysqli('localhost','root','','TheDuweKingdom');
	$sql = "select * from produtos";
	$result = $db->query ($sql);
	$row=$result -> fetch_assoc();
	
	if(!$row)
		echo"NAO CADASTRADO!";
	else
		{
		$cont=0;
		echo "<table background color='#808080'>";
		echo "<thead>";
		echo "<a href='https://www.amd.com/pt/where-to-buy/2nd-gen-ryzen'><img src='ryzenBanner.png'></a>";

		echo "</thead>";    
		echo "<tbody id='myTable'>";
		echo "<tr>";
		while ($row=$result->fetch_assoc()) {
			$cont++;			
			echo "<td>";
			echo "".$row["NomeProduto"]."<br>";			
			echo "".$row["PrecoVenda"]."<br>";
		
			echo "<img src='".$row["Imagem"]."' width='100' height='100'>";
			
			?>
				<!-- Trigger the modal with a button -->
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Abrir Janela Modal</button>
			<?php>
			
			
			echo "</td>";
			if ($cont>2) {
				echo "</tr><tr>";			
				$cont=0;
			}
		}
		echo "</tbody>";
		echo "</table>";
	}

	$db->close();
	
	
?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
	
	
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Título da Janela Modal</h4>
        </div>
        <div class="modal-body">
          <p>Texto a ser inserido</p>
		  <center>
			<input type="button" value="Cancelar" onclick="fecharDiv('menuSuspenso');">
			<input type="button" value="Confiramr">
		</center>	
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


    


</body>
</html>
