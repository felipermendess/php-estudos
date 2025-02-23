<?php 
//- **`fgets`**: Lê uma linha de um arquivo.
//- **`fread`**: Lê uma quantidade específica de bytes de um arquivo.
//- **`implode`**: Junta elementos de um array em uma string.
//- **`explode`**: Divide uma string em um array.
//- **`base64_encode`/`base64_decode`**: Codifica/decodifica dados em Base64.
//- **`file_get_contents`**: Lê o conteúdo de um arquivo ou URL.
//- **`finfo`**: Obtém informações sobre arquivos (como tipo MIME).
//- **`mime_content_type`**: Retorna o tipo MIME de um arquivo.

$filename = "usuarios.csv";

if (file_exists($filename)){
    $file = fopen($filename, "r");

    $headers = explode(",", fgets($file));

    $data = [];
    
    while ($row = fgets($file)){

       $rowData = explode(",", $row."<br>");
       $linha = [];

       for ($i = 0; $i < count($headers); $i++){
            $linha[$headers[$i]] = $rowData[$i];
       }

       array_push($data, $linha);
    }

    fclose($file);

    echo json_encode($data);
}

?>