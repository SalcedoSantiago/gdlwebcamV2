<?php include  'includes/templates/header.php'; ?>
<section class="seccion margin contenedor">
  <div class="text-eventos">
    <h2>La mejor conferencia de diseño web en español</h2>
    <div>
      <img src="./img/separador.png" alt="">
    </div>
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint unde voluptas consectetur vitae provident repellendus iste labore non velit a facilis veniam aperiam quisquam porro, eum quibusdam, voluptatibus similique? Debitis!
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga officiis cupiditate delectus sit provident tenetur saepe voluptatem aspernatur, porro ex, recusandae minima. Inventore ducimus eius, incidunt quisquam id sed quas!</p>
  </div>
</section>
<section class="fondo-section">
  <div class="contenedor">
    <div class="contenido-programa clearfix">
      <div class="programa no-margin">
        <h2>programa del evento</h2>
        <div class="img-programa">
          <img src="./img/separador.png" alt="">
        </div>
        <nav class="navegacion-talleres ">
          <a href="#talleres"><i class="fa fa-code"></i> talleres</a>
          <a href="#conferencias"><i class="fa fa-comment"></i> Conferencias</a>
          <a href="#seminarios"><i class="fa fa-university"></i> Seminarios</a>
        </nav>
      </div>
      <div id="talleres" class="info-curso ocultar contenedor">
        <div class="detalle-evento">
          <h3>HTML5,CSS3 y JavaScript</h3>
          <p><i class="fa fa-clock"></i> 16:00 hrs</i></p>
          <p><i class="fa fa-calendar"></i> 10 de dic</i></p>
          <p><i class="fa fa-user"></i> Santiago Dalmiro Salcedo</p>
        </div>
        <div class="detalle-evento">
          <h3>WordPress</h3>
          <p><i class="fa fa-clock"></i> 16:00 hrs</i></p>
          <p><i class="fa fa-calendar"></i> 10 de dic</i></p>
          <p><i class="fa fa-user"></i> Santiago Dalmiro Salcedo</p>
        </div>
      </div>
      <div id="conferencias" class="info-curso ocultar contenedor">
        <div class="detalle-evento">
          <h3>JavaScript y jQuery</h3>
          <p><i class="fa fa-clock"></i> 10:00 hrs</i></p>
          <p><i class="fa fa-calendar"></i> 12 de dic</i></p>
          <p><i class="fa fa-user"></i> Alberto Fernandez</p>
        </div>
        <div class="detalle-evento">
          <h3>Responsive Web Design</h3>
          <p><i class="fa fa-clock"></i> 16:00 hrs</i></p>
          <p><i class="fa fa-calendar"></i> 10 de dic</i></p>
          <p><i class="fa fa-user"></i> Alberto Fernandez</p>
        </div>
      </div>
      <div id="seminarios" class="info-curso ocultar contenedor">
        <div class="detalle-evento">
          <h3>Crea tu propia API</h3>
          <p><i class="fa fa-clock"></i> 07:30 hrs</i></p>
          <p><i class="fa fa-calendar"></i> 10 de dic</i></p>
          <p><i class="fa fa-user"></i> juaquin lopez</p>
        </div>
        <div class="detalle-evento">
          <h3>PHP y MySQL</h3>
          <p><i class="fa fa-clock"></i> 16:00 hrs</i></p>
          <p><i class="fa fa-calendar"></i> 10 de dic</i></p>
          <p><i class="fa fa-user"></i> juaquin lopez</p>
        </div>
      </div>
        <a href="./calendario.php" class="ver-todas">Ver todas</a>
    </div>
  </div>
</section>

<!-- INVITADOS -->
<?php include 'includes/templates/invitado.php'; ?>
<!--  FIN INVITADOS -->

<div class="contador parallax">
  <div class="contenedor">
    <ul class="contenido-evento clearfix">
      <li>
        <p class="numero"></p> Invitados
      </li>
      <li>
        <p class="numero"></p> Talleres
      </li>
      <li>
        <p class="numero"></p> Días
      </li>
      <li>
        <p class="numero"></p> Conferencias
      </li>
    </ul>
  </div>
</div>

