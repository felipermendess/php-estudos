<?php 
// Carrega uma imagem JPEG existente (neste caso, "certificado.jpg") e a armazena na variável $image
$image = imagecreatefromjpeg("certificado.jpg");

// Aloca a cor preta (RGB: 0, 0, 0) para a imagem
$titleColor = imagecolorallocate($image, 0, 0, 0);

// Aloca uma cor cinza (RGB: 100, 100, 100) para a imagem
$gray = imagecolorallocate($image, 100, 100, 100);

// Escreve o texto "CERTIFICADO" na imagem, usando a fonte padrão (tamanho 5),
// na posição (450, 150) e com a cor preta
imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);

// Escreve o texto "Divanei" na imagem, usando a fonte padrão (tamanho 5),
// na posição (440, 350) e com a cor preta
imagestring($image, 5, 440, 350, "Divanei", $titleColor);

// Escreve o texto "Concluído em: " seguido da data atual no formato "d/m/Y",
// usando a fonte padrão (tamanho 3), na posição (440, 370) e com a cor preta
// A função utf8_decode é usada para garantir que caracteres especiais sejam exibidos corretamente
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

// Define o tipo de conteúdo da resposta como uma imagem JPEG
header("Content-Type: image/jpeg");

// Salva a imagem como um arquivo JPEG com o nome "certificado-AAAA-MM-DD.jpg" (onde AAAA-MM-DD é a data atual)
// A qualidade da imagem é definida como 10 (em uma escala de 0 a 100, onde 0 é a pior qualidade e 100 é a melhor)
imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 10);

// Libera a memória associada à imagem, destruindo o recurso de imagem e liberando recursos do sistema
imagedestroy($image);
?>