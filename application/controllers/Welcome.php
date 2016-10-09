<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('welcome');
	}

	public function get_product_detail() {
		$product_detail_url = $this->input->post('product_detail_url');

		$result['product_detail_url'] = $product_detail_url;
		$result['message'] = '';

		if (empty($product_detail_url)) {
			$result['message'] = 'Empty product detail url';
		} else {
			$this->load->model('product_fcd');

			$web_page = $this->product_fcd->scrap($product_detail_url);

			$this->load->library('simple_html_dom');
			$raw = str_get_html($web_page['content']);

			foreach($raw->find('span[class="prod-det-title"]') as $element) {
				$result['produk'] = $element->plaintext;
			}

			foreach($raw->find('span[class="prod-det-crnt-price"]') as $element) {
				$result['harga'] = $element->plaintext;
			}
		}
		$data['result'] = $result;

		$this->load->view('welcome', $data);
	}

    public function page_404()
    {
		$this->load->view('page_404');
    }
}
