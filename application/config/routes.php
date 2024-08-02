<?php  if ( ! defined('BASEPATH')) exit('Nenhum acesso direto ao script é permitido');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| Este arquivo permite remapear solicitações de URI para funções específicas do controlador.
|
| Normalmente, há um relacionamento um-para-um entre uma string de URL
| e sua classe/método de controlador correspondente. Os segmentos em um
| URL normalmente segue este padrão:
|
|	exemplo.com/class/method/id/
|
| Em alguns casos, entretanto, você pode querer remapear esse relacionamento
| para que uma classe/função diferente seja chamada daquela
| correspondente ao URL.
|
| Consulte o guia do usuário para obter detalhes completos:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| Esta rota indica qual classe de controlador deve ser carregada se o
| URI não contém dados. No exemplo acima, a classe “welcome”
| estaria carregado.
|
|	$route['404_override'] = 'erros/page_missing';
|
| Esta rota informará ao roteador quais segmentos de URI usar se aqueles fornecidos
| no URL não pode corresponder a uma rota válida.
|
*/

$route['default_controller'] = "mapos";
$route['404_override'] = '';



/* End of file routes.php */
/* Location: ./application/config/routes.php */