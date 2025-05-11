<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
.ficha-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 30px auto;
    padding: 20px;
    border: 2px solid #ccc;
    max-width: 800px;
    position: relative;
    background-color:#87CEEB 
}

.informacion {
    text-align: left;
    padding-right: 200px;
	font-size: 3rem;
}

.foto-esquina {
    position: absolute;
    top: 10px;
    left: 650px;
    border-radius: 20%;
    width: 100px;
    height: 100px;
    object-fit: cover;
    border: 2px solid #ccc;
    
    
}

    </style>
</head>
<body>
<body>
		<header>
			<section class="encabezado-pricipal" >
				<section class="encabezado principal" >
					<section class="soporte-cliente" >
						<div class="audifonos">
							<img src="../img/headset-solid.svg" class="cliente" alt="">
						</div>
						
						<div class="soporte-cliente-texto">
							<p class="text">Soporte al cliente</p>
							<p class="number">123-456-7890</p>
						</div>
					</section>

					<section class="encabezado-logo" >
						<img src="../img/shoe-prints-solid.svg" alt="">
							<h1 class="logo">
								<a href="/" >sneakers</a>
							</h1>
					</section>

					<section class="encabezado-user" >
						<img src="../img/user-solid.svg" alt="">
						<img src="../img/basket-shopping-solid.svg" alt="">
						
						<div class="encabezado-canasta-compras " >
							<span class="text">Carrito</span>
							<span class="number">(0)</span>
						</div>
					</section>

				</section>
			</section>

			<section class="encabezado-nav" >
				<nav class="nav encabezado" >
					<ul class="menu" >
						<li ><a href="index.html">Inicio</a></li>
						<li ><a href="blog.html">Nosotros</a></li>
						<li ><a href="producto.html">Productos</a></li>
						<li ><a href="Formulario.html">Registro</a></li>
					</ul>

					<form class="busqueda-1" >
						<input type="search" placeholder="Buscar zapatos" />
						<button class="btn-busqueda" >
							<img src="../img/magnifying-glass-solid.svg" alt="">
							
						</button>
					</form>
				</nav>
			</section>
		</header>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $categoria = $_POST["categoria"];
    $genero = $_POST["genero"];
    $numeroCalzado = $_POST["numero_calzado"];
    $referencia = $_POST["referencia"];

    // Procesar la foto
    $fotoNombre = $_FILES["foto"]["name"];
    $fotoTmpName = $_FILES["foto"]["tmp_name"];

    // Carpeta de destino personalizada
    $carpetaDestino = "uploads/";  
    $fotoDestino = $carpetaDestino . $fotoNombre;

    // Verificar si la carpeta de destino existe, si no, crearla
    if (!file_exists($carpetaDestino)) {
        mkdir($carpetaDestino, 0777, true);
    }

    // Mover la foto al destino
    move_uploaded_file($fotoTmpName, $fotoDestino);

   // Mostrar la ficha con la información
echo "<h2 class='ficha-titulo'>Ficha de compra del Usuario</h2>";
echo "<div class='ficha-container'>";
echo "<img src='$fotoDestino' alt='Foto de perfil' class='foto-esquina'>";
echo "<div class='informacion'>";
echo "<p><strong>Nombre:</strong> $nombre $apellidos</p>";
echo "<p><strong>Dirección:</strong> $direccion</p>";
echo "<p><strong>Teléfono:</strong> $telefono</p>";
echo "<p><strong>Fecha de Nacimiento:</strong> $fechaNacimiento</p>";
echo "<p><strong>Categoría de Compra:</strong> $categoria</p>";
echo "<p><strong>Género:</strong> $genero</p>";
echo "<p><strong>Número de Calzado:</strong> $numeroCalzado</p>";

echo "<p><strong>Referencia de Cómo Conoció la Tienda:</strong> $referencia</p>";
echo "</div>";
echo "</div>";

}
?>

<footer class="footer">
			
						
            <table class="copyright">
                <td><p>Desarrollado por  Jeanhela Nazate, Diego Ponce &copy; 2023</p></td>
                <td><img src="../img/payment.png" class="PagosImagenes" alt="Pagos"></td>
                
            </table>
            
            
        
    
</footer>
    
</body>
</html>