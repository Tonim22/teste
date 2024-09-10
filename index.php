<?php
ob_start();
require('./sheep_core/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Projeto Final</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <!--- TOPO DO SITE --->

    <div class="header">
        <p class="logo">Primeiro Teste</p>
        <div class="cart"><i class="fa fa-shopping-cart"></i>
            <p> 0</p>
        </div>
    </div>

    <!--- FIM TOPO DO SITE --->

    <!--- CONTEUDO DO SITE --->

    <div class="container">
        <!--- LINHA PRODUTO DO SITE --->

        <div class="linha-produtos">

        <form action="filtros/criar.php"method="post">
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produto-1.jpeg" alt="" class="produtoMiniatura">
                </div>
                <div class="titulo">
                    <p>Feijão Preto</p>
                    <h2>R$ 10</h2>
                    <input type="hidden"name="id_produto" value="">
                    <input type="hidden"name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
                </div>
            </div>
            </form>

            <form action="filtros/criar.php"method="post">
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produto-2.jpg" alt="" class="produtoMiniatura">
                </div>
                <div class="titulo">
                    <p>Amendoin</p>
                    <h2>R$ 3</h2>
                    <input type="hidden"name="id_produto" value="">
                    <input type="hidden"name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
                </div>
            </div>
            </form>

            <form action="filtros/criar.php"method="post">
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produto-3.jpg" alt="" class="produtoMiniatura">
                </div>
                <div class="titulo">
                    <p>Farinha</p>
                    <h2>R$ 5</h2>
                    <input type="hidden"name="id_produto" value="">
                    <input type="hidden"name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
                </div>
            </div>
            </form>

            <form action="filtros/criar.php"method="post">
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produto-4.jpeg" alt="" class="produtoMiniatura">
                </div>
                <div class="titulo">
                    <p>Arroz</p>
                    <h2>R$ 15</h2>
                    <input type="hidden"name="id_produto" value="">
                    <input type="hidden"name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
                </div>
            </div>
            </form>

            <form action="filtros/criar.php"method="post">
            <div class="corpoproduto">
                <div class="imgproduto">
                    <img src="assets/img/produto-5.jpg" alt="" class="produtoMiniatura">
                </div>
                <div class="titulo">
                    <p>Macarrão</p>
                    <h2>R$ 8</h2>
                    <input type="hidden"name="id_produto" value="">
                    <input type="hidden"name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
                </div>
            </div>
            </form>
            <!--- FIM PRODUTO  --->

        </div>

        <!--- FIM LINHA PRODUTO DO SITE --->

        <!--- BARRA LATERAL DO SITE --->

        <div class="barra">

        <div class="topodocarrinho">
            <p>Meu Carrinho</p>
        </div>

        <!--- PRODUTO CARRINHO --->

            <div class="item-carrinho">
                <div class="linha-da-imagem">
                    <img src="assets/img/produto-1.jpeg" alt="" class="img-carrinho">
                </div>
                <p>Primeiro Teste</p>
                <h2>R$ 497</h2>
                <form action="filtros/excluir.php" method="post">
                    <input type="hidden" name="id_produto" value="">
                    <button type="submit" style="border:none; background:none">  <i class="fa fa-trash-o"></i> </button>
                </form>
            </div>


        <!--- FIM PRODUTO CARRINHO --->


        <div class="item-carrinho-vazio">Seu Carrinho está vazio!</div>

        <div class="rodapé">
            <h3>Total</h3>
            <h2>R$ 497</h2>
        </div>



        </div>


        <!--- FIM BARRA LATERAL DO SITE --->



    </div>




    <!---FIM CONTEUDO DO SITE --->


</body>

</html>