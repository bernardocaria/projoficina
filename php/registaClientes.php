<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- link para icones bandeiras -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>


<?php
	include 'menu.php';
	echo $menu;

	?>
<br>


<table id="tabela_dados" class="table table-dark table-striped">
  <thead>
  <th><?php echo ['ID']; ?></th>
  	<th><?php echo ['Nome']; ?></th>
  	<th><?php echo ['Endereco']; ?></th>
  	<th><?php echo ['Telefone']; ?></th>
  	<th><?php echo ['Contribuinte']; ?></th>
  	<th><?php echo ['Endereço Email']; ?></th>
  	




  </thead>
  <tbody>

  	<?php    
  		include 'bdConnect.php'; 
  		$query = "SELECT * FROM Clientes";
  		$resultado = mysqli_query($liga,$query);
  		while($row = mysqli_fetch_assoc($resultado)){ 
  	?>
  	<tr>
  		<td><?php echo $row['id']; ?></td>
  		<td><?php echo $row['Nome']; ?></td>
  		<td><?php echo $row['Endereco']; ?></td>
  		<td><?php echo $row['Telefone']; ?></td>
  		<td><?php echo $row['Contribuinte']; ?></td>
		<td><?php echo $row['Email']; ?></td>
 <!-- <td><a href="editaCliente.php?<td><?php echo $row['Contribuinte']; ?></td><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a href="eliminaArtigo.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></td> -->
  		</tr>

  <?php    }    ?>
  </tbody>
</table>