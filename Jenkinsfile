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

                // Usa la configuración de SonarQube que creaste
                withSonarQubeEnv('Sonarqube_de_lab') {

                    // Obtiene la ruta de la instalación del sonar-scanner
                    def scannerHome = tool name: 'sonar-scanner', type: 'hudson.plugins.sonar.SonarRunnerInstallation'

                    sh """
                        ${scannerHome}/bin/sonar-scanner \
                        -Dsonar.projectKey=vulnerable \
                        -Dsonar.sources=. \
                        -Dsonar.host.url=http://192.168.1.147:9000
                    """
                }
            }
        }
    }
}
