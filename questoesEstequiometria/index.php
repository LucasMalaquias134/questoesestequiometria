<?php include 'processaindex.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Bem vindo(a)</h1>
    <p>Aplicação criada por Lucas para ajudar a Layra nas questoes de estequiometria , antes de prosseguir insira seu nome </p> 
    <p>Recomendo voce aprender antes sobre (pois as questoes sao destes temas) : estequiometria , pureza , rendimento , reagente limitante</p> <br>
    
    <form action="" method="post">

        <input type="text" name="nome" placeholder = "Seu nome" required value = "<?php echo ($nome??""); ?>"> <?php echo ($erroNome??"") ?> <br>

        <input type="submit" placeholder = "enviar">

    </form>
    
</body>
</html>