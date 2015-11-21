<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error" ><?=$error?></div>
<?endforeach?>
<?endif?>
<br/>
<div class="frmbl">
<?=Form::open('admin/categories', array("style"=>"position:absolute;left:40px;top:200px;width:1000px;z-index:2"))?>
<select name='cat' id='cat' class=sel   multiple ='multiple' size = 10 style ="width:300px">
   
    <? $cats=null;?>
    <?foreach ($categories as $cat):?>
    <? $cats[$cat->id]=str_repeat('&nbsp;', 2 * $cat->lvl). $cat->c_title; ?>
        <?if($cat->id == $select):?>
        <option selected="selected" value="<?=$cat->id?>"><?=str_repeat('&nbsp;', 2 * $cat->lvl) . $cat->c_title ?></option>
        <?else:?>
        <option value="<?=$cat->id?>">
            <?=str_repeat('&nbsp;', 2 * $cat->lvl) . $cat->c_title ?>
        </option>
        <?endif?>
    <?endforeach?>
</select>

<?=Form::input('title', null, array('size' => 25, 'style'=>'position:absolute;top:1px' ))?>
<?=Form::submit('add', 'Добавить',array( 'style'=>'position:absolute;top:25px' ))?>
<?=Form::submit('delete', 'Удалить', array( 'style'=>'position:absolute;top:25px;left:390px' ))?> 
<?=Form::input('titlep', null, array('size' => 25, 'style'=>'position:absolute;top:1px; left:910px' ))?>
<?=Form::submit('addp', 'Добавить',array('id'=>'addp', 'style'=>'position:absolute;top:25px;left:910px;', $disabled ))?>
<?=Form::submit('deletep', 'Удалить', array( 'style'=>'position:absolute;top:25px;left:990px' ))?> 
<?=Form::select('pod_cat', $pod_cat, null, array('id'=>'pod_cat', 'multiple' => 'multiple', 'size' => 10, 'class'=>'sel', 'style'=>"position:absolute;width:300px;left:600px"))?>
    </br></br></br>

<?=Form::close()?>
<div class="but">
<input type="button" disabled class="nav_up" id='up'/>  </br>
<input type="button" disabled class="nav_down" id='down'/> 

</div>
    
<div class="but_p">
<input type="button" class="nav_up" id='up_p'/>  </br>
<input type="button" class="nav_down" id='down_p'/> 

</div>
</div>
