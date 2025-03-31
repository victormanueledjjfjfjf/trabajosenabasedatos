<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Companies</title>
</head>
<body>
    
    <h1>Formulario</h1>

    <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">

@csrf

    <label>
        Ingrese el numero de compañia:
        <br>
        <input type="text" name="Num_com">
    </label>
    <br>
    <label>
        Ingrese el numero de actividad:
        <br>
        <input type="text" name="ActiP_com">
    </label>
    <br><br>

    <button type="submit">Enviar Formulario:</button>
    </form>

</body>
</html>