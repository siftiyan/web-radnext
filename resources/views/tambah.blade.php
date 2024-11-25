<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Tambah Berita</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f5f7;
            color: #333;
        }

        /* Layout */
        .dashboard {
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #24292e;
            color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .sidebar nav ul {
            list-style: none;
        }

        .sidebar nav ul li {
            margin: 10px 0;
        }

        .sidebar nav ul li a {
            color: #bdbdbd;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .sidebar nav ul li a.active,
        .sidebar nav ul li a:hover {
            background-color: #0366d6;
            color: #fff;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 24px;
            color: #24292e;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-primary {
            background-color: #0366d6;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0256b3;
        }

        /* Modal Overlay */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal.hidden {
            display: none;
        }

        /* Modal Content */
        .modal-content {
            background: white;
            padding: 30px;
            width: 500px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .modal-content h2 {
            margin-bottom: 20px;
            color: #0366d6;
        }

        .modal-content form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .modal-content form input,
        .modal-content form select,
        .modal-content form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
        }

        .modal-content form textarea {
            resize: vertical;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Admin Dashboard</h2>
            <nav>
                <ul>
                    <li><a href="#" class="active">Berita</a></li>
                    <li><a href="#">Kategori</a></li>
                    <li><a href="#">Pengguna</a></li>
                    <li><a href="#">Pengaturan</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Manajemen Berita</h1>
                <button class="btn btn-primary" onclick="openForm()">+ Tambah Berita</button>
            </header>
        </main>
    </div>

    <!-- Form Tambah/Edit Berita -->
    <div id="form-modal" class="modal hidden">
        <div class="modal-content">
            <h2>Tambah Berita</h2>
            <form>
                <!-- Input Judul -->
                <label for="title">Judul:</label>
                <input type="text" id="title" name="title" placeholder="Masukkan judul berita">

                <!-- Input Kategori -->
                <label for="category">Kategori:</label>
                <select id="category" name="category">
                    <option value="Teknologi">Teknologi</option>
                    <option value="Bisnis">Bisnis</option>
                    <option value="Kesehatan">Kesehatan</option>
                </select>

                <!-- Input Konten -->
                <label for="content">Konten:</label>
                <textarea id="content" name="content" rows="5" placeholder="Masukkan isi berita"></textarea>

                <!-- Input Status -->
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="Draft">Draft</option>
                    <option value="Published">Published</option>
                </select>

                <!-- Aksi Form -->
                <div class="form-actions">
                    <button type="button" class="btn btn-secondary" onclick="closeForm()">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Fungsi untuk membuka modal
        function openForm() {
            document.getElementById('form-modal').classList.remove('hidden');
        }

        // Fungsi untuk menutup modal
        function closeForm() {
            document.getElementById('form-modal').classList.add('hidden');
        }
    </script>
</body>
</html>
