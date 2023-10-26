<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="gerenciador.php" method="POST">
        <h1>RECOMENDAÇÃO DE FILMES</h1>
        <p>Escolha os critérios para receber recomendações</p>
        <select name="select" id="select">
            <option value="xis" name="xis">Escolha o gênero</option>
            <option value="acao" name="acao">Ação</option>
            <option value="comedia" name="comedia">Comédia</option>
            <option value="drama" name="drama">Drama</option>
            <option value="terror" name="terror">Terror</option>
            <option value="documentario" name="documentario">Documentário</option>
            <option value="romance" name="romance">Romance</option>
            <option value="ficcao" name="ficcao">Ficção Científica</option>
            <option value="suspense" name="suspense">Suspense</option>
        </select>
        <br/>
        <br/>
        <input type="checkbox" id="checkbox">
        <label for="checkbox">Quero um filme nacional</label>
        <br/>
        <br/>
        <input type="submit" name="input" value="O que devo assistir?">
        
    </form>
</body>
</html>