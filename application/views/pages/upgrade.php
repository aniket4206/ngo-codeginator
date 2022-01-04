<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <!-- PayTm-->

            <h3><?php echo PAYTM_AMOUNT; ?> INR /Month</h3>
            <p>Upgrade your membership</p>

            <form method="post" action="<?php echo base_url(); ?>payTM">
                <input  type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo "ORDS" . rand(10000, 99999999) ?>">
                <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
                <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                <input type="hidden" title="TXN_AMOUNT" tabindex="240" type="text" name="TXN_AMOUNT" value="<?php echo PAYTM_AMOUNT; ?>">
                <button value="CheckOut" type="submit" onclick="" class="get-start" style="width: 100%;"> Pay with PayTM </button>
            </form>     
        </div>
          <div class="col-md-3"></div>
    </div>
</div>