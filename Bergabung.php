<!-- <?php
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $level = isset($_POST['level']) ? $_POST['level'] : '';
    $role = isset($_POST['role']) ? $_POST['role'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Member Baru Selamat Datang!</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="Logo Tim">
            </div>
<nav>
    <ul>
        <li><a href="index.html">Beranda</a></li>
        <li><a href="#tim">Guild Waker!</a></li>
        <li><a href="#about">About Us</a></li>
    </ul>
    <button id="darkModeToggle" class="dark-mode-button"></button>
</nav>
        </div>
    </header>

    <main>
        <?=
        $username
        ?>
        <?=
        $level
        ?>
        <?=
        $role
        ?>
    </main>

    <footer>
        <p>&copy; #GUILDWAKER</p>
    </footer>
    <script src="script.js"></script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Selamat Datang, Member Baru</title>
</head>
<body>
    <button id="darkModeToggle" class="dark-mode-button"></button>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="Logo Tim">
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Beranda</a></li>   
                    <li><a href="me.html">More About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="member">
            <div class="member-container">
                <div class="member-info">
                    <h2>Member Baru, Selamat Datang!</h2>
                    <div class="member-foto">
                        <img src="member.gif" alt="Foto member">
                    </div>
                    <div class="member-detail">
                        <h3><?php echo $username; ?></h3>
                        <p><?php echo $level; ?></p>
                        <p><?php echo $role; ?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-me">
        <p>&copy; #GUILDWAKER</p>
    </footer>
        <script src="script.js"></script>
</body>
</html>

