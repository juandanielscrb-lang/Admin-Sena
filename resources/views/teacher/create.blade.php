<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
</head>
<body>
    
    <h1>formulario teacher</h1>

<form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<br>

<label>
    Email:
    <br>
    <input type="email" name="email">
</label>
<br>
<br>

{{--{{$areas}} --}}

<label>Selecciona el area</label>

<select name="area_id" id="area_id">
    <option value="">Selecciona un area</option>

    @foreach ($areas as $area )
    <option value="{{ $area->id }}">{{ $area->name}}</option>
    @endforeach
</select>
<br><br>


{{--{{$trainig_center}} --}}

<label>Selecciona un centro de formación</label>

<select name="training_center_id" id="training_center">
    <option value="">Centro de formación</option>

    @foreach ($centers as $center )
    <option value="{{ $center->id }}">{{ $center->name}}</option>
    @endforeach
</select>
<br><br>


<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>