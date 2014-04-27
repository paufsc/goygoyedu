<?php 
function validate($source,$rules)
{
	foreach ($rules as $key => $value) {
		if(!isset($source[$key]))
		{
			return false;
		}
		if($value($source[$key]) == false)
		{
			return false;
		}
	}
	return true;
}
function gerekli($val = null)
{
	if($val == null)
	{
		return false;
	}
	return !empty($val);
}
function email($val = null)
{
	if($val == null)
	{
		return false;
	}
	$data = preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$val);
	return ($data > 0);

}
// $rules = array(
// 	'name'=>'gerekli',
// 	'email'=>'email');
// $_POST = array('name'=>'kemalkanok','email'=>'kemalkanok@gmail.com');
// var_dump(validate($_POST,$rules));
 ?>