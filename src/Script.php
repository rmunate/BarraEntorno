<?php

namespace Rmunate\BarraEntorno;

/* JavaScript Libreria */
class Script
{

    public static function JavaScript($url_produccion = '#')
    {

        return "<script>

            /* Validar la Existencia de la Cookie */
            if(getCookie('environmentBarEnv')){
                /* Existe la Cookie - Ocultar*/
                changeEnvBar('hidden')
            } else {
                /* No Existe la Cookie - Mostrar */
                changeEnvBar('visible')
            }

            /* Leer Cookies */
            function getCookie(name){
                let cname = name+'=';
                let allCookies = document.cookie.split(';');
                for (let i = 0; i < allCookies.length; i++) {
                    let cookieI = allCookies[i].trim();
                    if (cookieI.indexOf(cname) === 0){
                        return true;
                    } else {
                        return false;
                    }
                }
            }

            /* Determinar el comportamiento de acuerdo a la Cookie */
            function changeEnvBar(stEnvBar){

                /* Captura de Elmentos a Ocultar */
                const separadores = document.querySelectorAll('.separador-env-bar');
                const items = document.querySelectorAll('.contenedor-ver-env-bar');
                const botones = document.querySelectorAll('.items-env-bar-end');
                const body = document.getElementsByTagName('body');

                /* Definir nuevo estado del elemento */
                const visibility = (stEnvBar == 'hidden') ? 'hidden' : 'visible';

                /* Aplicar Estilos a los Separadores */
                separadores.forEach(separador => {
                    separador.style.visibility = visibility;
                });

                /* Aplicar Estilos a los Items */
                items.forEach((item, i) => {
                    item.style.visibility = visibility;
                });

                /* Aplicar Estilos a los Botones */
                botones.forEach(boton => {
                    boton.style.visibility = visibility;
                });

                /* Cambio Estado de la Barra */
                const contenedorBar = document.getElementById('contenedor-env-bar');
                if(visibility == 'visible') {
                    contenedorBar.classList.add('ancho-borde-contenedor-env-bar');
                    contenedorBar.classList.remove('ancho-force-ancho-borde-contenedor-env-bar')
                    body[0].style.marginTop = '28px';
                } else {
                    body[0].style.marginTop = '0px';
                    contenedorBar.classList.remove('ancho-borde-contenedor-env-bar');
                    contenedorBar.classList.add('ancho-force-ancho-borde-contenedor-env-bar')
                }
            }

            /* Ejecucion de Funciones Barra | Evento Click Sobre el Logo */
            const logoEnvBar = document.getElementById('logo-env-bar');
            logoEnvBar.addEventListener('click', function(){
                if(getCookie('environmentBarEnv')){
                    deleteCookie('environmentBarEnv')
                    changeEnvBar('visible');
                    location.reload();
                } else {
                    setCookie('environmentBarEnv')
                    changeEnvBar('hidden');
                    location.reload();
                }
            });

            /* MANEJO DE COOKIES */
            /* Crear Cookie */
            function setCookie(cname) {
                let timeCookie = new Date();
                timeCookie.setTime(timeCookie.getTime() + (1 * 24 * 60 * 60 * 1000));
                let expires = 'expires=' + timeCookie.toGMTString();
                let path = ';path=/';
                document.cookie = cname + '=' + true + '; ' + expires + path;
            }

            function deleteCookie(cname) {
                document.cookie = cname + '=' + false + '; expires=Thu, 01-Jan-70 00:00:01 GMT;path=/';
            }

            /* Accion Link de Produiccion */
            /* LINK DE PRODUCCIÓN */
            const linkEnvBar = document.getElementById('link-produccion');
            linkEnvBar.addEventListener('click', function(){
                window.location.href = '" . $url_produccion . "';
            });

        </script>";
    }

}
