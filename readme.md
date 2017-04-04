# Installation

## run composer

run "composer install" to install wordpress and plugins

## create a parameters file

```
<?php
/*
This is a sample parameters.php file
In it, you *must* include the four main database defines
You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'name_of_database' );
define( 'DB_USER', 'user_of_database' );
define( 'DB_PASSWORD', 'password_of_user' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'
/* IF YOU ARE USING MAMPP OR XAMPP ADD THIS LINE */
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/<your_folder>/wp-content' );
```

## using xampp or mampp?
replace the following line in your .htaccess

RewriteRule . /index.php [L]

with 

RewriteRule . /<your_folder>/index.php [L]