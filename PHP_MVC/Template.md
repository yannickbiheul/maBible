# Template

## HTML
```html
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title><?= $title ?></title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Essai blog MVC'>
    <!-- CSS -->
    <link rel='stylesheet' href='assets/css/main.css'>
    <!-- GOOGLE FONTS -->
    <!-- Roboto -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    <!-- Quicksand -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Quicksand&display=swap' rel='stylesheet'>
    <!-- Bangers -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Bangers&display=swap' rel='stylesheet'>
    <!-- FONTAWESOME -->
    <script src='https://kit.fontawesome.com/29ef46100e.js' crossorigin='anonymous'></script>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
</head>

<body>

    <nav>
        <a href="index.php?action=home">Accueil</a>
        <a href="index.php?action=posts">Articles</a>
        <?php
            if (isset($_SESSION['pseudo'])) {
                echo '<a href="index.php?action=memberPage">'. $_SESSION['pseudo'] .'</a>';
            } else {
                echo '<a href="index.php?action=signup">Inscription</a>';
            }
        ?>
    </nav>

    <main>
        <?= $content ?>
    </main>

    <!-- JAVASCRIPT -->
    <script src='assets/js/main.js'></script>
</body>
</html>
```

## CSS
```css
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: var(--quicksand);
}

body {
    width: 100%;
    min-height: 100vh;
}

nav {
    position: fixed;
    top: 0;

    width: 100%;
    height: 80px;

    display: flex;
    justify-content: flex-end;
    align-items: center;

    /* background-color: #eee; */
}

nav>a {
    text-decoration: none;
    color: #000;
    margin: 10px;
}

nav>a:last-child {
    margin-right: 20px;
}

nav>a:hover {
    font-weight: bold;
}

main {
    width: 100%;
    min-height: 100vh;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    padding-top: 80px;
}
```