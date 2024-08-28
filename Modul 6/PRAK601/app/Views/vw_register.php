<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Custom styles for this template -->
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
            display: flex;
            flex-direction: column;
            background-image: url('https://images.unsplash.com/photo-1457369804613-52c61a468e7d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-repeat: no-repeat;
            background-attachment:fixed;
            background-position: center;
            background-size: cover;
            background-color: #f5f5f5;
            padding: 20px; /* Add padding to body */
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Ensure padding is included in width calculation */
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #f0768b;;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #f0768b;;
        }

        .alert {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            color: #856404;
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
        }

        .footer {
            margin-top: auto;
            padding: 10px 0;
            text-align: center;
            background-color: #e9ecef;
        }

        .footer .container {
            max-width: none;
        }
    </style>
</head>

<body>

    <main class="flex-shrink-0">
        <div class="container">
            <h1>Register Form</h1>
            <hr />
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert">
                    <h4>Periksa Entrian Form</h4>
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/register/process">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="password_conf" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_conf" name="password_conf" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn">Register</button>
                </div>
            </form>
            <hr />
        </div>
    </main>
</body>

</html>
