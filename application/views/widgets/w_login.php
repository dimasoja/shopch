<h2>Вход</h2>

<?if(!$auth->logged_in('login')):?>
<?=Form::open('login' , array( 'class'=>"form-2" ))?>
    <?=Form::label('username', 'Логин')?>:<br/>
    <?=Form::input('username', '', array('size' => 20, 'value' =>"Логин..." ))?><br/>
    <?=Form::label('password', 'Пароль')?>:<br/>
    <?=Form::password('password', '', array('size' => 20))?><br/>
    <?=Form::checkbox('remember')?> Запомнить<br/><br/>
    <?=Form::submit('submit', 'Войти')?>
    <?=Html::anchor('register', 'Регистрация')?>
<?=Form::close()?>
<?else:?>
    <?=$user->first_name?><br/><br/>
    <?if ($auth->logged_in('admin')):?>
        <?=html::anchor('admin', 'Панель администратора')?>
    <?else:?>
        <?=html::anchor('account', 'Личный кабинет')?>
    <?endif?>
    <br/><br/>
    <?=html::anchor('logout', 'Выйти')?>
<?endif?>
