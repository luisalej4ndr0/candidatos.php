
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">

    <form  method="post" action="datacandidato.php" >
        <div class="row ">
            <div class="col-6">
                <div class="mb-3">
                    <label for="nombre" class="form-label"> Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
            </div>
            <div class="col-6">
                
                <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control " id="apellidos" name="apellidos">
                </div>
    
            </div>
            
            <div class="col-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono de contacto</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Nivel de estudio</label>
                    <select id="disabledSelect" class="form-select" name="estudio">
                        <<option value="#"></option>
                        <option value="1">Bachiller</option>
                        <option value="2">Tecnico</option>
                        <option value="3">Tecnologo</option>
                        <option value="4">Profesional</option>
                        <option value="5">Estudiante</option>
                        <option value="6">Universitario</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="ingles" class="form-label">Nivel de inlges</label>
                    <select id="disabledSelect" class="form-select" name="ingles">
                        <option value="#"></option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="Basico">Basico</option>
                        <option value="Avanzado">Avanzado</option>
                       
                    </select>
                </div>
            </div>
        </div>
    <div class="contenedor row">
        
        <h1>lenguajes</h1>
       <div class="col-4">
            <div class="form-check">
                    
                <input class="form-check-input" type="checkbox" value="" id="python" name="lenguajes[]" >
                <label class="form-check-label" for="flexCheckDefault" >
                Python
                </label>
            </div>
        </div>
        <div class="col-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="html" name="lenguajes[]" checked>
                <label class="form-check-label" for="flexCheckChecked" >
                    html
                </label>
            </div>
    
        </div>
        <div class="col-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="js" name="lenguajes[]" checked>
                <label class="form-check-label" for="flexCheckChecked" >
                    js
                </label>
            </div>
    
        </div>
        <div class="col-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="css" name="lenguajes[]" checked>
                <label class="form-check-label" for="flexCheckChecked" >
                    css
                </label>
            </div>
        </div>
        <div class="col-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="php" name="lenguajes[]" checked>
                <label class="form-check-label" for="flexCheckChecked" >
                    php
                </label>
            </div>
        </div>
        <div class="col-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="nodejs" name="lenguajes[]" checked>
                <label class="form-check-label" for="flexCheckChecked" >
                    node js
                </label>
            </div>
    
        </div>
        <div class="col-4">
    
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="c++" name="lenguajes[]" checked>
                <label class="form-check-label" for="flexCheckChecked" >
                    c++
                </label>
            </div>
        </div>
        <div class="col-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="typescript" name="lenguajes[]" checked>
                <label class="form-check-label" for="flexCheckChecked"  >
                    typescript
                </label>
            </div>
    
        </div>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>