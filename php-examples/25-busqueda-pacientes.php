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
        .container {
            max-width: 800px;
            margin: auto;
        }
        #tabla {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }
        #tabla th,
        #tabla td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .modal-body {
            display: flex;
            flex-direction: column;
        }
        .modal-body input {
            margin-bottom: 10px;
        }
        .modal-body button {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Busqueda de Pacientes</h1>
        <div class="mb-3">
            <input type="text" class="form-control" id="nombre" placeholder="Escribe aquí">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="tos">
            <label class="form-check-label" for="tos">Tos</label>
        </div>
        <button type="button" class="btn btn-primary mb-3" onclick="buscarPacientes()">Buscar</button>
        <table id="tabla" class="table">
            <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Edad</th>
                    <th>Talla</th>
                    <th>Peso</th>
                    <th>Tos</th>
                    <th>Fiebre</th>
                    <th>Disnea</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Datos de pacientes se insertarán aquí dinámicamente -->
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
                        <label for="nombre2" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre2" name="nombre2">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="actualizar()">Guardar</button>
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="25.1-ajax.js"></script>
</body>
</html>
