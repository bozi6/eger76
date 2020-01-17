<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-01-17 18:59:21 --> You must set the database table to be used with your query.
#0 /volume1/web/eger76/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /volume1/web/eger76/system/Model.php(1673): CodeIgniter\Model->builder()
#2 /volume1/web/eger76/app/Controllers/Kezd.php(143): CodeIgniter\Model->__call('csoptagbelep', Array)
#3 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopupdt()
#4 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#5 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-17 19:04:54 --> Argument 1 passed to CodeIgniter\Database\BaseBuilder::update() must be of the type array or null, string given, called in /volume1/web/eger76/app/Models/karModell.php on line 126
#0 /volume1/web/eger76/app/Models/karModell.php(126): CodeIgniter\Database\BaseBuilder->update('karszalagok')
#1 /volume1/web/eger76/app/Controllers/Kezd.php(144): App\Models\KarModell->csoptagbelep('95', Array)
#2 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopupdt()
#3 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#4 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-17 19:16:29 --> Invalid argument supplied for foreach()
#0 /volume1/web/eger76/app/Models/karModell.php(119): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', '/volume1/web/eg...', 119, Array)
#1 /volume1/web/eger76/app/Controllers/Kezd.php(144): App\Models\KarModell->csoptagbelep('95', Array)
#2 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopupdt()
#3 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#4 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-17 19:18:32 --> Undefined variable: csoportok
#0 /volume1/web/eger76/app/Controllers/Kezd.php(144): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/volume1/web/eg...', 144, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopupdt()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-17 19:53:29 --> syntax error, unexpected ')'
#0 /volume1/web/eger76/system/Router/Router.php(192): CodeIgniter\Router\Router->autoRoute('kezd/csoportos')
#1 /volume1/web/eger76/system/CodeIgniter.php(725): CodeIgniter\Router\Router->handle('kezd/csoportos')
#2 /volume1/web/eger76/system/CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-17 19:56:58 --> Trying to get property 'sorsz' of non-object
#0 /volume1/web/eger76/app/Controllers/Kezd.php(167): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', '/volume1/web/eg...', 167, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-17 19:57:01 --> Trying to get property 'sorsz' of non-object
#0 /volume1/web/eger76/app/Controllers/Kezd.php(167): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', '/volume1/web/eg...', 167, Array)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopval()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-17 20:30:34 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in /volume1/web/eger76/app/Controllers/Kezd.php on line 142
#0 /volume1/web/eger76/app/Controllers/Kezd.php(142): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 /volume1/web/eger76/system/CodeIgniter.php(847): App\Controllers\Kezd->csopupdt()
#2 /volume1/web/eger76/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Kezd))
#3 /volume1/web/eger76/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /volume1/web/eger76/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
