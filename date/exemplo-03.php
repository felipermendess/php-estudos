<?php 
//setlocale
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
echo ucwords(strftime("%A %B"));

//A função strftime() em PHP é usada para formatar uma data/hora com base na configuração do locale atual. 
//Ela funciona de maneira similar à função date(), mas respeita o locale definido com setlocale(), o que é 
//útil para exibir datas em diferentes idiomas.

//setlocale() - define informações conforme o local passado. 
//Por exemplo, para o Brasil: setlocale(LC_ALL, “pt_BR”, “pt_BR.utf-8”, “portuguese”);
//category: Define o que será afetado pela configuração do locale. Exemplos:

    //LC_TIME: Formatação de datas e horas.
    //LC_MONETARY: Formatação de moeda.
    //LC_NUMERIC: Formatação de números.
    //LC_ALL: Aplica a todas as categorias acima.
?>