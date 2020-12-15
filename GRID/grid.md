# CSS GRID

## Création d'un template en CSS GRID
#### HTML
```
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Template Responsive</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Un template responsive en Grid'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/template.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <!-- JAVASCRIPT -->
    <script src='js/template.js' defer></script>
</head>

<body>

    <main>

        <div class="menuBurger">
            <div class="menu">
                <a href="#">Elément 1</a>
                <a href="#">Elément 2</a>
                <a href="#">Elément 3</a>
                <a href="#">Elément 4</a>
                <a href="#">Elément 5</a>
            </div>
        </div>

        <header>
            <h2>Header</h2>
            <div class="boutonBurger">
                <div class="ligne"></div>
            </div>
        </header>

        <nav>
            <p>Navigation</p>
            <a href="#" class="elts">Elément 1</a>
            <a href="#" class="elts">Elément 2</a>
            <a href="#" class="elts">Elément 3</a>
            <a href="#" class="elts">Elément 4</a>
            <a href="#" class="elts">Elément 5</a>
        </nav>

        <section id="accueil">
            <h1>Accueil</h1>
        </section>

        <footer>
            <p>Footer</p>
        </footer>

    </main>

</body>
</html>
```

#### CSS
```
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

:root {
    --blue: #2980b9;
    --green: #27ae60;
    --red: #c0392b;
    --yellow: #f1c40f;
    --orange: #d35400;
}

main {
    width: 100%;
    height: 100vh;
    display: grid;
    grid-template-columns: 0.7fr 4fr;
    grid-template-rows: 1fr 6fr 0.5fr;
    color: #fff;
    position: relative;
}

header {
    grid-column: 1 / 3;
    grid-row: 1 / 2;
    background: linear-gradient(to right, #005c97, #363795);
    display: flex;
    justify-content: center;
    align-items: center;
}

nav {
    grid-column: 1 / 2;
    grid-row: 2 / 3;
    background: linear-gradient(to right, #ece9e6, #ffffff);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

nav p {
    margin-bottom: 40px;
    display: none;
}

nav a {
    text-decoration: none;
    color: #000;
    margin: 10px;
}

.boutonBurger {
    /* border: 1px solid #fff; */
    width: 40px;
    height: 40px;
    margin-right: 20px;
    display: none;
    cursor: pointer;
    z-index: 25;
    position: relative;
}

.ligne {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 4px;
    background-color: #fff;
}

.ligne::before {
    content: "";
    position: absolute;
    bottom: 10px;
    width: 100%;
    height: 4px;
    background-color: #fff;
}

.ligne::after {
    content: "";
    position: absolute;
    top: 10px;
    width: 100%;
    height: 4px;
    background-color: #fff;
}

.menuBurger {
    width: 100vw;
    height: 100vh;
    background: linear-gradient(to right, #005c97, #363795);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 20;
    position: fixed;
    left: -100vw;
    top: 0;
    transition-duration: 0.3s;
}

.menuBurgerOpen {
    width: 100vw;
    height: 100vh;
    background: linear-gradient(to right, #005c97, #363795);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 20;
    position: fixed;
    left: 0;
    top: 0;
}

.menu {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

.menu a {
    text-decoration: none;
    color: #fff;
    margin: 10px;
}

#accueil {
    grid-column: 2 / 3;
    grid-row: 2 / 3;
    background: linear-gradient(45deg, rgba(0, 0, 0, 0.4)50%, rgba(0, 0, 0, 0.4)50%);
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

footer {
    grid-column: 1 / 3;
    grid-row: 3 / 4;
    background: linear-gradient(to right, #005c97, #363795);
    display: flex;
    justify-content: center;
    align-items: center;
}

@media screen and (max-width: 1200px) {
    main {
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 1fr 6fr 1fr;
    }

    header {
        grid-column: 1 / 2;
        grid-row: 1 / 2;
        justify-content: space-between;
    }

    header h2 {
        margin-left: 20px;
    }

    nav {
        grid-column: 1 / 2;
        grid-row: 2 / 3;
        flex-direction: row;
        display: none;
    }

    .boutonBurger {
        display: flex;
    }

    nav p {
        margin: 0;
        display: block;
    }

    .elts {
        display: none;
    }

    #accueil {
        grid-column: 1 / 2;
        grid-row: 2 / 4;
    }

    footer {
        grid-column: 1 / 2;
        grid-row: 4 / 5;
    }
}
```

#### JavaScript
```
// $(".boutonBurger").click(function() {
//     $(".menuBurger").toggle("menuBurgerOpen");
// })

let boutonBurger = document.querySelector(".boutonBurger");
let menuBurger = document.querySelector(".menuBurger");

boutonBurger.addEventListener("click", function() {
    menuBurger.classList.toggle("menuBurgerOpen");
});
```
