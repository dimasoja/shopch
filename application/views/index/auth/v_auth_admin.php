<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
     <title><?=$site_name?> | <?=$page_title?></title>
    <meta content="text/html; charset=utf8" http-equiv="content-type">
     <?foreach ($styles as $file_style):?>
        <?=html::style($file_style)?>
    <?endforeach?>
</head>
<body>
<div class="auth">
<h2>Вход</h2>

<?=Form::open('login_admin' , array( 'class'=>"form-2" ))?>
    <?=Form::label('username', 'Логин')?>:<br/>
    <?=Form::input('username', '', array('size' => 50, 'class' => 'i_auth', 'value' =>"Логин..." ))?><br/>
    <?=Form::label('password', 'Пароль')?>:<br/>
    <?=Form::password('password', '', array('size' => 50, 'class' => 'i_auth',))?><br/>
    <?=Form::checkbox('remember')?> Запомнить<br/><br/>
    <?=Form::submit('submit', 'Войти')?>
    
<?=Form::close()?>
</div>
</body>
</html>