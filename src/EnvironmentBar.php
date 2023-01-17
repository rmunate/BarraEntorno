<?php

namespace Rmunate\BarraEntorno;

use Exception;
use Rmunate\BarraEntorno\Script;
use Rmunate\BarraEntorno\Styles;
use Rmunate\BarraEntorno\Images64;
use Illuminate\Foundation\Application;

/**
 * Clase para Barra de Ambiente en Uso
 * --------------------------------------------
 * Desarrollado por: Raul Mauricio Uñate Castro
 * raulmauriciounate@gmail.com
 */

class EnvironmentBar {


    /* Protocolo Default */
    private $defaultProtocol = 'HTTP';
    private $urlProduction = '#';

    private $logo = null;
    private $logoPHP = null;
    private $logoLaravel = null; 
    private $logoProtocol = null;
    private $logoVersion = null;
    private $logoCompany = null;
    private $version = '1.0.0';
    private $textQA = 'Ambiente De Desarrollo o QA'; 
    private $descriptionQA = 'Este es el ambiente sobre el cual se está ejecutando el Software, tenga presente que nuestros sistemas mostraran esta barra siempre que el ambiente en uso no sea el productivo.';
    private $textProduction = 'Ir al Ambiente Productivo';
    private $descriptionProduction = 'Este link le llevara al ambiente productivo de este software.';
    private $descriptionInfo = 'Este software es un desarrollo registrado de Altum Digital, desarrollamos Software a la medida.';
    private $nameCompany = 'Altum Digital';
    
    private static $company = 'Altum Digital';

    /* Constructor */
    public function __construct(){
        $this->$nameCompany = Self::$company;
    }

    /* Logo Barra */
    public function logo(string $roueImage){
        if (!empty($roueImage)) {
            if (file_exists($roueImage)) {
                // Extensión de la imagen
                $type = pathinfo($roueImage, PATHINFO_EXTENSION); 
                // Extraer Binarios Imagen
                $data = file_get_contents($roueImage); 
                // Codificando la imagen en base64
                $logoBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
            } else {
                throw new Exception("El metodo ::logo('" . $roueImage . "') no es una ruta de Imagen Valida.");   
            }
        } else {
            $logoBase64 = Images64::defaultLogo();
        }
        $this->logo = $logoBase64;
        return $this;
    }

    /* Logo PHP */
    public function logoPHP(string $roueImage){
        if (!empty($roueImage)) {
            if (file_exists($roueImage)) {
                // Extensión de la imagen
                $type = pathinfo($roueImage, PATHINFO_EXTENSION); 
                // Extraer Binarios Imagen
                $data = file_get_contents($roueImage); 
                // Codificando la imagen en base64
                $logoBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
            } else {
                throw new Exception("El metodo ::logoPHP('" . $roueImage . "') no es una ruta de Imagen Valida.");   
            }
        } else {
            $logoBase64 = Images64::defaultLogoPHP();
        }
        $this->logoPHP = $logoBase64;
        return $this;
    }

    /* Logo Laravel */
    public function logoLaravel(string $roueImage){
        if (!empty($roueImage)) {
            if (file_exists($roueImage)) {
                // Extensión de la imagen
                $type = pathinfo($roueImage, PATHINFO_EXTENSION); 
                // Extraer Binarios Imagen
                $data = file_get_contents($roueImage); 
                // Codificando la imagen en base64
                $logoBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
            } else {
                throw new Exception("El metodo ::logoLaravel('" . $roueImage . "') no es una ruta de Imagen Valida.");   
            }
        } else {
            $logoBase64 = Images64::defaultLogoLaravel();
        }
        $this->logoLaravel = $logoBase64;
        return $this;
    }

    /* Logo Protocolo */
    public function logoProtocol(string $roueImage){
        if (!empty($roueImage)) {
            if (file_exists($roueImage)) {
                // Extensión de la imagen
                $type = pathinfo($roueImage, PATHINFO_EXTENSION); 
                // Extraer Binarios Imagen
                $data = file_get_contents($roueImage); 
                // Codificando la imagen en base64
                $logoBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
            } else {
                throw new Exception("El metodo ::logoProtocol('" . $roueImage . "') no es una ruta de Imagen Valida.");   
            }
        } else {
            $logoBase64 = Images64::defaultLogoProtocol();
        }
        $this->logoProtocol = $logoBase64;
        return $this;
    }

