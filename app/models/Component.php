<?php
class Component extends \Illuminate\Database\Eloquent\Model
{
	public function listNameCname()
	{
		return Component::lists('cname', 'name');
	}
}