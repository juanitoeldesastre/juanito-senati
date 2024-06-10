<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Estilo personalizado */
        .custom-padding {
            padding: 20px;
        }
    </style>
</head>
<body>    
    <div class="container custom-padding">
        <h1 class="text-center mt-5 mb-4">Busqueda de Pacientes</h1>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Escribe aquí">
        </div>
        <div class="mb-3">
            <label for="tos" class="form-check-label">Tos:</label>
            <input type="checkbox" class="form-check-input" id="tos">
        </div>
        <button type="button" class="btn btn-primary" onclick="buscarPacientes();">Buscar</button>
        <table class="table table-bordered mt-4">
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
            <tbody id="tablaPacientes"></tbody>
        </table>

        <!-- Modal para nuevo paciente -->
        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nuevo Paciente
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Paciente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="nombre2" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre2">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="guardarNuevoPaciente();">Guardar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
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
