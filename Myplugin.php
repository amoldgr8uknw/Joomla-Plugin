<?php
/*
Plugin Name: Myplugin
Plugin URL: www.gimme.xyz
Version: 1.0
Author: Amol Patil
Description: This plugin will redirect the user to selected page after the  successful login
*/
defined('_JEXEC') or die();

class plgUserMyplugin extends JPlugin
{

	function onUserLogin($user,$options=array())
	 {
		$menu_id=$this->params->get(menu_id);
		$app=JFactory::getApplication();
		$menu=$app->getMenu();
		$item=$menu->getItem($menu_id);
		$url=JRoute::_($item->link.'&itemId='.$menu_id);
		$app->redirect('$url','Login success');
	}
}
?>