<br/>
 <div class="box">
     <div class="box-content">
<?foreach ($all_news as $news):?>
 <div class="box-news">
    <h3><?=HTML::anchor('news/get/' . $news['id'], $news['title'])?></h3>
    <div class="new-date"><?=$news['date']?></div>
    <p>
    <?=$news['content']?>
    </p>
    <div class="block_bottom">
     
        <?=HTML::anchor('index/news/get/' . $news['id'], 'Читать полностью...')?>
    </div>
   </div>
<?endforeach?>
</div>
</div>
