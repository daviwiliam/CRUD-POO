<?php 
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
 
//update//$produto->setId(/*id*/);
//create////$produto->setNome('/*nomeproduto*/');
//create////$produto->setDescricao('/*descricaoproduto*/');

$produtoDao = new \App\Model\ProdutoDao();
//$produtoDao->create($produto);
//$produtoDao->update($produto);
$produtoDao->read();
//$produtoDao->delete(/*id*/);

//mostra o produto
foreach($produtoDao->read() as $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;