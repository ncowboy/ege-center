<aside class="main-sidebar">
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/uploads/<?= $user->profile_pic ?>" class="img-circle" alt="User Image"/>
      </div>
      <div class="pull-left info">
        <p><?=$user->name?> <?=$user->surname?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Администратор</a>
      </div>
    </div>
    <?= dmstr\widgets\Menu::widget(
      [
          'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
          'items' => [
              ['label' => 'Пользователи', 'icon' => 'users', 'url' => ['/users'], 
                'items' => [
                   ['label' => 'Список', 'icon' => 'user', 'url' => ['/users']],
                   ['label' => 'Роли', 'icon' => 'user-md', 'url' => ['/roles']],
                   ['label' => 'Привелегии', 'icon' => 'user-secret', 'url' => ['/privelegues']],
                  ]
              ],
           ['label' => 'Учебные группы ', 'icon' => 'graduation-cap', 'url' => ['/users']],
           ['label' => 'Ученики ', 'icon' => 'child', 'url' => ['/users']],
           ['label' => 'Преподаватели ', 'icon' => 'black-tie', 'url' => ['/users']],
           ['label' => 'Уроки ', 'icon' => 'calendar', 'url' => ['/users']], 
           ['label' => 'Каталог', 'icon' => 'cog', 'url' => ['/users'], 
               'items' => [
                  ['label' => 'Филиалы', 'icon' => 'building', 'url' => ['/users']],
                  ['label' => 'Типы групп', 'icon' => 'list', 'url' => ['/roles']],
                  ['label' => 'Предметы', 'icon' => 'book', 'url' => ['/privelegues']],
                 ]
             ],
            ['label' => 'Gii ', 'icon' => 'cog', 'url' => ['/gii']]
          ],
      ]
      ) ?>
  </section>
</aside>