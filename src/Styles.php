<?php

namespace Rmunate\BarraEntorno;

/* CSS Estilos Barra */

class Styles {

    public static function css(){
        
        return "<style>

            /* Fuente */
            @import url('https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800;8..144,900;8..144,1000&display=swap');

            /* Estilos Globales de la Barra */
            .contenedor-env-bar {
                position: fixed;
                background-color: #F7F7F7;
                border-bottom: solid 2px #F08013;
                font-family: 'Roboto Flex', sans-serif !important;
                height: 28px !important;
                top: 0;
                left: 0;
                display: flex;
                z-index: 1000;
            }

            .ancho-borde-contenedor-env-bar{
                right: 0;
            }

            .ancho-force-ancho-borde-contenedor-env-bar {
                width: 40px;
            }

            /* Contenedor Logo */
            .contenedor-logo-env-bar {
                display: flex;
                cursor: pointer;
                align-items: center;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 8px;
            }

            /* Estilos del Logo */
            .logo-env-bar {
                max-width: 20px;
                margin: 0;
                padding: 0;
            }

            /* Separador */
            .separador-env-bar {
                margin-left: 10px;
                margin-right: 10px;
                border-left: solid 1px #cfcecd;
            }

            /* Contendor de los items */
            .contenedor-ver-env-bar {
                display: flex;
                align-items: center;
            }

            /* logo PHP */
            .logo-lenguaje-env-bar {
                margin-left: 5px;
                margin-right: 8px;
            }

            .logo-width-env-bar {
                width: 20px;
            }

            /* Nombre Lenguaje */
            .lenguaje-env-bar {
                font-size: 12px;
                font-weight: 900 !important;
                margin-right: 5px;
                color: #04488E;
            }

            /* Subtexto principal*/
            .version-env-bar {
                font-size: 12px;
                font-weight: 400 !important;
                margin-right: 5px;
            }

            /* Valor del subtexto*/
            .ambiente-env-bar{
                background-color: #f08013;
                border-radius: 5px;
                color: #FFFFFF;
                padding-right: 8px;
                padding-left: 8px;
                font-size: 90%;
                margin-left: 5px;
                margin-right: 5px;
            }

            .ambiente-env-bar:hover{
                background-color: #f79b3f;
                color: #FFFFFF;
                cursor: pointer;
            }

            .url-prod-env-bar{
                background-color: #04488e;
                border-radius: 5px;
                color: #FFFFFF;
                padding-right: 8px;
                padding-left: 8px;
                font-size: 90%;
                margin-left: 5px;
                margin-right: 5px;
            }

            .url-prod-env-bar:hover{
                background-color: #4380bd;
                border-radius: 5px;
                cursor: pointer;
            }

            .about-env-bar {
                background-color: #343435;
                border-radius: 5px;
                color: #FFFFFF;
                padding-right: 8px;
                padding-left: 8px;
                font-size: 90%;
                margin-left: 5px;
                margin-right: 5px;
            }

            .about-env-bar:hover{
                background-color: #575758;
                border-radius: 5px;
                cursor: pointer;
            }

            .items-env-bar-end {
                display: flex;
                right: 10px;
                top: 2px;
                position: fixed;
                margin: 0;
                padding: 0;
            }

            .tooltip-env-bar {
                position: relative;
                display: inline-block;
            }

            .tooltip-env-bar .tooltiptext-env-bar {
                position: fixed; /*Fijada*/
                visibility: hidden; /*Oculto por defecto*/
                width: 30%;/*Ancho Persistente*/
                top: 30px; /*Pegado a Arriba*/
                right: 4px; /*Pegado a la derecha*/
                font-size: 12px; /*Tamaño de Texto*/
                font-weight: 700;/*Ancho de Texto*/
                background-color: #FFFFFF; /*Color de Fondo*/
                border: solid 1px #f08013;/*Borde*/
                color: #000000;/*Color de Texto*/
                text-align: center;/*Centrado*/
                border-radius: 5px;/*Borde Redondeado*/
                padding: 5px 0;/*Margen Interno*/
                z-index: 1; /*Index*/
                margin-left: 0;/*Margen a la Izquierda*/
                opacity: 0.5;/*Opacidad*/
                transition: opacity 0.3s;/*Tiempo de la Trasicion*/
                font-family: 'Roboto Flex', sans-serif !important;
            }

            /*Mostrar Info Del Elemnto*/
            .tooltip-env-bar:hover .tooltiptext-env-bar {
                visibility: visible;
                opacity: 0.8;
            }

            .text-ambiente-env-bar {
                line-height: 1;
            }

            .img-toltip-env-bar {
                max-width: 100px;
            }

            .hidden-items-env-bar {
                visibility: hidden;
            }

        </style>";
    }

}

?>