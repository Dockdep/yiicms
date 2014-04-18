<?php
/* @var $this GoodsController */
/* @var $model Goods */

?>
<div id="edit"><p>Редактирование Товара с id:  <?php echo $model->goods_id; ?></p></div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>