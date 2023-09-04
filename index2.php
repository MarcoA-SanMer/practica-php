<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="index2.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Formulario</a>
        </li>
      </ul>
    
    <header>
        <h1>Marco Antonio Sánchez Mercado</h1>
    </header>

    <section>
        <h2>Acerca de mí</h2>
        <p>Me llamo Marco Antonio, tengo 23 años y actualmente soy estudiante de ingenieria en computación.</p>
    </section>

    <section>
        <h2>Mis conocimientos</h2>
        <ul>
            <li>Python</li>
            <li>Lenguaje C</li>
            <li>Lenguaje C++</li>
            <li>Java</li>
            <li>Javascript</li>
        </ul>
    </section>

    <section>
        <h2>Mis fortalezas</h2>
        <ol>
            <li>Responsable</li>
            <li>Disciplinado</li>
            <li>Perseverante</li>
        </ol>
    </section>

    <section>
        <h2>Proyectos</h2>
        <table>
            <tr>
                <th>Nombre del proyecto</th>
                <th>Lenguajes del proyecto</th>
                <th>Descripción</th>
            </tr>

            <tr>
                <td>Bakeeper</td>
                <td>Python, Javascript, Html, Css</td>
                <td>App para llevar un control de tu inventario de alimentos y guardar tus recetas.</td>
            </tr>

            <tr>
                <td>Mi lanchita</td>
                <td>Html, Css, Javascript, Php</td>
                <td>App web para llevar el control de una empresa que arrenda barcos.</td>
            </tr>
            <tr>
                <td>Base de datos para prestamiestas</td>
                <td>Java</td>
                <td>App para llevar el control de tu dinero y tus clientes en una micro-empresa de prestamos financieros.</td>
            </tr>
        </table>
    </section>

    <section>
        <h2>Persona que admiro</h2>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-width: 400px; margin-left: 0;" data-interval="3000">
            <ol class="carousel-indicators" style="font-size: 10px;">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="w-100" src="Aurora.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="w-100" src="aurora2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="w-100" src="aurora3.jpg" alt="Second slide">
              </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        <br>  
        <p><strong>Aurora Aksnes</strong> - AURORA, es una cantautora noruega. Inició su carrera en 2012 con una serie de sencillos independientes que sirvieron para desarrollar su propuesta artística.​ Adquirió notoriedad con el extended play Running with the Wolves —publicado por Decca Records en mayo de 2015​ y su versión del tema «Half the World Away» para un comercial navideño de la marca John Lewis. <a href="https://es.wikipedia.org/wiki/Aurora_Aksnes" target="_blank">Más información</a></p>
    </section>

    <div class="footer">
        <section>
            <h2>Contáctame en...</h2>
            <a href="mailto:marco.smercado@alumnos.udg.mx">marco.smercado@alumnos.udg.mx</a>
        </section>
    </div>
</body>
</html>