# Copyright (LARAVEL) 
> [![Raul Mauricio Uñate Castro](https://storage.googleapis.com/lola-web/storage_apls/RecursosCompartidos/LogoGithubLibrerias.png)](#)

Defina los datos del autor del software de una manera organizada desde las variables de entorno, invoque los métodos que requiera donde le sea necesario y renderice el HTML con una sola línea de código. 

# Instalación
## _Instalación a través de Composer_

```console
composer require rmunate/copyright v1.0.x-dev
```

## Variables de Entorno
```env
COPYRIGHT_NAME="Altum Digital"
COPYRIGHT_VERSION="2.0.0"
COPYRIGHT_AUTHOR="Raul Mauricio Uñate Castro"
COPYRIGHT_KEYWORDS="Software"
COPYRIGHT_OTHER_DEVELOPERS="Jorge Castañeda, Wilmer Sanchez, Alejandro Diaz, Laura Valentina"
COPYRIGHT_EMAIL="raulmauriciounate@gmail.com"
COPYRIGHT_WEB="page.com.co"
COPYRIGHT_YEAR="2023" #Si se desea que sea el año en curso, no cree esta variable de entorno.
```

# Metodos Resumidos

| SINTAXIS | DESCRIPCIÓN |
| ----------- | ----------- |
| `Copyright::meta()->get()` | Obtenga Todos los Datos del Copyright |
| `Copyright::meta()->getHTML()` | Obtenga Todos los Datos del Copyright en Codigo HTML |
| `Copyright::meta()->renderHTML()` | Renderizar el Codigo HTML (Pra uso en el Front) |

# Uso De Metodos

| SINTAXIS | DESCRIPCIÓN |
| ----------- | ----------- |
| `Copyright::meta(['author' => 'Raul Uñate','email' => '...'])` | En el metodo Meta podra enviar los valores del Copyright si desea no usar variables de entorno o si desea reescribir la informacion, el arrreglo puede llevar las llaves (copyright,version,author,keywords,developer,email,web,year) |
| `->get(['author','year','....'])` | Defina que valores retornar dentro del metodo ingrese un arreglo con los valores especificos. |
| `->getHTML(['author','year','....'])` | Defina que valores dentro de etiquetas META en HTML retornar dentro del metodo ingrese un arreglo con los valores especificos. |
| `->renderHTML(['author','year','....'])` | Defina que valores especificos renderizar en el HTML. |
| `Copyright::meta()->getName()` | Obtenga el nomnbre de la empresa o casa de Software Creador. |
| `Copyright::meta()->getVersion()` | Obtenga la Version del Sistema. |
| `Copyright::meta()->getDescription()` | Obtenga su Descripción. |
| `Copyright::meta()->getAuthor()` | Obtenga el Autor. |
| `Copyright::meta()->getKeywords()` | Obtenga las llaves de SEO. |
| `Copyright::meta()->getDeveloper()` | Obtenga el nombre de los desarrolladores. |
| `Copyright::meta()->getEmail()` | Obtenga el Correo de Contacto. |
| `Copyright::meta()->getWeb()` | Obtenga la URL de la WEB. |
| `Copyright::meta()->getYear()` | Obtenga el Año. |
| `Copyright::meta()->getNameHTML()` | Obtenga el nomnbre de la empresa o casa de Software Creador en HTML. |
| `Copyright::meta()->getVersionHTML()` | Obtenga la Version del Sistema en HTML. |
| `Copyright::meta()->getDescriptionHTML()` | Obtenga su Descripción en HTML. |
| `Copyright::meta()->getAuthorHTML()` | Obtenga el Autor en HTML. |
| `Copyright::meta()->getKeywordsHTML()` | Obtenga las llaves de SEO en HTML. |
| `Copyright::meta()->getDeveloperHTML()` | Obtenga el nombre de los desarrolladores en HTML. |
| `Copyright::meta()->getEmailHTML()` | Obtenga el Correo de Contacto en HTML. |
| `Copyright::meta()->getWebHTML()` | Obtenga la URL de la WEB en HTML. |
| `Copyright::meta()->getYearHTML()` | Obtenga el Año en HTML. |


## Mantenedores
- Ingeniero, Raúl Mauricio Uñate Castro (raulmauriciounate@gmail.com)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)