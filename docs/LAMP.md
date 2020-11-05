# APACHE INSTALL
First we will have to do an `update` then we will install `apache2`
```
sudo apt update
sudo apt install apache2
```
Here what we will do in the configuration files change the port pre-determined by the 8080 so we can open it in cloud shell
```
sudo sed -i "s#80#8080#g" /etc/apache2/ports.conf
sudo sed -i "s#80#8080#g" /etc/apache2/sites-available/000-default.conf
```

Then we will execute the command `sudo service apache2 restart` 
for the changes to take effect.

The **ports.conf** file contains the ports to be used in this case, we change the default 80 to 8080.

The file **000-default.conf** is the apache2 configuration file where we will find the default directives where we can create our own and there is a line where if we go to port 8080 it will open the index.html.
# PHP INSTALL
To install PHP we will execute the command:
`apt install php7.0 php7.0-mysql`

Then we go to the **/var/www/html** folder with the `cd` command and inside we will create the **index.php** file where we will delete the **index.html**.
In the **index.php** file we will put the line `<? php phpinfo (); ?>`.

Then we will execute the command `sudo service apache2 restart` for the changes to take effect.
