# bai_tap_bo_sung_KTHDV
Install RabbitMQ on Ubuntu

echo "deb http://www.rabbitmq.com/debian/ testing main"  | sudo tee  /etc/apt/sources.list.d/rabbitmq.list > /dev/null
sudo wget http://www.rabbitmq.com/rabbitmq-signing-key-public.asc
sudo apt-key add rabbitmq-signing-key-public.asc
sudo apt-get update
sudo apt-get install rabbitmq-server -y
sudo service rabbitmq-server start
sudo rabbitmq-plugins enable rabbitmq_management
sudo service rabbitmq-server restart

Install Composer.

sudo apt update
sudo apt install php-cli unzip
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
sudo apt install curl
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

Install Xampp.
1. Downloa xampp : https://www.apachefriends.org/index.html
2.  chmod +x xampp-linux-x64-8.0.6-0-installer.run
3. ./xampp-linux-1.8.2-0-installer.run


Run program
1. copy folder “demo” in path: “/opt/lampp/htdocs”.
2. run in terminal: composer update
3. run RabbitMQ: sudo service rabbitms-server restart
4. run Xampp: sudo /opt/lampp/lampp start
5. run program: php consumer.php
6. In browser, gõ localhost/demo/form.php r?i ti?n hành ch?y.
