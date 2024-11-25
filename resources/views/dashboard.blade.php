<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Manajemen Berita</title>
    <link rel="stylesheet" href="css/dashboard.css">

</head>

<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Admin Dashboard</h2>
            <nav>
                <ul>
                    <li><a href="#" class="active">Berita</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Manajemen Berita</h1>
                <button class="btn btn-primary" onclick="openModal('modal-add')">+ Tambah Berita</button>
            </header>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Contoh Berita</td>
                            <td>Teknologi</td>
                            <td>25 Nov 2024</td>
                            <td><span class="badge badge-published">Published</span></td>
                            <td>
                                <button class="btn btn-edit" onclick="openModal('modal-edit')">Edit</button>
                                <button class="btn btn-delete" onclick="openModal('modal-delete')">Hapus</button>
                                <button class="btn btn-preview" onclick="openModal('modal-preview')">Preview</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Form Tambah -->
    <div id="modal-add" class="modal hidden">
        <div class="modal-content">
            <h2>Tambah Berita</h2>
            <form>
                <label for="title">Judul:</label>
                <input type="text" id="title" name="title">
                <label for="category">Kategori:</label>
                <select id="category" name="category">
                    <option>Teknologi</option>
                    <option>Bisnis</option>
                </select>
                <label for="content">Konten:</label>
                <textarea id="content" rows="5"></textarea>
                <div class="form-actions">
                    <button class="btn btn-secondary" onclick="closeModal('modal-add')">Batal</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Form Hapus -->
    <div id="modal-delete" class="modal hidden">
        <div class="modal-content">
            <h2>Hapus Berita</h2>
            <p>Apakah Anda yakin ingin menghapus berita ini?</p>
            <div class="form-actions">
                <button class="btn btn-secondary" onclick="closeModal('modal-delete')">Batal</button>
                <button class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>

    <!-- Form Edit -->
    <div id="modal-edit" class="modal hidden">
        <div class="modal-content">
            <h2>Edit Berita</h2>
            <form>
                <label for="edit-title">Judul:</label>
                <input type="text" id="edit-title" name="title" value="Contoh Berita"
                    placeholder="Masukkan judul berita">

                <label for="edit-category">Kategori:</label>
                <select id="edit-category" name="category">
                    <option value="Teknologi" selected>Teknologi</option>
                    <option value="Bisnis">Bisnis</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="Pendidikan">Pendidikan</option>
                </select>

                <label for="edit-content">Konten:</label>
                <textarea id="edit-content" name="content" rows="5" placeholder="Masukkan isi berita">Isi berita yang dapat diubah sesuai dengan konten terbaru.</textarea>

                <label for="edit-status">Status:</label>
                <select id="edit-status" name="status">
                    <option value="Draft">Draft</option>
                    <option value="Published" selected>Published</option>
                </select>

                <div class="form-actions">
                    <button type="button" class="btn btn-secondary" onclick="closeModal('modal-edit')">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Form Preview -->
    <div id="modal-preview" class="modal hidden">
        <div class="modal-content">
            <h2>Preview Berita</h2>
            <h3>Contoh Berita</h3>
            <p>Kategori: Teknologi</p>
            <p>Isi berita di sini...</p>
            <div class="form-actions">
                <button class="btn btn-secondary" onclick="closeModal('modal-preview')">Tutup</button>
            </div>
        </div>
    </div>

    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }
    </script>
</body>

</html>
