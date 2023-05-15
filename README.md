# La Receta Justa
Proyecto de Getsión para gimnasios

## Instalación

Generamos la imagen de la aplicacion
```
docker-compose build --force-rm
```

Levantamos la aplicacion
```
docker-compose up
```

Esto nos sirve en el puerto 8008 la aplicacion
```
http://localhost:8009
```

Base
```
http://localhost:8080
``` 

El acceso inicial en entorno de desarrollo es
```
user: admin
pass: admin
```

### Generar usuario administrador inicial si es necesario
```bash
# entrar al pod de php

docker-compose exec php bash

# ejecutar comando de creacion de usuario 
# php bin/console app:create-admin-user "username" "password" "name" "lastname" "email" "role (user, admin, super_admin)"
php bin/console app:create-admin-user "admin" "admin" "Nombre" "Apellido" "admin@admin.com" super_admin

# para entrar a la db 
docker-compose exec database mysql -uroot -proot lrj


```
