<?php
include_once 'epi/Epi.php';
Epi::setPath('base', 'epi/');
Epi::init('route');
Epi::init('config');
Epi::init('api');
Epi::setSetting('exceptions', true);

//******** route
getRoute()->get('/',array('Agrox_template','index') );  // เลือก template ตรงนี้
//getRoute()->get('/p/(\w+)/', array('Agrox_template','page')); //// เลือก template ตรงนี้
getRoute()->get('/(\w+).html', array('Agrox_template','renderhtml'));
getRoute()->get('/readjson', array('Agrox_template','readjson'));
getRoute()->post('/renderjson', array('Agrox_template','renderjson'));
//getRoute()->get('/(\w+)/(\w+)', 'greeting');

//********** set var via config here
//getConfig()->set('baseurl','http://localhost/example/test/');
getConfig()->set('baseurl','http://water.rid.go.th/hwm/wmoc/');
getConfig()->set('static_template_path','static/assets/');
getConfig()->set('static_path','views');
getConfig()->set('project_name','ฝ่ายจัดสรรน้ำ');

//getConfig()

//var $init_array;
$init_array=(array)getConfig()->get();


//// class
class Agrox_template{
	protected $twig;
	var $template_array;
	function __construct(){
		global $init_array;
		require_once './vendor/autoload.php';
		$loader = new Twig_Loader_Filesystem('./views');
		$this->twig = new Twig_Environment($loader,array(
			//'cache' => './cache',
			'cache' => false,
		));
		$this->template_array=$init_array;
		$this->template_array['title']=$init_array['project_name'];
		$my_function = new Twig_SimpleFunction('xedit', function ($x) {
		    // ...
			return '<span class="me">'.$x.'</span>';
		});
		$this->twig->addFunction($my_function);
		//return $twig;
	}
	public static function index(){
		$twigclass=new Agrox_template();
		$twigclass->template_array['title'].='- หน้าแรก';
		header('Content-type: text/html; charset=utf-8');
		echo $twigclass->twig->render('home.html', $twigclass->template_array);
		//print_r($twigclass->template_array);
	}
	public static function renderhtml($template_file_name){
		$template_name_full=$template_file_name.'.html';
		$twigclass=new Agrox_template();
		header('Content-type: text/html; charset=utf-8');
			echo $twigclass->twig->render($template_name_full, $twigclass->template_array);
		//print_r($twigclass->template_array);
	}

	public static function page($template_file_name){
		$template_name_full=$template_file_name.'.html';
		$twigclass=new Agrox_template();
		echo $twigclass->twig->render($template_name_full, $twigclass->template_array);
		//echo $template_name_full;
	}

	public static function renderjson(){
		if($_REQUEST['mytextString']){
			$txt=$_REQUEST['mytextString'];
			$myfile = fopen("water_data.json", "w") or die("Unable to open file!!");
			fwrite($myfile, $txt);
			fclose($myfile);
			header('Content-Type: application/json');
			echo json_encode(array('status' => 'ok'));
		}
	}

	public static function readjson(){
		$myfile = fopen("water_data.json", "r") or die("Unable to open file!!");
		$result = fread($myfile,1000000);
		header("Access-Control-Allow-Origin: *");
		header('Content-Type: application/json');
		echo $result;
	}


}//class

getRoute()->run();
?>
