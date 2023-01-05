# Barra de Entorno PHP Laravel
## _Solo una barra de entorno_

[![N|Solid](https://i.ibb.co/ZLzQTpm/Firma-Git-Hub.png)](#)

Esta libreria permite generar una barra en la parte superior de nuestro sistema web, con el fin de mostrar a nuestros usuarios y compañeros de desarrollo los datos del entorno en el que corre la herramienta y si deseamos su infraestructura.

## Salida de Barra
![image](https://user-images.githubusercontent.com/91748598/189487420-4d4b8e81-1275-4421-af4c-77c0e5ee1ccc.png)

## Características

-	Mostrar la version de PHP y Laravel
-	Mostrar el Dominio
-	Mostrar el entorno del sistema.
-	Indicar al usuario la URL del Sistema en Produccion.
-	La barra solo es visible si el APP_DEBUG en el ENV está en estado TRUE (Comúnmente en producción está en False, por lo cual en este entorno no será visible, De igual manera si se está empleando en otro tipo de Front como Vue, React ó Angular, la petición al servidor no retornaría datos.)

## Instalación
# Instalación Composer

```sh
composer require rmunate/barra-entorno
```

Esta carpeta se carga por defecto dentro del Framework, por lo cual podremos llamar la clase en cualquier controlador con total libertad.

Llamado y uso de Clase

```sh
<?php
use Rmunate\BarraEntorno\EnvironmentBar;
```

## Métodos
METODO
| METODO | DESCRIPCIÓN |
| ------ | ------ |
| `EnvironmentBar::bar('version','url','nombre_barra','ruta_logo')` | Método para generar la barra HTML en el Front de Blade, tambien se puede generar una peticion en el layaut al back para generar esta barra en cualquier otro tipo de Front como Vue, React ó Angular |

En este método se podrá, enviar como primer argumento la versión del Software, en segunda pocisión la URL de producción y como ultimo la ruta de la imagen del logo.

_Código Plantila Blade Laravel_

```sh
{{-- Este Codigo Debe Ir Antes Del Cierre Del Body en el HTML (En Blade) --}}
{!! App\Services\EnvironmentBar::bar('1.0.0','https://strategy4.com.co','Altum Digital', public_path() . 'images/logo.png') !!}
```

## Desarrollador
- Ingeniero, Raúl Mauricio Uñate Castro
- raulmauriciounate@gmail.com

## Licencia
MIT
