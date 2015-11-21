<div class="box">
  <div class="box-heading"> <?=HTML::anchor('news/', 'Новости и статьи')?> </div>
  <div class="box-content-news">
<?foreach($all_news as $news):?>
    <br/>
    <div class="box-news">
    <h4><?=HTML::anchor('news/get/' . $news->id, $news->title)?>  </h4>
   
     
    <p><?=$news->intro?>    <?=HTML::anchor('news/get/'. $news->id,  'Подробнее>>>')?></p>
    <div class="news-date"> <?=$news->date?>   </div>
    </div> 
    
<?endforeach?>
<?=HTML::anchor('news/', 'Все новости...')?>
</div>
</div>