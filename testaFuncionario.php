<?php 

	include_once 'Funcionario.php';

	$pedro = new Funcionario(); 

	$pedro->setSalario(876);

	echo "Salário: R$ ".$pedro->getSalario();
?>