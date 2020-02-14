# PartielSymfony
## Réponse aux questions
- 1/ Le conteneur de services est un objet dont le rôle est de lancer les services qu'on lui demande d'appeler. Son fonctionnement se rapproche de celui d'une fonction, le but étant de ne pas avoir à recréer l'objet à chaque fois qu'on voudrait l'utiliser mais juste d'appeler le conteneur.

- 2/La commande make:entity va créer un objet avec un type (ex.string,int) dans la database, tandis que la commande make:user créer un utilisateur dans la database.

- 3/ php bin/console doctrine:fixtures:load.

- 4/ Semver est un moyen de gérer le versionnage, son fonctionnement est simple : On a trois chiffres 0.0.0, le premier chiffre est dit majeur, cela veut dire que il est augmenté si l'application présente des changements qui ne seront pas compatibles avec la version précédente. Le deuxième chiffre est appelé mineur, il est augmenté quand on ajoute des fonctionnalité qui fonctionnent avec la version précédente. Enfin le dernier chiffre est appelé correctif, il est augmenté quand on effectue des corrections de bug etc...

- 5/ Repository est un desgin pattern qui permet d'encapsuler les requêtes envoyées a la base de donnée.

- 6/ php bin/console debug:router.

- 7/ La variable globale est {{ }}.

- 8/ 

- 9/ php bin/console make:controller.

- 10/ Symfony Flex permet de gérer les applications Symfony et d'ajouter des paquet/dépendances officiels ou non à notre projet.
