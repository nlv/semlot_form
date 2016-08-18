<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


$subpanel_layout = array(
	//Removed button because this layout def is a component of
	//the activities sub-panel.

	'top_buttons' => array(
        array (
	 		 'widget_class'=>'SubPanelTopCreateButton',
				),
			array (
	 		 'widget_class'=>'SubPanelTopSelectButton', 'popup_module' => 'Tasks'
				),
	),
	
				
	'list_fields' => array(
		'object_image'=>array(
			'vname' => 'LBL_OBJECT_IMAGE',
			'widget_class' => 'SubPanelIcon',
 		 	'width' => '2%',
		),
		'name'=>array(
			 'vname' => 'LBL_LIST_SUBJECT',
			 'widget_class' => 'SubPanelDetailViewLink',
			 'width' => '30%',
		),
		'sector'=>array(
			 'vname' => 'LBL_SECTOR',
			 'width' => '15%',
		),
		'status'=>array(
			 'widget_class' => 'SubPanelActivitiesStatusField',
			 'vname' => 'LBL_LIST_STATUS',
			 'width' => '15%',
		),
		'contact_name'=>array(
			 'widget_class' => 'SubPanelDetailViewLink',
			 'target_record_key' => 'contact_id',
			 'target_module' => 'Contacts',
			 'module' => 'Contacts',
			 'vname' => 'LBL_LIST_CONTACT',
			 'width' => '11%',
		),
		
		'parent_name'=>array(
			 'vname' => 'LBL_LIST_RELATED_TO',
			 'width' => '22%',
			 'target_record_key' => 'parent_id',
			 'target_module_key'=>'parent_type',
			 'widget_class' => 'SubPanelDetailViewLink',
			 'sortable'=>false,
		),
		'date_modified'=>array(
			 'vname' => 'LBL_LIST_DATE_MODIFIED',
			 'width' => '10%',
		),
		'edit_button'=>array(
			'vname' => 'LBL_EDIT_BUTTON',
			 'widget_class' => 'SubPanelEditButton',
			 'width' => '2%',
		),
		'remove_button'=>array(
			'vname' => 'LBL_REMOVE',
			 'widget_class' => 'SubPanelRemoveButton',
			 'width' => '2%',
		),
		'parent_id'=>array(
			'usage'=>'query_only',
		),
		'parent_type'=>array(
			'usage'=>'query_only',
		),
		'filename'=>array(
			'usage'=>'query_only',
			'force_exists'=>true
			),	
				
				
	),
);		
?>
