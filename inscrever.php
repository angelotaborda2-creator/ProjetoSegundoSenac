<?php
$pageTitle = "OrbitaSenac - Inscrição";
include 'inc/header.inc.php';
?>
<link rel="stylesheet" type="text/css" href="css/inscricao.css">
<script type="text/javascript" src="js/jquery-4.0.0.min.js"></script>
<script type="text/javascript" src="js/inscrever.js"></script>

<form>
    <fieldset>
        <legend>Se inscreva em um projeto</legend>
    </fieldset>
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

    </fieldset>

</form>






<?php
include 'inc/footer.inc.php';
?>