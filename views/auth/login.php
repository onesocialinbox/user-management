<?php
/**
 * @var $this yii\web\View
 * @var $model webvimark\modules\UserManagement\models\forms\LoginForm
 */

use webvimark\modules\UserManagement\components\GhostHtml;
use webvimark\modules\UserManagement\UserManagementModule;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="container-fluid" id="login-wrapper">
		<div class="row">
			<div class="col-md-5 col-sm-5 left-container">
				<div class="content-center">
				<img src="img/logo.png" class="img-responsive" style="width: 50%;margin: auto;">
				<h2 class="app-title">BAR COUNCIL OF TAMILNADU & PUDUCHERRY</h2>
				
				<div class="btn-center">
					<?= GhostHtml::a(
								UserManagementModule::t('front', "User Registration"),
								['/enrollment-master/create'],["class"=>"btn btn-lg btn-secondary  margin-top-bottom"]
							) ?>
				</div>
				
				</div>
			</div>
			<h2 class="heading"><center>Online Enrollment Form</center></h2>
			<div class="col-md-5 col-sm-5 col-md-offset-1 col-sm-offset-1 margin-top-header">
				<h3 class="heading"><?= UserManagementModule::t('front', 'Login') ?></h3>
				<?php $form = ActiveForm::begin([
						'id'      => 'login-form',
						'options'=>['autocomplete'=>'off'],
						'validateOnBlur'=>false,
						'fieldConfig' => [
							'template'=>"{input}\n{error}",
						],
					]) ?>
					<div class="form-group field-loginform-username required">
						<label class="control-label" for="loginform-username">E-mail / Login ID</label>
						<?= $form->field($model, 'username')
						->textInput(['placeholder'=>$model->getAttributeLabel('username'), 'autocomplete'=>'off']) ?>

					</div>
					<div class="form-group field-loginform-password required">
						<label class="control-label" for="loginform-password">Password</label>
						<?= $form->field($model, 'password')
						->passwordInput(['placeholder'=>$model->getAttributeLabel('password'), 'autocomplete'=>'off']) ?>
					</div>
					<?= Html::submitButton(
						UserManagementModule::t('front', 'Login'),
						['class' => 'btn btn-lg btn-primary pull-right margin-top-bottom']
					) ?>
					<?= GhostHtml::a(
								UserManagementModule::t('front', "Forgot password ?"),
								['/user-management/auth/password-recovery'],['class'=>'forgot-pwd']
							) ?>
					<div class="clear"></div>
					<?php ActiveForm::end() ?>
					<div class="login-footer">	 
						<ul class="recovery-links">
							<li><h2> <?= GhostHtml::a(UserManagementModule::t('front', "Verify Otp"), ['/user/userotpverification']) ?></h2></li>

							<li><h2> <?= Html::a('Login Instructions', Url::to('@web/instructions.pdf'),['target'=>'_blank']) ?></h2></li>

							<li><h2> <?= Html::a('Rules', Url::to('@web/Rules.pdf'),['target'=>'_blank'])?></h2></li>

							<li><h2> <?=Html::a('Contact Us', Url::to('@web/contact.txt'),['target'=>'_blank'])?></h2></li>
												
						</ul>
					</div>
			</div>
		</div>
</div>

<?php

$this->registerCssFile('css/loginstyles.css');
?>