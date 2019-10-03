CIELO PHP Coding Challenge!
===========================

Installation Steps
------------------

-  Clone the repository
-  Create a VirtualHost to the follow url ``cielo-php-challenge.dev``
-  Copy the ``.env.sample`` file as ``.env`` located at
   ``/application/config``
-  Modify the database credentials on the ``.env`` file
-  Go to ``/application`` and Run the ``composer install`` command
-  Restore the database dump or run the migrations

   -  Execute the command ``php index.php migrate`` to run the
      migrations
   -  or Restore the dump located at the root directory
