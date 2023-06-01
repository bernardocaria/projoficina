
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- link para icones bandeiras -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>



<?php
	include 'header.php';
	echo $cabecalho;

	include 'menu.php';
	echo $menu;

	include 'init.php';




//declarar variáveis e associar ao conteúdo do formulário
$cat = $_POST['cat'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$unit = $_POST['unit'];
$foto = $_POST['foto'];

?>

<br>
<!-- inserir menu de linguas -->

<style type="text/css">
		#bandeiras{float: right; background-color: #188617;}
		.m-bandeiras{ margin: 10px; }
		.l-bandeiras{text-decoration: none}
	</style>
<header>
		<div id="bandeiras">
			<a href="?lingua=portugues" class="l-bandeiras"><span class="fi fi-pt m-bandeiras"></span></a>
			<a href="?lingua=ingles" class="l-bandeiras"><span class="fi fi-gb-eng m-bandeiras"></span></a>
			<a href="?lingua=espanhol" class="l-bandeiras"><span class="fi fi-es m-bandeiras"></span></a>
		</div>
	</header>




<table id="tabela_dados" class="table table-dark table-striped">
  <thead>

  <th><?php echo $lang['Categoria']; ?></th>
  	<th><?php echo $lang['Descricao']; ?></th>
  	<th><?php echo $lang['Preco']; ?></th>
	<th><?php echo $lang['Unidades Disponiveis']; ?></th>
  	<th><?php echo $lang['Imagem']; ?></th>
  	
  	</thead>
  <tbody>
  	<tr>
  		<td><?php echo $cat; ?></td>
  		<td><?php echo $desc; ?></td>
  		<td><?php echo $price; ?></td>
  		<td><?php echo $unit; ?></td>
  		<td><img src="<?php echo $foto; ?>"</td>
  	</tr>
  </tbody>
</table>

<?php

	$file = fopen("../txt/equipamentos.txt", "a+");
	if(file_exists('../txt/equipamentos.txt')){
	
		$dados = $cat."\n".$desc."\n".$price."\n".$unit."\n".$foto."\n";
		fwrite($file,$dados);
	}else{
		echo "<script>alert('Erro ao tentar registar dados no ficheiro');</script>";
	}
	fclose($file);
	
	include 'bdConnect.php';

$query = "INSERT INTO artigos(categoria,descricao,imagem,preco,unidades) VALUES('$cat','$desc','$foto','$price','$unit')";

if(mysqli_query($liga,$query)){
  echo "<script>alert('Registo inserido com sucesso!');</script>";
}else{
  echo "<script>alert('Erro ao tentar registar dados na BD');</script>";
}
mysqli_close($liga);

?>