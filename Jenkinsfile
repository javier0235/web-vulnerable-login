pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }
        stage('SonarQube Analysis') {
            steps {
                withSonarQubeEnv('Sonarqube_de_lab') {
                    script {
                        // Obtiene la ruta de la instalación de SonarQube Scanner definida en Jenkins
                        def scannerHome = tool name: 'sonar-scanner', type: 'hudson.plugins.sonar.SonarRunnerInstallation'
                        sh "${scannerHome}/bin/sonar-scanner -Dsonar.projectKey=vulnerable -Dsonar.sources=. -Dsonar.host.url=http://192.168.1.147:9000"
                    }
                }
            }
        }
    }
}
