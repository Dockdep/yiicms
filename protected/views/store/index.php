<?php
/* @var $this StoreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Goods',
);

?>

<div id="filter_button">Фильтр</div>
<?php $this->renderPartial('_sidebar', $this->sidebar); ?>
<?php $this->renderPartial('_filter', $this->sidebar); ?>
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
        $(".filter_form_0").hide();
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

        $("#selectBox").change(function(event){
            var row = $(this);
            var id = row.val();
            var block = $("#urofiliya");
            $.get( "http://yiicms/index.php?r=store/youurofil", {parentId: id }, function( data ) {
                $("#urofiliya").find(".newUrofiloFilds").each(function(){
                    $(this).remove();
                })
                block.append(data);
            });

        })

        $("#filter_button").on("click", function(){
            $("#filter_button").hide();
            $(".filter_form_0").slideDown(500);
        });

        $("#close_filter").on("click", function(){
            $(".filter_form_0").slideUp(500);
            $("#filter_button").show();
        });

        $("#submit_filter").on("click", function(e){
            e.preventDefault();
            var data = $(".filter_form_0 form").serialize();
            console.log(data);
        })
    })

</script>