<?php
namespace FreePBX\modules\Soundlang;
use FreePBX\modules\Backup as Base;
class Backup Extends Base\BackupBase{
	public function runBackup($id,$transaction){
		
		$configs = [
			'brand_list' => $this->FreePBX->Database->query("SELECT * FROM endpointman_brand_list")->fetchAll(\PDO::FETCH_ASSOC),
			'custom_configs' => $this->FreePBX->Database->query("SELECT * FROM endpointman_custom_configs")->fetchAll(\PDO::FETCH_ASSOC),
			'global_vars' => $this->FreePBX->Database->query("SELECT * FROM endpointman_global_vars")->fetchAll(\PDO::FETCH_ASSOC),
			'line_list' => $this->FreePBX->Database->query("SELECT * FROM endpointman_line_list")->fetchAll(\PDO::FETCH_ASSOC),
			'mac_list' => $this->FreePBX->Database->query("SELECT * FROM endpointman_mac_list")->fetchAll(\PDO::FETCH_ASSOC),
			'model_list' => $this->FreePBX->Database->query("SELECT * FROM endpointman_model_list")->fetchAll(\PDO::FETCH_ASSOC),
			'oui_list' => $this->FreePBX->Database->query("SELECT * FROM endpointman_oui_list")->fetchAll(\PDO::FETCH_ASSOC),
			'product_list' => $this->FreePBX->Database->query("SELECT * FROM endpointman_product_list")->fetchAll(\PDO::FETCH_ASSOC),
			'template_list' => $this->FreePBX->Database->query("SELECT * FROM endpointman_template_list")->fetchAll(\PDO::FETCH_ASSOC)
		];
		$this->addConfigs($configs);

		//TODO: Pendiente backup files.
		//$this->addDirectories($dirs);
		//$this->addFile(basename($file), $path, 'ASTETCDIR', "conf");

		return $this;
	}
}