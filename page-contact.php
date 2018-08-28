<?php
/**
 * template name: Page Contact
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amf
 */
get_header();
get_template_part('template-parts/globals/content', 'top-page');
//get_template_part('template-parts/content', 'page-optin-top');
?>

	<div id="primary" class="content-area section">
		<main id="main" class="site-main container" role="main">

			<?php
			while ( have_posts() ) : the_post();
					if( is_page('book-consultation')){

                        get_template_part( 'template-parts/content', 'book' );

                    }elseif(is_page('comments')){

						get_template_part( 'template-parts/content', 'comments' );

					}else{

                        get_template_part( 'template-parts/content', 'contact' );

                    }



			endwhile; // End of the loop.
			?>
        <?php /* <div id="receiving-request" class="row">
            <div class="col-sm-12 form-title text-center">
                <h2>Please complete the form below to submit a receiving request.</h2>
            </div>
            <div class="col-sm-12 form-section-wrap" id="customer-section-wrap">
                <div class="row inner-row col-sm-12 text-left form-section-title">
                    <h3>CUSTOMER / DESIGNER INFORMATION</h3>
                </div>
                <div class="row inner-row">
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_account_name" >Account Name</label>
                        <input type="text" class="form-control" id="receiving_account_name" name="receiving_account_name" placeholder="Account Name *">
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_phone" >Phone</label>
                        <input type="tel" class="form-control" id="receiving_phone" name="receiving_phone" placeholder="Phone *">
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_contact_name" >Contact Name</label>
                        <input type="text" class="form-control" id="receiving_contact_name" name="receiving_contact_name" placeholder="Contact Name *">
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_email" >Email</label>
                        <input type="email" class="form-control" id="receiving_email" name="receiving_email" placeholder="Email *">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 form-section-wrap" id="order-section-wrap">
                <div class="row inner-row col-sm-12 text-left form-section-title">
                    <h3>ORDER / CARRIER INFORMATION</h3>
                </div>
                <div class="row inner-row">
                    <div class="col-md-4 col-sm-12 form-group">
                        <label for="receiving_vendor" >Vendor / Supplier</label>
                        <input type="text" class="form-control" id="receiving_vendor" name="receiving_vendor" placeholder="Vendor / Supplier *">
                    </div>
                    <div class="col-md-4 col-sm-12 form-group">
                        <label for="receiving_date" >Estimated Receiving Date</label>
                        <input type="date" class="form-control" id="receiving_date" name="receiving_date" placeholder="Estimated Receiving Date *">
                    </div>
                    <div class="col-md-4 col-sm-12 form-group">
                        <label for="receiving_showroom" >Showroom</label>
                        <input type="text" class="form-control" id="receiving_showroom" name="receiving_showroom" placeholder="Showroom">
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_purchase_order_num" >Purchase Order Number</label>
                        <input type="text" class="form-control" id="receiving_purchase_order_num" name="receiving_purchase_order_num" placeholder="Purchase Order Number *">
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_carrier" >Carrier</label>
                        <input type="text" class="form-control" id="receiving_carrier" name="receiving_carrier" placeholder="Carrier">
                    </div>

                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_vendor_phone" >Vendor / Supplier Phone Number</label>
                        <input type="tel" class="form-control" id="receiving_vendor_phone" name="receiving_vendor_phone" placeholder="Vendor / Supplier Phone Number *">
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_bill" >Bill of Lading or Freight Bill Num</label>
                        <input type="text" class="form-control" id="receiving_bill" name="receiving_bill" placeholder="Bill of Lading or Freight Bill Num *">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 form-section-wrap" id="item-info-section-wrap">
                <div class="row inner-row col-sm-12 text-left form-section-title">
                    <h3>ITEM INFORMATION</h3>
                    <p class="helper-text">Please complete one line per item</p>
                </div>
                <div class="row inner-row">                    
                    <div class="col-md-2 col-sm-12 form-group">
                        <label for="receiving_item_quantity" >Quantity</label>
                        <input type="number" class="form-control" id="receiving_item_quantity" name="receiving_item_quantity" placeholder="Quantity">
                    </div>
                    <div class="col-md-2 col-sm-12 form-group">
                        <label for="receiving_item" >Item(s)</label>
                        <input type="text" class="form-control" id="receiving_item" name="receiving_item" placeholder="Item(s)">
                    </div>
                    <div class="col-md-2 col-sm-12 form-group">
                        <label for="receiving_sidemark" >Client Sidemark</label>
                        <input type="text" class="form-control" id="receiving_sidemark" name="receiving_sidemark" placeholder="Client Sidemark">
                    </div>
                    <div class="col-md-2 col-sm-12 form-group">
                        <label for="receiving_po_box_num" >PO Box Num</label>
                        <input type="text" class="form-control" id="receiving_po_box_num" name="receiving_po_box_num" placeholder="PO Box Num">
                    </div>
                    <div class="col-md-2 col-sm-12 form-group">
                        <label for="receiving_item_value" >Item Value (USD)</label>
                        <input type="number" class="form-control" id="receiving_item_value" name="receiving_item_value" placeholder="Item Value (USD)">
                    </div>
                    <div class="col-sm-12">
                        <h3 class="form-sub-title">
                            Type of Value Protection
                        </h3>
                        <div class="radio">
                            <label for="receiving_protection">Limited Liability Protection
                                <input type="radio" name="receiving_protection" id="receiving_protection">
                            </label>
                        </div>
                        <div class="radio">
                            <label for="receiving_protection">Declared Value Protection
                                <input type="radio" name="receiving_protection" id="receiving_protection">
                            </label>
                        </div>
                        <small class="helper-text">
                            <strong>Limited Liability Protection:</strong> Reimbursement at a rate of $0.60 per pound per article with a maximum liability of $10,000.<br>
                            <strong>Declared Value Protection:</strong> Repair/replacement value protection with no deductible.<br>
                            Please reference our rate sheet or contact our office for further information.
                        </small>

                    </div>
                </div>
                <div class="row inner-row">
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_total_limited" >Total Value for Limited Liability Protection</label>
                        <input type="text" class="form-control" id="receiving_total_limited" name="receiving_total_limited" placeholder="Total Value for Limited Liability Protection *">
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_total_declared" >Total Value for Declared Value Protection</label>
                        <input type="text" class="form-control" id="receiving_total_declared" name="receiving_total_declared" placeholder="Total Value for Declared Value Protection *">
                    </div>
                </div>
                <div class="row inner-row cb_radio-wrap">
                    <div class="col-sm-12">
                        <h3 class="form-sub-title">
                            Estimated storage needs
                        </h3>
                        <div class="radio">
                            <label for="receiving_storage_needs">Will schedule for pick-up or delivery upon notification of receipt
                                <input type="radio" name="receiving_storage_needs" id="receiving_storage_needs">
                            </label>
                        </div>
                        <div class="radio">
                            <label for="receiving_storage_needs">Short term storage (weeks)
                                <input type="radio" name="receiving_storage_needs" id="receiving_storage_needs">
                            </label>
                        </div>
                        <div class="radio">
                            <label for="receiving_storage_needs">Long term storage (months)
                                <input type="radio" name="receiving_storage_needs" id="receiving_storage_needs">
                            </label>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="receiving_message">Additional Information</label>
                            <textarea name="receiving_message" id="receiving_message" cols="30" rows="10" placeholder="Additional Information..." class="form-control"></textarea>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 form-section-wrap" id="approval-section-wrap">
                <div class="row inner-row col-sm-12 text-left form-section-title">
                    <h3>APPROVAL</h3>
                </div>
                <div class="row inner-row">
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_approval_name" >Full Name</label>
                        <input type="text" class="form-control" id="receiving_approval_name" name="receiving_approval_name" placeholder="Full Name *">
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="receiving_approval_date" >Date</label>
                        <input type="date" class="form-control" id="approval_date" name="approval_date" placeholder="Date *">
                    </div>
                    <div class="col-sm-12 cb_radio_wrap">
                        <div class="checkbox">
                            <label for="receiving_approval_toc">I Accept Term and Conditions
                                <input type="checkbox" id="receiving_approval_toc" name="receiving_approval_toc">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 form-section-wrap" id="receiving-submit-wrap">
                <div class="form-group">
                    <input type="submit" id="receiving_submit" name="receiving_submit" value="Submit Request" class="btn btn-block btn-primary">
                </div>
            </div>
        </div>*/?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
