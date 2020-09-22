(function(){
    "use strict";
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded',function(){

        if(document.getElementById('mapa')){
            var map = L.map('mapa').setView([-34.76224, -58.210373], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([-34.76224, -58.210373]).addTo(map)
                .bindPopup('GdlWebCam <br> 2020')
                .openPopup();
        }
    
        //// Mapa
        var nombre = document.getElementById('nombre'),
            apellido = document.getElementById('apellido'),
            email = document.getElementById('email'); 
        /// registro

        var paseDia = document.getElementById('pase_dia'),
            paseCompleto = document.getElementById('todos_dias'),
            paseDosDias = document.getElementById('pase_dosdias');
        /// pase por dias
        var listaProductos = document.getElementById('lista-productos'),
            total = document.getElementById('total'),
            calcular = document.getElementById('calcular'),
            errorDiv = document.getElementById('error'),
            boton = document.getElementById('btnRegistro');

        /// extras
        var camisas = document.getElementById('camisa'),
            paquete = document.getElementById('paquete');
        boton.disabled = true;

        if (document.getElementById('calcular')){
            

            calcular.addEventListener('click', clickRegistro);
            paseDia.addEventListener('blur', MostrarDias);
            paseCompleto.addEventListener('blur', MostrarDias);
            paseDosDias.addEventListener('blur', MostrarDias);

            nombre.addEventListener('blur', validad);
            apellido.addEventListener('blur', validad);
            email.addEventListener('blur', validad);
            email.addEventListener('blur', validarMail);


            function validad() {
                if (this.value == '') {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = `el campo "${this.name}" es requerido`
                    this.style.border = '1px solid #ff0000';
                } else {
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #111111';
                }
            }
            function validarMail() {
                if (this.value.indexOf("@") > -1 && this.value.indexOf(".") > -1) {
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #111111';
                } else {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = `el campo "${this.name}" es incorrecto`
                    this.style.border = '1px solid #ff0000';
                }
            }
            function clickRegistro(event) {
                event.preventDefault();
                console.log(regalo.value);
                if (regalo.value === '') {
                    regalo.focus();
                    alert('Tiene que agregar un objeto');

                } else {
                    var diaPase = parseInt(paseDia.value, 10) || 0;
                    var completoPase = parseInt(paseCompleto.value, 10) || 0;
                    var DosDiasPase = parseInt(paseDosDias.value, 10) || 0;
                    var totalPaquetes = parseInt(paquete.value, 10) || 0;
                    var totalCamisas = parseInt(camisa.value, 10) || 0;
                    var total_pagar = (30 * diaPase) + (50 * completoPase) + (45 * DosDiasPase) +
                        ((totalCamisas * 10) * .93) + (totalPaquetes * 2);
                    console.log(total_pagar);
                    var resumen = [];
                    if (diaPase >= 1) {
                        resumen.push(diaPase + ' pase por dia');
                    }
                    if (completoPase >= 1) {
                        resumen.push(completoPase + ' pases completos');
                    }
                    if (DosDiasPase >= 1) {
                        resumen.push(DosDiasPase + ' pases por dos dias');
                    }
                    if (totalCamisas >= 1) {
                        resumen.push(totalCamisas + ' camisas totales');
                    }
                    if (totalPaquetes >= 1) {
                        resumen.push(totalPaquetes + ' paquetes totales')
                    }
                    listaProductos.innerHTML = '';
                    for (var i = 0; i < resumen.length; i++) {
                        listaProductos.innerHTML += resumen[i] + ' </br>';
                    }

                    total.innerHTML = total_pagar.toFixed(2);
                    boton.disabled = false;
                    
                    document.getElementById('total_pedido').value = total_pagar;

                }
            }

            function MostrarDias() {
                console.log(paseDia.value);
                var diaPase = parseInt(paseDia.value, 10) || 0;
                var completoPase = parseInt(paseCompleto.value, 10) || 0;
                var DosDiasPase = parseInt(paseDosDias.value, 10) || 0;

                var DiasMostrados = [];
                if (diaPase > 0) {
                    DiasMostrados.push('viernes');
                }
                if (DosDiasPase > 0) {
                    DiasMostrados.push('viernes', 'sabado');
                }
                if (completoPase > 0) {
                    DiasMostrados.push('viernes', 'sabado', 'domingo');
                }

                document.getElementById('viernes').style.display = 'none';
                document.getElementById('sabado').style.display = 'none';
                document.getElementById('domingo').style.display = 'none';

                for (var i = 0; i < DiasMostrados.length; i++) {
                    document.getElementById(DiasMostrados[i]).style.display = 'block';
                }
            }
        }
   
        
    }); /// DOM CONTENT LOADED


})()


$(function (){

    /// lettering
    $('.text-main').lettering();

    // 
    $('body.conferencia .navegacion-principal a:contains("conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("invitados")').addClass('activo');
    /// scroll
    var windowheight = $(window).height();
    var barraheight = $('.barra').innerHeight();

    
        $('.menu-mobil').click(function(){
            $('.navegacion-principal').slideToggle();
        });

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if( scroll > windowheight){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraheight+'px'})
        }else{
            $('.barra').removeClass('fixed')
            $('body').css({'margin-top': '0px'})
        }
    })

    $('.programa').next().show();
    $('.navegacion-talleres a').click(mostrarTab);
    $('.navegacion-talleres a:first').addClass('activos');
    function mostrarTab(){
        $('.navegacion-talleres a').removeClass('activos')
        $('.info-curso').hide()
        var taller = $(this).attr("href");
        $(this).addClass('activos')
        $(taller).show();
        console.log(taller);
        return false;
    }

    // animated numbers
    $('.contenido-evento li:nth-child(1) p').animateNumber({ number: 6 },1000);
    $('.contenido-evento li:nth-child(2) p').animateNumber({ number: 15 }, 1500);
    $('.contenido-evento li:nth-child(3) p').animateNumber({ number: 3 }, 500);
    $('.contenido-evento li:nth-child(4) p').animateNumber({ number: 9 }, 1500);

    // coutdown
    $('.cuenta-regresiva').countdown("2020/09/14",function(event){
        $('#dias').text(event.strftime('%D'));
        $('#horas').text(event.strftime('%H'));
        $('#minutos').text(event.strftime('%M'));
        $('#segundos').text(event.strftime('%S'));
    })
    $('.invitado-info').css({inline:true , width:"50%"});



})