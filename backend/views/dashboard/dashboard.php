<?php
$this->registerCssFile("https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css", [
]);

$this->title = Yii::t('backend', 'Dashboard', [
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Dashboard'), 'url' => ['dashboard']];
$this->params['breadcrumbs'][] = $this->title;

?>

<?php

//if(Yii::$app->user->can('administrator')){

 echo $this->render('_dashboard_admin', []) ;

//}
?>
