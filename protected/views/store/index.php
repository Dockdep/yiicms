<?php
/* @var $this StoreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Goods',
);

?>
<?php
    require_once('protected\views\site\sidebar.php');
?>
<div class="watch_block">

<?php
$categoryName = $this->categoryName;
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
    'viewData' => array('categoryName'=>$categoryName),
	'itemView'=>'_view',
    'summaryText' => '',
    'pager' => array(
        'class' => 'CLinkPager',
        'header' => '',
        'firstPageLabel'=>'<<',
        'prevPageLabel'=>'<',
        'nextPageLabel'=>'>',
        'lastPageLabel'=>'>>',
        'maxButtonCount'=>'4',
        'cssFile'=>'false'
    ),

)); ?>
</div>
