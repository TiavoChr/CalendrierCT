<!DOCTYPE html>
<html>
<head>
    <title>Application de Calendrier</title>
</head>
<body>
    <h1>Générer un Calendrier avec Événements</h1>
    <form id="calendrierForm">
        <label for="mois">Mois (1-12) :</label>
        <input type="number" id="mois" name="mois" min="1" max="12" required><br><br>

        <label for="annee">Année :</label>
        <input type="number" id="annee" name="annee" required><br><br>

        <input type="button" value="Générer le Calendrier" onclick="genererCalendrier()">
    </form>

    <h2>Calendrier Généré</h2>
    <div id="calendrier"></div>

    <script>
    function genererCalendrier() {
        var mois = document.getElementById("mois").value;
        var annee = document.getElementById("annee").value;

        var xhr = new XMLHttpRequest();
        var url = 'http://localhost/bibliothequeCalendrier/api.php'; // Mettez à jour l'URL de votre API locale (url serveur + dossier de l'api)

        var data = new FormData();
        data.append('mois', mois);
        data.append('annee', annee);

        xhr.open('POST', url, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                document.getElementById("calendrier").innerHTML = response.calendrier;
            }
        };
        xhr.send(data);
    }
    </script>
</body>
</html>
