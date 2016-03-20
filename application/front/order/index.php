<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$title = 'ตะกร้าสั่งซื้อสินค้า';
$item_count = isset($_SESSION[_ss . 'cart']) ? count($_SESSION[_ss . 'cart']) : 0;
if (isset($_SESSION[_ss . 'qty'])) {
    $me_qty = 0;
    foreach ($_SESSION[_ss . 'qty'] as $me_item) {
        $me_qty = $me_qty + $me_item;
    }
} else {
    $me_qty = 0;
}

if (isset($_SESSION[_ss . 'cart']) and $item_count > 0) {
    $items_id = "";
    foreach ($_SESSION[_ss . 'cart'] as $item_id) {
        $items_id = $items_id . $item_id . ",";
    }
    $input_item = rtrim($items_id, ",");
    $option_ct = array(
        "table" => "products",
        "condition" => "id IN ({$input_item})"
    );
    $query_ct = $db->select($option_ct);
    $me_count = $db->rows($query_ct);
} else {
    $me_count = 0;
}


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
<script type="text/javascript" src="<?php echo base_url(); ?>/js/imagelightbox.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.form-validator.min.js"></script>
<style>
    #imagelightbox
    {
        position: fixed;
        z-index: 9999;

        -ms-touch-action: none;
        touch-action: none;
    }
</style>

<script>

function FillBilling(f) {
  if(f.billingtoo.checked == true) {
    f.fullname2.value = f.fullname.value;
    f.address1.value = f.address.value;
    f.address2.value = f.addresss.value;
    f.district2.value = f.district.value;
    f.province2.value = f.province.value;
    f.postcode2.value = f.postcode.value;
  }
}

