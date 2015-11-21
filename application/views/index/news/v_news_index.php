<br/>
 <div class="box">
     <div class="box-content">
<?foreach ($all_news as $news):?>
<div class="box-news">
    <h3><?=HTML::anchor('news/get/' . $news->id, $news->title)?></h3>
    <div class="news-date"><?=$news->date?></div>
    <p>
    <?=$news->intro?>
    </p>
    <div class="block_bottom">
     
        <?=HTML::anchor('news/get/' . $news->id, 'Читать полностью...')?>
    </div>
   </div>
<?endforeach?>
</div>
     </div>