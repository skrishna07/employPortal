<?php
class Utilities {
	
	static function getParentFilters(){
		return CHtml::listData(CfFilters::model()->findAllByAttributes(
				array(
						'is_parent_filter'=>'Y'
				)), 'filter_id','filter_name');
	
	}
	
	static function getAllTemplates(){
		return CHtml::listData(CfTemplates::model()->findAll(), 'template_id','template_name');
	
	}
	
	static function getActiveList(){
		return CHtml::listData(array('Y'=>'Yes','N'=>'No'), 'is_active','is_active');
	
	}
	
	static function getAllPages(){
		return CHtml::listData(CfPages::model()->findAll(), 'page_id','menu_label');
	
	}
	
	static function getAllCatalogues(){
		return CHtml::listData(CfCatalogue::model()->findAll(), 'catalogue_id','catalogue_name');
	
	}
	
	static function getAllFilters(){
		return CHtml::listData(CfFilters::model()->findAll(), 'filter_id','filter_name');
	
	}
	
	static function getFiltersForCatalogue($catalogueId){
		return CfCatalogueFilters::model()->findAllByAttributes(
				array(
						'catalogue_id'=>$catalogueId,
				));
	
	}
	
	static function getImagesForCatalogue($catalogueId){
		return CfImages::model()->findAllByAttributes(
				array(
						'catalogue_id'=>$catalogueId,
				));
	
	}
	
	static function getVideosForCatalogue($catalogueId){
		return  CfVideos::model()->findAllByAttributes(
				array(
						'catalogue_id'=>$catalogueId,
				));
	
	}
	
	static function getAllParentFilterObjects(){
		return  CfFilters::model()->findAllByAttributes(
				array(
						'is_parent_filter'=>'Y'
				));
	
	}
	
	static function getAllChildFilterObjects($parent_filter_id){
		return  CfFilters::model()->findAllByAttributes(
				array(
						'is_parent_filter'=>'N',
						'parent_filter_id'=>$parent_filter_id,
				));
	
	}
	  static function randomPassword($pass) {
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
	
}