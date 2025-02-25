<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
</head>
<body>
    <h1 style="text-align: center; font-style:italic; background-color:darkblue; color:white">GERADOR DE SENHAS</h1>

    
    <form action="gerador.php">
        <label for="caract">Quantidade de caracteres:</label>
        <input type="number" name="caract" id="caract" min="1" max="50">
        <input type="submit" value="Gerar Senha">
    
    </form>
    
    <?php
        $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); 
        $combLen = strlen($comb) - 1;
        $quantidade = htmlspecialchars($_GET['caract']); 
        for ($i = 0; $i < $quantidade; $i++) {
         $n = rand(0, $combLen);
         $pass[] = $comb[$n];
        }
        echo(implode($pass)); 
    ?>

    

    
    
</body>
</html>