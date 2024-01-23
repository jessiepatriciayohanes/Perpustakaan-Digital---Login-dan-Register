<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register User - Aplikasi Perpustakaan Digital</title>
	<link rel="icon" href="logo smk mts.png" type="image/png">
	<style>
        body {
            background-image: url("bg5.jpg");
            background-size: cover;
            background-color: #1b1c1e;
        }
        h1 {
            color: white;
            margin-left: 580px;
        }
        h2 {
            text-align: center;
        }
        p {
            font-size: 15pt;
            margin-left: 25px;
        }
        .fill {
            width: 445px;
            height: 30px;
            margin-left: 25px;
        }
        .img1 {
            margin-left: 30px;
        }
        .link {
            margin-left: 25px;
        }
        .card {
            background-color: white;
            width: 500px;
            height: 550px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 5px 10px 30px #000;
            border-radius: 10px;
        }
        button {
            width: 100px;
            height: 40px;
            background-color: #184a88;
            color: white;
            font-size: 12pt;
            margin-top: 40px;
            margin-left: 25px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div style="display: flex; align-items: center;">
    <img src="logo smk mts.png" width="50px" height="50px">
    <h1>Register Pengguna</h1>
    </div>
    <div class="card">
        <br>
        <h2>Isilah form register ini</h2>
        <img src="img form2.jpg" width="440px" height="125px" class="img1">
        <p>Username :</p>
        <input type="text" name="username" placeholder="Masukkan Username Anda..." class="fill" inquired>
        <p>Password :</p>
        <input type="password" name="password" placeholder="Masukkan Password Anda..." class="fill" inquired>
        <button type="submit" value="Login">Submit</button>
        <br>
        <br>
        <a href="index.php" class="link">Klik disini apabila Anda sudah punya akun</a>

    </div> 
</body>
</html>