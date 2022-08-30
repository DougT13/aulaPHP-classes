<?php 

	class Funcionario
	{
		private $Codigo;
		public $Nome;
		private $Nascimento;
		protected $Salario;

		function setSalario($Salario){
			if (is_numeric($Salario)&&($Salario > 0)) 
			{
				$this->Salario = $Salario;	
			}
		}

		function getSalario(){
			return $this->Salario;
		}
	}
?>