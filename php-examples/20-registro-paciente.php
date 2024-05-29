<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Paciente</title>
    <style>
    </style>
    <script>
        function validateForm() {
            const edad = document.getElementById('edad').value;
            if (edad <= 0 || edad >= 100) {
                alert("Ingrese una edad mayor a 0 y menor que 100.");
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
</head>
<body>
    <h1>Registro de Paciente</h1>
    <form id="formulario" action="21-pdo-post.php" method="post" onsubmit="return validateForm()">    
        <label for="nombre">Nombres:</label> 
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="apellido">Apellidos:</label>
        <input type="text" id="apellido" name="apellido" required>
        
        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad" required>
        
        <label for="talla">Talla (cm):</label>
        <input type="text" id="talla" name="talla" required>
        
        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso" required>
        
        <div class="sintomas">
            <h2><u>Síntomas</u></h2>
            <input type="checkbox" name="tos" id="tos">
            <label for="tos">Tos</label><br>
            
            <input type="checkbox" name="fiebre" id="fiebre">
            <label for="fiebre">Fiebre</label><br>
            
            <input type="checkbox" name="disnea" id="disnea">
            <label for="disnea">Disnea</label><br>
            
            <input type="checkbox" id="dolor_muscular" name="dolor_muscular">
            <label for="dolor_muscular">Dolor muscular</label><br>
            
            <input type="checkbox" id="gripe" name="gripe">
            <label for="gripe">Gripe</label><br>
            
            <input type="checkbox" id="Presion_alta" name="Presion_alta">
            <label for="Presion_alta">Presión Alta</label><br>
            
            <input type="checkbox" id="Fatiga" name="Fatiga">
            <label for="Fatiga">Fatiga</label><br>
            
            <input type="checkbox" id="Garraspera" name="Garraspera">
            <label for="Garraspera">Garraspera</label><br>
        </div>
        
        <label for="fecha">**Fecha de vacunación:**</label>
        <input type="date" id="fecha" name="fecha">
        
        <div class="Botones">
            <button type="submit">Guardar</button>
            <button type="button" onclick="document.getElementById('formulario').reset();">Cancelar</button>
        </div>
    </form> 
</body>
</html>
