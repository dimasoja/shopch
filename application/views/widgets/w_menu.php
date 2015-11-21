
<div class="box-headingm">  Каталог </div>
<ul id="menu">
  
<?foreach($categories as $cat):?>
<li>
 <?if($cat->has_children()):?>
<a href="" class="menu_link"><?=$cat->c_title?> </a>
<?else:?>
 <?if($cat->id == $id_p):?>
  <li > <?=HTML::anchor('catalog/cat/c'.$cat->id , $cat->c_title, array('class' => 'menu_link', 'id'=>'active'))?> </li>
<?else:?>
<li > <?=HTML::anchor('catalog/cat/c'.$cat->id , $cat->c_title, array('class' => 'menu_link'))?> </li>
<?endif?>  
<?endif?>
  <?if($cat->has_children()):?>  
  <?if($cat->id == $id_p):?>
<ul id="active">
    <?foreach($cat->children() as $pc):?>
        <li>  <?=HTML::anchor('catalog/cat/c'.$pc->id , "-".$pc->c_title)?> </li>
    <?endforeach?>
</ul>
  <?else:?>
  <ul>
    <?foreach($cat->children() as $pc):?>
        <li>  <?=HTML::anchor('catalog/cat/c'.$pc->id , "-".$pc->c_title)?> </li>
    <?endforeach?>
</ul>
  <?endif?>
  <?endif?> 
 </li>
<?endforeach?>

</ul>

