<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web CRUD Arliyando R.L</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <!-- Tambahkan menu navigasi di sini -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="index.php">Customer</a></li>
                    <li><a href="../produk/index.php">Produk</a></li>
                    <li><a href="../pesanan/index.php">Order</a></li>
                </ul>
                <?php
                include "koneksi.php";
                $query = mysqli_query($conn, "SELECT * from customer ORDER BY id DESC");
                ?>
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h1>DATA CUSTOMER </h1>
                        </center>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-info" style="margin-bottom:10px" href="tambah.php?tambah=Nama Customer"> + Tambah Customer </a>
                        <table class="table table-striped table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php
                            if (mysqli_num_rows($query) > 0) {
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data["first_name"] ?></td>
                                        <td><?php echo $data["last_name"] ?></td>
                                        <td><?php echo $data["email"] ?></td>
                                        <td><?php echo $data["phone"] ?></td>
                                        <td><?php echo $data["created_at"] ?></td>
                                        <td><?php echo $data["updated_at"] ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $data["id"] ?>" class="btn btn-sm btn-warning" onclick="return confirm('Apakah anda yakin ingin mengedit data?');">Edit</a>
                                            <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin hapus data?');">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                    $no++;
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
</body>
<script src="https://ajax.googleapis.com/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>