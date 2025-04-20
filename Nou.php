<?php
// Primero procesamos el formulario (antes de cualquier salida HTML)
require_once('Connexio.php');
class Nou
{
/**
     * Summary of guardarProducte
     * @param mixed $nom
     * @param mixed $descripcio
     * @param mixed $preu
     * @param mixed $categoria
     * @return bool|string
     */
    private function guardarProducte($nom, $descripcio, $preu, $categoria)
    {
        // Verifica si todos los campos requeridos están presentes
        if (!isset($nom) || !isset($descripcio) || !isset($preu) || !isset($categoria)) {
            return "Se requieren todos los campos para guardar el producto.";
        }

        // Crea una instancia de la clase de conexión
        $conexionObj = new Connexio();
        $conexion = $conexionObj->obtenirConnexio();

        // Escapa las variables para prevenir SQL injection
        $nom = $conexion->real_escape_string($nom);
        $descripcio = $conexion->real_escape_string($descripcio);
        $preu = $conexion->real_escape_string($preu);
        $categoria = $conexion->real_escape_string($categoria);

        // Construye la consulta SQL de inserción
        $consulta = "INSERT INTO productes (nom, descripció, preu, categoria_id) VALUES ('$nom', '$descripcio', '$preu', '$categoria')";

        if ($conexion->query($consulta) === TRUE) {
            $conexion->close();
            return true;
        } else {
            $error = "Error al guardar el producto: " . $conexion->error;
            $conexion->close();
            return $error;
        }
    }
    /**
     * Summary of mostrarFormulari
     * @return void
     */
    public function mostrarFormulari()
    {
        $mensaje = "";
        $redirigir = false;

        // Procesa el formulario si se ha enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = isset($_POST['nom']) ? $_POST['nom'] : null;
            $descripcio = isset($_POST['descripcio']) ? $_POST['descripcio'] : null;
            $preu = isset($_POST['preu']) ? $_POST['preu'] : null;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : null;

            // Intenta guardar el producto
            $resultado = $this->guardarProducte($nom, $descripcio, $preu, $categoria);

            if ($resultado === true) {
                $redirigir = true;
            } else {
                $mensaje = $resultado; // Mensaje de error
            }
        }

        // Redirige si el guardado fue exitoso (antes de cualquier salida HTML)
        if ($redirigir) {
            header('Location: Principal.php');
            exit();
        }

        // Ahora podemos incluir el encabezado y generar salida HTML
        require_once('Header.php');

        // Imprime la estructura HTML del formulario con nuevo estilo
        echo '<div class="container mt-5" style="max-width: 600px;">';
        echo '<h2 class="text-center text-primary mb-4">Nuevo Producto</h2>';
        echo '<hr>';

        // Muestra mensajes de error si los hay
        if (!empty($mensaje)) {
            echo '<div class="alert alert-danger">' . $mensaje . '</div>';
        }

        echo '<form action="Nou.php" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre:</label>
                <input type="text" name="nom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descripcio" class="form-label">Descripción:</label>
                <input type="text" name="descripcio" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="preu" class="form-label">Precio:</label>
                <input type="number" name="preu" step="0.01" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría:</label>
                <select name="categoria" class="form-select" required>
                    <option value="">Selecciona una categoría</option>
                    <option value="1">Electrónicos</option>
                    <option value="2">Ropa</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <input type="submit" value="Guardar" class="btn btn-success">
                <a href="Principal.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
        </div>';

        // Incluye el pie de página
        require_once('Footer.php');
    }
}

// Crea una instancia de la clase Nou y llama al método mostrarFormulari
$nuevoProducto = new Nou();
$nuevoProducto->mostrarFormulari();
?>
