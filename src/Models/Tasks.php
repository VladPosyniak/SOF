<?php
namespace App\Models;

use App\Models\Model;
use \Eventviva\ImageResize;
/**
* 
*/
class Tasks extends Model
{
    protected $imgExtension = ['jpg','gif','png'];

	protected function FieldsTable()
	{
		return ['id','name','img','email','description','status'];
	}

	public function createTask($name,$email,$description,$img){

	    $imgCount = isset($img['name']) ? count($img['name']) : 0;
        $readyImages = [];
	    for ($i = 0; $i < $imgCount; $i++){
	        $extension = strtolower( pathinfo($img['name'][$i],PATHINFO_EXTENSION));
            $path = './files/'.rand(1,1000).'_'.$img['name'][$i];
	        if (!in_array($extension,$this->imgExtension)){
	            return false;
            }
            move_uploaded_file($img['tmp_name'][$i],$path);
	        $resizeImg = new ImageResize($path);
	        $resizeImg->resize(320,240);
	        $resizeImg->save($path);
	        $readyImages[] = $path;
        }

	    $this->name = $name;
	    $this->email = $email;
	    $this->description = $description;
	    $this->img = serialize($readyImages);
	    $this->save();

	    return true;
    }

    public function updateTask($id,$description,$status)
    {
        $this->description = $description;
        $this->status = $status;
        $this->update($id);
    }

    public function find($id){
	    return $this->where(['id','=',$id])->get()[0];
    }

}