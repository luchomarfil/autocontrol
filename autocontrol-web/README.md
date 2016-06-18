autocontrol-web

para hacer que esto ande:

1) cd/directorio del proyecto web

2) levantar el servidor de symfony:
	php bin/console server:run 

3) crear la bd:
	php bin/console doctrine:database:create

4) actualizar la db
	bin/console doctrine:schema:update --force



DAMI: el usuario con tipo_usuario = 0 son los Supervisores, el tipo_usuario = 1, es el Admin


