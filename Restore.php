<?php
namespace FreePBX\modules\Soundlang;
use FreePBX\modules\Backup as Base;
class Restore Extends Base\RestoreBase{

	public function runRestore($jobid){
			$configs = $this->getConfigs();
			$this->addDataToTableFromArray('endpointman_brand_list', $configs['brand_list']);
			$this->addDataToTableFromArray('endpointman_custom_configs', $configs['custom_configs']);
			$this->addDataToTableFromArray('endpointman_global_vars', $configs['global_vars']);
			$this->addDataToTableFromArray('endpointman_line_list', $configs['line_list']);
			$this->addDataToTableFromArray('endpointman_mac_list', $configs['mac_list']);
			$this->addDataToTableFromArray('endpointman_model_list', $configs['model_list']);
			$this->addDataToTableFromArray('endpointman_oui_list', $configs['oui_list']);
			$this->addDataToTableFromArray('endpointman_product_list', $configs['product_list']);
			$this->addDataToTableFromArray('endpointman_template_list', $configs['template_list']);

			//TODO: Pendiente recovery files.
	}
	
	public function processLegacy($pdo, $data, $tablelist, $unknowntables){

		$endpointman_brand_list = $pdo->query("SELECT * FROM endpointman_brand_list")->fetchAll(\PDO::FETCH_ASSOC);
		$this->addDataToTableFromArray('endpointman_brand_list', $endpointman_brand_list);

		$endpointman_custom_configs = $pdo->query("SELECT * FROM endpointman_custom_configs")->fetchAll(\PDO::FETCH_ASSOC);
		$this->addDataToTableFromArray('endpointman_custom_configs', $endpointman_custom_configs);

		$endpointman_global_vars = $pdo->query("SELECT * FROM endpointman_global_vars")->fetchAll(\PDO::FETCH_ASSOC);
		$this->addDataToTableFromArray('endpointman_global_vars', $endpointman_global_vars);

		$endpointman_line_list = $pdo->query("SELECT * FROM endpointman_line_list")->fetchAll(\PDO::FETCH_ASSOC);
		$this->addDataToTableFromArray('endpointman_line_list', $endpointman_line_list);

		$endpointman_mac_list = $pdo->query("SELECT * FROM endpointman_mac_list")->fetchAll(\PDO::FETCH_ASSOC);
		$this->addDataToTableFromArray('endpointman_mac_list', $endpointman_mac_list);

		$endpointman_model_list = $pdo->query("SELECT * FROM endpointman_model_list")->fetchAll(\PDO::FETCH_ASSOC);
		$this->addDataToTableFromArray('endpointman_model_list', $endpointman_model_list);

		$endpointman_oui_list = $pdo->query("SELECT * FROM endpointman_oui_list")->fetchAll(\PDO::FETCH_ASSOC);
		$this->addDataToTableFromArray('endpointman_oui_list', $endpointman_oui_list);

		$endpointman_product_list = $pdo->query("SELECT * FROM endpointman_product_list")->fetchAll(\PDO::FETCH_ASSOC);
		$this->addDataToTableFromArray('endpointman_product_list', $endpointman_product_list);

		$endpointman_template_list = $pdo->query("SELECT * FROM endpointman_template_list")->fetchAll(\PDO::FETCH_ASSOC);
		$this->addDataToTableFromArray('endpointman_template_list', $endpointman_template_list);

		//TODO: Pendiente recovery files.
	}

}