<div class="main" style="margin: 0 auto; max-width: 960px">

    <h2>category name: <?=$arResult['parent_section']?></h2>

    <?foreach ($arResult['posts'] as $item):?>
    <div>
        <h2><?=$item['title']?></h2>
        <a href="/?page=home&section=<?=$arResult['parent_section']?>&post=<?=$item['alias']?>"> подробнее  </a>
        <hr>
    </div>
    <?endforeach;?>

</div>
