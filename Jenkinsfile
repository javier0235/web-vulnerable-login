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
        withSonarQubeEnv('Sonarqube_de_lab') { // nombre exacto del servidor
          sh """
            sonar-scanner \
            -Dsonar.projectKey=vulnerable \
            -Dsonar.sources=. \
            -Dsonar.host.url=http://192.168.1.147:9000
          """
        }
      }
    }
  }
}
