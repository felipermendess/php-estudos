<?php 
// Define o tipo de conteúdo da resposta como uma imagem JPEG
header("Content-Type: image/jpeg");

// Define o caminho do arquivo de imagem original
$file = "wallpaper.jpg";

// Define as novas dimensões desejadas para a imagem (256x256 pixels)
$new_width = 256;
$new_height = 256;

// Obtém as dimensões da imagem original (largura e altura)
list($old_width, $old_height) = getimagesize($file);

// Cria uma nova imagem em branco com as dimensões desejadas (256x256 pixels)
$new_image = imagecreatetruecolor($new_width, $new_height);

// Carrega a imagem original a partir do arquivo JPEG
$old_image = imagecreatefromjpeg($file);

// Redimensiona a imagem original para as novas dimensões, usando interpolação para melhor qualidade
// Parâmetros:
// - $new_image: a nova imagem onde a versão redimensionada será armazenada
// - $old_image: a imagem original
// - 0, 0: coordenadas X e Y na nova imagem onde a imagem redimensionada será colocada
// - 0, 0: coordenadas X e Y na imagem original de onde começar a copiar
// - $new_width, $new_height: largura e altura da nova imagem
// - $old_width, $old_height: largura e altura da imagem original
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

// Envia a imagem redimensionada para o navegador (ou para um arquivo, se um caminho de arquivo fosse fornecido como segundo argumento)
imagejpeg($new_image);

// Libera a memória associada à imagem original, destruindo o recurso de imagem
imagedestroy($old_image);

// Libera a memória associada à nova imagem, destruindo o recurso de imagem
imagedestroy($new_image);
?>