<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamar</title>
</head>
<body>
    <h2>Edit Kamar</h2>
    <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Id Asrama:</label>
        <input name="id_asrama" value="{{ $kamar->id_asrama }}"><br>

        <label>Lantai:</label>
        <input name="lantai" value="{{ $kamar->lantai }}"><br>

        <label>No Kamar:</label>
        <input name="no_kamar" value="{{ $kamar->no_kamar }}"><br>

        <label>Jumlah penghuni:</label>
        <input name="jmlh_penghuni" value="{{ $kamar->jmlh_penghuni }}"><br>
       
        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>