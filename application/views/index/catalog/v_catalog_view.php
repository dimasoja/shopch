<br/>
<table width="100%" border="0" cellpadding="10" cellspacing="10">
    <td width="100" align="center" valign="top">
        <?if(count($images) > 0):?>
            <div id="main_icon">
            <?=html::anchor('media/uploads/'. $product->main_img->name, html::image('media/uploads/' . $product->main_img->name, array('width' => '150')), array('target' => '_blank'))?>
            </div>
            <table align="center" width="100" border="0" class="images_icon" >
                <tr align="center">
                    <?foreach($images as $image):?>
                <td><?=html::image('media/uploads/' . $image->name, array('width' => '50', 'class' => 'icon'))?></td>
                    <?endforeach?>
                </tr>
            </table>
        <?else:?>
        <div id="main_icon">
            <?=html::image('media/img/book.png', array('width' => '150'))?>
        </div>
         <?endif?>
        <div class="cost"><?=$product->cost?> грн. </div>
        <?=html::anchor('cart/add/'. $product->id, html::image('media/img/buy.gif'))?>
    </td>
    <td align="left" valign="top">
        <p><?=$product->description?></p>
    </td>
</table>
<br/>

<div id="tabs" class="htabs"><a href="#tab-description" style="display: inline;">Описание</a>
            <a href="#tab-review" style="display: inline;">Отзывов <div id="comment_count" style="display: inline;"> <? if (count($comments) > 0):?> (<?=$product->comments->count_all()?> ) <?endif?>  </div> </a> 
          </div>
  <div id="tab-description" class="tab-content"><p>
	
</div>
      <div id="tab-review" class="tab-content">
    <div id="review">     
    <div id="review_send">          </div>
    <? if (count($comments) > 0):?>
<?foreach($comments as $comment):?>
<div class="review-list">
    <div class="author"> <b> <?=$comment->name?>  </b>   оставил(а) свой отзыв <?=$comment->date?>  </div>
    <div class="text">  <?=$comment->text?> </div>
</div>


<?endforeach?>

</div>
<?=$pagination?>
<?else:?>
<div class="box">Нет отзывов</div>
<?endif?>
    
    
  
    <h3 id="review-title">Написать отзыв</h3>
    <div></div>
    	<b>Автор:</b><br />
	<input id="name_av" type="text"  name="name_av" value="" />
    <br />
    <br />
    <b>Текст отзыва:</b>
    <textarea name="text" cols="40" rows="8" id="text_com" style="width: 98%;"></textarea>
    <span style="font-size: 11px;"><span style="color: #FF0000;">Внимание:</span> HTML не поддерживается! Используйте обычный текст.</span><br />
 <!--   <br />
    <b>Оценка:</b> <span>Плохо</span>&nbsp;
    <input type="radio" name="rating" value="1" />
    &nbsp;
    <input type="radio" name="rating" value="2" />
    &nbsp;
    <input type="radio" name="rating" value="3" />
    &nbsp;
    <input type="radio" name="rating" value="4" />
    &nbsp;
    <input type="radio" name="rating" value="5" />
    &nbsp;<span>Хорошо</span><br />
    <br />
    <b>Введите код с картинки:</b><br />
    <input type="text" name="captcha" value="" />
    <br /> -->
    
    <br />
    <div class="buttons">
      <div class="right">
          <a id="button-review" class="button">Продолжить</a>
         
      
      </div>
    </div>
	  </div>
        </div>
  <div class="bottom"></div>
  </div>

<script type="text/javascript"><!--
$('#tabs a').tabs();


//$('#tabs a').next().click();
//--></script>

 <? if ($tab == true ):?>
<script type="text/javascript"><!--
//$('#tabs a').tabs();


$('#tabs a').next().click();
//--></script>
<?endif?>

<script type="text/javascript">
    
         $('#button-review').click(
                function(){
                    var name = $('#name_av').val();
                    var text = $('#text_com').val();
                    var id = <?=$product->id?>;
                   
                   
                    
                    
                     $('#comment_count').empty();
                //      $('#comment_count').html('('+count+')');
                   
                      jQuery.ajax({
                           type: "POST",
                           url: '/ajax/productajax/getaddcomment' , 
                           data: "name="+name+"&text="+text+'&id='+id,
                           success: function(result) {
                           var data = JSON.parse(result);
                           if (data.error){
                                var str_er=' ';
                                 $('#review-title').next().html("<div class="+"warning"+">  </div>");
                             for (var i in data.error){
                                var er =  data.error[i] + '<br>' ;
                                str_er=str_er+er;
                               
                                
                            //     $('#review-title').next().html('<div>ssssssssss</div>');
                              // alert(data.error[i]);
                           }
                               $('.warning').html(str_er); 
                           
                       }
                           else{
                             $('#review-title').next().html("<div class="+"success"+"> Отзыв успешно добавлен  </div>");
                            var str = " <div class=" + "review-list"+"> <div class=" + "author"+"> <b>" + data.name + "</b>   оставил(а) свой отзыв" + data.date + 
                                      " </div>  <div class="+"text"+">" + data.text + "</div> </div>";
                            $('#review_send').append(str);
                            $('#comment_count').html('('+data.count+')');
                          }
                            }});
			});
                   
</script>
