<?php 
//- **`fgets`**: Lê uma linha de um arquivo.
//- **`fread`**: Lê uma quantidade específica de bytes de um arquivo.
//- **`implode`**: Junta elementos de um array em uma string.
//- **`explode`**: Divide uma string em um array.
//- **`base64_encode`/`base64_decode`**: Codifica/decodifica dados em Base64.
//- **`file_get_contents`**: Lê o conteúdo de um arquivo ou URL.
//- **`finfo`**: Obtém informações sobre arquivos (como tipo MIME).
//- **`mime_content_type`**: Retorna o tipo MIME de um arquivo.
// O tipo MIME (Multipurpose Internet Mail Extensions) é um padrão utilizado para identificar o tipo de conteúdo de um arquivo. Ele foi originalmente 
//desenvolvido para emails, mas hoje é amplamente usado em diversos contextos, como na web, para indicar o tipo de arquivo que está sendo enviado ou recebido.
// O tipo MIME é composto por duas partes: um tipo principal e um subtipo, separados por uma barra (/). Por exemplo:
// text/plain para arquivos de texto simples.
// image/jpeg para imagens no formato JPEG.
// application/pdf para arquivos PDF.

$filename = "logo.png";

// formatando string com base 64 (codificando dados de todo o arquivo lido com file get contents)
$base64 = base64_encode(file_get_contents($filename));

// fileinfo_mime especifica que você deseja obter informações sobre o tipo MIME e a codificação de um arquivo.
$fileinfo = new finfo(FILEINFO_MIME);

// file é um método do finfo que é usada para analisar um arquivo e retornar informações sobre ele, como o tipo MIME, codificação, etc.
$mimetype = $fileinfo->file($filename);

// padrão base64 (data:image/png;base64,$variavelcomdados)
echo "data:".$mimetype.";base64,".$base64;
?>