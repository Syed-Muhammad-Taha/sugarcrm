<?php
echo "Test Succesfull<br>";
/*$bean = BeanFactory::newBean("clg_Teacher");
$bean->name = "via Testcode";
$bean->save();
$record_id = $bean->id;
echo $record_id;*/

$bean = BeanFactory::retrieveBean("clg_Teacher","911bf1c4-71e7-11e7-91bc-74867a0a5719");
$link="clg_teacher_clg_course_1";
if($bean->load_relationship($link)){
$relatedBeans=$bean->$link->getBeans();
echo "Name: ".$relatedBeans["name"]."<br>";
var_dump($relatedBeans);
}

?>
