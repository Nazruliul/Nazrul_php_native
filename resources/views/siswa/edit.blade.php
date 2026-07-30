<h1>Edit Data Siswa</h1>

<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $siswa->nama }}"><br><br>

    <label>Kelas:</label>
    <input type="text" name="kelas" value="{{ $siswa->kelas }}"><br><br>

    <button type="submit">Update</button>
</form>
