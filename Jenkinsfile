pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                // Checkout code from GitHub repository
                git branch: 'main', url: 'https://github.com/sabikbshah/wordpress-site'
            }
        }
        
        stage('Test Deployment') {
            steps {
                // Simulate a deployment step
                script {
                    echo 'Simulating build or deployment step.'
                    sh '''
                        mkdir -p /tmp/jenkins-deploy-test
                        cp README.md /tmp/jenkins-deploy-test/ || echo "README.md not found"
                        ls -la /tmp/jenkins-deploy-test
                    '''
                }
            }
        }
    }
    
    post {
        success {
            echo 'Pipeline executed successfully.'
        }
        failure {
            echo 'Pipeline failed.'
        }
    }
}
