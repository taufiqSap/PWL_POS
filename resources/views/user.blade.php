<!DOCTYPE html>
<html>
    <head>
        <title>Data User</title>
    </head>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['username'] }}</td>
                <td>{{ $user['nama'] }}</td>
                <td>{{ $user['level_id'] }}</td>
                <td>{{ $user['level_kode'] }}</td>
                <td>{{ $user['level_nama'] }}</td>
                <td>
                    <a href="{{ route('user.edit', $user['id']) }}">Ubah</a> |
                    <a href="{{ route('user.delete', $user['id']) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</html> 