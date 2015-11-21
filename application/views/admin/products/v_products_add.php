

<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>
<div class="box">
   <?=Form::open('admin/products/add', array('enctype' => 'multipart/form-data'))?>
<table width="100%" cellspacing="2" >

    <tr>
    <tr>
        <td >
           <?=Form::label('c_title', 'Название:')?><br/><br/>  
        </td>
        <td >
            <?=Form::input('title', $data['title'], array('size' => 130, 'class' => 'c_title' ))?>  <br/><br/>
        </td>
        </tr>
        <tr>
        <td >
           <?=Form::label('cat', 'Категории')?>:<br/><br/>
        </td>
        <td >
            <?=Form::select('cat', $cats, $getcat, array( 'class' => 'sel', 'id' => 'cat'))?><br/><br/>
        </td>
    </tr>
    
     <tr>
        <td >
           <?=Form::label('cat', 'Под катeгории')?>:<br/><br/>
        </td>
        <td >
           <?=Form::select('pod_cat', $pod_cats, $data['cat'], array(  'class' => 'sel', 'onclick' =>'click', 'id'=>'pod_cat'))?><br/><br/>
        </td>
    </tr>
    
     <tr>
        <td >
           <?=Form::label('cost', 'Цена')?>:<br/><br/>
        </td>
        <td >
           <?=Form::input('cost', $data['cost'], array('size' => 20, 'class'=>'cost'))?> грн.<br/><br/>
        </td>
    </tr>
    
    <tr>
        <td >
           <?=Form::label('status', 'Статус')?><br/><br/>
        </td>
        <td >
           <?=Form::checkbox('status', 1, true)?> Активен <br/><br/>
        </td>
    </tr>
    
    <tr>
        <td >
           <?=Form::label('description', 'Описание')?>: <br/>
        </td>
        <td >
          <?=Form::textarea('description', $data['description'], array('cols' => 80, 'rows' => 20))?> <br/>
        </td>
    </tr>
        
  <tr>     
    <td>
            <br/>
            <?=Form::label('images', 'Загрузить изображения:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;')?> <br/><br/>
     </td>
     <td>
            <?=Form::file('images[]', array('id' => 'multi'))?>
        </td>
</tr>
    <tr>
        <td align="center"><?=Form::submit('submit', 'Добавить')?></td>
    </tr>
</table>
<?=Form::close()?> 
<div
