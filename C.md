# Le langage C

## Permutation de 2 variables
1) inclusion d'une librairie stdio.h pour "Standard Input Output" pour gérer les données qui entrent dans le programme pour être traitées et envoyées sur la sortie standard . Ici l'entrée standard sera le clavier pour entrer des entiers et  la sortie est effectuée par un 1er printf qui affiche la chaine pour questionner et un printf suite à une opération sur 2 variables.

2) déclaration de 3 variables de type entières (c'est à dire qui vont réserver 32 bit de mémoire chacune sur un système 32 bits sinon 64 bites sur un système 64 bits, souvenez-vous remplis de 1 et de 0, chacune palcée en mémoire à une adresse mémoire).

3) utilisation de printf pour afficher une chaine de caractères et pour afficher une chaine de caractère et les valeur numériques grâce au format %d (nombre entier)

4) Utilisation de scanf pour attendre une saisie du clavier et pour stocker sa valeur à l'adresse ou se trouvent les variables a et b ( &a , &b )
```
#include<stdio.h>

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
Les opérateurs arithmétiques useul sont + , - , * , / .

Un opérateur supplémentaire appelé modulo (noté %)  permet de récupérer la partie entière du reste d'une division.
```
#include<stdio.h>

// Pair ou impair
int main() {
    int nbr;
    printf("Entrez un entier : \n");
    scanf("%d", $nbr);

    if (nbr % 2 == 0) {
        printf("Pair\n");
    } else {
        printf("Impair\n);
    }
}
```

## Le type char
Découverte du type char qui est en fait un entier codé sur 8 bit, tout est numérique en mémoire (0 et 1 représentant des nombres).

la lettre A a pour code ASCII 65 , c'est une représentation décidée au début de l'informatique par les américains qui n'ont pas de caractères spéciaux comme é,è,ö...etc... 

Pour cette raison , pour couvrir tous les  alphabets du monde le code UNICODE a été créée UTF-8, UTF-16. 

On utilisera généralement la norme UTF-8 pour le web qui utilise l'UNICODE uniquement quand c'est nécessaire sinon il utilise l'ASCII. 

Dans nos exemple C basiques seul le code ASCII fonctionne actuellement, mais c'est suffisant simplement pour effectuer des exercices d'algorithme.

char étant un nombre on peut effectuer une opération numérique, donc si on exécute +1 sur ce char et que je l'affiche en tant que caractère je passe au caractère suivant.
```
#include<stdio.h>

int main() {
    char lettre;
    printf("Donnez une lettre entre 'a' et 'y' ou entre 'A' et 'Y' : \n");

    scanf("%c", $lettre);
    lettre++ // ???? Opérateur ++ sur une lettre ???? WTF !
    printf("La lettre suivante est : %c, \n", lettre);
    return 0;
}
```

## Boucle
Ce programme va afficher 100 fois la chaine "x" sur une ligne. pour passer à la ligne il faut ajouter le code \n dans le printf("x\n");
```
#include<stdio.h>

int main() {
    int i;

    for (i = 0; i < 100; i++) {
        printf("x");
    }
}
```

## Boucle Do While et condition If
Boucle infinie tans que la condition définie après le while est vraie. Le for nécessitait de connaitre la longueur des éléments à traiter ici pas de taille à spécifier . Le programme suivant est assez parlant.
```
#include<stdio.h>

int main() {
    int yolo = 12;
    int x;
    printf("Tapez un nombre \n");

    do {
        scanf("%d", &x);
        if (x > yolo) {
            printf("Trop grand \n");
        } else if (x < yolo) {
            printf("Trop petit \n");
        } else {
            printf("Bien joué ! \n");
        }
    } while (yolo != x);
}
```