<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/palomitas-de-maiz.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>

<div class="logo"><img src="img/palomitas-de-maiz.png" alt=""></div>

<nav>
    <a href="">Inicio</a>
    <a href="">Quines somos</a>
    <a href="contacta/contacta.php">Contacta</a>
    
</nav>

</header>

<section id="container-slider">
    <button class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></button>
    <button class="arrowNext"><i class="fas fa-chevron-circle-right"></i></button>
  
    <div class="slider-wrapper">
      <ul id="slider">
        <li>
          <img src="img/nowayhome-scaled.jpg" alt="Slide 1">
          <div class="title-container">
            <span class="slide-title">Spider-Man: No Way Home</span>
          </div>
        </li>
        <li>
          <img src="img/D2-C6WIW0AA6T6F.jpg" alt="Slide 2">
          <div class="title-container">
            <span class="slide-title">La Llorona</span>
          </div>
        </li>
        <li>
          <img src="img/MKA-LionKingThe2019H.jpg" alt="Slide 3">
          <div class="title-container">
            <span class="slide-title">El Rey León</span>
          </div>
        </li>
      </ul>
    </div>
  </section>
  
  
  
  <section id="seccion1">
        <?php
        // Datos de conexión a la base de datos
        $servername = 'localhost'; // Cambia esto si tu base de datos se encuentra en otro servidor
        $username = 'root'; // Cambia esto con tu usuario de la base de datos
        $password = ''; // Cambia esto con tu contraseña de la base de datos si la tienes
        $dbname = 'cine'; // Cambia esto con el nombre de tu base de datos

        // Crea la conexión a la base de datos
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica la conexión
        if ($conn->connect_error) {
            die('Error de conexión: ' . $conn->connect_error);
        }

        // Consulta para obtener los datos de las películas
        $sql = "SELECT * FROM peliculas";
        $result = $conn->query($sql);

        // Verifica si hay películas disponibles
        if ($result->num_rows > 0) {
            // Itera sobre los resultados de la consulta y muestra cada película
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $titulo = $row['titulo'];
                $descripcion = $row['descripcion'];
                $imagen = $row['imagen'];
                ?>
                <div class="cartelera">
                    <div class="portada"><img src="<?php echo $imagen; ?>" alt=""></div>
                    <div class="descripcion">
                        <h3><?php echo $titulo; ?></h3>
                        <p><?php echo $descripcion; ?></p>
                        <div class="ver">
                           VER
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            // Si no hay películas disponibles, muestra un mensaje de aviso
            echo "<p>No hay películas disponibles en este momento.</p>";
        }

        // Cierra la conexión a la base de datos
        $conn->close();
        ?>
    </section>

<footer>
    <div class="pieIz">   
        <a href="#">Inicio</a>
        <a href="#">Quines somos</a>
        <a href="#">Contacta</a>
    </div>
    <div class="pieDer">
        <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <h2>925703358</h2>
    </div>
</footer>
<script src="js/jason.js"></script>
</body>
</html>