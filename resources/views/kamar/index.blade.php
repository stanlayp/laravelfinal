<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamar</title>
</head>
<body>
    <h2>Kamar</h2>

    <p><a href="{{ route('kamar.create') }}">Tambah Kamar baru</a></p>
    @if(session()->get('success'))

        {{ session()->get('success') }}

    @endif
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Id Asrama</th>
            <th>Lantai</th>
            <th>No Kamar</th>
            <th>Jumlah Penghuni</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tbody>
        @foreach($kamar as $kmr)
        <tr>
            <td>{{ $kmr->id }}</td>
            <td>{{ $kmr->id_asrama }}</td>
            <td>{{ $kmr->lantai }}</td>
            <td>{{ $kmr->no_kamar }}</td>
            <td>{{ $kmr->jmlh_penghuni }}</td>
            <td><a href="{{ route('kamar.edit', $kmr->id) }}">Edit</a> </td>
            <td>
                <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('kamar.destroy', $kmr->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>