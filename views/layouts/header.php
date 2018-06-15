<?php
  use yii\helpers\Html;
  
  /* @var $this \yii\web\View */
  /* @var $content string */
  ?>
<header class="main-header">
  <?= Html::a('<span class="logo-mini"><img src="img/ege.png"></span><span class="logo-lg">' . 'ЕГЭ центр' . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="/uploads/<?= $user->profile_pic ?>" class="user-image" alt="User Image"/>
          <span class="hidden-xs"><?=$user->name?> <?=$user->surname?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="uploads/<?= $user->profile_pic ?>" class="img-circle"
                alt="User Image"/>
              <p>
               <?=$user->name?> <?=$user->surname?>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Профиль</a>
              </div>
              <div class="pull-right">
                <?= Html::a(
                  'Выход',
                  ['/site/logout'],
                  ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                  ) ?>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>