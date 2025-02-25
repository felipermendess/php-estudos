<!--Enctype é necessário para permitir o upload de arquivos.-->
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <br>
    <button type="submit">Send</button>
</form>

<?php 
// recuperando informações enviadas via post no upload com a superglobal $_files
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    // armazenando todas as informações do arquivo enviado via upload na variável
    $file = $_FILES["fileUpload"];
    
    // tratando erro
    if ($file["error"]){
        throw new Exception("Error: ".$file["error"]);
    }

    $dir = "uploads";

    // verificando se o diretório existe
    if (!is_dir($dir)){
        mkdir($dir);
        echo "Diretório criado com sucesso!";
    }else {
        echo "Não foi possível criar o diretório!";
    }

    // realizando upload com a função move_uploaded_file($from, $to)
    // 'tmp_name' - é a chave que contém o caminho temporário do arquivo.
    if (move_uploaded_file($file["tmp_name"], $dir.DIRECTORY_SEPARATOR.$file["name"])){
        echo "Upload feito com sucesso!";
    }else {
        echo "Não foi possível realizar o upload!";
    };
}

?>