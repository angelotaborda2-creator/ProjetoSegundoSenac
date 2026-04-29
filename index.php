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
            
        </div>
        <div class="portifolio dir">
            
        </div>
    </div>
    <div onclick="subirTela()" class="scrollbutton">
        <script type="text/javascript" src="js/script.js"></script>
    </div>


<?php 
    include 'inc/footer.inc.php';
?>