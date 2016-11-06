<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name', 'pid'];

    private function categoryArray()
    {
        return $this->all()->toArray();
    }

    public function tree()
    {
        if(!$cateArray = $this->categoryArray()) {
            return false;
        }
        $tree = [];
        foreach($cateArray as $v) {
            if($v['pid']) {
                $tree[$v['pid']][$v['pid']]['id'] = $v['id'];
                $tree[$v['pid']][$v['pid']]['name'] = $v['name'];
            } else {
                $tree[$v['id']]['id'] = $v['id'];
                $tree[$v['id']]['name'] = $v['name'];
            }
        }
        return $tree;
    }
}
