# Copyright (LARAVEL) 
> [![Raul Mauricio Uñate Castro](https://storage.googleapis.com/lola-web/storage_apls/RecursosCompartidos/LogoGithubLibrerias.png)](#)
Defina los datos del autor del software de una manera organizada desde las variables de entorno, invoque los métodos que requiera donde le sea necesario y renderice el HTML con una sola línea de código. 

# Instalación
## _Instalación a través de Composer_

```console
composer require rmunate/copyright v1.0.x-dev
```

## Variables de Entorno
```php
COPYRIGHT_NAME="Altum Digital"
COPYRIGHT_VERSION="2.0.0"
COPYRIGHT_AUTHOR="Raul Mauricio Uñate Castro"
COPYRIGHT_KEYWORDS="Software"
COPYRIGHT_OTHER_DEVELOPERS="Jorge Castañeda, Wilmer Sanchez, Alejandro Diaz, Laura Valentina"
COPYRIGHT_EMAIL="raulmauriciounate@gmail.com"
COPYRIGHT_WEB="page.com.co"
COPYRIGHT_YEAR="2023" #Si se desea que sea el año en curso, no cree esta variable de entorno.
```

# Metodos con retorno de Datos

| SINTAXIS | DESCRIPCIÓN |
| ----------- | ----------- |
| `SQLServer::database(CREDENCIALES())->select("SELECT * FROM 'usuarios'")->get()` | Ejecute las consultas que requiera a la base de datos y genere la respuesta con el metodo `->get()`, usando sentencias propias de SQL. **Los datos retornados serán un arreglo.** |
| `SQLServer::database(CREDENCIALES())->setTimeOut(10)->select("SELECT * FROM 'usuarios'")->get()` | El metodo `->setTimeOut(10)` recibe un número entero no negativo que representa el período de tiempo de espera, en segundos. El valor **predeterminado es 0** y significa que no hay tiempo de espera. |
| `SQLServer::database(CREDENCIALES())->select("SELECT * FROM 'usuarios'")->getObjects()` | Ejecute las consultas que requiera a la base de datos y genere la respuesta con el metodo `->getObjects()` para retornar un **arreglo de objetos**, a los cuales podrá ingresar a traves de **->**. |
| `SQLServer::database(CREDENCIALES())->procedure("EXEC procedure")->get()` | Ejecute los procedimientos almacenados en la base de datos y genere la respuesta con el metodo `->get()`, usando sentencias propias de SQL, **Se retornará un arreglo**. |
| `SQLServer::database(CREDENCIALES())->noCount()->procedure("EXEC procedure")->get()` | El metodo `->noCount` puede ser necesario en consultas a procedimientos que contangan OpenQuerys o SubQuerys. |


## Mantenedores
- Ingeniero, Raúl Mauricio Uñate Castro (raulmauriciounate@gmail.com)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)