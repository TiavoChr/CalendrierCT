# Application client affichage graohique du calendrier

## Mise en place

il suffit d'executer l'application calendrierCT sur un serveur Apache 
- **Sur linux**: mettre le dossier de l'application sur /var/www/ il faut faire attention avec la propriété du répertoire


- **Xampp**: d'abord installer xampp 
https://www.ionos.fr/digitalguide/serveur/outils/tutoriel-xampp-creer-un-serveur-de-test-local/
et mettre le dossier de l'application dans le dossier htdocs 

puis via un navigateur entrer l'url du serveur exemple en local c'est http://localhost:port_du_serveur/calendrierCT ou http://localhost/calendrierCT si le serveur est sur le port par défaut

- **Nb**: l'Api doit êtres aussi mis sur un serveur apache par exemple
et bien s'assurer que l'url dans index.php est bien celui de l'api http://url_du_serveur_de_l_api_/bibliothequeCalendrier/api.php