</script>
<script src="js/test.js"></script>
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<div class="container">
    <div class="blog-header">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>">หน้าแรก</a></li>
            <li><a href="<?php echo base_url(); ?>/cart">ตะกร้าสินค้า</a></li>
            <li class="active">สั่งซื้อสินค้า</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-sm-12 blog-main">
            <div class="row" style="font-size:13px;background-color: #fff; border-radius: 5px 5px; padding: 50px;">
                <?php if ($me_count > 0) { ?>
                <h4>ที่อยู่จัดสั่งและตรวจสอบรายการสั่งซื้อ</h4>
                <hr>
                    <form action="<?php echo base_url(); ?>/order/save" method="post" name="cartform" id="cartform" role="form" class="form-horizontal">
                        <div class="form-group">
                          <h3>1. Shipping Address</h3>
                            <label class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="fullname" data-validation="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ที่อยู่</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="address" data-validation="required" data-validation="length" data-validation-length="max200">
                                <br>
                                  <input type="text" class="form-control" name="addresss" data-validation="required" data-validation="length" data-validation-length="max200">
                                  <hr>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">เขต/อำเภอ</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="district" data-validation="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">จังหวัด</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="province" data-validation="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รหัสไปรษณีย์</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="postcode" data-validation="number">
                            </div>
                        </div>


                        <hr>
                            <form action="<?php echo base_url(); ?>/order/save" method="post" name="cartform" id="cartform" role="form" class="form-horizontal">
                                <div class="form-group">
                                  <h3>2. Billing address</h3>
                                  <label><input type="checkbox" name="billingtoo" onclick="FillBilling(this.form)">
                                  <em>ใช้ข้อมูลเดียวกันกับ Shipping Address.</em></label>
                                  <br>
                                  <br>



                                    <label class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="fullname2" data-validation="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">ที่อยู่</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="address1" data-validation="required" data-validation="length" data-validation-length="max200">
                                        <br>
                                          <input type="text" class="form-control" name="address2" data-validation="required" data-validation="length" data-validation-length="max200">
                                          <hr>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label">เขต/อำเภอ</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="district2" data-validation="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">จังหวัด</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="province2" data-validation="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">รหัสไปรษณีย์</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="postcode2" data-validation="number">
                                    </div>
                                </div>
                                <hr>
                                    <form action="<?php echo base_url(); ?>/order/save" method="post" name="cartform" id="cartform" role="form" class="form-horizontal">
                                        <div class="form-group">
                                          <h3>3. ชำระเงิน</h3>
                                          <div class="form-group">
                                              <label class="col-sm-3 control-label"></label>
                                              <div class="col-sm-6">

                                                    <hr>
                                                    <label class="checkbox-inline">
                                                      <input type="radio" value="" name="visa">Visa
                                                    </label>
                                                    <label class="checkbox-inline">
                                                      <input type="radio" value="" name="visa">Master Card
                                                    </label>
                                                    <label class="checkbox-inline">
                                                      <input type="checkbox" value="">Paypal
                                                    </label>

                                                    <figure class="payment clearfix">

  <form class="simple_form cardInfo">

    <fieldset class="cardInfo__cardDetails">

      <div class="form-row cardInfo__cc-num">
        <label for="cc-num">

          <span>Card Number</span>
        </label>
        <div class="cc-num__wrap">
          <input id="cc-num" type="tel" class="paymentInput cc-num" placeholder="•••• •••• •••• ••••" autocompletetype="cc-number" required="required">
          <span class="card" aria-hidden="true"></span>
        </div>
      </div>

      <div class="form-row cardInfo__cc-exp">
        <label for="cc-exp">

          <span>Expires</span>
        </label>
        <input id="cc-exp" type="tel" class="paymentInput cc-exp cc-exp__demo" placeholder="MM / YY" autocompletetype="cc-exp" required="required">
      </div>

      <div class="form-row cardInfo__cc-cvc">
        <label for="cc-cvc">

          <span>CVC</span>
        </label>
        <input id="cc-cvc" type="tel" class="paymentInput cc-cvc cc-cvc__demo" placeholder="CVC" autocompletetype="cc-cvc" required="required">
      </div>


    </fieldset>
  </form>

</figure>

                                              </div>
                                          </div>







                                        </form>


                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>รูปสินค้า</th>
                                    <th>สินค้า</th>
                                    <th style="text-align:center;">ราคา/หน่วย</th>
                                    <th style="width: 100px;text-align: center;">จำนวน</th>
                                    <th style="text-align:center;">จำนวนเงินรวม</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                $total_price = 0;
                                while ($rs_ct = $db->get($query_ct)) {
                                    $key = array_search($rs_ct['id'], $_SESSION[_ss . 'cart']);
                                    $total_price = $total_price + ($rs_ct['price'] * $_SESSION[_ss . 'qty'][$key]);
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url(); ?>/upload/product/<?php echo $rs_ct['image']; ?>" data-imagelightbox="a">
                                                <img src="<?php echo base_url(); ?>/upload/product/sm_<?php echo $rs_ct['image']; ?>" class="img-responsive" alt="Responsive image" style="width:120px; height:180px;">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>/product/view/<?php echo $rs_ct['id']; ?>">
                                                <?php echo $rs_ct['name']; ?>
                                                <input type="hidden" name="product_<?php echo $i;?>" value="<?php echo $rs_ct['id']?>">
                                            </a>
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo number_format($rs_ct['price'], 2); ?>
                                            <input type="hidden" name="price_<?php echo $i;?>" value="<?php echo $rs_ct['price'];?>">
                                        </td>
                                        <td style="text-align: right;">
                                            <?php echo $_SESSION[_ss . 'qty'][$key]; ?>
                                            <input type="hidden" name="qty_<?php echo $i;?>" value="<?php echo $_SESSION[_ss . 'qty'][$key]; ?>">
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo number_format($rs_ct['price'] * $_SESSION[_ss . 'qty'][$key], 2); ?>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                <div class="modal fade" id="deleteModal<?php echo $rs_ct['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="myModalLabel">แจ้งเตือนการลบข้อมูล</h4>
                                            </div>
                                            <div class="modal-body">
                                                คุณยืนยันต้องการจะลบข้อมูลนี้ ใช่หรือไม่?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">ไม่ใช่</button>
                                                <a role="button" class="btn btn-primary" href="<?php echo $baseUrl; ?>/cart/delete/<?php echo $rs_ct['id']; ?>">ใช่ ยืนยันการลบ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                            }
                            ?>
                            <tr>
                                <td colspan="6" style="text-align: right;">
                                    <h4>จำนวนเงินรวมทั้งหมด <?php echo number_format($total_price); ?> บาท</h4>
                                    <input type="hidden" name="total" value="<?php echo $total_price;?>">
                                    <input type="hidden" name="count_item" value="<?php echo $i;?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6" style="text-align: right;">
                                    <button type="button" class="btn btn-danger goback">
                                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                        ย้อนกลับ
                                    </button>
                                    <button type="button" class="btn btn-success saveform">
                                        <span class="glyphicon glyphicon-floppy-save"></span>
                                        บันทึกการสั่งซื้อสินค้า
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-danger" role="alert" style="margin:15px;">
                        ไม่มีสินค้าในตะกร้าสินค้า หากต้องการซื้อสินค้า
                        <a href="<?php echo base_url(); ?>/product" class="alert-link">คลิกที่นี้</a>
                    </div>
                <?php } ?>
            </div>
        </div><!-- /.blog-main -->

    </div><!-- /.row -->

</div><!-- /.container -->
<script type="text/javascript">
    $(document).ready(function () {
        $('a').imageLightbox();
        $.validate();
        $('.saveform').click(function () {
            $('#cartform').submit();
        });
        $('.goback').click(function () {
            window.location = 'cart';
        });
    });
</script>
<?php
/*
 * footer***********************************************************************
 */
require 'template/front/footer.php';
/*
 * footer***********************************************************************
 */
mysql_close();
