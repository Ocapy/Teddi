<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()	{

		parent::__construct();
		$this->lang->load('internacional');
	}

	public function index()	{

		$this->smarty->assign(array(
			'lang' => $this->lang->lang(),
			'menu5' => array(
				'en' => anchor($this->lang->switch_uri('en'),'English'),
				'es' => anchor($this->lang->switch_uri('es'),'Spanish')
			),
			'statics' => array(
				'favicon' => base_url('statics/media/favicon.png'),
				'logo' => base_url('statics/media/osaky.jpeg'),
				'css' => array(
					'awesome' => base_url('statics/css/font-awesome.min.css'),
					'material' => base_url('statics/css/materialize.css'),
					'custom' => base_url('statics/css/estilos.css')
				),
				'scripts' => array(
					'jquery' => base_url('statics/js/jquery-2.1.1.min.js'),
					'material' => base_url('statics/js/materialize.min.js'),
					'custom' => base_url('statics/js/main.js')
				)
			),
			'menu_list' => array(
				'menu1' => lang('menu1'),
				'menu2' => lang('menu2'),
				'menu3' => lang('menu3'),
				'menu4' => lang('menu4')
			),
			'carrusel' => array(
				'first' => array(
					'image' => base_url('statics/media/background1.jpg'),
					'title' => lang('carrusel.title1'),
					'subtitle' => lang('carrusel.subtitle1'),
					'class' => 'left-align'
				),
				'second' => array(
					'image' => base_url('statics/media/background2.jpg'),
					'title' => lang('carrusel.title2'),
					'subtitle' => 'subtitulo',
					'class' => 'center-align'
				),
				'third' => array(
					'image' => base_url('statics/media/background3.jpg'),
					'title' => lang('carrusel.title3'),
					'subtitle' => lang('carrusel.subtitle3'),
					'class' => 'right-align'
				)
			),
			'blocks_1' => array(
				'block_title' => lang('block1.title'),
				'block_subtitle' => lang('block1.subtitle'),
				'block_content' => lang('block1.content'),
				'html' => array(
					'card_1' => array(
						'image' => base_url('statics/media/road.jpg'),
						'title' => lang('block1.card1.title'),
						'content' => lang('block1.card1.content')
					),
					'card_2' => array(
						'image' => base_url('statics/media/coffee.jpg'),
						'title' => lang('block1.card2.title'),
						'content' => lang('block1.card2.content')
					),
					'card_3' => array(
						'image' => base_url('statics/media/shopping.jpg'),
						'title' => lang('block1.card3.title'),
						'content' => lang('block1.card3.content')
					)
				)
			),
			'blocks_2' => array(
				'block_parallax' => base_url('statics/media/background1.jpg'),
				'block_title' => lang('block2.title'),
				'block_subtitle' => lang('block2.subtitle'),
				'block_content' => lang('block2.content'),
				'categories' => array(
					'category1' => array(
						'card1' => array(
							'title' => 'titulo',
							'image' => base_url('statics/media/shopping.jpg'),
							'content' => lang('lorem')
						),
						'card2' => array(
							'title' => 'titulo',
							'image' => base_url('statics/media/shopping.jpg'),
							'content' => lang('lorem')
						),
						'card3' => array(
							'title' => 'titulo',
							'image' => base_url('statics/media/shopping.jpg'),
							'content' => lang('lorem')
						)
					),
					'category2' => array(
						'card1' => array(
							'title' => 'titulo',
							'image' => base_url('statics/media/coffee.jpg'),
							'content' => lang('lorem')
						),
						'card2' => array(
							'title' => 'titulo',
							'image' => base_url('statics/media/coffee.jpg'),
							'content' => lang('lorem')
						),
						'card3' => array(
							'title' => 'titulo',
							'image' => base_url('statics/media/coffee.jpg'),
							'content' => lang('lorem')
						)
					),
					'category3' => array(
						'card1' => array(
							'title' => 'titulo',
							'image' => base_url('statics/media/road.jpg'),
							'content' => lang('lorem')
						),
						'card2' => array(
							'title' => 'titulo',
							'image' => base_url('statics/media/road.jpg'),
							'content' => lang('lorem')
						),
						'card3' => array(
							'title' => 'titulo',
							'image' => base_url('statics/media/road.jpg'),
							'content' => lang('lorem')
						)
					)

				)
 			),
			'blocks_3' => array(
				'block_parallax' => base_url('statics/media/background2.jpg'),
				'block_title' => lang('block3.title'),
				'block_subtitle' => lang('block3.subtitle'),
				'block_content' => lang('block3.content'),
				'about' => array(
					'first' => array(
						'icon' => '<i class="fa fa-eye fa-4x"></i>',
						'titulo' => 'titulo',
						'content' => lang('lorem')
					),
					'second' => array(
						'icon' => '<i class="fa fa-flag fa-4x"></i>',
						'titulo' => 'titulo',
						'content' => lang('lorem')
					),
					'third' => array(
						'icon' => '<i class="fa fa-heart fa-4x"></i>',
						'titulo' => 'title',
						'content' => lang('lorem')
					)
				)
			),
			'blocks_4' => array(
				'block_parallax' => base_url('statics/media/background3.jpg'),
				'block_title' => lang('block4.title'),
				'block_subtitle' => lang('block4.subtitle'),
				'block_content' => lang('block4.content'),
				'form' => array(
					'label' => array(
						'email' => "<label for='correo'>".lang('label.email')."</label>",
						'name' => "<label for='nombre'>".lang('label.name')."</label>",
						'subject' => "<label for='asunto'>".lang('label.subject')."</label>",
						'message' => "<label for='mensaje'>".lang('label.message')."</label>"
					),
					'option' => lang('option'),
					'subject' => array(
						'first' => 'example@one.com',
						'second' => 'example@two.com',
						'third' => 'example@three.com'
					),
					'submit' => lang('button.submit').' <i class="fa fa-paper-plane right"></i>',
				),
				'contact' => lang('block4.card')
			),

		));

		$this->smarty->view('home.tpl');
	}
}
