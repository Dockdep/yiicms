<div id="sidebar_left">
    <ul>
        <li>
            <?php echo CHtml::link('Все часы',array('/store'), array('title'=>'Просмотреть все часы')); ?>
        </li>
        <?php foreach($this->sidebar as $item):?>
        <li>
            <a href="#" title="Просмотреть все часы &laquo;<?php echo $item['name']?>&raquo;"><?php echo $item['name']?></a>
        </li>
        <?php endforeach; ?>

    </ul>
</div>