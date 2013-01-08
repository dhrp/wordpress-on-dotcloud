Wordpress on dotCloud
=====================

Currently working!!! Don't hesitate to contact me when something breaks or needs an update. 

This is the easiest way to launch a Wordpress website on dotCloud, it takes less than 2 minutes to get your Wordpress site in the Cloud.
It works out of the box, just follow these easy steps and in the end you'll have our Wordpress site running on dotCloud.

To run this code on dotCloud, you need a FREE `dotCloud account
<https://www.dotcloud.com/register.html>`_ .

Install the `CLI
<http://docs.dotcloud.com/0.9/firststeps/install/>`_ 
(Command Line Interface)
Then clone this repository, and push it to dotCloud::

  git clone git://github.com/Donaldd/wordpress-on-dotcloud.git
  cd wordpress-on-dotcloud
  echo "<?php" > wordpress/wp-salt.php ; curl https://api.wordpress.org/secret-key/1.1/salt/ >> wordpress/wp-salt.php
  dotcloud create mywordpressapp 
  dotcloud push

Your Wordpress site is now running on dotCloud, to finalize your Wordpress setup 
simply run::
  dotcloud open

Happy hacking!

You can also learn more by diving into `dotCloud documentations
<http://docs.dotcloud.com/>`_, especially the two for the `PHP service
<http://docs.dotcloud.com/services/php/>`_ and `MySQL service 
<http://docs.dotcloud.com/0.9/services/mysql/>`_ which is used by this app.