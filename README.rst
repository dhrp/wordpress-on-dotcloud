Drupal on dotCloud
==================

This is the easiest way to launch a Drupal website on dotCloud it takes 
less than 2 minutes to get your Drupal site in the Cloud.
It works out of the box follow these easy steps and in the end you'll have
your Drupal site running on dotCloud.

To run this code on dotCloud, you need a FREE `dotCloud account
<https://www.dotcloud.com/register.html>`_ .

Install our `CLI
<http://docs.dotcloud.com/0.9/firststeps/install/>`_ 
(Command Line Interface)
Then clone this repository, and push it to dotCloud::

  $ git clone git://github.com/Donaldd/drupal-on-dotcloud.git
  $ cd drupal-on-dotcloud
  $ dotcloud create mydrupalapp 
  $ dotcloud push

Your Drupal site is now running on dotCloud, to finalize your Drupal setup 
simply run::
  $ dotcloud open

Happy hacking!

You can also learn more by diving into `dotCloud documentations
<http://docs.dotcloud.com/>`_, especially the two for the `PHP service
<http://docs.dotcloud.com/services/php/>`_ and `MySQL service 
<http://docs.dotcloud.com/0.9/services/mysql/>`_ which is used by this app.