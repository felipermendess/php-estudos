<?php 
// O bloco try é usado para envolver o código que pode gerar uma exceção (erro).
// O bloco catch é usado para capturar e tratar a exceção lançada no bloco try.
// O bloco finally é opcional e é executado sempre, independentemente de uma exceção ter sido lançada ou não.

// try e catch - tenta fazer o que está no try e se der erro cai no catch
try {
    // forçando erro manualmente
    throw new Exception("Ocorreu um erro", 404);
}catch(Exception $e) { // guardando tudo que foi capturado na exception na variável $e
    // mostrando erros com métodos já existentes no Exception
    echo json_encode([
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ]);
}
?>