<?php

//echo '<pre>'; print_r($arResult);

?>
<div class="main" style="margin: 0 auto; max-width: 960px">
    <h2>category</h2>
    <?foreach ($arResult as $item):?>
    <a href="/?page=home&section=<?=$item['alias']?>"> <?=$item['title']?> </a>
    <?endforeach;?>
</div>



