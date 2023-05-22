<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>App de Tienda</title>
</head>
<style>
        body {
            background-color: #f2f2f2;
            background-color: aqua;
        }


        .container {
            max-width: 400px;
            margin: 20vh auto; 
        }

        .form-control {
            border-color: #ccc;
            font-size: 14px;
            padding: 0.375rem 0.75rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 14px;
            padding: 0.375rem 0.75rem;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .custom-heading {
            background-color: blue; 
            color: white; 
            font-family: "Arial", sans-serif; 
            padding: 1px; 
            text-align: center; 
            display: flex; 
            
        }    
    </style>

<body>
    <div class="container">
        <h3 class="custom-heading">FORMULARIO DE ALUMNOS CURSO DE INFORMATICA</h3>
        <div class="row justify-content-center">
            <form action="/TAREACRUDPHP/controladores/alumnos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_nombre">Nombre</label>
                        <input type="text" name="alum_nombre" id="alum_nombre" placeholder="Jorge byron" class="form-control" required>
                    </div>
                </div>producto
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_apellido">Apellido</label>
                        <input type="text" name="alum_apellido" id="alum_apellido" placeholder="Rac Chamale" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_fecha_de_nacimiento">fecha de Nacimiento</label>
                        <input type="text" name="alum_fecha_de_nacimiento" id="alum_fecha_de_nacimiento" placeholder="01/01/1996" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_telefono">Numero de Telefono</label>
                        <input type="tel" name="alum_telefono" id="alum_telefono" placeholder="41917602"class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_correo">Correo Electronico</label>
                        <input type="email" name="alum_correo" id="alum_correo" placeholder="gemechama11203jorge@gmail.com" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>