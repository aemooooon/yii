<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Article;


class HomeController extends Controller{
    public $layout='home';

    public function actionIndex(){
        // $request = \Yii::$app->request;
        // $id = $request->get('id',1);
        // dd($id);

        // $res= $request->isGet;
        // dd($res);

        // $data = ['username'=>'<script>alert(9)</script>', 'age'=>99];

        // $res= $request->userIP;

        // $request = \Yii::$app->request;
        // $id = $request->get('id');
        // $sql = "SELECT * from article where id=:id";
        // $r = Article::findBySql($sql, [':id'=>$id])->all();
        // dd($r);

        // $res = Article::find()->where(['id'=>3])->all();
        // $res = Article::find()->where(['>', 'id', 3])->all();
        // $res = Article::find()->where(['between', 'id', 2, 5])->all();
        // $res = Article::find()->where(['like', 'title', "拼多多"])->all();
        // $res = Article::find()->where(['like', 'title', "拼多多"])->one();
        // $res = Article::findOne(5); //查找ID是5的那条
        // $res = Article::findAll([3, 4, 5]); //查找ID是3，4，5的记录
        // $res = Article::find()->asArray()->all();
        // dd($res);

        //遍历-每次取2条
        foreach (Article::find()->batch(2) as $article) {
            echo count($article),'-';
            $data[]=$article;
        }

        dd($data);

        return $this->render('index');
        // dd($res);

        //$username = $request->post('username',888);
        //dd($username);
    }

    public function actionAbout(){
        

        $str = ['s'=>'create a new one.'];
        return $this->render('about',$str);
    }
}