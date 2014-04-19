<?php $this->renderPartial('_sidebar', $this->sidebar); ?>
<div class="watch_block2">
    <div class="watch_block_img_test">
        <div class="watch_block_img">
            <a href="#" class="zoom" ><img src="#"  style=" max-width:280px; max-height:380px" /></a>
        </div>
    </div>

    <div class="watch_block_title">
        <div class="watch_block_title_text">
            <div class="watch_block_title_text_t">Купить часы - <?php echo $model->title ?></div>
            <div class="watch_block_title_text_in"><?php echo $model->stock ?></div>
        </div>
        <div class="watch_block_title_price">
            <div class="watch_block_title_price_t"><?php echo $model->price ?><?php echo $model->currency?></div>
        </div>
    </div>

    <div class="watch_block_feature">Характеристики Модели:
        <div class="watch_block_feature_2">
            <?php echo $model->desc_min ?>
        </div>
    </div>

    <div class="watch_block_text">
        <div class="watch_block_text_block">
            <div class="watch_block_text_block_t">
                <p><?php echo $model->desc_full ?></p>
            </div>
        </div>
    </div>
</div>