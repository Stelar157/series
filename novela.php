<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVELAS</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="banner">
    <img src="imagens/banner.png">
    </header>
    <div class="texto">
<h2>Cadastre sua novela favorita</h2>
</div>
    <hr></hr>
    <br>
    <form method="post" id="novela" action="cadastrarnovela.php">
    <p> <label for="titulo">Titulo:</label><input type="text" name="titulo" id="titulo" size="35" maxlenght="100">
    <p> <label for="atrizprot">Atriz Protagonista:</label><input type="text" name="atrizprot" id="atrizprot" size="41" maxlenght="100">
    <p> <label for="atorprot">Ator Protagonista:</label><input type="text" name="atorprot" id="atorprot" size="27" maxlenght="100">
    <p> <label for="totaleps">Total Episódios:</label><input type="number" name="totaleps" id="totaleps" size="41" maxlenght="100">
    <p>Sinopse:</p>
    <p> <textarea name="sinopse" id="sinopse" placeholder="Descrição do prodruto" class="textarea"></textarea></p>
</p>
<br>
<div class="cadastrar">
<input type="image" src="imagens/cadastro.png"> 
</div>
<div class="rodape">
    <img src="imagens/rodape2.png">
    </div>
</body>
</html>