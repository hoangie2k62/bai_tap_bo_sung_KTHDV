# bai_tap_bo_sung_KTHDV
C�i ??t RabbitMQ tr�n Ubuntu

echo "deb http://www.rabbitmq.com/debian/ testing main"  | sudo tee  /etc/apt/sources.list.d/rabbitmq.list > /dev/null
sudo wget http://www.rabbitmq.com/rabbitmq-signing-key-public.asc
sudo apt-key add rabbitmq-signing-key-public.asc
sudo apt-get update
sudo apt-get install rabbitmq-server -y
sudo service rabbitmq-server start
sudo rabbitmq-plugins enable rabbitmq_management
sudo service rabbitmq-server restart

C�i ??t Composer.

sudo apt update
sudo apt install php-cli unzip
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
sudo apt install curl
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

C�i ??t Xampp.
1. Downloa xampp : https://www.apachefriends.org/index.html
2. ??n th? m?c v?a t?i xampp v? v� ch?y l?nh: chmod +x xampp-linux-x64-8.0.6-0-installer.run
3. ./xampp-linux-1.8.2-0-installer.run


Ch?y ch??ng tr�nh
1. Chuy?n file gi?i n�n �demo� v�o th? m?c c� ???nng d�n �/opt/lampp/htdocs�.
2. Ch?y l?nh: composer update
3. Ch?y RabbitMQ: sudo service rabbitms-server restart
4. Ch?y Xampp: sudo /opt/lampp/lampp start
5. Ch?y ch??ng tr�nh: php consumer.php
6. V�o tr�nh duy?t b?t k?, g� localhost/demo/form.php r?i ti?n h�nh ch?y.
