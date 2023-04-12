# Quizz 8

Avant de faire le quizz, il sera nécessaire d'installer composer et d'exécuter les commandes suivantes :

```bash
cd quizz8
composer dump-autoload
```

Quand j'exécute le programme avec la commande suivante :

```bash
php quizz8/index.php
```

J'obtiens l'erreur suivante :

```bash
100
180
PHP Fatal error:  Class App\Dices\D20 contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (App\Dices\DiceInterface::roll) in /home/zak/Documents/code/quizz-entretien/quizz8/Dices/D20.php on line 5
```

**Question** : 
1. Quelle est l'erreur ?
2. Comment corriger cette erreur ?
3. L'erreur étant corrigée. J'ai mes personnages qui ne perdent pas de point de vie. Pourquoi ? Comment corriger cela ?