    /* Logo Versión */
    public function logoVersion(string $roueImage){
        if (!empty($roueImage)) {
            if (file_exists($roueImage)) {
                // Extensión de la imagen
                $type = pathinfo($roueImage, PATHINFO_EXTENSION); 
                // Extraer Binarios Imagen
                $data = file_get_contents($roueImage); 
                // Codificando la imagen en base64
                $logoBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
            } else {
                throw new Exception("El metodo ::logoVersion('" . $roueImage . "') no es una ruta de Imagen Valida.");   
            }
        } else {
            $logoBase64 = Images64::defaultLogoVersion();
        }
        $this->logoVersion = $logoBase64;
        return $this;
    }

    /* Logo company */
    public function logoCompany(string $roueImage){
        if (!empty($roueImage)) {
            if (file_exists($roueImage)) {
                // Extensión de la imagen
                $type = pathinfo($roueImage, PATHINFO_EXTENSION); 
                // Extraer Binarios Imagen
                $data = file_get_contents($roueImage); 
                // Codificando la imagen en base64
                $logoBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
            } else {
                throw new Exception("El metodo ::logoCompany('" . $roueImage . "') no es una ruta de Imagen Valida.");   
            }
        } else {
            $logoBase64 = Images64::defaultLogoCompany();
        }
        $this->logoCompany = $logoBase64;
        return $this;
    }

    /* Version del Software */
    public function version(string $version){
        if (!empty($version)) {
            $this->version = $version;
        }
        return $this;
    }

    /* Texto Boton QA */
    public function textQA(string $texto){
        if (!empty($texto)) {
            $this->textQA = $texto;
        }
        return $this;
    }

    /* Descripcion Texto QA */
    public function descriptionQA(string $texto){
        if (!empty($texto)) {
            $this->descriptionQA = $texto;
        }
        return $this;
    }

    /* Texto Boton Produccion */
    public function textProduction(string $texto){
        if (!empty($texto)) {
            $this->textProduction = $texto;
        }
        return $this;
    }
    
    /* Descripcion Texto Producción */
    public function descriptionProduction(string $texto){
        if (!empty($texto)) {
            $this->descriptionProduction = $texto;
        }
        return $this;
    }

    /* Descripcion Empresa */
    public function descriptionInfo(string $texto){
        if (!empty($texto)) {
            $this->descriptionInfo = $texto;
        }
        return $this;
    }

    #-------------------------------------------------------------------

    /* Version de PHP */
    public function getVersionPHP(){
        return phpversion();
    }

    /* Version de Laravel */
    public function getVersionLaravel(){
        return Application::VERSION;
    }

    /* Protocolo en Uso */
    public function getProtocolo(){
        if (isset($_SERVER['HTTP_REFERER'])) {
            $url = $_SERVER['HTTP_REFERER'];
            $url = strval($url);
            $protocolo = explode(':',$url)[0];
            $protocolo = strval($protocolo);
        } else {
            $protocolo = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : $this->defaultProtocol;
        }
        return strtoupper($protocolo);
    }

    /* Version Software */
    public function getVersionSoft(){
        return $this->versonSoft;
    }

    /* company */
    public function getCompany(){
        return $this->nameCompany;
    }

    /* Obtener Texto QA */
    public function getTextQA(){
        return $this->textQA;
    }

    /* Obtener Texto QA Descripcion */
    public function getDescriptionQA(){
        return $this->descriptionQA;
    }

    /* Obtener Texto Peroduccion */
    public function getTextProduction(){
        return $this->textProduction;
    }

    /* Obtener Texto Descripcion Producción */
    public function getDescriptionProduction(){
        return $this->descriptionProduction;
    }

    /* Obtener texto info */
    public function getDescriptionInfo(){
        return $this->descriptionInfo;
    }

    #-----------------------------------------------------------------

