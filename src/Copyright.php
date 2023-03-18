<?php 

namespace Rmunate\Copyright;

class Copyright
{

    #------------------------------------------------------------------
    # Propiedades Del Objeto
    #------------------------------------------------------------------
    private $copyright;
    private $version;
    private $author;
    private $keywords;
    private $developer;
    private $email;
    private $web;
    private $year;

    private static $values;

    #------------------------------------------------------------------
    # Constructor
    #------------------------------------------------------------------
    public function __construct(){

        /* Definir Valores del Copyright */
        $data = Self::$values;
        $this->copyright = (isset($data['copyright'])) ? trim($data['copyright']) : env('COPYRIGHT_NAME', null);
        $this->version = (isset($data['version'])) ? trim($data['version']) : env('COPYRIGHT_VERSION', null);
        $this->author = (isset($data['author'])) ? trim($data['author']) : env('COPYRIGHT_AUTHOR', null);
        $this->keywords = (isset($data['keywords'])) ? trim($data['keyword']) : env('COPYRIGHT_KEYWORDS', null);
        $this->developer = (isset($data['developer'])) ? trim($data['developer']) : env('COPYRIGHT_OTHER_DEVELOPERS', null);
        $this->email = (isset($data['email'])) ? trim($data['email']) : env('COPYRIGHT_EMAIL', null);
        $this->web = (isset($data['web'])) ? trim($data['web']) : env('COPYRIGHT_WEB', null);
        $this->year = (isset($data['year'])) ? trim($data['year']) : env('COPYRIGHT_YEAR', null);

    }

    #------------------------------------------------------------------
    # Inicializar Clase
    #------------------------------------------------------------------
    public static function meta(array $data = []){
        Self::$values = $data;
        return new static;
    }

    #------------------------------------------------------------------
    # Obtener Valores
    #------------------------------------------------------------------

    /* Obtener Valores --- Nombre */
    public function getName(){
        return $this->copyright;
    }

    /* Obtener Valores --- Version */
    public function getVersion(){
        return $this->version;
    }

    /* Obtener Valores --- Descripción */
    public function getDescription(){
        return $this->description;
    }

    /* Obtener Valores --- Author */
    public function getAuthor(){
        return $this->author;
    }

    /* Obtener Valores --- Keywords */
    public function getKeywords(){
        return $this->keywords;
    }
    
    /* Obtener Valores --- Developers */
    public function getDeveloper(){
        return $this->developer;
    }
    
    /* Obtener Valores --- Email */
    public function getEmail(){
        return $this->email;
    }

    /* Obtener Valores --- Web */
    public function getWeb(){
        return $this->web;
    }

    /* Obtener Valores --- Year */
    public function getYear(){
        if (!empty($this->year)) {
            return $this->year;
        }
        return date('Y');
    }

    #------------------------------------------------------------------
    # Obtener Valores HTML
    #------------------------------------------------------------------

    /* Obtener Valores --- Nombre */
    public function getNameHTML(){
        return '<meta name="copyright" content="' . $this->copyright . '">';
    }

    /* Obtener Valores --- Version */
    public function getVersionHTML(){
        return '<meta name="version" content="' . $this->version . '">';
    }

    /* Obtener Valores --- Descripción */
    public function getDescriptionHTML(){
        return '<meta name="description" content="' . $this->description . '">';
    }

    /* Obtener Valores --- Author */
    public function getAuthorHTML(){
        return '<meta name="author" content="' . $this->author . '">';
    }

    /* Obtener Valores --- Keywords */
    public function getKeywordsHTML(){
        return '<meta name="keywords" content="' . $this->keywords . '">';
    }
    
    /* Obtener Valores --- Developers */
    public function getDeveloperHTML(){
        return '<meta name="developer" content="' . $this->developer . '">';
    }
    
    /* Obtener Valores --- Email */
    public function getEmailHTML(){
        return '<meta name="email" content="' . $this->email . '">';
    }

    /* Obtener Valores --- Web */
    public function getWebHTML(){
        return '<meta name="web" content="' . $this->web . '">';
    }

    /* Obtener Valores --- Year */
    public function getYearHTML(){
        if (!empty($this->year)) {
        return $this->web;
            return '<meta name="year" content="' . $this->year . '">';
        }
        return '<meta name="year" content="' . date('Y') . '">';
    }

    #------------------------------------------------------------------
    # Obener Varios valores
    #------------------------------------------------------------------

    public function get(array $valores = []){
        if (count($valores) > 0) {
            if (in_array('copyright')) {
                $data['copyright'] = $this->getName();
            }
            if (in_array('version')) {
                $data['version'] = $this->getVersion();
            }
            if (in_array('author')) {
                $data['author'] = $this->getAuthor();
            }
            if (in_array('keywords')) {
                $data['keywords'] = $this->getKeywords();
            }
            if (in_array('developer')) {
                $data['developer'] = $this->getDeveloper();
            }
            if (in_array('email')) {
                $data['email'] = $this->getEmail();
            }
            if (in_array('web')) {
                $data['web'] = $this->getWeb();
            }
            if (in_array('year')) {
                $data['year'] = $this->getYear();
            }
        } else {
            $data = [
                'copyright' => $this->getName(),
                'version' => $this->getVersion(),
                'author' => $this->getAuthor(),
                'keywords' => $this->getKeywords(),
                'developer' => $this->getDeveloper(),
                'email' => $this->getEmail(),
                'web' => $this->getWeb(),
                'year' => $this->getYear()
            ];
        }
        return (object) $data;
    }

    public function getHTML(array $valores = []){
        if (count($valores) > 0) {
            if (in_array('copyright')) {
                $data['copyright'] = $this->getNameHTML();
            }
            if (in_array('version')) {
                $data['version'] = $this->getVersionHTML();
            }
            if (in_array('author')) {
                $data['author'] = $this->getAuthorHTML();
            }
            if (in_array('keywords')) {
                $data['keywords'] = $this->getKeywordsHTML();
            }
            if (in_array('developer')) {
                $data['developer'] = $this->getDeveloperHTML();
            }
            if (in_array('email')) {
                $data['email'] = $this->getEmailHTML();
            }
            if (in_array('web')) {
                $data['web'] = $this->getWebHTML();
            }
            if (in_array('year')) {
                $data['year'] = $this->getYearHTML();
            }
        } else {
            $data = [
                'copyright' => $this->getNameHTML(),
                'version' => $this->getVersionHTML(),
                'author' => $this->getAuthorHTML(),
                'keywords' => $this->getKeywordsHTML(),
                'developer' => $this->getDeveloperHTML(),
                'email' => $this->getEmailHTML(),
                'web' => $this->getWebHTML(),
                'year' => $this->getYearHTML()
            ];
        }
        return (object) $data;
    }

    public function renderHTML(array $valores = []){
        $html = '';
        foreach ($this->getHTML($valores) as $index => $metaHTML) {
            $html .= $metaHTML;
        }
        return $html;
    }
}


?>