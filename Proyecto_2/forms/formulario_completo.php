<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vandel</title>
    <link rel="stylesheet" href="/style/style.css">

    <header class="navegacion">
        <nav class="nav_container">
            <div class="nav_logo">
                <h1 class="nav_title">Vandel</h1>
            </div>
            <ul class="menu">
                <a href="/index.html" class="nav_links">Inicio</a>
            </ul>
            </div>
        </nav>
    </header>
</head>

<body>
    <h1 class="title">Enhorabuena!</h1>

<section id="body_section">
    <article id="noticias">
        <div class="container_lateral">
        </div>
        <div class="link_noticias">
        <a href="/index.html" class="noticias_link">Inicio</a>
        </div>
        <div class="link_noticias">
        <a href="/noticias/noticia1.html" class="noticias_link">League of legends y los cambios para la pretemporada</a>
        </div>
        <div class="link_noticias">
        <a href="/noticias/noticia2.html" class="noticias_link">CDProjekt y su "Obra Maestra"</a>
        </div>
        <div class="link_noticias">
        <a href="/noticias/noticia3.html" class="noticias_link">EA y sus DLCs de pago</a>
        </div>
        <div class="link_noticias">
        <a href="/noticias/noticia4.html" class="noticias_link">Polémica en la empresa de Blizzard</a>
        </div>
        <div class="link_noticias">
        <a href="/forms/form.html" class="noticias_link">Quieres recibir todas las noticias antes que nadie?</a>
        </div>
        </article>

    <article id="novedades">
        <div class="container_all">
            <h1>Enhorabuena, has completado correctamente el formulario!</h1>
            <br>
            <br>
            <img src="/img/thumbs-up-nice.gif">
            <br>
            <br>
            <h3>Ahora podrás no perderte ninguna de nuestras noticias!</h3>
            <br>
            <br>
            <h1>
                <?php 
                    if (isset( $_COOKIE['visitas'])) {
                        setcookie('visitas', $_COOKIE['visitas'] + 1, time() + 86400);
                    }
                    else{
                        setcookie('visitas', 1, time() + 86400);
                    }
                echo "Número de usuarios registrados hoy desde este navegador " . $_COOKIE['visitas'];
                ?>
                </h1>
            <br>
            <br>
            <h1><a href="/index.html">Ver las noticias disponibles</a></h1>
    </article>

    <article id="anuncios">
        <a href="https://www.g2a.com/"><img class="anuncio_imagen" src="/img/047b15ee34a814229dac0fcbc327865e.jpg"></a>
        <a href="https://www.instant-gaming.com/en/"><img class="anuncio_imagen" src="/img/ClpnMEbWIAEfs_I.jpg"></a>
        <a href="https://www.eneba.com/"><img class="anuncio_imagen" src="/img/oferta-5-euros-gratis-eneba-810x456.jpg"></a>
        <a href="https://www.kinguin.net/"><img class="anuncio_imagen" src="/img/Ta6yk2Wsg69J8G2Agxcgp3.png"></a>
    </article>
</section>
</body>

<footer class="footer"> 


    <section class="fcontainer">

        <div class="Other">
            <h1>a</h1>
        </div>


        <div class="form_text">
            <a class="Sub" href="/index.html">Volver a la página de noticias</a>
        </div >
    </section>

</footer>

</html>