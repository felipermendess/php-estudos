<?php 
require_once("Cliente.php");
require_once("Fornecedor.php");

use Cliente\Pessoa as ClientePessoa;
use Fornecedor\Pessoa as FornecedorPessoa;

$fernando = new ClientePessoa();
echo $fernando->getNome();
echo"<br>";
$alexandre = new FornecedorPessoa();
echo $alexandre->getNome();
?>