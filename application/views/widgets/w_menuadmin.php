<script>
 $(document).ready(function () {   

    $('#nav li').hover(
        function () {
            //показать подменю
            $('ul', 'li:hover').slideDown(100);  

        },
        function () {
            //скрыть подменю
            $('ul', this).slideUp(100);
        }
    );  

});
  </script>

<div class="menu_admin">
<?=Html::anchor('', Html::image('media/img/home.png'))?>
<ul id="nav" >
    <?foreach ($menu as $name => $pmenu):?>
    
    <?if(in_array(false, $pmenu)):?>
      <li> <?=Html::anchor('admin/'. $pmenu[0], $name)?> </li> 
     <?else:?>
    <li><a href="#"><?=$name?></a>
        <ul>
         <?foreach ($pmenu as $pname => $pmn):?>
         
             <li>
                 <?=Html::anchor('admin/'. $pmn, $pname)?>
             </li>
         
         <?endforeach?>
         </ul>
         </li>
    <?endif?>
  <?endforeach?> 
</ul>

</div>
