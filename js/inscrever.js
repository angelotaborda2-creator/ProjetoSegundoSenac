
function showCPF(){
    $("#divcpf").show();
    $("#divcnpj").hide();
}
function showCNPJ(){
    $("#divcpf").hide();
    $("#divcnpj").show();
}

$(document).ready(function(){
    $("#radiocpf").click(function(){
        showCPF();
    });
    $("#radiocnpj").click(function(){
        showCNPJ();
    });
    showCPF();
});
//--------------------valida CFP/CNPJ---------------------------------------------------------------------------------//

var nome ="";
var sobrenome ="";
var sexo ="";
var masc ="";
var femi ="";
var tipo ="";
var doc ="";
var email ="";
var horas ="";
var info ="";

function myFunction(){
    nome = document.getElementById("nm").value;
    if(nome.trim() == ""){
        alert("O campo nome é obrigatório!!!!")
        return false;
    }else{
        sobrenome = document.getElementById("sm").value;

        if(idmasc.checked){
            sexo = "Masculino";
        }else if(idfem.checked){
            sexo="feminino";
        }
        if(radiocpf.checked){
            tipo = "CPF";
            doc = document.getElementById("cpf").value;
        }else{
            tipo = "CNPJ";
            doc = document.getElementById("cnpj").value;
        }
        email =document.getElementById("mail").value;
        horas =document.getElementById("horas").value;
        info =document.getElementById("info").value;

        var resultado = "<strong>Dados da Inscrição</strong><br><br>"+"<strong>Nome:</strong>"+ nome +"<br>"+
        "<strong>Sobrenome:</strong>"+ sobrenome +"<br>"+
        "<strong>Genêro:</strong>"+ sexo +"<br>"+
        "<strong>"+ tipo +"</strong>"+ doc +"<br>"+
        "<strong>Email:</strong>"+ email +"<br>"+
        "<strong>Horas de Trabalho:</strong>"+ horas +"<br>"+
        "<strong>Informações adicionais:</strong>"+ info;

        document.getElementById("resultado").innerHTML = resultado;
        document.getElementById("resultado").style.display = "block";
        return true;
    }
}