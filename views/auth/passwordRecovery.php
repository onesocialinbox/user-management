<?php

use webvimark\modules\UserManagement\UserManagementModule;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;


/**
 * @var yii\web\View $this
 * @var webvimark\modules\UserManagement\models\forms\PasswordRecoveryForm $model
 */

// $this->title = UserManagementModule::t('front', 'Password recovery');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="password-recovery">

	<h2 class="text-center"><?= $this->title ?></h2>

	<?php if ( Yii::$app->session->hasFlash('error') ): ?>
		<div class="alert-alert-warning text-center">
			<?= Yii::$app->session->getFlash('error') ?>
		</div>
	<?php endif; ?>
	

	<?php $form = ActiveForm::begin([
		'id'=>'user',
		'layout'=>'horizontal',
		'validateOnBlur'=>false,
	]); ?>
	<div class="card-body">
		<div class="col-md-12 mb-2">   
					<h1>Password Recovery</h1><br/>
		</div>   

	<div class="col-md-8 mb-2">   
		<?= $form->field($model, 'email')->textInput(['maxlength' => 255, 'autofocus'=>true]) ?>
	</div>
	<div class="col-md-8 mb-2"> 
		<?= $form->field($model, 'captcha')->widget(Captcha::className(), [
			'template' => '<div class="row"><div class="col-sm-6">{image}</div><div class="col-sm-6">{input}</div></div>',
			'captchaAction'=>['/user-management/auth/captcha']
		]) ?>
	</div>
</div>
<div class="col-md-8 mb-2" > 
<?= Html::submitButton(
				'<span class="glyphicon glyphicon-ok"></span> ' . UserManagementModule::t('front', 'Recover'),
				['class' => 'btn btn-primary']
			) ?>
</div>


	<?php ActiveForm::end(); ?>

</div>
