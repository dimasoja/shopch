<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?=$site_name?> | <?=$page_title?></title>
    <meta content="text/html; charset=utf8" http-equiv="content-type">
     <?foreach ($styles as $file_style):?>
        <?=html::style($file_style)?>
    <?endforeach?>
    <?foreach ($scripts as $file_sript):?>
        <?=html::script($file_sript)?>
    <?endforeach?>
</head>
<body>
<div class="boy">
    <div class="mainbg-top">
    <table align="center" border="0" width="1200" cellpadding="10" class="maintbl">
    <thead class="thtbl">

        <tr>
            <th align="left"    colspan="3"  >
                <?=$search?>
                 <div id="header">
                     
                     <?=$cart?>
                    <a href="/"><h1><?=$site_name?></h1></a>
                    <h3><?=$site_description?></h3>
                    <div class="top_menu"><?=$top_menu?></div>
                </div>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr valign="top">
            <!-- Левый блок-->
             <? if (isset($block_left)):?>
                <td width="210">
                    <? foreach ($block_left as $lblock):?>
                        <?=$lblock?>
                    <?endforeach?>
                </td>
            <?endif?>
            <!-- /Левый блок-->

            <!-- Центральный блок-->
            <? if (isset($block_center)):?>
                <td width="860">
                    <h2><?=$page_title?></h2>
                    <? foreach ($block_center as $cblock):?>
                        <?=$cblock?>
                    <?endforeach?>
                </td>
            <?endif?>
            <!-- /Центральный блок-->


            <!-- Правый блок-->
             <? if (isset($block_right)):?>
                <td width="250">
                    <? foreach ($block_right as $rblock):?>
                        <?=$rblock?>
                    <?endforeach?>
                </td>
            <?endif?>
            <!-- /Правый блок-->
        </tr>
        <tr align="center">
            <td>    </td>
        </tr>
    </tbody>
     </div>
    </div>
    <tfoot align="center" >
      <tr><th align="left"    colspan="3">  <div style=" border-bottom: 3px dotted #eee;padding-bottom:200px"></div>  </th> </tr>  
    <tr>
       
     <th align="left"    colspan="3"><?=$block_top?></th>
     
    </tr> 
   </tfoot>
</table>
        

     
</body>
 
</html>