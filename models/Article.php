<?php

namespace app\models;

use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
    public function getCategory()
    {
        $category = $this->hasOne('app\models\Category', ['id' => 'cate_id'])->asArray();
        return $category;
    }
}
