<?php

namespace widuu\Express;

class Express
{

	public function __construct(){

	}

	public function update(){

		$content = file_get_contents("http://m.kuaidi100.com/all/");

        preg_match_all("/data\-code\=\"(?P<name>\w+)\"\>(?P<title>.*)\<\/a\>/iU",$content,$match);
     
        $name = array();
        foreach($match['title'] as $k=>$v){
            if(!strpos($v, 'img')){
                $name[$v] =$match['name'][$k];
            }
        }
        
        $config = var_export($name,true);
        $string =<<<EOF
<?php 

namespace widuu\Express

class  ExpressName{
    static \$name = {$config};
}
EOF;
    $c = file_put_contents('/Volumes/HDDONE/wwwroot/laravel/a.php', $string);
	}
}