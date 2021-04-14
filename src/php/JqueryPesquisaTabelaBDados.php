<!DOCTYPE html>
<html>
<head><META CHARSET="UTF-8">
<script src="jquery.min.js"></script>
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Tabela Produtos</h2>
<p>Pesquise:</p>  
<input id="myInput" type="text" placeholder="Search..">
<br><br>


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
		echo "<table>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Produto</th><th>Produto</th><th>Produto</th><th>Produto</th>";
		echo "</tr>";
		echo "</thead>";    
		echo "<tbody id='myTable'>";
		echo "<tr>";
		while ($row=$result->fetch_assoc()) {
			$cont++;			
			echo "<td>";
			echo "".$row["NomeProduto"]."<br>";			
			echo "".$row["PrecoVenda"]."<br>";
			echo "".$row["PrecoCompra"]."<br>";
			echo "<img src='".$row["Imagem"]."' width='100' height='100'>";
			echo "</td>";
			if ($cont>4) {
				echo "</tr><tr>";			
				$cont=0;
			}
		}
		echo "</tbody>";
		echo "</table>";
	}

	$db->close();
	
?>

</body>
</html>