    /* Render Barra */
    public function render(array $mostrar = [
        'PHP' => true,
        'LARAVEL' => true,
        'PROTOCOL' => true,
        'VERSION' => true
    ]){

        /* Definir Imagenes */
        $logo = !empty($this->logo) ? $this->logo : Images64::defaultLogo();
        $logoPHP = !empty($this->logoPHP) ? $this->logoPHP : Images64::defaultLogoPHP();
        $logoLaravel = !empty($this->logoLaravel) ? $this->logoLaravel : Images64::defaultLogoLaravel();
        $logoProtocolo = !empty($this->logoProtocolo) ? $this->logoProtocolo : Images64::defaultLogoProtocolo();
        $logoVersion = !empty($this->logoVersion) ? $this->logoVersion : Images64::defaultLogoVersion();
        $logoCompany = !empty($this->logoCompany) ? $this->logoCompany : Images64::defaultlogoCompany();

        /* Codigo HTML */
        $styles = Styles::css();

        /* Mostrar Infraestructura */
        $htmlPHP = '';
        if (isset($mostrar['PHP']) && $mostrar['PHP']) {
            $htmlPHP = '<div class="separador-env-bar"></div>
            <div class="contenedor-ver-env-bar">
                <img draggable="false" class="logo-lenguaje-env-bar logo-width-env-bar" src="' . $logoPHP . '" />
                <span class="lenguaje-env-bar">PHP:</span>
                <span class="version-env-bar">v' . $this->getVersionPHP() . '</span>
            </div>';
        }

        $htmlLaravel = '';
        if (isset($mostrar['LARAVEL']) && $mostrar['LARAVEL']) {
            $htmlLaravel = '<div class="separador-env-bar"></div>
            <div class="contenedor-ver-env-bar">
                <img draggable="false" class="logo-lenguaje-env-bar logo-width-env-bar" src="' . $logoLaravel . '" />
                <span class="lenguaje-env-bar">Laravel:</span>
                <span class="version-env-bar">v' . $this->getVersionLaravel() . '</span>
            </div>';
        }

        $htmlProtocol = '';
        if (isset($mostrar['PROTOCOL']) && $mostrar['PROTOCOL']) {
            $htmlProtocol = '<div class="separador-env-bar"></div>
            <div class="contenedor-ver-env-bar">
                <img draggable="false" class="logo-lenguaje-env-bar logo-width-env-bar" src="' . $logoProtocolo . '" />
                <span class="lenguaje-env-bar">Protocolo:</span>
                <span class="version-env-bar">' . $this->getProtocolo() . '</span>
            </div>';
        }

        $htmlVersion = '';
        if (isset($mostrar['VERSION']) && $mostrar['VERSION']) {
            $htmlVersion = '<div class="separador-env-bar"></div>
            <div class="contenedor-ver-env-bar">
                <img draggable="false" class="logo-lenguaje-env-bar logo-width-env-bar" src="' . $logoVersion . '" />
                <span class="lenguaje-env-bar">Versión:</span>
                <span class="version-env-bar">v' . $this->getVersionSoft() . '</span>
            </div>';
        }

        /* HTML Barra */
        $body = '<div class="contenedor-env-bar ancho-borde-contenedor-env-bar" id="contenedor-env-bar">
            <div id="logo-env-bar" class="contenedor-logo-env-bar">
                <img  class="logo-env-bar" src="' . $logo .'" draggable="false"/>
            </div>
            <div class="separador-env-bar"></div>
            <div class="contenedor-ver-env-bar">
                <span class="lenguaje-env-bar">' . $this->getCompany() .'</span>
            </div>
            ' . $htmlPHP . '
            ' . $htmlLaravel . '
            ' . $htmlProtocol . '
            ' . $htmlVersion . '
            <div class="separador-env-bar"></div>
            <div class="items-env-bar-end">
                <div class="contenedor-ver-env-bar tooltip-env-bar">
                    <div class="ambiente-env-bar">
                        <span class="tooltiptext-env-bar">
                            <p class="text-ambiente-env-bar">' . $this->getDescriptionQA() .'</p>
                        </span>
                        ' . $this->getTextQA() . '
                    </div>
                </div>
                <div id="link-produccion" class="contenedor-ver-env-bar">
                    <div class="url-prod-env-bar tooltip-env-bar">
                        <span class="tooltiptext-env-bar">
                        <p class="text-ambiente-env-bar">' . $this->getDescriptionProduction() . '</p>
                        </span>
                        ' . $this->getTextProduction() . '
                    </div>
                </div>
                <div class="contenedor-ver-env-bar">
                    <div class="about-env-bar tooltip-env-bar">
                        <span class="tooltiptext-env-bar">
                            <p class="text-ambiente-env-bar">' . $this->getDescriptionInfo() . '</p>
                            <img class="img-toltip-env-bar" src="' . $logoCompany . '" >
                        </span>
                        ?
                    </div>
                </div>
            </div>
        </div>';
        $script = Script::JavaScript();

        if (env('APP_DEBUG')) {
            return $styles.$body.$script;
        }
        
    }

    /* Metodo Devolucion de Barra */
    public static function bar(string $company = 'Altum Digital') {
        Self::$company = $company;
        return new static();
    }

}
