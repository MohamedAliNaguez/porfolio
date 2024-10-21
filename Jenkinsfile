pipeline {
    agent any

    triggers {
        // Temporarily disabling polling for testing. Uncomment when using pollSCM.
        // pollSCM('H/5 * * * *') // Polls every 5 minutes. Replace with webhook later.
    }

    stages {
        stage('Récupération du code source') {
            steps {
                // Clone the code source from the Git repository.
                // If your repository is private, ensure to use the 'credentialsId' below.
                git branch: 'main', url: 'https://github.com/MohamedAliNaguez/porfolio.git'
                // For private repos, add the credentialsId as follows:
                // git branch: 'main', url: 'https://github.com/MohamedAliNaguez/porfolio.git', credentialsId: 'your-credentials-id'
            }
        }

        stage('Affichage de la date système') {
            steps {
                // Display the current system date.
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
