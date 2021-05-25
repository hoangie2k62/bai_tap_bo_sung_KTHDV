# bai_tap_bo_sung_KTHDV
Cài ??t RabbitMQ trên Ubuntu

echo "deb http://www.rabbitmq.com/debian/ testing main"  | sudo tee  /etc/apt/sources.list.d/rabbitmq.list > /dev/null
sudo wget http://www.rabbitmq.com/rabbitmq-signing-key-public.asc
sudo apt-key add rabbitmq-signing-key-public.asc
sudo apt-get update
sudo apt-get install rabbitmq-server -y
sudo service rabbitmq-server start
sudo rabbitmq-plugins enable rabbitmq_management
sudo service rabbitmq-server restart

Cài ??t Composer.

sudo apt update
sudo apt install php-cli unzip
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
sudo apt install curl
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

Cài ??t Xampp.
1. Downloa xampp : https://www.apachefriends.org/index.html
2. ??n th? m?c v?a t?i xampp v? và ch?y l?nh: chmod +x xampp-linux-x64-8.0.6-0-installer.run
3. ./xampp-linux-1.8.2-0-installer.run


Ch?y ch??ng trình
1. Chuy?n file gi?i nén “demo” vào th? m?c có ???nng dân “/opt/lampp/htdocs”.
2. Ch?y l?nh: composer update
3. Ch?y RabbitMQ: sudo service rabbitms-server restart
4. Ch?y Xampp: sudo /opt/lampp/lampp start
5. Ch?y ch??ng trình: php consumer.php
6. Vào trình duy?t b?t k?, gõ localhost/demo/form.php r?i ti?n hành ch?y.
