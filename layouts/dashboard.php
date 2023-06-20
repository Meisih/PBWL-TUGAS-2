<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TUGAS PBWL | PLN</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/pln.jpgg" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/pln.jpg" class="brand">
			<div class="user">PT.PLN</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/home.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/golongan">
						<img class="icon" src="<?php echo AST; ?>/img/golongan.jpg" alt=""> Data Golongan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/users">
						<img class="icon" src="<?php echo AST; ?>/img/user.jpg" alt=""> Data Users
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/pelanggan">
						<img class="icon" src="<?php echo AST; ?>/img/pelanggan.jpg" alt=""> Data Pelanggan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/Log/logout" onclick="return confirm('Apakah yakin ingin keluar?')">
						<img class="icon" src="<?php echo AST; ?>/img/logout.jpg" alt=""> Logout
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023. MEISIH PRANINGSIH
		</footer>
	</main>

</body>

</html>