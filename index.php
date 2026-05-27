<?php 
    $pageTitle = "OrbitaSenac - Home";
    include 'inc/header.inc.php';
?>
    <section class="busca">
            <h2>Buscar Startap</h2>
            <form>
                <input type="search" name="Busca" placeholder="Digita o nome da Startup.">
                <button>Buscar</button>
            </form>
    </section>
    <section class="menu_start">
        <h2>Repositórios</h2>
        <nav>
            <ul>
                <li><a href="#">Concluídos</a></li>
                <li><a href="#">Iniciados</a></li>
                <li><a href="#">Confirmados</a></li>
                <li><a href="#">Cancelados</a></li>
                <li><a href="#">Evidência</a></li>
            </ul>
        </nav>
    </section>
    <section class="destaque">
        <img src="img/nyancat.webp" class="nyancat">
    </section>
    <div class="flex-container">
        <div class="portifolio esq">
            oi mundo
            <img src="img/Supervision.png" alt="destaque OrbitaSenac">
            <p>O Supervision é um dashboard para alta gestão utilizando e triando dados reais. para saber mais   <a href="Supervision.php">Clique Aqui</a></p>
        </div >
        <div class="portifolio meio">
            <img src="img/uber.png" alt="uber ainda é startup :/">
            <p>Uber ainda uma startup mas ó deu lucro pra quem eu não sei '-'</p>
        </div>
        <div class="portifolio dir">
            <img src="img/openai.png" alt="o fim da humanidade é uma startup yay!">
            <p>Open AI com trilhões de investimento que tem a promeça de se pagar</p>
        </div>
    </div>
    <div class="corpo">
        <div class="game-modal">
            <div class="content">
                <img src="#" alt="gif">
                <h4>Game Over!</h4>
                <p>A palavra correta era: <b>rainbow</b></p>
                <button class="play-again">Jogue Novamente</button>
            </div>
        </div>
        <div class="space">
            <div class="hangman-box">
                <img src="#" draggable="false" alt="hangman-img">
                <h1>Jogo da Forca</h1>
            </div>
            <div class="game-box">
                <ul class="word-display"></ul>
                <h4 class="hint-text">Dica: <b></b></h4>
                <h4 class="guesses-text">Palpite incorreto: <b></b></h4>
                <div class="kayboard"></div>
            </div>

        </div>
    </div>
    <div onclick="subirTela()" class="scrollbutton">
        <script type="text/javascript" src="js/script.js"></script>
    </div>



<?php 
    include 'inc/footer.inc.php';
?>