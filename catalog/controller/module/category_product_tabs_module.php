<?php

class ControllerModuleCategoryProductTabsModule extends Controller {
	
	protected function index() {
		
		//Load language file
		$this->language->load('module/category_product_tabs_module');

		//Set title from language file
      	$data['heading_title'] = $this->language->get('heading_title');

		//Load model
		$this->load->model('module/category_product_tabs_module');

		//Sample - get data from loaded model
		$data['customers'] = $this->model_module_category_product_tabs_module->getCustomerData();

		//Select template
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/category_product_tabs_module.tpl')) {
			$this->response->setOutput($this->load->view('module/category_product_tabs_module.tpl', $data));
		} else {
			$this->response->setOutput($this->load->view('module/category_product_tabs_module.tpl', $data));
		}

	}
}

?>