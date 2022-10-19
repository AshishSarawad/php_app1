pipeline {
    
    agent any
    
    environment {
        imageName = "myphpapp"
        registryCredentials = "nexus"
        registry = "35.183.4.199:8082"
        dockerImage = ''
    }
    
    stages {
        stage('Code checkout') {
            steps {
                checkout([$class: 'GitSCM', branches: [[name: '']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '', url: 'https://github.com/AshishSarawad/php_app1.git']]])                   }
        }
        
    
        
    stage('SonarQube Analysis') {
        steps{
            withSonarQubeEnv(installationName: 'sonarqube', credentialsId: 'sonar') {
      sh "/var/lib/jenkins/tools/hudson.plugins.sonar.SonarRunnerInstallation/sonarqube/bin/sonar-scanner"
            }
                
        }
    }

    stage("Quality Gate") {
            steps {
              timeout(time: 1, unit: 'HOURS') {
                waitForQualityGate abortPipeline: true
              }
            }
          }   
    
    
   
    stage('Docker image build') {
      steps{
        script {
          dockerImage = docker.build imageName
        }
      }
    }


    stage('Image upload to Nexus') {
     steps{  
         script {
             docker.withRegistry( 'http://'+registry, registryCredentials ) {
              version = VersionNumber(versionNumberString: '1.${BUILDS_ALL_TIME}')
             dockerImage.push(version)
           }
        }
      }
    }
    
   
    stage('Stop container') {
         steps {
            sh 'docker ps -f name=myphpapp -q | xargs --no-run-if-empty docker container stop'
            sh 'docker container ls -a -fname=myphpapp -q | xargs -r docker container rm'
        }
    }
      
    stage('Deploy') {
       steps{
         script {
            dockerImage.run("-p 80:80 --rm --name myphpapp")
               
            }
        }
    }    
 }
}