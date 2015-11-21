
<script> 
    $(document).ready(function() { 
       
   $('#add_prod').html("<div align="+"right"+"  ><img src="+"/media/img/add.png"+" valign="+"top"+"  /> \n\
                        <a href="+"/admin/products/add"+"  >Добавить</a></div>"); });
</script>
  


<div class="yui-main">
<table width="100%" border="0" class="tbl"  cellspacing="0">
    <thead>
        <tr height="30">
            <th>Название</th><th>Категория</th><th>Подкатегория</th>  <th>Цена</th><th>Фото</th><th>Популярные</th><th>Функции</th>
        </tr>
    </thead>
<? foreach ($poducts_cats as $key=>$product):?>
<tr>
    
    <td width="150"><?=HTML::anchor('admin/products/edit/'. $key, $product['title'])?></td>
    <td width="100" align="center"><?=$product['cat']?></td>
    <td width="100" align="center"><?=$product['pod_cat']?></td>
    <td width="70" align="center"><?=$product['cost']?></td>
   <td width="70"  align="center">   <?if (!empty($product['image_id'])):?> есть <?else:?> <?=HTML::anchor('admin/products/img/'. $key, 'нету', array( 'onClick'=>"popupWin = window.open(this.href, 'contacts', 'location,width=700,height=600,top=50,scrollbars=1,location=0,menubar=0,resizable=1,status=0,toolbar=0'); popupWin.focus(); return false;"))?> <?endif?></td>
   <td width="50" align="center">
       <?=Form::checkbox('status', 1, (bool) $product['popular'])?>
   </td> 
   <td width="50" align="center">
    <?=HTML::anchor('admin/products/edit/'. $key, HTML::image('media/img/edit.png'))?>

    <?=HTML::anchor('admin/products/delete/'. $key, HTML::image('media/img/delete.png'))?>

    </td>
</tr>
<? endforeach?>

</table>
<?=$pagination?>
<br/>
</div>

 <?=$cat_tree?> 
   
