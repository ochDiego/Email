<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactanos</title>
</head>
<body>
    <h1>Inmobiliaria Inc</h1>

    <header>
        <ul>
            <li>
                <a href="{{route('home')}}">Inicio</a>
            </li>

            <li>
                <a href="{{route('contactanos.index')}}">Contáctanos</a>
            </li>
        </ul>
    </header>

    <h3>Dejanos un mensaje</h3>

    <form action="{{route('contactanos.store')}}" method="POST" autocomplete="off">
        @csrf

        <fieldset>
            <legend>Información personal</legend>
            <label>Nombre:</label><br> 
            <input name='nombre' type='text'><br>
            @error('nombre')
                *<small>{{$message}}</small>
                <br>
            @enderror
            <label>Correo:</label><br> 
            <input name='correo' type='text'><br>
            @error('correo')
                *<small>{{$message}}</small>
                <br>
            @enderror
            <label>Teléfono:</label><br>
            <input name='telefono' type='text'><br>
            @error('telefono')
                *<small>{{$message}}</small>
                <br>
            @enderror
            <label>Mensaje:</label><br>
            <textarea name="mensaje" rows="5"></textarea><br>
            @error('mensaje')
                *<small>{{$message}}</small>
                <br>
            @enderror
        </fieldset>

        <fieldset>
            <legend>Información de la propiedad</legend>
            <label>Vender</label> <input type="radio" name="propiedad" value="Vender" id="">
            <label>Comprar</label> <input type="radio" name="propiedad" value="Comprar" id=""><br> 
            @error('propiedad')
                *<small>{{$message}}</small>
                <br>
            @enderror
            <label>Precio:</label><br>
            <input name='precio' type='number'><br>
            @error('precio')
                *<small>{{$message}}</small>
                <br>
            @enderror

            <label>Forma de contácto:</label><br>
            <label for="">Teléfono</label><input type="radio" name="formaContacto" value="Teléfono" id="">
            <label for="">Correo</label><input type="radio" name="formaContacto" value="Correo" id=""><br>
            @error('formaContacto')
                *<small>{{$message}}</small>
                <br>
            @enderror           
        </fieldset>

        <fieldset>
            <legend>Nombre del empleado</legend>
            <label for="">Juan</label> <input type="radio" name="empleado" value="juan@gmail.com"> 
            <label for="">Daniel</label> <input type="radio" name="empleado" value="daniel@gmail.com"> 
            <label for="">Diego</label> <input type="radio" name="empleado" value="one.diego@gmail.com"><br>
            @error('empleado')
                *<small>{{$message}}</small>
                <br>
            @enderror
        </fieldset>

        <br>
        <button type="submit">Enviar mensaje</button>

    </form>

    @if (Session('mensaje'))
        <script>
            alert("{{Session('mensaje')}}");
        </script>
    @endif
    
</body>
</html>