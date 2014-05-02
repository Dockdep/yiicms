<div id="search">
    <div id="search_div">
        <?php $url = $this->getController()->createUrl('store/search'); ?>
        <?php echo CHtml::beginForm($url); ?>
        <div class="form-wrapper">
            <?php echo CHtml::activeTextField($form,'string') ?>
            <?php echo CHtml::error($form,'string'); ?>
            <div id="submit"><?php echo CHtml::SubmitButton('Поиск'); ?></div>
        </div>
        <?php echo CHtml::endForm(); ?>
    </div>
    <div id="SearchFooter"></div>
</div>