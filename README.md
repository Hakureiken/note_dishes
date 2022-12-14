# Le contexte

Une startup spécialisée dans le monde de l'agro-alimentaire souhaite mettre en place une nouvelle App permettant aux internautes de noter les restaurants où ils ont déjeuné ou diné.

Cette future App appelée [FoodNotes.com](http://foodnotes.com) sera basée sur un concept simple :

- Pour chaque visite dans un restaurant, l'internaute pourra donner une note
- Chaque visite pourra être une note, à la condition que ce soit un nouveau plat, il sera donc impossible de noter 2 fois une choucroute par exemple
- La note devra être calculée et tenir compte de 4 critères ci-dessous :
    - La présentation
    - Les proportions
    - Le goût
    - Le prix
- Une note moyenne sera alors établie, mais seront stockées en bases les notes détaillées, même si seule la moyenne sera visible sur le site
- Les restaurateurs pourront quant à eux, via l'accès à une API, aux détails de leurs notes selon les plats, utilisateurs et autres informations : le lien api devra alors être composé d'une clé privée sans laquelle nos données JSON ne pourraient s'afficher
*Exemple : [http://127.0.0.1/apiv1/users](http://127.0.0.1/apiv1/users)*
- Une zone Administrateur devra également être accessible pour pouvoir modérer les différentes contenus
- L'ajout d'une photo par l'utilisateur serait un plus évidemment
- Chaque restaurant pourra être consulté ainsi que chacun de ses plats
- Les profils utilisateurs seront aussi accessibles depuis l'API Restaurateur

# Bon à savoir

La partie visuelle importe peu dans un premier temps, mais un minimum d'ergonomie et d'expérience utilisateur sera appréciée.

# Les consignes

Pour réaliser cette App, il sera impératif :

- [ ]  D'utiliser le framework Laravel en version 8
- [ ]  De créer le projet sous le nom "Foodnotes_prenom"
- [ ]  De créer une database avec le nom "foodnotes_prenom"
- [ ]  D'utiliser les migrations
- [ ]  De créer des factories à Seeder avec PHP Faker
- [ ]  De créer un compte Admin avec comme mot de passe : "password"
- [ ]  De versioner le projet