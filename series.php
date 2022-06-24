<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERIES</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header class="banner">
    </header>
    <div class="texto">
<h2>Cadastre sua serie favorita</h2>
</div>
    <hr></hr>
    <br>
    <form method="post" id="novela" action="cadastrarnovela.php">
    <p> <label for="titulo">Titulo:</label><input type="text" name="titulo" id="titulo" size="35" maxlenght="100">
    <p> <label for="atriz_protagonista">Atriz Protagonista:</label><input type="text" name="atriz_protagonista" id="atriz_protagonista" size="41" maxlenght="100">
    <p> <label for="ator_protagonista">Ator Protagonista:</label><input type="text" name="ator_protagonista" id="ator_protagonista" size="27" maxlenght="100">
    <p> <label for="total-eps">Total Episódios:</label><input type="text" name="total-eps" id="total-eps" size="41" maxlenght="100">
    <p> <label for="qtd_temp">Quantidade de temporadas:</label><input type="text" name="qtd_temp" id="qtd_temp" size="41" maxlenght="100">
    <p>Sinopse:</p>
    <p> <textarea name="sinopse" id="sinopse" placeholder="Descrição do prodruto" class="textarea"></textarea></p>
</p>
<br>
<div class="cadastrar">
<input type="image" src="imagens/cadastro.png"> 
</div>
<div class="rodape">
    </div>
</body>
</html>