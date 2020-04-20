<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['apresentacao'] = 'apresentacao';
$route['auditorios'] = 'auditorios';
$route['convenios_nacionais'] = 'conveniosNacionais';
$route['convenios_internacionais'] = 'conveniosInternacionais';
$route['editais'] = 'editais';
$route['eventos'] = 'eventos';
$route['formularios'] = 'formularios';
$route['informativos'] = 'informativos';
$route['intercambios'] = 'intercambios';
$route['noticias'] = 'noticias_anpae';
$route['pesquisas'] = 'pesquisas';
$route['professores'] = 'professores';
$route['reconhecimento'] = 'reconhecimento';
$route['regimento'] = 'regimento';
$route['resolucoes'] = 'resolucoes';
$route['selecoes'] = 'selecoes';
$route['teses_dissertacoes'] = 'tesesDissertacoes';

$route['eventos/(:num)'] = 'eventos/index/$1';
$route['informativos/(:num)'] = 'informativos/index/$1';
$route['noticias/(:num)'] = 'noticias_anpae/index/$1';
$route['professores/(:num)'] = 'professores/index/$1';
$route['selecoes/(:num)'] = 'selecoes/index/$1';

$route['painel_controle'] = 'usuarios';

$route['painel_controle/convenios'] = 'convenios/listar';
$route['painel_controle/editais'] = 'editais/listar';
$route['painel_controle/eventos'] = 'eventos/listar';
$route['painel_controle/formularios'] = 'formularios/listar';
$route['painel_controle/informativos'] = 'informativos/listar';
$route['painel_controle/noticias_anpae'] = 'noticias_anpae/listar';
$route['painel_controle/pesquisas'] = 'pesquisas/listar';
$route['painel_controle/professores'] = 'professores/listar';
$route['painel_controle/publicacoes'] = 'publicacoes/listar';
$route['painel_controle/resolucoes'] = 'resolucoes/listar';
$route['painel_controle/usuarios'] = 'usuarios/listar';

$route['painel_controle/eventos/(:num)'] = 'eventos/view/$1';
$route['painel_controle/usuarios/(:num)'] = 'usuarios/view/$1';

$route['painel_controle/eventos/adicionar'] = 'eventos/adicionar';
$route['painel_controle/editais/adicionar'] = 'editais/adicionar';
$route['pesquisas/adicionar'] = 'pesquisas/adicionar';
$route['painel_controle/professores/adicionar'] = 'professores/adicionar';

//$route['pesquisas/alterar/(:num)'] = 'pesquisas/adicionar/$1';

$route['lang'] = 'lang_controller';