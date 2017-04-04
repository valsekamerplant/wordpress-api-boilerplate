# What is this?

this is a composerised wordpress with basic plugins and a theme to use wordpress as a CRUD and API only framework without a front-end. So basicly Wordpress as a REST service.

If you don't want a full wordpress with a theme and plugins you can always download the theme seperatly with the functionality here:
https://github.com/laurensmarcelis/wordpress-api-boilerplate-theme

# Installation

## run composer

run "composer install" on windows or "php composer.phar" on mac to install wordpress and the plugins

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
/* IF YOU ARE USING MAMPP OR XAMPP AND NOT USING THIS PROJECT AS WEBROOT? ADD THIS LINE */
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/<your_folder>/wp-content' );
```

## use 

Create your custom post types, add some fields to them using advanced custom fields. There is an example post type + example post type rest functions to customize your API output with the build in wordpress funtions.

## are you using xampp or mampp and not using the project as webroot?
replace the following line in your .htaccess

RewriteRule . /index.php [L]

with 

RewriteRule . /<your_folder>/index.php [L]