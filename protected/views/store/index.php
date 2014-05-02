<?php
/* @var $this StoreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Goods',
);

?>

<?php $this->renderPartial('_sidebar', $this->sidebar); ?>
<div class="watch_block">
<?php
$categoryName = $this->categoryName;
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
    'viewData' => array('categoryName'=>$categoryName),
	'itemView'=>'_view',
    'summaryText' => '',
    'sortableAttributes' => array('title', 'date', 'price'),
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

<script>
    jQuery(document).ready(function(){
        $("#sidebar_block").on("click", ".sidebar-row", function(event){
            var row = $(this);
            var id = row.data("id");
            if(id){
                event.preventDefault();
            }
            $.get( "http://yiicms/index.php?r=store/selectgoods", {parentId: id }, function( data ) {
                $(".watch_block").find('*').remove();
                $(".watch_block").append(data);
            });

        })

        $(".sidebar-row").click(function(event){
            var row = $(this);
            var id = row.data("id");
            var block = row.parents('.sidebar_left');
            $.get( "http://yiicms/index.php?r=store/sidebarchild", {parentId: id }, function( data ) {
                $(block).css("top", "0px");
                $("#sidebar_block").find(".sidebar_left").not(block).remove();
                var content = data;
                var newBlock = $("#sidebar_block").append(content).find(".sidebar_left").not(block);
                var height = $(newBlock).css("left", "-999px").innerHeight();
                var newTop = height+15;
                $( block ).animate({ top: newTop+"px"}, 500);
                $(newBlock).animate({ left: "10px"}, 1000);
            });

        })


    })

</script>