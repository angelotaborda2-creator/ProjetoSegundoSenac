<?php 
$pageTitle = "OrbitaSenac - Supervision";
include 'inc/header.inc.php'; 
?>
<link rel="stylesheet" type="text/css" href="css/startup.css">
<div class="startup"></div>
    <h1>Sobre o Supervision</h1>
    <P>Saiba como nossa startup trabalha para oferecer o melhor da tecnologia.</p>

<form method="POST" action="inscrever.php">
    <fieldset class="modelo">
        <legend>Conheça nossa Startup</legend>
        <input type="radio" name="modelo" value="preto" id="preto" checked>
        <label for="preto"><img src="img/Supervision.png"></label>
        <div class="texto">
            <h3>Nossa Política</h3>
            <p>
                Técnicas: Scrum, Prototype <br>
                Linguagens Front: HTML,CSS, JS <br>
                Linguagens Back: PHP, Python, C# <br>
                Framework Front: React, Bootstrap, Taiwind <br>
                Framework Back: Laravel, Node <br>
                Banco de Dados: Mysql, Postgres<br>
            </p>
        </div>
        <input type="radio" name="modelo" value="azul" id="azul" checked>
        <label for="azul"><img src="img/poge.png"></label>
        <input type="radio" name="modelo" value="amarelo" id="amarelo" checked>
        <label for="amarelo"><img src="img/pogerz.png"></label>
        
    </fieldset>

</form>
<?php include 'inc/footer.inc.php';?>