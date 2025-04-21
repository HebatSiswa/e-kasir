<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            padding-top: 50px;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        h2, h3 {
            text-align: center;
            color: #0d6efd;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
    </style>
</head>
<body>

<div class="container">
   
    <div class="text-center mb-4">
    <a href="index.php">ALAMAK</a>
    </div>

    <div class="form-container">
        <h3>Tambah Data User</h3>
        <form action="tambah-proses.php" method="post">
            <div class="mb-3">
                <label for="iduser" class="form-label">ID User</label>
                <input type="text" class="form-control" name="iduser" id="iduser" required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select class="form-select" name="level" id="level" required>
                    <option value="admin">Admin</option>
                    <option value="user">Kasir</option>
                </select>
            </div>

            <div class="text-end">
                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
