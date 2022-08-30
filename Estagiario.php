<?php 

	class Estagiario extends Funcionario{
		function getSalario(){
			return $this->Salario * 1.12;
		}
	}

?>