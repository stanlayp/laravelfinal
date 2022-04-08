<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>

    <h2>Create New Asrama</h2>
    <form action="{{ route('asrama.store') }}" method="POST">
    @csrf
        <label>Nama Asrama:</label>
        <input name="nama_asrama">
        <br>
        <label>Jenis Asrama:</label>
        <input name="jenis_asrama">
        <br>

        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>

</body>
</html>