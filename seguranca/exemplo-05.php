<?php 
// Define uma constante chamada SECRET_IV, que é uma string de 16 bytes gerada a partir da palavra "senha".
// A função pack("a16", "senha") garante que a string tenha exatamente 16 bytes, preenchendo com espaços se necessário.
define("SECRET_IV", pack("a16", "senha"));

// Define uma constante chamada SECRET, que também é uma string de 16 bytes gerada a partir da palavra "senha".
// Isso será usado como chave para criptografar e descriptografar os dados.
define("SECRET", pack("a16", "senha"));

// Cria um array associativo com um único elemento, onde a chave é "nome" e o valor é "Hcode".
$data = [
    "nome"=>"Hcode"
];

// A função openssl_encrypt é usada para criptografar os dados.
// O primeiro argumento é o dado que será criptografado, que neste caso é o array $data convertido para JSON.
// O segundo argumento é o método de criptografia, que aqui é "AES-128-CBC".
// O terceiro argumento é a chave de criptografia, que é a constante SECRET.
// O quarto argumento é uma flag que controla o comportamento da criptografia. 0 significa que não há flags especiais.
// O quinto argumento é o vetor de inicialização (IV), que é a constante SECRET_IV.
$openssl = openssl_encrypt (
    json_encode($data),  // Converte o array $data para JSON e criptografa.
    "AES-128-CBC",       // Método de criptografia AES com chave de 128 bits no modo CBC.
    SECRET,              // Chave de criptografia.
    0,                   // Flag de opções (0 significa sem opções especiais).
    SECRET_IV            // Vetor de inicialização (IV).
);

// Exibe o resultado da criptografia, que é uma string codificada em base64.
echo $openssl;

// A função openssl_decrypt é usada para descriptografar os dados.
// O primeiro argumento é a string criptografada que será descriptografada.
// O segundo argumento é o método de criptografia, que deve ser o mesmo usado na criptografia ("AES-128-CBC").
// O terceiro argumento é a chave de criptografia, que deve ser a mesma usada na criptografia (SECRET).
// O quarto argumento é a flag de opções, que deve ser a mesma usada na criptografia (0).
// O quinto argumento é o vetor de inicialização (IV), que deve ser o mesmo usado na criptografia (SECRET_IV).
$string = openssl_decrypt (
    $openssl,            // String criptografada.
    "AES-128-CBC",       // Método de criptografia.
    SECRET,              // Chave de criptografia.
    0,                   // Flag de opções.
    SECRET_IV            // Vetor de inicialização (IV).
);

// A função json_decode converte a string JSON de volta para um array associativo.
// O segundo argumento "true" indica que queremos que o resultado seja um array associativo em vez de um objeto.
// A função var_dump exibe informações sobre a variável, incluindo seu tipo e valor.
var_dump(json_decode($string, true));

// exemplo atual
// Senha fornecida pelo usuário
$senha = "minhaSenhaSegura123";

// Gera um hash seguro da senha
$hash = password_hash($senha, PASSWORD_DEFAULT);

// Armazene o hash no banco de dados (nunca armazene a senha em texto plano)
// Exemplo: INSERT INTO usuarios (username, password_hash) VALUES ('usuario', '$hash');

// Para verificar a senha durante o login
if (password_verify($senha, $hash)) {
    echo "Senha correta!";
} else {
    echo "Senha incorreta!";
}
?>