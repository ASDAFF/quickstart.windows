<?
/**
 * Copyright (c) 3/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

IncludeModuleLangFile(__FILE__);
class CQuickStartSiteCorporate
{
	function ShowPanel()
	{
		if ($GLOBALS["USER"]->IsAdmin() && COption::GetOptionString("main", "wizard_solution", "", SITE_ID) == "windows")
		{
			$GLOBALS["APPLICATION"]->AddPanelButton(array(
				"HREF" => "/bitrix/admin/wizard_install.php?lang=".LANGUAGE_ID."&wizardName=quickstart:windows&wizardSiteID=".SITE_ID."&".bitrix_sessid_get(),
				"ID" => "windows_wizard",
				"ICON" => "bx-panel-site-wizard-icon",
				"MAIN_SORT" => 2500,
				"TYPE" => "BIG",
				"SORT" => 10,
				"ALT" => GetMessage("SCOM_BUTTON_DESCRIPTION"),
				"TEXT" => GetMessage("SCOM_BUTTON_NAME"),
				"MENU" => array(),
			));
		}

	}
}
?>