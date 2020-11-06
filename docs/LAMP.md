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

 # MySQL INSTALL 


First of all we update the database of cloud shell

`sudo apt update`

Now we install the MySQL package

`sudo apt install mysql-server`

## Configure MySQL
Now let's configure MySQL


The safest thing is that if we try to do something with mysql it will give us some kind of error, Most likely it is because the process is off.

To check if it is on we execute the following command

`sudo service mysql status`

If it shows us that it is not on, we initialize it with the following command

`sudo service mysql start`

To enter into MySQL we use the following command


`mysqladmin -p -u root version`

# INSTALL PHPMYADMIN

In order to install this, we must have all the previous steps installed

First of all we update the repositories with the following command:

`sudo apt update`

Now we can install phpmyadmin

`sudo apt install phpmyadmin php7.0-mbstring php7.0-gettext`

We are going to configure MYSQL users so they can access phpmyadmin. In the case that we do not have any user created we can use the following command to create them (within mysql):

`CREATE USER 'nombre_usuario'@'localhost' IDENTIFIED BY 'tu_contrasena';`

And to give privileges to this we use:

`GRANT ALL PRIVILEGES ON * . * TO 'nombre_usuario'@'localhost';`

We can use the root user for that if we don't want a user to have that kind of permissions, since it is created by default.

To change the password to root we use the following command:

`ALTER USER 'root'@'localhost' IDENTIFIED WITH caching_sha2_password BY 'password';`

In case this command does not work we can use the following:

`ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';`

If when we try to enter the phpmyadmin page it gives us an error, we must modify a file in the path **/etc/php5/apache2/php.ini**

Here we must find and unmark a specific line:

`extension=msql.so`

Now we must restart the apache service.

If the problem persists, we go to the file
**/etc/apache2/apache2.conf**
and at the end of the file we add the following line:

`Include /etc/phpmyadmin/apache.conf`

and we restart apache again.


