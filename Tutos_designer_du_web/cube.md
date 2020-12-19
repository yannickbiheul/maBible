# Cube 3D

### HTML
```
<div class="containerCube">
    <div class="cube">
        <div class="face top"><img src="images/logo_html.png" alt="HTML"></div>
        <div class="face bottom"><img src="images/logo_css.png" alt="CSS"></div>
        <div class="face right"><img src="images/logo_javascript.png" alt="JavaScript"></div>
        <div class="face left"><img src="images/logo_php.png" alt="PHP"></div>
        <div class="face front"><img src="images/logo_mysql.png" alt="MySQL"></div>
        <div class="face back"></div>
    </div>
</div>
```

### CSS
```
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

:root {
    --tailleCube: 150px;
    /* --cubeY = --tailleCube / 2. */
    --cubeY: calc(var(--tailleCube) / 2);
    --speedCube: 10s;
}

body {
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.containerCube {
    width: var(--tailleCube);
    height: var(--tailleCube);
    /* Avec "perspective", on créer un axe Z qui va de l'écran à 1000px vers nous. */
    perspective: 1000px;    
    /* margin: 100px en haut et en bas, auto à gauche et à droite, et 0 en bas. */
    margin: 100px auto 0;
}

.cube {
    width: 100%;
    height: 100%;
    position: relative;
    /* preserve-3d permet de jouer avec un environnement 3d, possible grâce à perspective de containerCube. */
    transform-style: preserve-3d;
    /* Keyframe "spin" durée 15 secondes à l'infini et linéaire. */
    animation: spin var(--speedCube) infinite linear;
}

/* Keyframe sur le cube, rotation sur X et Y. */
@keyframes spin {
    from {
        transform: rotateX(0deg) rotateY(0deg);
    }
    to {
        transform: rotateX(360deg) rotateY(360deg);
    }
}

.face {
    position: absolute;
    width: var(--tailleCube);
    height: var(--tailleCube);
}

.face>img {
    width: 100%;
}

.top {
    background: linear-gradient(to right, #373b44, #4286f4);
    background-size: cover;
    background-position: center;
    /* rotateX() permet de faire tourner la face autour de X (comme une broche). */
    /* translateZ() permet de rapprocher la face vers nous. */
    /* En ajoutant translateZ(100px), la face va tourner autour d'un cylindre de 100px avec rotateX(). */
    transform: rotateX(90deg) translateZ(var(--cubeY));
}

.bottom {
    background: linear-gradient(to right, #373b44, #4286f4);
    background-size: cover;
    background-position: center;
    transform: rotateX(-90deg) translateZ(var(--cubeY));
}

.right {
    background: linear-gradient(to right, #373b44, #4286f4);
    background-size: cover;
    background-position: center;
    transform: rotateY(90deg) translateZ(var(--cubeY));
}

.left {
    background: linear-gradient(to right, #373b44, #4286f4);
    background-size: cover;
    background-position: center;
    transform: rotateY(-90deg) translateZ(var(--cubeY));
}

.front {
    background: linear-gradient(to right, #373b44, #4286f4);
    background-size: cover;
    background-position: center;
    transform: rotateX(0deg) translateZ(var(--cubeY));
}

.back {
    background: linear-gradient(to right, #373b44, #4286f4);
    background-size: cover;
    background-position: center;
    transform: rotateX(-180deg) translateZ(var(--cubeY));
}
```