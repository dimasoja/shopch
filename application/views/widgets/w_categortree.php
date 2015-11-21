<style type="text/css">
/*<![CDATA[*/

	

/*]]>*/
</style>

<div id="sidebar" class="yui-b marlet">
<div id="StoreCategoryTreeFilter" class="jstree jstree-0 jstree-focused jstree-default">
<ul>
<li id="StoreCategoryTreeFilterNode_0" class="jstree-leaf">
<ins >&nbsp;</ins>
<a href="#" class=""><ins >&nbsp;</ins>Все категории</a></li>
<li id="StoreCategoryTreeFilterNode_1" class="jstree-last jstree-open">
<a href="#" ><ins >&nbsp;</ins>root (0)</a>

<ul>
    <?foreach($categories as $cat):?>
    <?if($cat->has_children()):?> 
    <li id="<?=$cat->id?>" class="jstree-closed">>

 <?=html::anchor('admin/products/catprod/' . $cat->id, $cat->c_title . '(' . $cat->count_prod_all() . ')' )?>
<?else:?>
 <li id="<?=$cat->id?>" class="jstree-leaf">
 <?=html::anchor('admin/products/catprod/' . $cat->id, $cat->c_title . '(' . $cat->count() . ')' )?>

<?endif?>
<?if($cat->has_children()):?> 
<ul style="">
    <?foreach($cat->children() as $pc):?>
    <li id="<?=$pc->id?>">
<ins >&nbsp;</ins> <?=html::anchor('admin/products/catprod/' . $pc->id, $pc->c_title . '(' . $pc->products->count_all() . ')' )?> </li>
      <?endforeach?>
</ul>
 <?endif?>  
 </li>  
     <?endforeach?> 
    
</ul></li></ul></div>
    
    
    <script type="text/javascript">
    $(document).ready(function() { 
        
      

$('#StoreCategoryTreeFilter').jstree( {
    
    "plugins" : ['themes','html_data','ui','crrm','search', 'cookies'  ],
                            'cookies':{
                                                                 
                                }
                                
  }
 
          ); 
//$('#StoreCategoryTreeFilter').jstree( "save_opened", null);

 
 
    });
    

</script>