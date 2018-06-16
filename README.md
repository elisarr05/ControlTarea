crear proyecto: composer create-project symfony/skeleton prueba1

correr servidor:  php -S 127.0.0.1:8000 -t public

instalar twig: composer require symfony/twig-bundle

install make: composer require doctrine maker

crear controller: php bin/console make:controller

crear entida: php bin/console make:entity

crear la base de datos: php bin/console doctrine:database:create

crear migracion: php bin/console make:migration

ejecutar migracion pendiente: php bin/console doctrine:migrations:migrate

instalar crud: composer require annotations form validator security-csrf

crear crub from entity: php bin/console make:crud Product