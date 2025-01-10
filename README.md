# Symfony Docker (PHP8 / Caddy / Postgresql)

A [Docker](https://www.docker.com/)-based installer and runtime for the [Symfony](https://symfony.com) web framework, with full [HTTP/2](https://symfony.com/doc/current/weblink.html), HTTP/3 and HTTPS support.

## Getting Started

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/)
2. Run `docker compose build --pull --no-cache` to build fresh images
3. Run `docker compose up` (the logs will be displayed in the current shell) or Run `docker compose up -d` to run in background 
4. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)
5. Run `docker compose down --remove-orphans` to stop the Docker containers.
6. Run `docker compose logs -f` to display current logs, `docker compose logs -f [CONTAINER_NAME]` to display specific container's current logs 

# TP Noté Symfony
Objectif :
Créer un projet Symfony avec un thème donné et des features à implémenter pour valider le TP. Le but est de montrer que vous avez compris les bases de Symfony et que vous êtes capable de créer un projet complet avec des features de base.

Pas besoin que le site soit une oeuvre d'art, par contre il faut que ce soit un minimum présentable et que ça fonctionne.

Liste des TP possibles :

9 - Tutoriels -> Matières, Tutoriels, Chapitres, Commentaires


Features à faire sur les projets :
Créer les entités et faire les relations (minimum 4 entités)
Créer des fixtures (PHP ou YAML)
Faire l'authentification
login
mdp oublié, reset mdp
Avoir 3 roles différents (ADMIN, USER, BANNED)
Afficher du contenu dynamiquement en fonction de si l'utilisateur est connecté ou non
Si connecté, afficher son nom et prénom
Si non connecté, afficher un bouton pour se connecter
Si connecté, afficher un bouton pour se déconnecter
Afficher du contenu dynamiquement en fonction de si l'utilisateur à certains roles ou non
Si ADMIN, afficher un bouton pour accéder à l'admin
Si USER, afficher un bouton pour accéder à son profil
Si BANNED, afficher un message pour dire qu'il est banni et ne pas lui afficher les pages
Faire les pages pour lire/créer/modifier/supprimer les différentes entités
Pensez à sécuriser les formulaires et les routes

Autre infos
Toute chose qui n'est pas demandé fera des points en +

Plus d'entités = Pts en +
Feature pas demandé = Pts en +
Techno en + = Pts en +
etc ...
Pour les plus déters :
Exemples de features avancées pour taper le 21/20 :

Brancher une API SMS
Brancher une API de paiement
Faire un système de recherche
Faire un système de filtres
Brancher ChatGPT pour simplfier la rédaction de contenu pour vos entités
Faire un système de notifications
Faire du temps réel avec Mercure
Faire de l'async avec RabbitMQ