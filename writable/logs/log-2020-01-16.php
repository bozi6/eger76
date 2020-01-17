<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-01-16 08:00:18 --> syntax error, unexpected ')'
#0 /volume1/web/eger76/system/Router/Router.php(192): CodeIgniter\Router\Router->autoRoute('kezd/stat')
#1 /volume1/web/eger76/system/CodeIgniter.php(725): CodeIgniter\Router\Router->handle('kezd/stat')
#2 /volume1/web/eger76/system/CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 19:43:48 --> Call to a member function paginate() on array
#0 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#1 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#2 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-16 20:18:45 --> Call to a member function paginate() on array
#0 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#1 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#2 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-16 20:24:14 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::paginate()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(90): App\Models\KarModell->getKik()
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 20:24:29 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::paginate()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(90): App\Models\KarModell->getKik()
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 20:25:57 --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 155648 bytes)
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2020-01-16 20:28:01 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::paginate()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(90): App\Models\KarModell->getKik()
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 20:32:38 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::paginate()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(90): App\Models\KarModell->getKik()
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 20:34:16 --> Trying to get property 'nev' of non-object
#0 /volume1/web/eger76/app/Views/kezd/kiaz.php(22): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', '/volume1/web/eg...', 22, Array)
#1 /volume1/web/eger76/system/View/View.php(236): include('/volume1/web/eg...')
#2 /volume1/web/eger76/system/Common.php(176): CodeIgniter\View\View->render('/kezd/kiaz', Array, NULL)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(98): view('/kezd/kiaz', Array)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 20:38:53 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1555): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/system/Model.php(1120): CodeIgniter\Model->countAllResults(false)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(91): CodeIgniter\Model->paginate(10)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 20:42:05 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::paginate()
#0 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#1 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#2 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-16 20:42:31 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1555): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/system/Model.php(1120): CodeIgniter\Model->countAllResults(false)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(92): CodeIgniter\Model->paginate(10)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 20:44:51 --> Class 'App\Controllers\App\Models\karModell' not found
#0 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#1 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#2 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-16 20:45:21 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1555): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/system/Model.php(1120): CodeIgniter\Model->countAllResults(false)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(92): CodeIgniter\Model->paginate(10)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 20:45:38 --> syntax error, unexpected '->' (T_OBJECT_OPERATOR)
#0 /volume1/web/eger76/system/Router/Router.php(192): CodeIgniter\Router\Router->autoRoute('kezd/kiaz')
#1 /volume1/web/eger76/system/CodeIgniter.php(725): CodeIgniter\Router\Router->handle('kezd/kiaz')
#2 /volume1/web/eger76/system/CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 20:45:47 --> Class 'App\Models\karModell\getKik' not found
#0 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#1 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#2 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-16 20:45:56 --> syntax error, unexpected 'getKik' (T_STRING), expecting variable (T_VARIABLE) or '$'
#0 /volume1/web/eger76/system/Router/Router.php(192): CodeIgniter\Router\Router->autoRoute('kezd/kiaz')
#1 /volume1/web/eger76/system/CodeIgniter.php(725): CodeIgniter\Router\Router->handle('kezd/kiaz')
#2 /volume1/web/eger76/system/CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 20:46:19 --> syntax error, unexpected 'getKik' (T_STRING), expecting variable (T_VARIABLE) or '$'
#0 /volume1/web/eger76/system/Router/Router.php(192): CodeIgniter\Router\Router->autoRoute('kezd/kiaz')
#1 /volume1/web/eger76/system/CodeIgniter.php(725): CodeIgniter\Router\Router->handle('kezd/kiaz')
#2 /volume1/web/eger76/system/CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 20:46:29 --> Class 'App\Controllers\App\Models\karModell' not found
#0 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#1 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#2 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-16 20:46:34 --> Class 'App\Controllers\App\Models\karModell' not found
#0 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#1 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#2 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-16 20:46:42 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1555): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/system/Model.php(1120): CodeIgniter\Model->countAllResults(false)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(92): CodeIgniter\Model->paginate(10)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 20:47:07 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1555): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/system/Model.php(1120): CodeIgniter\Model->countAllResults(false)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(92): CodeIgniter\Model->paginate(10)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 20:47:07 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1555): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/system/Model.php(1120): CodeIgniter\Model->countAllResults(false)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(92): CodeIgniter\Model->paginate(10)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 20:48:12 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1555): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/system/Model.php(1120): CodeIgniter\Model->countAllResults(false)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(92): CodeIgniter\Model->paginate(10)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 20:50:15 --> Undefined variable: pager
#0 /volume1/web/eger76/app/Controllers/Kezd.php(87): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/volume1/web/eg...', 87, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 20:50:26 --> Undefined property: App\Controllers\Kezd::$pager
#0 /volume1/web/eger76/app/Controllers/Kezd.php(87): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 87, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 20:51:51 --> Undefined property: App\Controllers\Kezd::$pager
#0 /volume1/web/eger76/app/Controllers/Kezd.php(87): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 87, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 20:53:02 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::paginate()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(89): App\Models\KarModell->getKik()
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 20:53:16 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1555): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/system/Model.php(1120): CodeIgniter\Model->countAllResults(false)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(90): CodeIgniter\Model->paginate(10)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 20:53:49 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1555): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/system/Model.php(1120): CodeIgniter\Model->countAllResults(false)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(91): CodeIgniter\Model->paginate(10)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 20:53:54 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1555): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/system/Model.php(1120): CodeIgniter\Model->countAllResults(false)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(91): CodeIgniter\Model->paginate(10)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 21:01:59 --> syntax error, unexpected ''belpettek'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$'
#0 /volume1/web/eger76/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/volume1/web/eg...')
#1 /volume1/web/eger76/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\karM...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\karM...')
#3 /volume1/web/eger76/app/Controllers/Kezd.php(32): spl_autoload_call('App\\Models\\karM...')
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->index()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 21:02:53 --> syntax error, unexpected ''belepettek'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$'
#0 /volume1/web/eger76/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('/volume1/web/eg...')
#1 /volume1/web/eger76/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\karM...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\karM...')
#3 /volume1/web/eger76/app/Controllers/Kezd.php(32): spl_autoload_call('App\\Models\\karM...')
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->index()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 21:03:43 --> Undefined variable: db
#0 /volume1/web/eger76/app/Models/karModell.php(26): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/volume1/web/eg...', 26, Array)
#1 /volume1/web/eger76/app/Controllers/Kezd.php(90): App\Models\KarModell->getKik()
#2 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#3 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#4 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-16 21:03:49 --> Class 'Config\Databse' not found
#0 /volume1/web/eger76/app/Controllers/Kezd.php(90): App\Models\KarModell->getKik()
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:05:25 --> Undefined property: mysqli::$nev
#0 /volume1/web/eger76/app/Views/kezd/kiaz.php(22): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 22, Array)
#1 /volume1/web/eger76/system/View/View.php(236): include('/volume1/web/eg...')
#2 /volume1/web/eger76/system/Common.php(176): CodeIgniter\View\View->render('/kezd/kiaz', Array, NULL)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(98): view('/kezd/kiaz', Array)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 21:06:24 --> Undefined property: mysqli::$nev
#0 /volume1/web/eger76/app/Views/kezd/kiaz.php(22): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 22, Array)
#1 /volume1/web/eger76/system/View/View.php(236): include('/volume1/web/eg...')
#2 /volume1/web/eger76/system/Common.php(176): CodeIgniter\View\View->render('/kezd/kiaz', Array, NULL)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(98): view('/kezd/kiaz', Array)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 21:07:50 --> Trying to get property 'kik' of non-object
#0 /volume1/web/eger76/app/Controllers/Kezd.php(96): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', '/volume1/web/eg...', 96, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:07:57 --> syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')'
#0 /volume1/web/eger76/system/Router/Router.php(192): CodeIgniter\Router\Router->autoRoute('kezd/kiaz')
#1 /volume1/web/eger76/system/CodeIgniter.php(725): CodeIgniter\Router\Router->handle('kezd/kiaz')
#2 /volume1/web/eger76/system/CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:08:55 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::getresultArray()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(90): App\Models\KarModell->getKik()
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:09:55 --> Trying to get property 'nev' of non-object
#0 /volume1/web/eger76/app/Views/kezd/kiaz.php(22): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', '/volume1/web/eg...', 22, Array)
#1 /volume1/web/eger76/system/View/View.php(236): include('/volume1/web/eg...')
#2 /volume1/web/eger76/system/Common.php(176): CodeIgniter\View\View->render('/kezd/kiaz', Array, NULL)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(99): view('/kezd/kiaz', Array)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 21:11:58 --> Trying to get property 'nev' of non-object
#0 /volume1/web/eger76/app/Views/kezd/kiaz.php(22): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', '/volume1/web/eg...', 22, Array)
#1 /volume1/web/eger76/system/View/View.php(236): include('/volume1/web/eg...')
#2 /volume1/web/eger76/system/Common.php(176): CodeIgniter\View\View->render('/kezd/kiaz', Array, NULL)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(98): view('/kezd/kiaz', Array)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 21:13:42 --> Call to a member function getResult() on array
#0 /volume1/web/eger76/system/View/View.php(236): include()
#1 /volume1/web/eger76/system/Common.php(176): CodeIgniter\View\View->render('/kezd/kiaz', Array, NULL)
#2 /volume1/web/eger76/app/Controllers/Kezd.php(98): view('/kezd/kiaz', Array)
#3 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#4 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#5 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-16 21:15:23 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::paginate()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(90): App\Models\KarModell->getKik()
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:16:01 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::paginate()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(90): App\Models\KarModell->getKik()
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->kiaz()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:18:24 --> Undefined property: CodeIgniter\View\View::$lang
#0 /volume1/web/eger76/app/Views/kezd/csoport.php(4): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 4, Array)
#1 /volume1/web/eger76/system/View/View.php(236): include('/volume1/web/eg...')
#2 /volume1/web/eger76/system/Common.php(176): CodeIgniter\View\View->render('/kezd/csoport', Array, NULL)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(122): view('/kezd/csoport', Array)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csoportos()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 21:21:17 --> Undefined variable: csoplist
#0 /volume1/web/eger76/app/Views/kezd/csoport.php(6): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/volume1/web/eg...', 6, Array)
#1 /volume1/web/eger76/system/View/View.php(236): include('/volume1/web/eg...')
#2 /volume1/web/eger76/system/Common.php(176): CodeIgniter\View\View->render('/kezd/csoport', Array, NULL)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(122): view('/kezd/csoport', Array)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csoportos()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 21:22:29 --> Undefined variable: csoplist
#0 /volume1/web/eger76/app/Views/kezd/csoport.php(6): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/volume1/web/eg...', 6, Array)
#1 /volume1/web/eger76/system/View/View.php(236): include('/volume1/web/eg...')
#2 /volume1/web/eger76/system/Common.php(176): CodeIgniter\View\View->render('/kezd/csoport', Array, NULL)
#3 /volume1/web/eger76/app/Controllers/Kezd.php(122): view('/kezd/csoport', Array)
#4 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csoportos()
#5 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#6 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-16 21:24:05 --> Cannot redeclare App\Controllers\Kezd::csoportos()
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2020-01-16 21:26:35 --> Undefined property: App\Controllers\Kezd::$karszalag_model
#0 /volume1/web/eger76/app/Controllers/Kezd.php(115): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 115, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csoportos()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:26:55 --> Undefined property: App\Controllers\Kezd::$karModell
#0 /volume1/web/eger76/app/Controllers/Kezd.php(115): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 115, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csoportos()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:27:11 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1673): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/app/Controllers/Kezd.php(115): CodeIgniter\Model->__call('csoplist', Array)
#3 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csoportos()
#4 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#5 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-16 21:29:22 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::select()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(115): App\Models\KarModell->csoplist()
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csoportos()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:31:12 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::getResult()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(115): App\Models\KarModell->csoplist()
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csoportos()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:38:06 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:38:07 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:39:49 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:39:50 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:39:52 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:39:53 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:39:53 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:39:53 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:39:53 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:39:53 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:40:30 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:40:31 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:40:32 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:40:32 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:40:32 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:40:32 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:40:32 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:40:35 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:40:35 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:40:35 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:40:35 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:41:54 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:42:33 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:43:45 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:43:46 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:43:48 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:44:58 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:46:22 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:46:22 --> Undefined property: App\Controllers\Kezd::$input
#0 /volume1/web/eger76/app/Controllers/Kezd.php(141): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', '/volume1/web/eg...', 141, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:49:35 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz('95')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:49:45 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz('95')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:49:46 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz('5')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:49:46 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz('83')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:49:46 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz('13')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:50:07 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz('95')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:52:02 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(144): App\Models\KarModell->csopresz('95')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:53:27 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz('5')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 21:54:52 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz('95')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 22:02:52 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz('95')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 22:06:22 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz(NULL)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 22:09:21 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz(NULL)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 22:10:00 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz('95')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 22:10:29 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz('95')
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-16 22:10:46 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::order_by()
#0 /volume1/web/eger76/app/Controllers/Kezd.php(143): App\Models\KarModell->csopresz(NULL)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
