<?php
/*
 * php code///////////**********************************************************
 */
$title = 'TheKeeper';

$db = new database();
$option_cat = array(
    "table" => "product_categories"
);
$query_cat = $db->select($option_cat); // catgorie

$sql_pc = "SELECT p.id, p.name as pname, p.price , p.image, c.name as cname ";
$sql_pc .= "FROM products p INNER JOIN product_categories c ON p.product_categorie_id = c.id ";
$query_pc = $db->query($sql_pc);

/*
 * php code///////////**********************************************************
 */

/*
 * header***********************************************************************
 */
require 'template/front/header.php';
/*
 * header***********************************************************************
 */
?>
<div class="content">
    <div class="container">
        <div class="content-top">
        <br>
        <br>
        <h2 class="new" style="color: #fff; text-shadow: 3px 3px 2px #000;">สินค้าโปรโมชั่น</h2>
        <div class="pink">
            <!-- requried-jsfiles-for owl -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <script src="js/owl.carousel.js"></script>
            <script>
                $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                        items : 4,
                        lazyLoad : true,
                        autoPlay : true,
                        pagination : true,
                    });
                });
            </script>
        <!-- //requried-jsfiles-for owl -->
            <div id="owl-demo" class="owl-carousel text-center">
            <div class="item">
                <div class=" box-in">
            <div class=" grid_box">
                             <a href="p1.html" > <img src="images/bud/1.png" class="img-responsive" alt="">
                            </a>
                   </div>
                    <!---->
                        <div class="grid_1 simpleCart_shelfItem">


                            <a href="p1.html" class="cup item_add"><span class=" item_price" >พระขุนแผนครูบาจันต๊ะรุ่น2</span></a>
                        </div>
                    <!---->
                </div>
            </div>
<div class="item">
                <div class=" box-in">
            <div class=" grid_box">
                             <a href="p2.html" > <img src="images/bud/2.png" class="img-responsive" alt="">
                            </a>
                   </div>
                    <!---->
                        <div class="grid_1 simpleCart_shelfItem">


                            <a href="p2.html" class="cup item_add"><span class=" item_price" >หลวงพ่อทวดวัดพระสิงห์</span></a>
                        </div>
                    <!---->
                </div>
            </div>

            <div class="item">
                <div class=" box-in">
            <div class=" grid_box">
                             <a href="p3.html" > <img src="images/bud/3.png" class="img-responsive" alt="">
                            </a>
                   </div>
                    <!---->
                        <div class="grid_1 simpleCart_shelfItem">


                            <a href="p3.html" class="cup item_add"><span class=" item_price" >เหรียญพ่อขุนรามคำแหงมหาราช</span></a>
                        </div>
                    <!---->
                </div>
            </div>

            <div class="item">
                <div class=" box-in">
            <div class=" grid_box">
                             <a href="p4.html" > <img src="images/bud/4.png" class="img-responsive" alt="">
                            </a>
                   </div>
                    <!---->
                        <div class="grid_1 simpleCart_shelfItem">


                            <a href="p4.html" class="cup item_add"><span class=" item_price" >พระสมเด็จวัดระฆังฯ100ปี  </span></a>
                        </div>
                    <!---->
                </div>
            </div>

            <div class="item">
                <div class=" box-in">
            <div class=" grid_box">
                             <a href="p5.html" > <img src="images/bud/5.png" class="img-responsive" alt="">
                            </a>
                   </div>
                    <!---->
                        <div class="grid_1 simpleCart_shelfItem">


                            <a href="p5.html" class="cup item_add"><span class=" item_price" >พระปิดตา ครูบาคำแสน </span></a>
                        </div>
                    <!---->
                </div>
            </div>

            <div class="item">
                <div class=" box-in">
            <div class=" grid_box">
                             <a href="p6.html" > <img src="images/bud/6.png" class="img-responsive" alt="">
                            </a>
                   </div>
                    <!---->
                        <div class="grid_1 simpleCart_shelfItem">


                            <a href="p6.html" class="cup item_add"><span class=" item_price" >หลวงพ่อเงิน วัดอู่ตะเภาน้ำทอง </span></a>
                        </div>
                    <!---->
                </div>
            </div>
<div class="item">
                <div class=" box-in">
            <div class=" grid_box">
                             <a href="p7.html" > <img src="images/bud/7.png" class="img-responsive" alt="">
                            </a>
                   </div>
                    <!---->
                        <div class="grid_1 simpleCart_shelfItem">


                            <a href="p7.html" class="cup item_add"><span class=" item_price" >สมเด็จปรกโพธิ์หลวงปู่โต๊ะปี16</span></a>
                        </div>
                    <!---->
                </div>
            </div>
<div class="item">
                <div class=" box-in">
            <div class=" grid_box">
                             <a href="p8.html" > <img src="images/bud/8.png" class="img-responsive" alt="">
                            </a>
                   </div>
                    <!---->
                        <div class="grid_1 simpleCart_shelfItem">


                            <a href="p8.html" class="cup item_add"><span class=" item_price" >พระสมเด็จสำนักปู่สวรรค์</span></a>
                        </div>
                    <!---->
                </div>
            </div>
<div class="item">
                <div class=" box-in">
            <div class=" grid_box">
                             <a href="p9.html" > <img src="images/bud/9.png" class="img-responsive" alt="">
                            </a>
                   </div>
                    <!---->
                        <div class="grid_1 simpleCart_shelfItem">


                            <a href="p9.html" class="cup item_add"><span class=" item_price" > เหรียญเจ้าแม่จามเทวีปี12 </span></a>
                        </div>
                    <!---->
                </div>
            </div>
                <div class="clearfix"> </div>
            </div>

        </div>

         </div>

<h2 class="new" style="color: #fff; text-shadow: 3px 3px 2px #000;">สินค้าขายดี</h2>
<br>

    <div class="row">

        <div class="col-sm-12 blog-main">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <?php
                        while ($rs_pc = $db->get($query_pc)) {
                            ?>


                            <div class="col-sm-4 col-md-3">
                                <div class="thumbnail">
                                    <a href="<?php echo $baseUrl; ?>/product/view/<?php echo $rs_pc['id']; ?>">
                                        <img src="<?php echo $baseUrl; ?>/upload/product/thumb_<?php echo $rs_pc['image']; ?>" alt="<?php echo $rs_pc['pname']; ?>">
                                    </a>
                                    <div class="caption">
                                        <a href="<?php echo $baseUrl; ?>/product/view/<?php echo $rs_pc['id']; ?>"  style="font-size: 13px;"><?php echo $rs_pc['pname']; ?></a>
                                        <p  style="font-size: 13px;font-weight: bold;color: red;">ราคา : <?php echo number_format($rs_pc['price']); ?> บาท</p>
                                        <p  style="font-size: 13px;">หมวดหมู่ : <?php echo $rs_pc['cname']; ?></p>
                                        <p>
                                            <a href="<?php echo $baseUrl; ?>/product/view/<?php echo $rs_pc['id']; ?>" class="btn btn-info" role="button">รายละเอียด</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div><!-- /.blog-main -->

    </div><!-- /.row -->

</div><!-- /.container -->
<?php
/*
 * footer***********************************************************************
 */
require 'template/front/footer.php';
/*
 * footer***********************************************************************
 */
mysql_close();
