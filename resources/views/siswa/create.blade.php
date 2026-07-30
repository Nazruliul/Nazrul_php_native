<h1>Tambah Data Siswa</h1>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <label>NIS:</label>
    <input type="text" name="nis"><br><br>

    <label>Nama:</label>
    <input type="text" name="nama"><br><br>

    <label>Kelas:</label>
    <input type="text" name="kelas"><br><br>

    <label>Jurusan:</label>
    <input type="text" name="jurusan"><br><br>

    <label>Jenis Kelamin:</label>
    <select name="jenis_kelamin">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br><br>

    <label>Alamat:</label>
    <input type="text" name="alamat"><br><br>

    <button type="submit">Simpan</button>
</form>
