<?php 
$pageTitle = "OrbitaSenac - Supervision";
include 'inc/header.inc.php'; 
?>
<link rel="stylesheet" type="text/css" href="css/startup.css">
<div class="startup">
    <h1>Sobre o Supervision</h1>
    <P>Saiba como nossa startup trabalha para oferecer o melhor da tecnologia.</p>

<form method="POST" action="inscrever.php">
    <fieldset class="modelo">
        <legend>Conheça nossa Startup</legend>
        <input type="radio" name="modelo" value="preto" id="preto" checked>
        <label for="preto"><img src="img/Supervision.png">
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
        </label>
        <input type="radio" name="modelo" value="azul" id="azul">
        <label for="azul"><img src="img/poge.png">
            <div class="texto">
                <h3>Sobre o Dashboard</h3>
                <p>A Dashdoard apresenta dados de produção de máquinas indústrias com inferencias de mercado e tempo para supervisores</p>
            </div>
        </label>
        <input type="radio" name="modelo" value="amarelo" id="amarelo">
        <label for="amarelo"><img src="img/pogerz.png">
            <div class="texto">
                <h3>Nossos Valores<h3>
                    <p>
                        Qualidade no Trabalho<br>
                        Conetividade<br>
                        Segurança<br>
                    </p>
            </div>
        </label>
        
        <div class="inscricao">
            <input type="submit" value="Inscrição" name="inscricao">
        </div>
    </fieldset>
</form>
</div>
<?php include 'inc/footer.inc.php';?>