<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Incluyendo JQuery-->
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <title>Practicas Js</title>
    <script>
        $(document).ready(function() {
            $("a").click(function(evento) {
                alert("Has pulsado el enlace...Ahora serás enviado a Google.com");
            });
        });
    </script>

</head>
<a>Bienvenido a pruebas con JQuery. Haz Click para ingresar a google </a>

<body><a href="https://google.com" id="link">Ir a Google.com</a></body>

<style>
    #link {
        color: goldenrod;
    }

    #animacion {

        height: 150px;
        width: 500px;
        position: absolute;
        background-color: #171B1F;
        color: coral;
    }
</style>

<script>
    //1 Funcion Ocultar/Mostrar //
    $(document).ready(function() {
        $("#ocultar").click(function() {
            $("p").hide("fast");
        });
        $("#mostrar").click(function() {
            $("p").show("slow");
        });
    });
</script>


<p>Funcion para mostrar y ocultar texto.</p>

<h4>

    <button id="ocultar">Ocultar</button>
    <button id="mostrar">Mostrar</button>
</h4>

<script>
    // 2 Funcion Coordenadas Mouse //
    $(document).ready(function() {
        $(document).mousemove(function(event) {
            $("span").text("X = " + event.pageX + ", Y = " + event.pageY);
        });
    });
</script>

<p>Coordenadas del Mouse: <span></span>.</p>

<script>
    // 3 Funcion (Animacion) //
    $(document).ready(function() {
        $("#estilo").click(function() {
            var div = $("div");
            div.animate({
                left: '200px'
            }, "slow");
            div.animate({
                fontSize: '3em'
            }, "slow");
        });
    });
</script>

<button id=estilo>Comenzar Animacion</button>

<p>!Manipulamos la animacion¡</p>

<div id="animacion">Bienvenido a jquery animacion</div>

<script>
    // 4 Funcion css con varias funciones //
    $(document).ready(function() {
        $("p,button").on({


            click: function() {
                $(this).css("background-color", "yellow");
            }
        });
    });
</script>

<script>
    // 5 Funcion Modo Oscuro //
    function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
        
    }
</script>

<style>
    body {

        background-color: white;
        color: blue;

    }

    .dark-mode {
        background-color: #171B1F;
        color: lightcoral;
        
    }

    
</style>

<h3><button  onclick="myFunction()">Modo Oscuro</button></h3>


</body>

</html>