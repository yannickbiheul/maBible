# Flip Cards

### HTML
```
<div class="flip-box">
    <div class="flip-box-inner">
        <div class="flip-box-front">
            <h2>Front</h2>
        </div>
        <div class="flip-box-back">
            <h2>Back</h2>
        </div>
    </div>
</div>
```

### CSS
```
.flip-box {
    width: 300px;
    height: 200px;
    perspective: 500px;
}

.flip-box-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

.flip-box-front {
    background-color: #bbb;
    color: #000;
    border: 1px solid #ccc;
    box-shadow: 4px 4px 4px #ccc;
}

.flip-box-back {
    background-color: dodgerblue;
    color: #fff;
    transform: rotateY(180deg);
    border: 1px solid #ccc;
    box-shadow: 4px 4px 4px #ccc;
}

.flip-box-front, .flip-box-back {
    backface-visibility: hidden;
    position: absolute;
    width: 100%;
    height: 100%;
}

.flip-box:hover .flip-box-inner {
    transform: rotateY(180deg);
}
```