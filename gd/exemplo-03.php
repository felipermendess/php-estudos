<?php 
// Carrega uma imagem JPEG existente (neste caso, "certificado.jpg") e a armazena na variável $image
$image = imagecreatefromjpeg("certificado.jpg");

// Aloca a cor preta (RGB: 0, 0, 0) para a imagem
$titleColor = imagecolorallocate($image, 0, 0, 0);

// Aloca uma cor cinza (RGB: 100, 100, 100) para a imagem (não utilizada no código)
$gray = imagecolorallocate($image, 100, 100, 100);

// Adiciona o texto "CERTIFICADO" à imagem usando uma fonte TrueType (TTF)
// Parâmetros:
// - $image: a imagem onde o texto será desenhado
// - 32: tamanho da fonte
// - 0: ângulo de inclinação do texto (0 graus, ou seja, sem inclinação)
// - 320: posição X (horizontal) do texto
// - 250: posição Y (vertical) do texto
// - $titleColor: cor do texto (preto)
// - "fonts/Bevan/Bevan-Regular.ttf": caminho para o arquivo da fonte TrueType
// - "CERTIFICADO": texto a ser desenhado
imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");

// Adiciona o texto "Divanei" à imagem usando outra fonte TrueType (TTF)
// Parâmetros:
// - $image: a imagem onde o texto será desenhado
// - 32: tamanho da fonte
// - 0: ângulo de inclinação do texto (0 graus, ou seja, sem inclinação)
// - 375: posição X (horizontal) do texto
// - 350: posição Y (vertical) do texto
// - $titleColor: cor do texto (preto)
// - "fonts/Playball/Playball-Regular.ttf": caminho para o arquivo da fonte TrueType
// - "Divanei": texto a ser desenhado
imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divanei");

// Adiciona o texto "Concluído em: " seguido da data atual no formato "d/m/Y"
// Parâmetros:
// - $image: a imagem onde o texto será desenhado
// - 3: tamanho da fonte (usando a fonte padrão do GD)
// - 440: posição X (horizontal) do texto
// - 370: posição Y (vertical) do texto
// - $titleColor: cor do texto (preto)
// - utf8_decode("Concluído em: ").date("d/m/Y"): texto a ser desenhado
// A função utf8_decode é usada para garantir que caracteres especiais sejam exibidos corretamente
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

// Define o tipo de conteúdo da resposta como uma imagem JPEG
header("Content-Type: image/jpeg");

// Envia a imagem JPEG para o navegador (ou para um arquivo, se um caminho de arquivo fosse fornecido como segundo argumento)
imagejpeg($image);

// Libera a memória associada à imagem, destruindo o recurso de imagem e liberando recursos do sistema
imagedestroy($image);
?>