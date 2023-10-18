# Pets - Sin Framework

El presente repositorio integra el código fuente para un gestor de mascotas, el cual permite listar, crear, actualizar y eliminar registros.

Busca demostrar la implementación de un CRUD en back-end sin el uso de un framework, utilizando únicamente PHP.

## Configuración

El proyecto desarrollado utiliza PDO para la conectividad a la base de datos, por lo que es necesario que se realice la instalación correspondiente, en este caso, SQLite.

```bash
sudo apt-get install php-sqlite3
```

Sin embargo, se puede utilizar cualquier otro motor de base de datos, siempre y cuando se realicen los cambios correspondientes en el modelo.

### Base de Datos

En caso de que el archivo `pets.db` no este presente en la carpeta raíz, se debe crear el archivo, así como la tabla correspondiente.

```bash
touch pets.db
sqlite3 pets.db
```

Se crea una tabla llamada `pets` con dos columnas, `id` y `name`.

```sql
CREATE TABLE pets (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT NOT NULL
);
```

## Ejecución

Para ejecutar el proyecto se puede utilizar el servidor web de PHP.

```bash
php -S localhost:8000
```

## Estructura del Proyecto

El proyecto se encuentra estructurado de la siguiente manera:

```bash
├── README.md
├── index.php
├── pets.db
└── src
    ├── controllers
    │   └── PetController.php
    ├── models
    │   └── Pet.php
    └── views
        ├── create.php
        ├── index.php
        ├── layout.php
        ├── show.php
        └── update.php
```
