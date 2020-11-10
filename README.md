# Lamp file explanation

In the lamp file we will put: 
- apache and the change of ports to 8080
- The installation of php
- The mysql installation
- Installing wordpress

# Docker compose commands:

Once installed you have to give it permissions:

`sudo chmod +x /usr/local/bin/docker-compose`

To know the version of docker compose we use the following command:

`docker-compose version`

For the docker compose services to work we must activate a document called **docker-compose.yaml**

Once the services are written, to raise them we use the command:

`docker-compose up -d`

To look at the services that are activated in the docker compose we use the following command:

`docker-compose ps`

To stop the services we use the command:

`docker-compose down`

