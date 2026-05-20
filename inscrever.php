<?php
$pageTitle = "OrbitaSenac - Inscrição";
include 'inc/header.inc.php';
?>
<link rel="stylesheet" type="text/css" href="css/inscricao.css">
<script type="text/javascript" src="js/jquery-4.0.0.min.js"></script>
<script type="text/javascript" src="js/inscrever.js"></script>

<form class="i">
    <fieldset class="info">
        <legend>Se inscreva em um projeto</legend>
    
    <fieldset>
        <legend>INSCRIÇÃO</legend>

        <label>Nome: </label><br>
        <input type="text" name="nome" id="nm" autofocus required="required" autocomplete="off"><br><br>

        <label>Sobrenome: </label><br>
        <input type="text" name="sobrenome" id="sm"><br><br>

        <label>Gênero: (sexo? faço)</label><br>
        <input type="radio" name="gender" value="masculino" id="idmasc" checked>Masculino<br>

        <input type="radio" name="gender" value="feminino" id="idfemi" >Feminino<br><br>

        Se você tem um MEI, informe seu Cnpj ou se não fala o CPF:
        <label>
            <input type="radio" name="opt" value="cpf" checked id="radiocpf">CPF
        </label>
        <label>
            <input type="radio" name="opt" value="cnpj" id="radiocnpj">CNPJ
        </label>
        <div id="divcpf">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf">
        </div>
        <div id="divcnpj">
            <label for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj">
        </div><br>

        <label>Email</label><br>
        <input type="Email" name="email" id="mail" required="required"><br><br>

        <label>Quanto sua disponibilidade ao projeto, você terá quantas horas disponíveis?</label>
        <select name="horas" id="horas">
            <option value="2">2 horas</option>
            <option value="4">4 horas</option>
            <option value="6">6 horas</option>
            <option value="8">8 horas</option>
            <option value="10">10 horas</option>
        </select><br><br>

        <label>Informe o nome da startup que deseja entrar e sua justificativa para participar dela:</label>
        <textarea name="info" id="info" rows="5" cols="100"></textarea><br><br>
        


    </fieldset>
        <input type="button" name="submit" value="Enviar" id="enviar" onclick="myFunction(); return false;"><br><br>
    </fieldset>

</form>

<div id="resultado" style="display: none;"></div>






<?php
include 'inc/footer.inc.php';
?>