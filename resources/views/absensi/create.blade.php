<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi</title>
</head>
<body>

    <h2>Create absensi</h2>
    <form action="{{ route('absensi.store') }}" method="POST">
    @csrf
        <label>Nim:</label>
        <input name="nim">
        <br>
        <label>Taggal:</label>
        <input name="tanggal">
        <br>
        <label>Kehadiran:</label>
        <input name="kehadiran">
        <br>

        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>

</body>
</html>