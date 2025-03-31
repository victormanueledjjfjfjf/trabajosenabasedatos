<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Companies</title>
</head>
<body>
    
    <h1>Formulario</h1>

    <form action="{{route('corp.store')}}" method="POST" enctype="multipart/form-data">

@csrf

    <label>
        Ingrese el nombre de el cuartel:
        <br>
        <input type="text" name="Cod_ce">
    </label>
    <br>
    <label>
        Ingrese la ubicacion de el cuartel:
        <br>
        <input type="text" name="Denom_ce">
    </label>
    <br><br>

    <button type="submit">Enviar Formulario:</button>
    </form>

</body>
</html>