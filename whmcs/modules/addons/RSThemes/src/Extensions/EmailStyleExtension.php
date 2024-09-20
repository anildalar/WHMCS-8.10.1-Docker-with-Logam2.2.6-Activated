<?php 
namespace RSThemes\Extensions
{

use Exception;
use RSThemes\Controller\Admin\MainController;
use RSThemes\Helpers\Flash;
use RSThemes\Models\Configuration;
use RSThemes\Service\Util;
use RSThemes\View\ViewHelper;
use Smarty;
use const DS;

	class EmailStyleExtension extends Extension
	{
		public $name = 'Email Template';
		public $description = false;
		public $version = '1.1.2';
		public $formFields = [
			'facebook_active', 
			'twitter_active', 
			'linkedin_active', 
			'youtube_active', 
			'instagram_active', 
			'facebook', 
			'twitter', 
			'google', 
			'linkedin', 
			'youtube', 
			'instagram', 
			'header_text', 
			'footer_text', 
			'footer_link_1_active', 
			'footer_link_2_active', 
			'footer_link_3_active', 
			'footer_link_4_active', 
			'footer_link_5_active', 
			'footer_link_1_name', 
			'footer_link_2_name', 
			'footer_link_3_name', 
			'footer_link_4_name', 
			'footer_link_5_name', 
			'footer_link_1_url', 
			'footer_link_2_url', 
			'footer_link_3_url', 
			'footer_link_4_url', 
			'footer_link_5_url', 
			'header_link_text', 
			'title'
		];
		public $formFieldsInit = [
			'footer_link_1_name' => 'Login to your account', 
			'footer_link_2_name' => 'Contact Us', 
			'footer_link_3_name' => 'Terms of Service', 
			'footer_link_4_name' => 'Privacy Policy', 
			'footer_link_5_name' => 'About Us', 
			'footer_text' => 'Copyright © 2024 Lagom. All Rights Reserved. Philippines.', 
			'header_link_text' => 'View email online', 
			'header_text' => 'Having problems viewing this email?'
		];
		public function handle(array $params = [])
		{
		}
		public function getEmailPreview()
		{
			$orderConfirmationSampleContent = file_get_contents(__DIR__ . DS . '../../views/adminarea/extensions/emailstyle/sample-email-content.html');
			$emailTemplate = [];
			$emailTemplate['css'] = '<style>' . (new \RSThemes\Models\Configuration())->getConfig('EmailCSS') . '</style>';
			$emailTemplate['header'] = html_entity_decode((new \RSThemes\Models\Configuration())->getConfig('EmailGlobalHeader'));
			$emailTemplate['footer'] = $orderConfirmationSampleContent . html_entity_decode((new \RSThemes\Models\Configuration())->getConfig('EmailGlobalFooter'));
			return $emailTemplate;
			exit();
		}
		public function getTplPath()
		{
			if(!$this->isActive()) 
			{
				$name = 'info';
			}
			else
			{
				$name = 'settings';
				if(isset($_GET['exaction'])) 
				{
					$name = filter_input(INPUT_GET, 'exaction');
				}
			}
			return 'extensions/emailstyle/' . $name;
		}
		public function saveConfig($data)
		{
			if(isset($data['exaction'])) 
			{
				try
				{
					switch( $data['exaction'] ) 
					{
						case 'activatestyle':
							$this->activateStyle($data);
							break;
						default:
							break;
					}
				}
				catch( \Exception $exc ) 
				{
				}
			}
			foreach( $this->formFields as $formField ) 
			{
				$keyName = $this->key . $formField;
				if(isset($data[$formField])) 
				{
					(new \RSThemes\Models\Configuration())->saveConfig($keyName, $data[$formField]);
				}
				else if( !$data[$formField] ) 
				{
					(new \RSThemes\Models\Configuration())->saveConfig($keyName, '0');
				}
			}
			$styles = $this->extension->getExtensionConfig();
			$this->saveDataToTemplate($styles[$this->getActivatedStyle()]);
		}
		public function getConfig($name = null, $key = 0)
		{
			if($key === 0) 
			{
				$keyName = $this->key . $name;
			}
			else
			{
				$keyName = $name;
			}
			return (new \RSThemes\Models\Configuration())->getConfig($keyName);
		}
		public function getStyles()
		{
			return $this->extension->getExtensionConfig();
		}
		public function isStyleActive($name)
		{
			$keyName = $this->key . 'active_style';
			$actual = (new \RSThemes\Models\Configuration())->getConfig($keyName);
			if($name == $actual) 
			{
				return true;
			}
			return false;
		}
		public function refreshStyle()
		{
			$this->activateStyle(['style' => $this->getActivatedStyle()], true);
			return true;
		}
		private function activateStyle($data, $passive = false)
		{
			$styles = $this->extension->getExtensionConfig();
			if(!isset($styles[$data['style']])) 
			{
				throw new \Exception('Selected style not found!');
			}
			$issetDefaultGlobalHeader = (new \RSThemes\Models\Configuration())->getConfig('RSThemesEmailGlobalHeader');
			$issetDefaultGlobalFooter = (new \RSThemes\Models\Configuration())->getConfig('RSThemesEmailGlobalFooter');
			$issetDefaultGlobalCSS = (new \RSThemes\Models\Configuration())->getConfig('RSThemesEmailCSS');
			if(strlen($issetDefaultGlobalHeader) <= 0) 
			{
				$emailGlobalHeader = (new \RSThemes\Models\Configuration())->getConfig('EmailGlobalHeader');
				if(strlen($emailGlobalHeader) > 0) 
				{
					(new \RSThemes\Models\Configuration())->saveConfig('RSThemesEmailGlobalHeader', $emailGlobalHeader);
				}
				else
				{
					(new \RSThemes\Models\Configuration())->saveConfig('RSThemesEmailGlobalHeader', ' ');
				}
			}
			if(strlen($issetDefaultGlobalFooter) <= 0) 
			{
				$emailGlobalFooter = (new \RSThemes\Models\Configuration())->getConfig('EmailGlobalFooter');
				if(strlen($emailGlobalFooter) > 0) 
				{
					(new \RSThemes\Models\Configuration())->saveConfig('RSThemesEmailGlobalFooter', $emailGlobalFooter);
				}
				else
				{
					(new \RSThemes\Models\Configuration())->saveConfig('RSThemesEmailGlobalFooter', ' ');
				}
			}
			if(strlen($issetDefaultGlobalCSS) <= 0) 
			{
				$emailCSS = (new \RSThemes\Models\Configuration())->getConfig('EmailCSS');
				if(strlen($emailCSS) > 0) 
				{
					(new \RSThemes\Models\Configuration())->saveConfig('RSThemesEmailCSS', $emailCSS);
				}
				else
				{
					(new \RSThemes\Models\Configuration())->saveConfig('RSThemesEmailCSS', ' ');
				}
			}
			$style = $styles[$data['style']];
			$this->saveDataToTemplate($style);
			(new \RSThemes\Models\Configuration())->saveConfig($this->getKey('active_style'), $data['style']);
			if($passive) 
			{
				return true;
			}
			\RSThemes\Helpers\Flash::setFlashMessage('success', 'Email style was activated!');
			\RSThemes\Controller\Admin\MainController::redirect((new \RSThemes\View\ViewHelper())->url('Template@extension', [
				'templateName' => $this->template->getMainName(), 
				'extension' => $this->getLinkName(), 
				'exaction' => 'styles'
			]));
		}
		public function getActivatedStyle()
		{
			return (new \RSThemes\Models\Configuration())->getConfig($this->getKey('active_style'));
		}
		private function saveDataToTemplate($style)
		{
			if(isset($style['header'])) 
			{
				(new \RSThemes\Models\Configuration())->saveConfig('EmailGlobalHeader', $this->prepareHtmlContent($style['header']));
			}
			if(isset($style['css'])) 
			{
				(new \RSThemes\Models\Configuration())->saveConfig('EmailCSS', $style['css']);
			}
			if(isset($style['footer'])) 
			{
				(new \RSThemes\Models\Configuration())->saveConfig('EmailGlobalFooter', $this->prepareHtmlContent($style['footer']));
			}
		}
		private function prepareHtmlContent($html, $preview = false)
		{
			$assetsURL = $this->getConfig('SystemURL', 1) . 'templates/' . $this->getConfig('template', 1) . '/core/extensions/' . $this->className . '/styles';
			$domain = explode('/', $this->getConfig('Domain', 1))[2];
			$emailsURL = $this->getConfig('SystemURL', 1) . 'clientarea.php?action=emails';
			$smartyEmailTemplate = new Smarty();
			$smartyEmailTemplate->caching = 0;
			$configFilePath = ROOTDIR . DS . 'configuration.php';
			if(file_exists($configFilePath)) 
			{
				include($configFilePath);
				if(isset($templates_compiledir) && strlen($templates_compiledir) > 0) 
				{
					if(trim($templates_compiledir, '/') == 'templates_c') 
					{
						$templates_compiledir = ROOTDIR . DS . $templates_compiledir . DS;
					}
					$smartyEmailTemplate->compile_dir = $templates_compiledir;
				}
			}
			$smartyEmailTemplate->assign('domain', $domain);
			$smartyEmailTemplate->assign('template', $this->getConfig('Template', 1));
			$smartyEmailTemplate->assign('system_url', $this->getConfig('SystemURL', 1));
			$smartyEmailTemplate->assign('assetsURL', $assetsURL);
			$smartyEmailTemplate->assign('logo', $this->getBranding());
			$smartyEmailTemplate->assign('emailsURL', $emailsURL);
			$smartyEmailTemplate->assign('rtl', $this->getConfig('rtl'));
			foreach( $this->formFields as $formField ) 
			{
				$smartyEmailTemplate->assign($formField, $this->getConfig($formField));
			}
			if(!$preview) 
			{
				$output = htmlentities(trim($smartyEmailTemplate->fetch('string:' . $html)));
			}
			else
			{
				$output = htmlentities(trim($smartyEmailTemplate->display('string:' . $html)));
			}
			return $output;
		}
		public function loadConfig()
		{
			$result = $this->checkLicense();
			if($result != 'success') 
			{
				\RSThemes\Controller\Admin\TemplateController::redirect((new \RSThemes\View\ViewHelper())->url('Template@extension', [
					'templateName' => $this->template->getMainName(), 
					'extension' => $this->getLinkName()
				]));
			}
			foreach( $this->formFields as $field ) 
			{
				if(strpos($field, '_active')) 
				{
					(new \RSThemes\Models\Configuration())->saveConfig($this->getKey($field), 1);
				}
				else if( strpos($field, '_url') ) 
				{
					(new \RSThemes\Models\Configuration())->saveConfig($this->getKey($field), '#');
				}
				else
				{
					(new \RSThemes\Models\Configuration())->saveConfig($this->getKey($field), '#');
				}
			}
			foreach( $this->formFieldsInit as $k => $value ) 
			{
				(new \RSThemes\Models\Configuration())->saveConfig($this->getKey($k), $value);
			}
			$save_as = [
				'RSThemesEmailGlobalHeader' => (new \RSThemes\Models\Configuration())->getConfig('EmailGlobalHeader'), 
				'RSThemesEmailCSS' => (new \RSThemes\Models\Configuration())->getConfig('EmailCSS'), 
				'RSThemesEmailGlobalFooter' => (new \RSThemes\Models\Configuration())->getConfig('EmailGlobalFooter')
			];
			foreach( $save_as as $index => $save ) 
			{
				if(strlen($save) > 0) 
				{
					(new \RSThemes\Models\Configuration())->saveConfig($index, $save);
				}
				else
				{
					(new \RSThemes\Models\Configuration())->saveConfig($index, ' ');
				}
			}
			$save_as = [
				'EmailGlobalHeader' => (new \RSThemes\Models\Configuration())->getConfig('RSThemesEmailGlobalHeader'), 
				'EmailCSS' => (new \RSThemes\Models\Configuration())->getConfig('RSThemesEmailCSS'), 
				'EmailGlobalFooter' => (new \RSThemes\Models\Configuration())->getConfig('RSThemesEmailGlobalFooter')
			];
			foreach( $save_as as $index => $save ) 
			{
				if(strlen($save) > 0) 
				{
					(new \RSThemes\Models\Configuration())->saveConfig($index, $save);
				}
			}
			parent::loadConfig();
			if(!$this->getActivatedStyle()) 
			{
				(new \RSThemes\Models\Configuration())->saveConfig($this->getKey('active_style'), 'basic');
			}
			$styles = $this->extension->getExtensionConfig();
			$styles['style'] = $this->getActivatedStyle();
			$this->activateStyle($styles);
		}
		public function removeConfig()
		{
			$this->restoreEmailTemplate(isset($_GET['delete']));
			if(isset($_GET['delete'])) 
			{
				foreach( $this->formFields as $field ) 
				{
					(new \RSThemes\Models\Configuration())->removeConfig($this->getKey($field));
				}
				(new \RSThemes\Models\Configuration())->removeConfig($this->getKey('active_style'));
				(new \RSThemes\Models\Configuration())->removeConfig('active_style');
				(new \RSThemes\Models\Configuration())->removeConfig('RSThemesEmailCSS');
				(new \RSThemes\Models\Configuration())->removeConfig('RSThemesEmailGlobalHeader');
				(new \RSThemes\Models\Configuration())->removeConfig('RSThemesEmailGlobalFooter');
			}
			parent::removeConfig();
		}
		private function restoreEmailTemplate($delete = false)
		{
			$save_as = [
				'EmailGlobalHeader' => (new \RSThemes\Models\Configuration())->getConfig('RSThemesEmailGlobalHeader'), 
				'EmailCSS' => (new \RSThemes\Models\Configuration())->getConfig('RSThemesEmailCSS'), 
				'EmailGlobalFooter' => (new \RSThemes\Models\Configuration())->getConfig('RSThemesEmailGlobalFooter')
			];
			foreach( $save_as as $index => $save ) 
			{
				if(strlen($save) > 0) 
				{
					(new \RSThemes\Models\Configuration())->saveConfig($index, $save);
				}
				else
				{
					(new \RSThemes\Models\Configuration())->saveConfig($index, '');
				}
			}
		}
		private function getBranding()
		{
			$settings = $this->template->model->settings;
			$params = [
				'logo_big' => false, 
				'logo_small' => false, 
				'icon' => false, 
				'email_light' => false, 
				'email_inverse' => false
			];
			if(isset($settings['logo_big'])) 
			{
				$params['logo_big'] = \RSThemes\Service\Util::getSystemUrl() . $settings['logo_big'];
			}
			if(isset($settings['logo_big_inverse'])) 
			{
				$params['logo_big_inverse'] = \RSThemes\Service\Util::getSystemUrl() . $settings['logo_big_inverse'];
			}
			if(isset($settings['logo_small'])) 
			{
				$params['logo_small'] = \RSThemes\Service\Util::getSystemUrl() . $settings['logo_small'];
			}
			if(isset($settings['logo_small_inverse'])) 
			{
				$params['logo_small_inverse'] = \RSThemes\Service\Util::getSystemUrl() . $settings['logo_small_inverse'];
			}
			if(isset($settings['email_light'])) 
			{
				$params['email_light'] = \RSThemes\Service\Util::getSystemUrl() . $settings['email_light'];
			}
			if(isset($settings['email_inverse'])) 
			{
				$params['email_inverse'] = \RSThemes\Service\Util::getSystemUrl() . $settings['email_inverse'];
			}
			if(isset($settings['icon'])) 
			{
				$params['icon'] = \RSThemes\Service\Util::getSystemUrl() . $settings['icon'];
			}
			return $params;
		}
		public function checkLicense()
		{
			if(isset(self::$isLicensed)) 
			{
				return self::$isLicensed;
			}
			$minVerion = '2.1.1';
			if($this->template->license->template == null) 
			{
				return 'success';
			}
			$allowed = version_compare($this->template->license->template->getVersion(), $minVerion);
			if($allowed == '-1') 
			{
				return 'Lagom update is required';
			}
			$allowedExtensions = $this->template->license->getAllowedExtensions();
			foreach( $allowedExtensions as $allowedExtensionName ) 
			{
				if($allowedExtensionName == $this->name) 
				{
					return 'success';
				}
			}
			return 'success';
		}
	}

}
