<h1>Data Siswa</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('siswa.create') }}">Tambah Siswa</a>

<table border="1" cellpadding="8">
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    @foreach($siswas as $siswa)
    <tr>
        <td>{{ $siswa->nis }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->kelas }}</td>
        <td>
            <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $siswas->links() }}
