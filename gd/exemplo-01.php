<?php 
// Define o tipo de conteúdo da resposta como uma imagem PNG
header("Content-Type: image/png");

// Cria uma nova imagem com 256 pixels de largura e 256 pixels de altura
$image = imagecreate(256, 256);

// Aloca a cor preta (RGB: 0, 0, 0) para a imagem e a define como cor de fundo
$black = imagecolorallocate($image, 0, 0, 0);

// Aloca a cor vermelha (RGB: 255, 0, 0) para a imagem
$red = imagecolorallocate($image, 255, 0, 0);

// Escreve o texto "Curso PHP 7" na imagem, usando a fonte padrão (tamanho 5),
// na posição (60, 120) e com a cor vermelha
imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

// Envia a imagem PNG para o navegador ou para um arquivo (neste caso, para o navegador)
imagepng($image);

// Libera a memória associada à imagem, destruindo-a
imagedestroy($image);

?>