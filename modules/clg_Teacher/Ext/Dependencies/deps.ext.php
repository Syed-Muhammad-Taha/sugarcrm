<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg_Teacher/Ext/Dependencies/dependencies.php


$dependencies['clg_Teachers']['require_date_modified'] = array(
    'hooks' => array("edit"),
    //Trigger formula for the dependency. Defaults to 'true'.
    'trigger' => 'true',
    'triggerFields' => array('description'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    'actions' => array(
        array(
            'name' => 'SetRequired', //Action type
            //The parameters passed in depend on the action type
            'params' => array(
                'target' => 'test',
                'label'  => 'LBL_TEST', //normally <field>_label
                'value' => 'equal($description, "Closed")', //Formula
            ),
        ),
    ),
);

?>
