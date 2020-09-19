<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
$hoverEffects = array(
	'Effect 1'	=>	'effect1',
	'Effect 2'	=>	'effect2',
	'Effect 3'	=>	'effect3',
	'Effect 4'	=>	'effect4',
	'Effect 5'	=>	'effect5',
	'Effect 6'	=>	'effect6',
	'Effect 7'	=>	'effect7',
	'Effect 8'	=>	'effect8',
	'Effect 9'	=>	'effect9',
	'Effect 10'	=>	'effect10',
	'Effect 11'	=>	'effect11',
	'Effect 12'	=>	'effect12',
	'Effect 13'	=>	'effect13',
	'Effect 14'	=>	'effect14',
	'Effect 15'	=>	'effect15',
	'Effect 16'	=>	'effect16',
	'Effect 17'	=>	'effect17',
	'Effect 18'	=>	'effect18',
	'Effect 19'	=>	'effect19',
	'Effect 20'	=>	'effect20',
);

$scrollbar_styles = array(
    'No Scroll Bar'   =>  'cursor-hide',        
    'Style1'  	 	  =>  'cursor-style1',        
    'Style2'  	 	  =>  'cursor-style2',        
    'Style3'  	 	  =>  'cursor-style3',        
    'Style4'  	 	  =>  'cursor-style4',        
    'Style5'  	 	  =>  'cursor-style5',        
    'Style6'  	 	  =>  'cursor-style6',        
    'Style7'  	 	  =>  'cursor-style7',        
    'Style8'  	 	  =>  'cursor-style8',        
    'Style9'  	 	  =>  'cursor-style9',        
    'Style10'  	 	  =>  'cursor-style10',        
    );


$settings_params = array( 

    array(
		"type" 			=> 	"attach_images",
		"heading" 		=> 	__("Image"),
		"param_name" 	=> 	"ihe_image",
		"description" 	=> 	__("Escolhe uma lista de imagens"),
		"group" 		=> 'Imagem',
	),

	array(
		"type" 			=> "textarea_html",
		"heading" 		=> __("Conteúdo do banner"),
		"param_name" 	=> "content",
		"description" 	=> __("Conteúdo do banner com html."),
		"group" 		=> 'Legenda',
	),

    array(
        "type" 			=> "vc_link",
        "heading" 		=> __("Anterior"),
        "param_name" 	=> "link_anterior",
        "description" 	=> __("Apontamento anterior"),
        "group" 		=> 'Navegação',
    ),

    array(
        "type" 			=> "vc_link",
        "heading" 		=> __("Próximo"),
        "param_name" 	=> "link_proximo",
        "description" 	=> __("Apontamento Próxima"),
        "group" 		=> 'Navegação',
    ),

);

?>