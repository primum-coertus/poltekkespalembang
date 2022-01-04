<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | POLTEKKES KEMENKES PALEMBANG</title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo.jpg" type="image/x-icon">
	<link rel="stylesheet" href="<?= base_url() ?>assets/styles/base-style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/styles/form-style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/styles/alert-style.css">
    <script defer src="<?= base_url() ?>assets/scripts/jquery-3.6.0.min.js"></script>
    <script defer src="<?= base_url() ?>assets/scripts/base-script.js"></script>
</head>
<body>
    <header>
        <nav>
            <img src="<?= base_url() ?>assets/img/logo.jpg" alt="logo">
            <div class="brand" id="<?= base_url(); ?>admin">
                <h3>Penerimaan Mahasiswa Baru</h3>
                <h3>Poltekkes Kemenkes Palembang</h3>
            </div>
        </nav>
    </header>
    <main>
        <div class="form-login">
            <h1>Login Admin</h1>
            <form action="<?= base_url() ?>Admin_Controller/login" method="POST">
                <span class="input-text">
                    <label for="username">Username</label>
                    <input type="text" class="text" name="username" id="username" autofocus value="<?= set_value('username') ?>">
                </span>
                <span class="input-text">
                    <label for="password">Password</label>
                    <input type="password" class="text" name="password" id="password" value="<?= set_value('password') ?>">
                </span>
                <div class="btn-page">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
		<div class="scroll">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6 1.41 1.41z"/></svg>
        </div>
    </main>
</body>
</html>
