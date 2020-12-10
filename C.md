# Le langage C

## Permutation de 2 variables
1) inclusion d'une librairie stdio.h pour "Standard Input Output" pour gérer les données qui entrent dans le programme pour être traitées et envoyées sur la sortie standard . Ici l'entrée standard sera le clavier pour entrer des entiers et  la sortie est effectuée par un 1er printf qui affiche la chaine pour questionner et un printf suite à une opération sur 2 variables.

2) déclaration de 3 variables de type entières (c'est à dire qui vont réserver 32 bit de mémoire chacune sur un système 32 bits sinon 64 bites sur un système 64 bits, souvenez-vous remplis de 1 et de 0, chacune palcée en mémoire à une adresse mémoire).

3) utilisation de printf pour afficher une chaine de caractères et pour afficher une chaine de caractère et les valeur numériques grâce au format %d (nombre entier)

4) Utilisation de scanf pour attendre une saisie du clavier et pour stocker sa valeur à l'adresse ou se trouvent les variables a et b ( &a , &b )
```
$include<stdio.h>

int main() {
    int a, b, tmp;
    printf("Entrez deux entiers a et b : \n");
    scanf("%d%d", &a, &b);
    printf("Avant permutation : a = %d et b = %d. \n", a, b);
    tmp = a;
    a = b;
    b = tmp;
    printf("Après permutation : a = %d et b = %d. \n", a, b);
}
```

## Modulo
Un entier saisi est-il paire ou impair ?
Les opérateurs arithmétiques useul sont + , - , * , / , un opérateur supplémentaire appelé modulo noté %  permet de récupérer la partie entière du reste d'une division.