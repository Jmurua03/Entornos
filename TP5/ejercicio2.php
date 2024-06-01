<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pagina de contacto</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    

<div class="formulario" style="max-width: 70%; margin: auto;"> 
    <form action="https://formspree.io/f/xvoejong" method="POST"> 
        <div class="mb-3">
            <label for="maildescrip" class="form-label"  >Su mail</label>
            <input type="email" class="form-control" id="maildescrip" placeholder="name@example.com" name="email" required="">
        </div>
        <div class="mb-3">
            <label for="textdescrip" class="form-label">Ingrese su consulta</label>
            <textarea class="form-control" id="textdescrip" rows="3" name="message" required=""></textarea>
        </div>
        <div class="col-auto text-end">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    
</div>

</body>
</html>