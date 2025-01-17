<?php 
function ola(){
    return "Hello World <br>";
}
echo ola();
$frase = ola();
echo strlen($frase);

// **Function sem return: uma sub-rotina que apenas executa o código**
// - **Com `return`**: A função fornece resultados utilizáveis para o restante do código, tornando-a mais útil e flexível.
// - **Sem `return`**: A função realiza ações diretamente, mas não fornece um valor, limitando sua aplicabilidade.
?>