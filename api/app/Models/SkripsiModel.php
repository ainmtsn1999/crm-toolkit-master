<?php namespace App\Models;

class SkripsiModel extends BaseModel
{
	protected $table = 'skripsi';
	protected $primaryKey = 'entry_id';
	protected $allowedFields = [
		'field1', 'field2'
	];
	
}