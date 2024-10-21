pipeline {
    agent any

    triggers {
        // Déclenche le pipeline dès qu'un changement est détecté dans Git.
        pollSCM('* * * * *') // Vérifie le dépôt chaque minute, mais peut être remplacé par des Webhooks pour éviter une surcharge du serveur
    }

    stages {
        stage('Récupération du code source') {
            steps {
                // Clone le code source à partir du référentiel Git configuré dans Jenkins.
                git branch: 'main', url: 'https://github.com/MohamedAliNaguez/porfolio.git'
            }
        }

        stage('Affichage de la date système') {
            steps {
                // Affiche la date et l'heure actuelle du système.
                script {
                    def date = new Date()
                    echo "La date actuelle est : ${date}"
                }
            }
        }
    }

    post {
        success {
            echo 'Build terminé avec succès.'
        }
        failure {
            echo 'Le build a échoué.'
        }
    }
}
