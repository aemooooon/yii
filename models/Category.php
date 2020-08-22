<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public function getArticles()
    {
        $articles = $this->hasMany('app\models\Article', ['cate_id' => 'id'])->asArray();
        return $articles;
    }
}
