
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