<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario CuerpoEjercito</title>
</head>
<body>
    
    <h1>Formulario</h1>

    <form action="{{route('barrack.store')}}" method="POST" enctype="multipart/form-data">

@csrf

    <label>
        Ingrese el nombre de el cuartel:
        <br>
        <input type="text" name="Nom_c">
    </label>
    <br>
    <label>
        Ingrese la ubicacion de el cuartel:
        <br>
        <input type="text" name="Ubic_c">
    </label>
    <br><br>

    <button type="submit">Enviar Formulario:</button>
    </form>

</body>
</html>