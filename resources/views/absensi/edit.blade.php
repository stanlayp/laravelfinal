<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>Edit Admin</h2>
    <form action="{{ route('absensi.update', $absensi->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nim:</label>
        <input name="nim" value="{{ $absensi->nim }}"><br>

        <label>Tanggal:</label>
        <input name="tanggal" value="{{ $absensi->tanggal }}"><br>

        <label>Kehadiran:</label>
        <input name="kehadiran" value="{{ $absensi->kehadiran }}"><br>
       
        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>