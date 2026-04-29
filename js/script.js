//aqui crio meus scripts.
function subirTela() {
    //window.scrollTo(0,0);
    window.scrollTo({
        top:0,
        laft:0,
        behavior: "smooth",
    })
}
function decidirBotaoScroll(){
    if(window.scrollY === 0){
        //oculta o botão
        document.querySelector('.scrollbutton').style.display = 'none';
    }else{
    //mostra o botão
    document.querySelector('.scrollbutton').style.display = 'block';
}

} 
//setInterval(decidirBotaoScroll, 500);
window.addEventListener('scroll', decidirBotaoScroll);