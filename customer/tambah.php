<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-top: 5px;
            margin-left: 10px;
        }


        form {
            width: 170%;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="proses_customer.php" method="POST" onsubmit="return validateEmail();">
                    <table class="table">
                        <h1>TAMBAH DATA CUSTOMER</h1>
                        <tr>
                            <td>
                                First Name
                            </td>
                            <td>
                                <input type="text" name="first_name" class="form-control" required pattern="[A-Za-z]+">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Last Name
                            </td>
                            <td>
                                <input type="text" name="last_name" class="form-control" required pattern="[A-Za-z]+">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                <input type="text" id="email" name="email" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Phone
                            </td>
                            <td>
                                <input type="number" name="phone" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
                <script>
                    function validateEmail() {
                        var emailInput = document.getElementById("email");
                        var emailValue = emailInput.value;
                        var emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.(com|co\.id)$/;

                        if (!emailPattern.test(emailValue)) {
                            alert("Email yang dimasukkan salah.");
                            return false; //  Mencegah pengiriman formulir
                        }

                        return true; // Memungkinkan pengiriman formulir

                    }
                </script>

</body>

</html>