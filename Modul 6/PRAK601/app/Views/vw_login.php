<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 0;
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://plus.unsplash.com/premium_photo-1677567996070-68fa4181775a?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .form-signin img {
            margin-bottom: 20px;
        }

        .form-signin h1 {
            margin-bottom: 10px;
            font-size: 24px;
            font-weight: normal;
        }

        .form-signin p {
            margin-bottom: 20px;
            font-size: 14px;
            color: #6c757d;
        }

        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-signin button {
            width: 50%;
            padding: 10px;
            background-color: #f0768b;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-signin button:hover {
            background-color: #f0768b;
        }

        .form-signin .alert {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            color: #856404;
            background-color: rgba(255, 253, 220, 0.8); 
            border: 1px solid #ffeeba;
            display: none; 
            position: relative;
        }

        .form-signin .text-muted {
            color: #6c757d;
            margin-top: 20px;
        }

        .btn-register {
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 12px;
            color: #007bff;
            cursor: pointer;
        }

        .btn-register:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <main class="form-signin">
        <!-- Alert untuk informasi saat halaman dimuat -->
        <div class="alert" id="initial-alert" style="display: block;">
            Login terlebih dahulu!
        </div>

        <!-- Alert untuk kesalahan login -->
        <div class="alert" style="display: <?php echo (session()->getFlashdata('error')) ? 'block' : 'none'; ?>;">
            <?= session()->getFlashdata('error'); ?>
        </div>

        <form method="post" action="<?= base_url(); ?>/login/process">
            <?= csrf_field(); ?>
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <p>Register dulu apabila belum memiliki akun</p>

            <input type="text" name="username" id="username" placeholder="Username" required autofocus>
            <input type="password" name="password" id="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>
        <span class="btn-register" onclick="window.location.href='<?php echo base_url('register'); ?>'">Register</span>
    </main>

</body>

</html>
