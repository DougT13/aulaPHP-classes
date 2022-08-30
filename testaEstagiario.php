<?php 

	include_once 'Funcionario.php';
	include_once 'Estagiario.php';

	$pedrinho = new Estagiario();

	$pedrinho->setSalario(240);

	echo 'O salário do Pedrinho é R$: ' . $pedrinho->getSalario() . "<br>";

?>