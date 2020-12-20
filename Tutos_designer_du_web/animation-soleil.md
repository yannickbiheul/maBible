# Animation Soleil

### HTML
```
    <div class="soleil">

    </div>

    <div class="sol">
        
    </div>
```

### CSS
```
.sol {
    background-color: #2ecc71;
    height: 200px;
    width: 100%;
    margin-top: 250px;
    position: absolute;
    bottom: 0;
}

.soleil {
    background-color: #f1c40f;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    animation-name: animSun;
    animation-duration: 10s;
    animation-timing-function: linear;
    animation-delay: 0s;
    animation-iteration-count: infinite;
}

@keyframes animSun {
    0% {
        transform: translate(-200px, 600px);
        background: #d35400;
    }
    25% {
        transform: translate(25vw, 50px);
        background: #f1c40f;
    }
    50% {
        transform: translate(50vw, 50px);
        background: #f1c40f;
    }
    75% {
        transform: translate(75vw, 50px);
        background: #f1c40f;
    }
    100% {
        transform: translate(100vw, 600px);
        background: #e74c30;
    }
}

@keyframes colors {
    0% {
        background: #2c3e50;
    }
    10% {
        background: pink;
    }
    30% {
        background: #3498db;
    }
    75% {
        background: #3498db;
    }
    95% {
        background: pink;
    }
    100% {
        background: #2c3e50;
    }
}
```