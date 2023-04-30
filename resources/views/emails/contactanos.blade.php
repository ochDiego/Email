<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <h1>Inmobiliaria Inc.</h1>
    <hr>

    <h4>Información personal</h4>

    <p><strong>Nombre:</strong> {{$contacto['nombre']}}</p>
    <p><strong>Correo:</strong> {{$contacto['correo']}}</p>
    <p><strong>Teléfono:</strong> {{$contacto['telefono']}}</p>
    <p><strong>Mensaje:</strong> {{$contacto['mensaje']}}</p>
    <hr>

    <h4>Información de la propiedad</h4>

    <p><strong>Vende o compra:</strong> {{$contacto['propiedad']}}</p>
    <p><strong>Precio o presupuesto:</strong> {{$contacto['precio']}}</p>
    <p><strong>Forma de contacto:</strong> {{$contacto['formaContacto']}}</p>

    
</body>
</html>