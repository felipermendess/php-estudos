<?php 
// O bloco try é usado para envolver o código que pode gerar uma exceção (erro).
// O bloco catch é usado para capturar e tratar a exceção lançada no bloco try.
// O bloco finally é opcional e é executado sempre, independentemente de uma exceção ter sido lançada ou não.

// função para validar se nome veio vazio = se sim lança nova execação e se não mostra o nome com a primeira letra em maiusc
function tratarNome($nome){
    // executa se o campo nome vier vazio/falso
    if (!$nome) {
        // lançando nova exception
        throw new Exception("O campo nome não foi preenchido <br>");
    }

    echo ucfirst($nome."<br>");
}

try {
    tratarNome("felipe");
    tratarNome("");
}catch(Exception $e) {
    echo $e->getMessage();
}finally {
    echo "Execução finalizada";
}

?>