<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamar</title>
</head>
<body>

    <h2>Create Kamar</h2>
    <form action="{{ route('kamar.store') }}" method="POST">
    @csrf
        <label>Id asrama:</label>
        <input name="id_asrama">
        <br>
        <label>Lantai:</label>
        <input name="lantai">
        <br>
        <label>No Kamar:</label>
        <input name="no_kamar">
        <br>
        <label>Jumlah Penhuni:</label>
        <input name="jmlh_penghuni">
        <br>

        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>

</body>
</html>