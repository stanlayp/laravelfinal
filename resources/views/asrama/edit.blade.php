<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asrama</title>
</head>
<body>
    <h2>Edit Asrama</h2>
        <form action="{{ route('asrama.update', $asrama->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Nama Asrama:</label>
            <input name="nama_asrama" value="{{ $asrama->nama_asrama }}"><br>

            <label>Jenis Asrama:</label>
            <input name="jenis_asrama" value="{{ $asrama->jenis_asrama }}"><br>
            
            <button type="submit">Save</button>
            <button type="reset">Reset</button>
        </form>
</body>
</html>