<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <h2>Mahasiswa</h2>

    <p><a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa baru</a></p>
    @if(session()->get('success'))

        {{ session()->get('success') }}

    @endif
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nim</th>
            <th>Id kamar</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Contact</th>
            <th>Jurusan</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tbody>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->id }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->id_kamar }}</td>
            <td>{{ $mhs->nama_depan }}</td>
            <td>{{ $mhs->nama_belakang }}</td>
            <td>{{ $mhs->no_hp }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td><a href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a> </td>
            <td>
                <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST">
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