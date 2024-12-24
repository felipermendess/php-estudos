<?php 
//Padrão de variáveis
$nomeCompleto = 'Felipe Rodrigues Mendes Valente';
$anoNascimento = 2004;
$carro1 = 'Corolla';
$profissao_atual = 'Desenvolvedor Web';

echo '<br>';

//Limpando variável - unset()
unset($carro1);

//Fazendo validação para verificar se a variável existe - isset()
if(isset($carro1)){
    echo $carro1;
}

//Concatenação '.'
$nome = 'Gustavo';
$sobrenome = 'Mendes';
$nome_completo = $nome . ' ' . $sobrenome;
echo $nome_completo;

exit; //comando para o php parar a execução - não executa nada abaixo disso

//Comentários // ou /**/ 
?>