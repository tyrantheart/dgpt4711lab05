<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-22 20:07:08 --> Declaration of App\Models\Places\Places::findAll() should be compatible with App\Models\Simple\SimpleModel::findAll(int $limit = 0, int $offset = 0)
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Places.php(5): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Declaration of ...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Plac...')
#4 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Plac...')
#5 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): spl_autoload_call('App\\Models\\Plac...')
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#8 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#11 {main}
CRITICAL - 2019-10-22 20:09:20 --> Class 'App\Models\Places' not found
#0 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#1 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#2 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#5 {main}
CRITICAL - 2019-10-22 20:11:26 --> Call to undefined function App\Models\Simple\enpty()
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\XMLModel.php(18): App\Models\Simple\SimpleModel->__construct()
#1 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\XMLModel->__construct()
#2 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#7 {main}
CRITICAL - 2019-10-22 20:13:16 --> Undefined property: App\Models\Places::$_origin
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\XMLModel.php(52): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 52, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\XMLModel.php(21): App\Models\Simple\XMLModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\XMLModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
CRITICAL - 2019-10-22 20:21:51 --> Class 'App\Models\Simple\stdClass' not found
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\XMLModel.php(21): App\Models\Simple\XMLModel->load()
#1 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\XMLModel->__construct()
#2 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#7 {main}
CRITICAL - 2019-10-22 20:23:03 --> Class 'App\Models\Simple\stdClass' not found
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\XMLModel.php(21): App\Models\Simple\XMLModel->load()
#1 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\XMLModel->__construct()
#2 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#7 {main}
CRITICAL - 2019-10-22 20:29:44 --> Class 'App\Models\Simple\stdClass' not found
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\XMLModel.php(19): App\Models\Simple\XMLModel->load()
#1 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\XMLModel->__construct()
#2 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#7 {main}
CRITICAL - 2019-10-22 20:56:54 --> Undefined property: App\Models\Places::$_origin
#0 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\XMLModel.php(45): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 45, Array)
#1 C:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\XMLModel.php(19): App\Models\Simple\XMLModel->load()
#2 C:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\XMLModel->__construct()
#3 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\xampp\\htdocs...')
#8 {main}
