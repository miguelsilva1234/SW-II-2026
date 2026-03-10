<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEBA</title>
</head>
<body>
    <?php
        //$nome = $_POST['nome'];
        $nome = htmlspecialchars ($_POST['nome']);
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $atual = 2026 - $idade

        //$ano_atual = date('Y');
    ?>
    <p>O nome é: <?php echo $nome; ?></p>
    <p>O idade é: <?php echo $idade; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>Vc nasceu em: <?php echo $atual; ?></p>


    <?php
    if ($idade > 18) {
        echo "<p style='color: blue;'>Parabens vc e maior de idade</p>";
    } else {
        echo "<p style='color: red;'>Voce e menor de idade</p>";
    }
    
    
    //$ano = $atual - $idade;
    //echo $ano;
    ?>
</body>
</html>