<section class="seccion contenedor">
  <h2>Precios</h2>
  <div class="img-programa">
    <img src="./img/separador.png" alt="">
  </div>
  <ul class="contenedor-precios">
    <li class="borderbox">
      <div class="contenido-precios">
        <h3>Pase por un día</h3>
        <p class="no-margin numero">$30</p>
        <ul>
          <li><i class="fas fa-check"></i> bocadillos gratis</li>
          <li><i class="fas fa-check"></i> todas las conferencias</li>
          <li><i class="fas fa-check"></i> todos los talleres</li>
        </ul>
        <a href="#" class="btn">Comprar</a>
      </div>
    </li>
    <li class="borderbox">
      <div class="contenido-precios">
        <h3>todos los dias</h3>
        <p class="no-margin numero">$50</p>
        <ul>
          <li><i class="fas fa-check"></i> bocadillos gratis</li>
          <li><i class="fas fa-check"></i> todas las conferencias</li>
          <li><i class="fas fa-check"></i> todos los talleres</li>
        </ul>
        <a href="#" class="btn hollow">Comprar</a>
      </div>
    </li>
    <li class="borderbox">
      <div class="contenido-precios">
        <h3>Pase por dos días</h3>
        <p class="no-margin numero">$45</p>
        <ul>
          <li><i class="fas fa-check"></i> bocadillos gratis</li>
          <li><i class="fas fa-check"></i> todas las conferencias</li>
          <li><i class="fas fa-check"></i> todos los talleres</li>
        </ul>
        <a href="#" class="btn">Comprar</a>
      </div>
    </li>
  </ul>
</section>
<div class="mapa" id="mapa">
</div>
<section class="seccion">
  <h2>Testimoniales</h2>
  <div class="img-programa">
    <img src="./img/separador.png" alt="">
  </div>
  <div class="testimoniales contenedor">
    <div class="testimonial clearfix">
      <blockquote class="contenido-testimonio">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, iste explicabo eum magnam exercitationem, non minus nulla fugiat aperiam deleniti ab aspernatur laudantium quis repudiandae provident perspiciatis magni eveniet beatae!</p>
        <footer>
          <img src="./img/testimonial.jpg" alt="">
          <cite>Oswaldo Aponte Escobedo</cite>
          <p>Diseñador en @dededed</p>
        </footer>
      </blockquote>
    </div>
    <div class="testimonial clearfix">
      <blockquote class="contenido-testimonio">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, iste explicabo eum magnam exercitationem, non
          minus nulla fugiat aperiam deleniti ab aspernatur laudantium quis repudiandae provident perspiciatis magni eveniet
          beatae!</p>
        <footer>
          <img src="./img/testimonial.jpg" alt="">
          <cite>Oswaldo Aponte Escobedo</cite>
          <p>Diseñador en @dededed</p>
        </footer>
      </blockquote>
    </div>
    <div class="testimonial clearfix">
      <blockquote class="contenido-testimonio">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, iste explicabo eum magnam exercitationem, non
          minus nulla fugiat aperiam deleniti ab aspernatur laudantium quis repudiandae provident perspiciatis magni eveniet
          beatae!</p>
        <footer>
          <img src="./img/testimonial.jpg" alt="">
          <cite>Oswaldo Aponte Escobedo</cite>
          <p>Diseñador en @dededed</p>
        </footer>
      </blockquote>
    </div>
  </div>
</section>

<section class="newsletter parallax seccion">
  <div class="contenedor content-newsletter">
    <p>registrate al newsletter</p>
    <h3>GdlWebcam</h3>
    <a href="" class="boton">registro</a>
  </div>
</section>

<section class="seccion faltan">
  <h2>FALTAN</h2>
  <div class="img-programa">
    <img src="./img/separador.png" alt="">
  </div>
  <div class="contenedor cuenta-regresiva">
    <ul>
      <li>
        <p class="numero" id="dias"></p>
        dias
      </li>
      <li>
        <p class="numero" id="horas"></p>
        horas
      </li>
      <li>
        <p class="numero" id="minutos"></p>
        minutos
      </li>
      <li>
        <p class="numero" id="segundos"></p>
        segundos
      </li>
    </ul>
  </div>
</section>
<?php include 'includes/templates/footer.php'; ?>