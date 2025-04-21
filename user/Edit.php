<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            padding-top: 50px;
        }

        .brand {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        h3 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
    </style>
</head>
<body>

<?php
include('../koneksi.php');
$id = $_GET['id'];
$show = mysqli_query($conn, "SELECT * FROM user WHERE iduser='$id'");

if (mysqli_num_rows($show) == 0) {
    echo '<script>window.history.back()</script>';
} else {
    $data = mysqli_fetch_assoc($show);
}
?>

<div class="container">
    <div class="brand">ALAMAK</div>

    <div class="mb-3 text-center">
        <a href="index.php" class="btn btn-info me-2">Beranda</a>
        <a href="tambah.php" class="btn btn-primary">+Tambah</a>
    </div>

    <div class="form-container">
        <h3>Edit Data User</h3>
        <form action="edit-proses.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="mb-3">
                <label for="iduser" class="form-label">ID User</label>
                <input type="text" class="form-control" name="iduser" id="iduser" value="<?php echo $data['iduser']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $data['username']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" id="password" value="<?php echo $data['password']; ?>" required>
            </div>

            <div class="mb-4">
                <label for="level" class="form-label">Level</label>
                <select class="form-select" name="level" id="level" required>
                    <option value="admin" <?php if ($data['level'] == 'admin') echo 'selected'; ?>>Admin</option>
                    <option value="user" <?php if ($data['level'] == 'user') echo 'selected'; ?>>User</option>
                </select>
            </div>

            <div class="text-end">
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
