<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding: 20px;
        }

        div.form-check.form-switch.mb-2 {
            margin-top: -20px;
        }

        .checkbox-group {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>    
    <div class="container">
        <center><h1>Busqueda de Pacientes</h1></center>
        <input type="text" class="form-control mb-2" placeholder="Escribe aqui" name="nombre" id="nombre" /><br>
        <div class="checkbox-group">
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="tos">
                <label class="form-check-label" for="tos">Tos</label>
            </div>
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="fiebre">
                <label class="form-check-label" for="fiebre">Fiebre</label>
            </div>
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="disnea">
                <label class="form-check-label" for="disnea">Disnea</label>
            </div>
        </div>
        <button type="button" class="btn btn-primary mb-2" onclick="buscarPacientes();" style="margin-top: 5px;">Buscar</button>
        <table class="table table-bordered" id="tabla">
            <thead>
                <tr>
                    <th scope="col">Paciente</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Talla</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Tos</th>
                    <th scope="col">Fiebre</th>
                    <th scope="col">Disnea</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table rows will be dynamically added here -->
            </tbody>
        </table>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nuevo Paciente
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="name" name="name" />
                </div>
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad:</label>
                    <input type="number" class="form-control" id="edad" name="edad" />
                </div>
                <div class="mb-3">
                    <label for="talla" class="form-label">Talla:</label>
                    <input type="text" class="form-control" id="talla" name="talla" />
                </div>
                <div class="mb-3">
                    <label for="peso" class="form-label">Peso:</label>
                    <input type="text" class="form-control" id="peso" name="peso" />
                </div>
                <div class="mb-3">
                    <label for="texto" class="form-label">Texto:</label>
                    <textarea class="form-control" id="texto" name="texto"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="guardarCambios();">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="25.1-ajax.js"></script>
</body>
</html>
