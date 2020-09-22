<footer class="site-footer">
    <div class="clearfix contenedor">
        <div class="contenido-footer">
            <h3>Sobre <span>GdlWebcam</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eveniet esse sequi vel repellat similique quo, ratione maxime facere numquam culpa dignissimos a magnam id! Incidunt non eum molestiae exercitationem! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae laboriosam ducimus in. Deserunt praesentium accusamus exercitationem ipsum non ab incidunt. Aperiam molestias nam veritatis necessitatibus natus dignissimos, nesciunt ipsam dolorem?</p>
        </div>
        <div class="ultimos-tuits">
            <h3>últimos <span>Tweets</span></h3>
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum reprehenderit debitis repudiandae, maiores corporis sit. Maxime facere
                    facilis non dolorem vero quod, ea dolorum unde aut error necessitatibus veniam temporibus.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum reprehenderit debitis repudiandae, maiores corporis
                    sit. Maxime facere facilis non dolorem vero quod, ea dolorum unde aut error necessitatibus veniam temporibus.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum reprehenderit debitis repudiandae, maiores corporis
                    sit. Maxime facere facilis non dolorem vero quod, ea dolorum unde aut error necessitatibus veniam temporibus.</li>
            </ul>
        </div>
        <div class="iconos redes-sociales">
            <h3>REDES <span>sociales</span></h3>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fab fa-youtube"></i>
            <i class="fab fa-instagram"></i>
        </div>
    </div>
</footer>
<div class="copyrigth">
    <p>Todos los derechos resrevados GdlWebcam - 2020.</p>
</div>
<!-- Add your site or application content here -->

<script src="./js/vendor/modernizr-3.11.2.min.js"></script>
<script src="./js/plugins.js"></script>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./js/jquery.animateNumber.js"></script>
<script src="./js/jquery.animateNumber.min.js"></script>
<script src="./js/jquery.countdown.min.js"></script>
<script src="./js/jquery.lettering.js"></script>
<?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if ($pagina == "invitados" || $pagina == "index") {
        echo "<script src='./js/jquery.colorbox-min.js'></script>";
    } else if ($pagina == "conferencia"){
        echo '<script src="./js/lightbox.js"></script>';
    }
?>

<script src="./js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function() {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>