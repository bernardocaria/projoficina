<?php

$path_home = 'php/home.php';
$path_registarCliente = 'php/registaClientes.php';
$path_listar = 'php/listarClientes.php';
$path_viaturasRegistar = 'php/viaturasRegisto.php';
$path_viaturasReparacao = 'php/viaturasReparacao.php';
$path_ordensServico = 'php/ordensServico.php';

$menu = <<<MENU

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="$path_home">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="$path_registarCliente">Registar Cliente</a>
      <a class="nav-item nav-link" href="$path_listar">Listar Clientes</a>
	  <a class="nav-item nav-link" href="$path_viaturasRegistar">Registar Viaturas</a>
	  <a class="nav-item nav-link" href="$path_viaturasReparacao">Registar Reparação</a>
	  <a class="nav-item nav-link" href="$path_ordensServico">Ordens Serviços</a>
    </div>
  </div>
</nav>

MENU;

?>