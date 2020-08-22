<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Article;


class HomeController extends Controller
{
    public $layout = 'home';

    public function actionIndex()
    {
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
        // foreach (Article::find()->batch(2) as $article) {
        //     echo count($article),'-';
        //     $data[]=$article;
        // }

        //dd($data);

        // 添加
        // $article = new Article();
        // $article->title = '纵使啰嗦始终关注不懂珍惜太内疚';
        // $article->number = 90;
        // //$data = $article->insert(); 
        // $data = $article->save();
        // $id = $article->attributes['id']; //获取刚刚保存的新数据的ID
        // dd($id);

        //修改
        // $article = Article::findOne(7);
        // $article->title = '修改过后的标题';
        // $data = $article->update(); //返回0和1
        // //$data = $article->save(); //返回布尔值
        // dd($data);

        // 修改单个字段，比如点击量
        // $data = Article::updateAllCounters(['number'=>1], ['id'=>6]);
        // dd($data);

        // 删除单条数据
        //$article = Article::findOne(8);
        $article = Article::find()->where(['id'=>7])->one();
        $data = $article->delete();
        dd($data);

        // Article::deleteAll(); //删除所有
        // Article::deleteAll('id=10'); //删除条件
        // Article::deleteAll('id>:id and number<:number', [':id'=>10, ':number'=>100]);  //多种比较条件

        return $this->render('index');
        // dd($res);

        //$username = $request->post('username',888);
        //dd($username);
    }

    public function actionAbout()
    {


        $str = ['s' => 'create a new one.'];
        return $this->render('about', $str);
    }
}
