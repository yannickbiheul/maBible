# Formulaire d'inscription

## HTML
```html
<section id="inscription">
    <form method="POST" action="" id="form-inscription">
    
        <h2 class="title-form">Inscription</h2>
    
        <div class="cont-row">
            <div class="form-cont prenom">
                <p>
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom">
                    <span class="error"></span>
                </p>
            </div>
            <div class="form-cont nom">
                <p>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom">
                    <span class="error"></span>
                </p>
            </div>
        </div>
    
        <div class="cont-row">
            <div class="form-cont pseudo">
                <p>
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" id="pseudo">
                    <span class="error"></span>
                </p>
            </div>
            <div class="form-cont email">
                <p>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <span class="error"></span>
                </p>
            </div>
        </div>
    
        <div class="cont-row">
            <div class="form-cont mdp">
                <p>
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" id="mdp">
                    <span class="error"></span>
                </p>
            </div>
            <div class="form-cont cmdp">
                <p>
                    <label for="cmdp">Confirmer Mot de passe</label>
                    <input type="password" name="cmdp" id="cmdp">
                    <span class="error"></span>
                </p>
            </div>
        </div>
    
        <div class="cont-row">
            <div class="form-cont submit">
                <p>
                    <input type="submit" value="Envoyer">
                </p>
            </div>
        </div>
    
    </form>
</section>
```

## CSS
```css
#inscription {
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

#form-inscription {
    position: relative;
    /* border: 1px solid #ccc; */
}

.title-form {
    margin: 10px 10px 20px 10px;
}

.cont-row {
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-cont {
    position: relative;
    height: 60px;
    margin: 10px 10px 20px 10px;
    /* border: 0.5px solid red; */
}

.form-cont>p {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    margin-bottom: 20px;
}

.form-cont>p>label>small {
    color: green;
}

.form-cont>p>input {
    width: 260px;
    min-width: 220px;
    height: 40px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    padding: 5px;
}

.error{
    position: absolute;
    color: red;
    bottom: -17px;
}

.success{
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    color: green;
    bottom: -17px;
    text-align: center;
    /* border: 1px solid green; */
    width: 100%;
}

@media screen and (max-width: 1200px) {
    .cont-row {
        flex-direction: column;
    }
}
```