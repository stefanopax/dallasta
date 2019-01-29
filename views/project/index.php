<title>Islab | Projects</title>
<?php

use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchProject */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

  <?= ListView::widget([
      'dataProvider' => $dataProvider,
      'itemView' => '_ui-card',
      'layout' => '{items}{pager}',
      'viewParams' => [
         'fullView' => true,
         'context' => 'main-page',
      ],
  ]);
  ?>
</div>