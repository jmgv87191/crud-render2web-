<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="./data/datatables.min.css">
    <link rel="stylesheet" href="./css/estilosDataTable.css">
    <link rel="stylesheet" href="./css/estilos.css">
    
</head>
<body>

<div class="container fondo">
    <h1 class="text-center" >
        CRUD con PHP, PDO, Ajax y Datatables
    </h1>
    <h1 class="text-center"> https://juangtz.com  </h1>

    <div class="row">
        <div class="col-2 offset-10">
            <div class="text-center">
                

                <button 
                    type="button" 
                    class="btn btn-primary w-100" 
                    data-bs-toggle="modal" 
                    data-bs-target="#modalUsuario"
                    id="botonCrear"
                >
                    <i class="bi bi-plus-circle-fill" ></i>  Crear
                </button>

            </div>
        </div>
    </div>

    <br>
    <br>
                

    <div class="table-responsive">
        <table id="datos_usuario" class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Apellidos
                    </th>
                    <th>
                        Telefono
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Imagen
                    </th>
                    <th>
                        Fecha Creacion
                    </th>
                    <th>
                        Editar
                    </th>
                    <th>
                        Editar
                    </th>
                </tr>
            </thead>
        </table>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST" id="formulario" enctype="multipart/form-data" >
                        <div class="modal-content">
                            <div class="modal-body">
                            <label for="nombre">Ingrese el nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" >
                            <br>

                            <label for="apellidos">Ingrese los apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control" >
                            <br>

                            <label for="telefono">Ingrese el telefono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" >
                            <br>

                            <label for="email">Ingrese su correo</label>
                            <input type="text" name="email" id="email" class="form-control" >
                            <br>

                            <label for="imagen_usuario">Seleccione una imagen</label>
                            <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control" >
                            <span id="imagen-subida" ></span>
                            <br>
                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="id_usuario" id="id_usuario" >
                            <input type="hidden" name="operacion" id="operacion" >
                            <input type="submit" name="action" id="action" class="btn btn-success" value="Crear" >
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>





</div>



    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script src="./data/datatables.min.js"></script>
    
    <script src="index.js"></script>
</body>
</html>