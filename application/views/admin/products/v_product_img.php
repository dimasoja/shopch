<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<?=Form::open('admin/products/img/' . $id,  array('enctype' => 'multipart/form-data'))?>
<h3>Загрузить фото для <?=$title?></h3>
<table width="100%" cellspacing="5">
   
    
    <tr>
        <td>
            <br/>
            <?=Form::label('images', 'Загрузить изображения')?>: <br/><br/>
            <?=Form::file('images[]', array('id' => 'multi'))?>
        </td>
    </tr>
    <tr>
        <td ><?=Form::submit('submit', 'Сохранить')?></td>
    </tr>
    <tr>
        <td>
            <?=Form::label('images', 'Изображения')?>: <br/><br/>
            <?if (!empty($data['images'])):?>
<a name="img"></a>
            <table width="100%" cellspacing="20">
                <tr>
                <?foreach($data['images'] as $i =>  $image):?>
                    <td ><?=html::anchor('media/uploads/'. $image->name, html::image('media/uploads/small_' . $image->name), array('target' => '_blank'))?>
                        <br><?=html::anchor('admin/products/delimg/' . $image->id, 'Удалить')?> | 
                        <?if ($image->id != $data['image_id'] ):?>
                        <?=html::anchor('admin/products/mainimg/' . $image->id, 'Главная')?>
                        <?else:?>
                        Главная
                        <?endif?>
                    </td>
                    <?if ($i % 2):?>
                        </tr><tr>
                    <?endif?>
                <?endforeach?>
                </tr>
            </table>

            <?else:?>
            <div class="empty">Нет изображений</div>
            <?endif?>
        </td>
    </tr>
</table>
<?=Form::close()?>