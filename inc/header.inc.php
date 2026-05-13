<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title><?php echo isset($pageTitle)? $pageTitle : 'OrbitaSenac';?></title>
    <link rel="icon" type="image/xicon" href="img/pogicon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <header>
            <a href="index.php"><img src="img/Orbita.png"></a>
            <nav class="menu_opcoes">
                <div class="topnav" id="myTopnav">
                    <a href="#">Sua Conta</a>
                    <a href="#">Portifólio</a>
                    <a href="#">Entre em Contato</a>
                    <a href="sobre.php">Sobre nós</a>
                    <a href="#">Ajuda</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                    </a>
                </div>
            </nav>
            <script>
                function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
                }
            </script>
        </header>
        <div class="container">