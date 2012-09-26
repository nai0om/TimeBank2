<?php defined('SYSPATH') or die('No direct script access.');
 class Settings {
    private static $instance;
    private $settings;
	private static $filename = 'settings.ini';
   
    private function __construct($ini_file) {
        $this->settings = parse_ini_file($ini_file, true);
    }
   
    public static function getInstance() {
        if(! isset(self::$instance)) {
            self::$instance = new Settings(self::$filename);           
        }
        return self::$instance;
    }
   
    public function __get($setting) {
        if(array_key_exists($setting, $this->settings)) {
            return $this->settings[$setting];
        } else {
            foreach($this->settings as $section) {
                if(array_key_exists($setting, $section)) {
                    return $section[$setting];
                }
            }
        }
    }
	
	public function __set($setting, $value) {
		if(array_key_exists($setting, $this->settings)) {
             $this->settings[$setting] = $value;
        } else {
            foreach($this->settings as $key => $section) {
                if(array_key_exists($setting, $section)) {
                     $this->settings[$key][$setting]= $value;
                }
            }
        }
    }
	
	public function update_setting()
	{
		$assoc_arr = $this->settings;
		$path = self::$filename; 
		$has_sections = true;
		$content = ""; 
		if ($has_sections) { 
			foreach ($assoc_arr as $key=>$elem) { 
				$content .= "[".$key."]\n"; 
				foreach ($elem as $key2=>$elem2) { 
					if(is_array($elem2)) 
					{ 
						for($i=0;$i<count($elem2);$i++) 
						{ 
							$content .= $key2."[] = \"".$elem2[$i]."\"\n"; 
						} 
					} 
					else if($elem2=="") $content .= $key2." = \n"; 
					else $content .= $key2." = \"".$elem2."\"\n"; 
				} 
			} 
		} 
		else { 
			foreach ($assoc_arr as $key=>$elem) { 
				if(is_array($elem)) 
				{ 
					for($i=0;$i<count($elem);$i++) 
					{ 
						$content .= $key2."[] = \"".$elem[$i]."\"\n"; 
					} 
				} 
				else if($elem=="") $content .= $key2." = \n"; 
				else $content .= $key2." = \"".$elem."\"\n"; 
			} 
		} 
	
		if (!$handle = fopen($path, 'w')) { 
			return false; 
		} 
		if (!fwrite($handle, $content)) { 
			return false; 
		} 
		fclose($handle); 
		return true; 
	}


} 
?>