<?php 
$hierarchy = array(
    array(
            'nome_cargo'=>'CEO',
            'subordinados'=>array(
                    //Inicio: Diretor Comercial
                    array(
                        'nome_cargo'=>'Diretor Comercial',
                        'subordinados'=>array(
                                //Inicio: Gerente de Vendas
                                array(
                                        'nome_cargo'=>'Gerente de Vendas'
                                )
                                //Fim: Gerente de Vendas
                        )
                    ),
                    //Fim: Diretor Comercial
                    //Inicio: Diretor Financeiro
                    array(
                            'nome_cargo'=>'Diretor Financeiro',
                            'subordinados'=>array(
                                    //Inicio: Gerente de Contas a Pagar
                                    array(
                                            'nome_cargo'=>'Gerente de Contas a Pagar',
                                            'subordinados'=>array(
                                                    //Inicio: Supervisor de Pagamentos
                                                    array(
                                                            'nome_cargo'=>'Supervisor de Pagamentos',
                                                    )
                                                    //Fim: Supervisor de Pagamentos
                                            )
                                    ),
                                    //Fim: Gerente de Contas a Pagar
                                    //Inicio: Gerente de Compras
                                    array(
                                            'nome_cargo'=>'Gerente de Compras',
                                            'subordinados'=>array(
                                                    //Inicio: Supervisor de Suprimentos
                                                    array(
                                                            'nome_cargo'=>'Supervisor de Suprimentos'
                                                    )
                                                    //Fim: Supervisor de Suprimentos
                                            )
                                    )
                                    //Fim: Gerente de Compras
                            )
                    )
                    //Fim: Diretor Financeiro
                    
            )
    )
);

function show($positions){
    $html = "<ul>";
    foreach($positions as $position){
        $html .= "<li>";
        $html .= $position["nome_cargo"];
        if (isset($position["subordinados"]) && count($position["subordinados"]) > 0){
            $html .= show($position["subordinados"]);
        }
        $html .= "</li>";
    }
    $html .= "</ul>";
    return $html;
}

echo show($hierarchy);

//count - A função count() em PHP é usada para contar os elementos de um array ou o número de propriedades de um objeto 
//que implementa a interface Countable.
?>