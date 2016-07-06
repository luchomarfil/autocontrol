
1- Instalar Gestor de Paquetes PIP si no esta instalado
sudo apt-get -y install python-pip

2- Instalar estorno virtual virtualenv

pip install virtualenv

3- Descargar el proyecto y activar virtualenv
pararse dentro de la carpeta "prueba" y activar el entorno virtual asi:

source bin/activate

4- Pararse sobre la carpeta "autoControl" y migrar BD por las dudas.

python manage.py makemigrations app
python manage.py makemigrations apprest
python manage.py migrate app
python manage.py migrate apprest

4- Pararse sobre la carpeta "autoControl" y activar el server de django asi:

python manage.py runserver

Vista principal de la APP

http://127.0.0.1:8000/

LOGIN

http://127.0.0.1:8000/admin
user: admin
pass: Atila1210


API REST
http://127.0.0.1:8000/api


Dentro de la carpeta del proyecto
