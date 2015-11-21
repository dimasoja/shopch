<?if($products->count() > 0):?>

<div class="product-grid">
    <?foreach($products as $i => $product):?>
        <?if ($i % 3 == 0):?>
           
        <?endif?>
        
            <div>
       
<div class="image">
            <?if(count($product->images->find_all()) > 0):?>
            
            <?=html::anchor("catalog/view/c$cat/$product->id",
                    html::image('media/uploads/' . $product->main_img->name, array('width' => '150')))?>
             
            <?else:?>
             <?=html::anchor("catalog/view/c$cat/$product->id",
                    html::image('media/img/book.png', array('width' => '150')))?>
            <?endif?>
            </div>
            <div class="name">
             <?=html::anchor("catalog/view/c$cat/$product->id", "<h4>$product->title</h4>")?>
            </div>
            <div class="cost"><?=$product->cost?> грн.</div>
        
         </div>
        
    <?endforeach?>
    </div>
<?else:?>
<div class="empty">Нет товаров в этой категории</div>

<?endif?>


