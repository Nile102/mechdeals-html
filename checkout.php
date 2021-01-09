
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title>Checkout</title>
     <?php include 'include/links.php' ?>
<link href="css/checkout.css" rel="stylesheet">
</head>

<body class="res layout-1">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-5">
    

    <?php include 'include/header.php' ?>
    
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Checkout</a></li>
			
		</ul>
		
      <div class="cont ainer">
    <div class="stepwizard">
        <div class="setup-panel">
            <div class="stepwizard-step"> 
                <a href="#step-1" type="button" class="btn btn-success btn-circle">Shoping Cart</a>
            </div>
            <div class="stepwizard-step"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">Email</a>
            </div>
            <div class="stepwizard-step"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"> Delivery address </a>
            </div>
            <div class="stepwizard-step"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled"> Review order </a>
            </div>
             <div class="stepwizard-step"> 
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled"> Place Order </a>
            </div>
        </div>
    </div>
    
    <form role="form">
        <div class="panel shadowNone setup-content" id="step-1">
            <div class="itemList">
            	<ul class="list-unstyled">
            	<li>
            		<div class="leftSide">
            			<img src="image/checkout/item-img.png">
            			<div class="itemInfo">
            				<h3><a href="javascript:void(0);"> CARTRIDGE, OIL FILTER (PT. DUTA NICHIRINDO) </a></h3>
            				<div>
            					<label>Part Number :</label> <span>15400RZ0G01</span>
            				</div>
            				<div>
            					<label>Brand :</label> <span> Honda / Acura</span>
            				</div>
            				<div>
            					<label>SOLD BY :</label> <span>SwaranRJ</span>
            				</div>
            				<div>
            					<label>Qty :</label> <span>
            						<select class="form-control">
            							<option value="1">1</option>
            							<option value="2">2</option>
            						</select>
            					</span>
            				</div>
            				<a href="javascript:void(0);"><i class="fa fa-close"></i> Remove Itme</a>
            			</div>
            		</div>

            		<div class="rightSide">
            			<div>
        					<label>MRP :</label> <span>₹412.00</span> <span class="offTxt">3% OFF</span>
        				</div>
        				<div class="mt15">
        					<label>Price :</label> <span>₹400.00</span>
        				</div>
            		</div>
            	</li>
            	<!-- xxx -->
            	<li>
            		<div class="leftSide">
            			<img src="image/checkout/item-img.png">
            			<div class="itemInfo">
            				<h3><a href="javascript:void(0);"> CARTRIDGE, OIL FILTER (PT. DUTA NICHIRINDO) </a></h3>
            				<div>
            					<label>Part Number :</label> <span>15400RZ0G01</span>
            				</div>
            				<div>
            					<label>Brand :</label> <span> Honda / Acura</span>
            				</div>
            				<div>
            					<label>SOLD BY :</label> <span>SwaranRJ</span>
            				</div>
            				<div>
            					<label>Qty :</label> <span>
            						<select class="form-control">
            							<option value="1">1</option>
            							<option value="2">2</option>
            						</select>
            					</span>
            				</div>
            				<a href="javascript:void(0);"><i class="fa fa-close"></i> Remove Itme</a>
            			</div>
            		</div>

            		<div class="rightSide">
            			<div>
        					<label>MRP :</label> <span>₹412.00</span> <span class="offTxt">3% OFF</span>
        				</div>
        				<div class="mt15">
        					<label>Price :</label> <span>₹400.00</span>
        				</div>
            		</div>
            	</li>
            </ul>

            <div class="subTotal">
            	<div class="total"><h3>SUBTOTAL (2 item):  <span>₹400.00</span></h3></div>
            	<p>Total Savings (2 item): ₹24.00</p>
            </div>
            <div class="text-right btnRow">
            	<button class="btn btnDanger nextBtn" type="button">Next</button>
            </div>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">Email Address</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <input maxlength="200" type="text"  class="form-control" placeholder="Enter Email" />
                </div>
                <div class="btnRow"><button class="btn btnDanger nextBtn pull-right" type="button">Next</button></div>
            </div>
        </div>
        <!-- required="required" -->
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title"> Delivery address </h3>
            </div>
            <div class="panel-body">
                <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Individual</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Business</a></li>
                  </ul>
                 <br>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                          <form>
                            <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input maxlength="200" type="text"  class="form-control" placeholder="Pincode" />
                            </div>
                            </div>
                        <!-- xxxx -->
                        <div class="col-sm-6">
                        <div class="form-group">
                           <div class="input-group">
                              <div class="input-group-addon">+91</div>
                              <input type="text" class="form-control" placeholder="Mobile Number">
                            </div>
                        </div>
                        </div>
                        <!-- xxxx -->
                        <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="First Name" />
                        </div>
                        </div>
                        <!-- xxxx -->
                        <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Last Name" />
                        </div>
                        </div>
                        <!-- xxxx -->
                        <div class="col-sm-6">
                         <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Address"></textarea>
                        </div>
                        </div>
                        <!-- xxxx -->
                        <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="City" />
                        </div>
                        </div>
                        <!-- xxxx -->
                        <div class="col-sm-6">
                        <div class="form-group">
                           <select class="form-control" title="State">
                            <option>Select State</option>
                               <option>Madhya Pradesh</option>
                               <option>Uttar Pradesh</option>
                           </select>
                        </div>
                        </div>
                        <!-- xxxx -->
                        <div class="col-sm-6">
                         <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Country" value="India" disabled="" />
                        </div>
                        </div>
                        </div>
                        <!-- xxxx -->
                         <div class="btnRow">
                            <button class="btn btnDanger nextBtn pull-right" type="button">Next</button>
                       </div>
                          </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                         <form>
                             <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                             <input type="text"  class="form-control" placeholder="Company Name" />
                            </div>
                            </div>
                            <!-- xxxx -->
                             <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text"  class="form-control" placeholder="GST Number" />
                            </div>
                            </div>
                            <!-- xxxx -->
                             <div class="col-sm-6">
                              <div class="form-group">
                            <input maxlength="200" type="text"  class="form-control" placeholder="Pincode" />
                        </div>
                        </div>
                        <!-- xxxx -->
                         <div class="col-sm-6">
                        <div class="form-group">
                           <div class="input-group">
                              <div class="input-group-addon">+91</div>
                              <input type="text" class="form-control" placeholder="Mobile Number">
                            </div>
                        </div>
                        </div>
                        <!-- xxxx -->
                       <div class="col-sm-6">
                         <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Address"></textarea>
                        </div>
                        </div>
                        <!-- xxxx -->
                         <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="City" />
                        </div>
                        </div>
                        <!-- xxxx -->
                         <div class="col-sm-6">
                        <div class="form-group">
                           <select class="form-control" title="State">
                            <option>Select State</option>
                               <option>Madhya Pradesh</option>
                               <option>Uttar Pradesh</option>
                           </select>
                        </div>
                        </div>
                        <!-- xxxx -->
                         <div class="col-sm-6">
                         <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Country" value="India" disabled="" />
                        </div>
                        </div>
                        </div>
                        <!-- xxxx -->

                         <div class="btnRow">
                            <button class="btn btnDanger nextBtn pull-right" type="button">Next</button>
                       </div>
                          </form>
                    </div>
                  </div>
              
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                 <h3 class="panel-title">Review Order</h3>
            </div>
            <div class="panel-body">
                <div class="reviewOrderTop">
                 <div class="reviewOrderTop__left">
                     <span><strong>Order Package #1</strong></span>
                     <span>Sold by: SwaranRJ</span>
                 </div>
                 <div class="reviewOrderTop__right">
                     <span>IMPORTANT! Estimated delivery date: 13-01-2021</span>
                 </div>
                 </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <div class="productImg">
                                  <img src="image/checkout/item-img.png">
                                  <div class="info">
                                      <a href="javascript:void(0);">CARTRIDGE, OIL FILTER (PT. DUTA NICHIRINDO)</a>
                                      <span>Part</span>
                                      <span>Number: 15400RZ0G01</span>
                                      <span>Brand: Honda / Acura</span>
                                  </div>  
                                </div>
                            </td>
                            <td>₹400.00</td>
                            <td>1</td>
                            <td>₹400.00</td>
                        </tr>
                    </tbody>
                  </table>
                </div>
                <div class="totalPrice text-right">
                    <h5><strong>Package delivery: ₹41.00</strong></h5>
                    <h5><strong>Package Total: ₹441.00</strong></h5>

                    <h5>1 items ₹400.00</h5>
                    <h5>Delivery charge: ₹41.00</h5>

                    <h3>Grand Total: ₹441.00</h3>
                </div>
                <div class="btnRow">
                    <button class="btn btnDanger nextBtn pull-right" type="button">Next</button>
                </div>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-5">
            <div class="panel-heading">
                 <h3 class="panel-title">Place Order</h3>
            </div>
            <div class="panel-body">
                <h3 class="priceTitle">Select payment method for <strong>₹441.00</strong></h3>
                <ul class="list-inline paymentList">
                    <li>
                        <a href="javascript:void(0);">
                             <img src="image/checkout/paytm_nodal.png">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                             <img src="image/checkout/razorpay_nodal.png">
                        </a>
                    </li>
                </ul>
                <div class="btnRow">
                    <button class="btn btnDanger pull-right" type="button">Place Order</button>
                </div>
            </div>
        </div>
    </form>
</div>
	</div>
	<!-- //Main Container -->
	
	 <?php include 'include/footer.php' ?>

    </div>
		<script type="text/javascript">
			$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
		</script>
</body>
</html>