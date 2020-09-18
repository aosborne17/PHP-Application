# PHP Application


- Create EC2 instance Ubuntu 18.04 to run Docker

### Install git

```
sudo apt-get install git
```
### Git Clone the working repository

```
git clone https://github.com/aosborne17/PHP-Application.git
```

### Install Docker
```
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
sudo apt-get update
apt-cache policy docker-ce
sudo apt-get install -y docker-ce
sudo systemctl status docker
```

### Install Docker Compose

```
sudo apt install docker-compose
```

### Add Docker to sudo user
```
sudo usermod -aG docker ${USER}
newgrp docker
sudo service docker restart
sudo systemctl restart docker
sudo chmod 666 /var/run/docker.sock
```

### Running the Web Server

- Making sure we are in the `PHP-Application' directory, run:
```
docker-compose up
```

### PHP Caching

## Adding Database connectivitity
