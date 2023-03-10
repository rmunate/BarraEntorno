# Barra de Entorno (PHP | LARAVEL)
> [![Raul Mauricio Uñate Castro](https://storage.googleapis.com/lola-web/storage_apls/RecursosCompartidos/LogoGithubLibrerias.png)](#)

Esta libreria permite generar una barra en la parte superior del sistema web, con el fin de mostrar a los usuarios y compañeros de desarrollo los datos del entorno en el que corre la plataforma.

## Características
-   Mostrar la version de PHP y Laravel en USo
-   Mostrar el Dominio
-   Mostrar el entorno del sistema. (QA- PROD)
-   Indicar al usuario la URL del Sistema en Produccion.
-   La barra solo es visible si el APP_DEBUG en el .ENV está en estado TRUE (Comúnmente en producción está en False, por lo cual en este entorno no será visible, De igual manera si se está empleando en otro tipo de Front como Vue, React ó Angular, la petición al servidor no retornaría datos.)

# Instalación
## _Instalación a través de Composer_

```console
composer require rmunate/barra-entorno v2.0.x-dev
```

## Metodos

| METODO | DESCRIPCIÓN |
| ------ | ------ |
| `Rmunate\BarraEntorno\EnvironmentBar::bar('My Company')->render()` | Método para generar la barra HTML en el Front de Blade, tambien se puede generar una peticion en el layaut al back para generar esta barra en cualquier otro tipo de Front como Vue, React ó Angular, Dentro del metodo `bar(...)` debera ir el nombre de la empresa o equipo de desarrollo. |

METODOS ADICIONALES CONFIGURABLES BARRA
(Todos estos metodos beben estar antes del metodo final `->render()` y puede estar uno despues del otro  )

| METODO | DESCRIPCIÓN |
| ------ | ------ |
| `->logo('...Ruta imagen...')->render()` | Método para poner el logo personalizado en la barra. |
| `->logoPHP('...Ruta imagen...')->render()` | Método para poner el logo de PHP personalizado en la barra. |
| `->logoLaravel('...Ruta imagen...')->render()` | Método para poner el logo de Laravel personalizado en la barra. |
| `->logoProtocol('...Ruta imagen...')->render()` | Método para poner el logo del Protocolo personalizado en la barra. |
| `->logoVersion('...Ruta imagen...')->render()` | Método para poner el logo de la Versión personalizado en la barra. |
| `->version('2.5.0')->render()` | Método para poner una versión especifica en la barra, de no usarse se retorna por defecto el 1.0.0 |
| `->textQA('....')->render()` | Método para poner un texto especifico en el boton de Ambiente QA, por defecto retorna "Ambiente De Desarrollo o QA" |
| `->descriptionQA('....')->render()` | Método para poner un texto especifico en la descripción del boton de Ambiente QA, por defecto retorna "Este es el ambiente sobre el cual se está ejecutando el Software, tenga presente que nuestros sistemas mostraran esta barra siempre que el ambiente en uso no sea el productivo." |
| `->textProduction('....')->render()` | Método para poner un texto especifico en el boton de Ambiente Productivo, por defecto retorna "Ir al Ambiente Productivo" |
| `->descriptionProduction('....')->render()` | Método para poner un texto especifico en la descripción del boton de Ambiente Productivo, por defecto retorna "Este link le llevara al ambiente productivo de este software." |
| `->descriptionInfo('....')->render()` | Método para poner un texto especifico en la descripción del grupo de trabajo, empresa, etc." |

METODOS FINAL RENDER
| METODO | DESCRIPCIÓN |
| ------ | ------ |
| `->render(["PHP" => true,"LARAVEL" => true,"PROTOCOL" => true,"VERSION" => true])` | De forma opcional, se podrá determinar que datos renderizar en la barra, de no enviar nada en el metodo, se renderizará todo el contenido. |


_Código Plantila Blade Laravel_

```php
{{-- Este Codigo Debe Ir Antes Del Cierre Del Body en el HTML (En Blade En El Layout) --}}
{!! Rmunate\BarraEntorno\EnvironmentBar::bar('Altum Digital')->render() !!}
```

## Salida de Barra
![image](https://user-images.githubusercontent.com/91748598/189487420-4d4b8e81-1275-4421-af4c-77c0e5ee1ccc.png)

## Mantenedores
- Ingeniero, Raúl Mauricio Uñate Castro (raulmauriciounate@gmail.com)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)