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
        </div>*/ ?>
            <?php /* <div id="delivery-request" class="row">
                <div class="col-sm-12 form-title text-center">
                    <h2>Fill this out for your future delivery.</h2>
                </div>
                <div class="col-sm-12 form-section-wrap" id="primary-info-section-wrap">
                    <div class="row inner-row">
                        <div class="col-md-2 col-sm-12 form-group">
                            <label for="delivery_date" >Requested Date</label>
                            <input type="date" class="form-control" id="delivery_date" name="delivery_date" placeholder="Requested Date">
                        </div>
                        <div class="col-md-2 col-sm-12 form-group">
                            <label for="delivery_time" >Requested Time</label>
                            <select name="delivery_time" id="delivery_time" class="form-control">
                                <option value="morning">Morning (09:00-12:00)</option>
                                <option value="noon">Morning (12:00-16:00)</option>
                                <option value="afternoon">Afternoon (16:00-19:00)</option>
                                <option value="evening">Evening (99:00-22:00)</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-12 form-group">
                            <label for="delivery_order_nam" >Order Number</label>
                            <input type="text" class="form-control" id="delivery_order_nam" name="delivery_order_nam" placeholder="Order Number *">
                        </div>
                        <div class="col-md-2 col-sm-12 form-group">
                            <label for="delivery_order_date" >Order Date</label>
                            <input type="date" class="form-control" id="delivery_order_date" name="delivery_order_date" placeholder="Order Date">
                        </div>
                        <div class="col-md-2 col-sm-12 form-group">
                            <label for="delivery_order_time" >Order Time</label>
                            <select name="delivery_order_time" id="delivery_order_time" class="form-control">
                                <option value="morning">Morning (09:00-12:00)</option>
                                <option value="noon">Morning (12:00-16:00)</option>
                                <option value="afternoon">Afternoon (16:00-19:00)</option>
                                <option value="evening">Evening (99:00-22:00)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 form-section-wrap" id="pickup-section-wrap">
                    <div class="row inner-row col-sm-12 text-left form-section-title">
                        <h3>Pick Up Info</h3>
                    </div>
                    <div class="row inner-row">
                        <div class="col-md-6 col-sm-12 form-group">
                            <label for="delivery_name" >Name</label>
                            <input type="text" class="form-control" id="delivery_name" name="delivery_name" placeholder="Name *">
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <label for="delivery_requested_pu" >Requested Pickup</label>
                            <input type="text" class="form-control" id="delivery_requested_pu" name="delivery_requested_pu" placeholder="Requested Pickup">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_address" >Address</label>
                            <input type="text" class="form-control" id="delivery_address" name="delivery_address" placeholder="Address *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_suite" >Suite</label>
                            <input type="text" class="form-control" id="delivery_suite" name="delivery_suite" placeholder="Suite">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_building" >Building</label>
                            <input type="text" class="form-control" id="delivery_building" name="delivery_building" placeholder="Building">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_city" >City</label>
                            <input type="text" class="form-control" id="delivery_city" name="delivery_city" placeholder="City *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_state" >State</label>
                            <input type="text" class="form-control" id="delivery_state" name="delivery_state" placeholder="State">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_zip" >Zip</label>
                            <input type="text" class="form-control" id="delivery_zip" name="delivery_zip" placeholder="Zip *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_primary_phone" >Primary Phone</label>
                            <input type="tel" class="form-control" id="delivery_primary_phone" name="delivery_primary_phone" placeholder="Primary Phone *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_secondary_phone" >Secondary Phone</label>
                            <input type="tel" class="form-control" id="delivery_secondary_phone" name="delivery_secondary_phone" placeholder="Secondary Phone *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_alt_phone" >Alt. Phone</label>
                            <input type="tel" class="form-control" id="delivery_alt_phone" name="delivery_alt_phone" placeholder="Alt. Phone">
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <label for="delivery_stairs" >Stairs?</label>
                            <select name="delivery_stairs" id="delivery_stairs" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <label for="delivery_elevator" >Elevator?</label>
                            <select name="delivery_elevator" id="delivery_elevator" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-12 col-sm-12 form-group">
                            <label for="delivery_access_issues" >Other Access Issues</label>
                            <textarea name="delivery_access_issues" id="delivery_access_issues " cols="30" rows="10" class="form-control" placeholder="Potential access/parking/loading issues"></textarea>
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <label for="delivery_purchased_name" >Purchaser Name</label>
                            <input type="text" class="form-control" id="delivery_purchased_name" name="delivery_purchased_name" placeholder="Purchaser Name *">
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <label for="delivery_salesman_name" >Salesman Name</label>
                            <input type="text" class="form-control" id="delivery_salesman_name" name="delivery_salesman_name" placeholder="Salesman Name">
                        </div>
                        <div class="col-md-12 col-sm-12 form-group">
                            <label for="delivery_purchased_item_desc">Purchased Item(s) Description</label>
                            <textarea name="delivery_purchased_item_desc" id="delivery_purchased_item_desc " cols="30" rows="10" class="form-control" placeholder="Purchased Item(s) Description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 form-section-wrap" id="delivery-section-wrap">
                    <div class="row inner-row col-sm-12 text-left form-section-title">
                        <h3>Delivery Info</h3>
                    </div>
                    <div class="row inner-row">
                        <div class="col-sm-12 form-group">
                            <label for="delivery_to_name" >Full Name</label>
                            <input type="text" class="form-control" id="delivery_to_name" name="delivery_to_name" placeholder="Full Name *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_to_address" >Address</label>
                            <input type="text" class="form-control" id="delivery_to_address" name="delivery_to_address" placeholder="Address *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_to_suite" >Suite</label>
                            <input type="text" class="form-control" id="delivery_to_suite" name="delivery_to_suite" placeholder="Suite">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_to_building" >Building</label>
                            <input type="text" class="form-control" id="delivery_to_building" name="delivery_to_building" placeholder="Building">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_to_city" >City</label>
                            <input type="text" class="form-control" id="delivery_to_city" name="delivery_to_city" placeholder="City *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_to_state" >State</label>
                            <input type="text" class="form-control" id="delivery_to_state" name="delivery_to_state" placeholder="State">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_to_zip" >Zip</label>
                            <input type="text" class="form-control" id="delivery_to_zip" name="delivery_to_zip" placeholder="Zip *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_to_primary_phone" >Primary Phone</label>
                            <input type="tel" class="form-control" id="delivery_to_primary_phone" name="delivery_to_primary_phone" placeholder="Primary Phone *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_to_secondary_phone" >Secondary Phone</label>
                            <input type="tel" class="form-control" id="delivery_to_secondary_phone" name="delivery_to_secondary_phone" placeholder="Secondary Phone *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_to_alt_phone" >Alt. Phone</label>
                            <input type="tel" class="form-control" id="delivery_to_alt_phone" name="delivery_to_alt_phone" placeholder="Alt. Phone">
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <label for="delivery_to_stairs" >Stairs?</label>
                            <select name="delivery_stairs" id="delivery_stairs" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <label for="delivery_to_elevator" >Elevator?</label>
                            <select name="delivery_elevator" id="delivery_elevator" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-12 col-sm-12 form-group">
                            <label for="delivery_to_access_issues" >Other Access Issues</label>
                            <textarea name="delivery_access_issues" id="delivery_access_issues " cols="30" rows="10" class="form-control" placeholder="Potential access/parking/loading issues"></textarea>
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_to_furniture_to_move" >Existing furniture to move?</label>
                            <select name="delivery_to_furniture_to_move" id="delivery_to_furniture_to_move" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_to_assembly" >Assembly?</label>
                            <select name="delivery_to_assembly" id="delivery_to_assembly" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_num_of_men">Number of men</label>
                            <input type="number" class="form-control" name="delivery_num_of_men" id="delivery_num_of_men" placeholder="Number of men">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_hanging">Number of men</label>
                            <input type="number" class="form-control" name="delivery_num_of_men" id="delivery_num_of_men" placeholder="Number of men">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_wall_type">Wall Type</label>
                            <input type="number" class="form-control" name="delivery_wall_type" id="delivery_wall_type" placeholder="Wall Type">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_ceiling_height">Ceiling Height</label>
                            <input type="number" class="form-control" name="delivery_ceiling_height" id="delivery_ceiling_height" placeholder="Ceiling Height">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 form-section-wrap" id="designer-info-section-wrap">
                    <div class="row inner-row col-sm-12 text-left form-section-title">
                        <h3>Designer Info</h3>
                    </div>
                    <div class="row inner-row">
                        <div class="col-md-6 col-sm-12 form-group">
                            <label for="delivery_designer_name">Designer Name</label>
                            <input type="text" class="form-control" id="delivery_designer_name" name="delivery_designer_name" placeholder="Designer Name *">
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <label for="delivery_designer_to_meet">Designer to meet</label>
                            <input type="text" class="form-control" id="delivery_designer_to_meet" name="delivery_designer_to_meet" placeholder="Designer to meet *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_designer_primary_phone" >Primary Phone</label>
                            <input type="tel" class="form-control" id="delivery_designer_primary_phone" name="delivery_designer_primary_phone" placeholder="Primary Phone *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_designer_secondary_phone" >Secondary Phone</label>
                            <input type="tel" class="form-control" id="delivery_designer_secondary_phone" name="delivery_designer_secondary_phone" placeholder="Secondary Phone *">
                        </div>
                        <div class="col-md-4 col-sm-12 form-group">
                            <label for="delivery_designer_alt_phone" >Alt. Phone</label>
                            <input type="tel" class="form-control" id="delivery_designer_alt_phone" name="delivery_designer_alt_phone" placeholder="Alt. Phone">
                        </div>
                        <div class="col-md-12 col-sm-12 form-group">
                            <label for="delivery_designer_message" >Notes</label>
                            <textarea name="delivery_designer_message" id="delivery_designer_message " cols="30" rows="10" class="form-control" placeholder="Notes..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 form-section-wrap" id="insurance-section-wrap">
                    <div class="row inner-row col-sm-12 text-left form-section-title">
                        <h3>Insurance Info</h3>
                    </div>
                    <div class="row inner-row">
                        <div class="checkbox">
                            <label for="delivery_insurance_info">Transit Insurance
                                <input type="checkbox" name="delivery_insurance_info" id="delivery_insurance_info">
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="delivery_insurance_info">Storage Insurance
                                <input type="checkbox" name="delivery_insurance_info" id="delivery_insurance_info">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 form-section-wrap" id="additional-liability-section-wrap">
                    <div class="row inner-row col-sm-12 text-left form-section-title">
                        <h3>Additional Liability</h3>
                    </div>
                    <div class="row inner-row">
                        <div class="col-md-12 col-sm-12 form-group">
                            <label for="delivery_bill_to">Bill To</label>
                            <input type="text" class="form-control" id="delivery_bill_to" name="delivery_bill_to" placeholder="Bill To *">
                        </div>
                        <div class="col-md-12 col-sm-12 form-group">
                            <label for="delivery_schedule">Schedule</label>
                            <textarea name="delivery_schedule" id="delivery_schedule" cols="30" rows="10" class="form-control" placeholder="Schedule"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <div class="radio">
                                <label for="delivery_yes_no">Yes
                                    <input type="radio" name="delivery_yes_no" id="delivery_yes_no">
                                </label>
                            </div>
                            <div class="radio">
                                <label for="delivery_yes_no">No
                                    <input type="radio" name="delivery_yes_no" id="delivery_yes_no">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <label for="delivery_total_liability">Total Liability</label>
                            <input type="text" class="form-control" id="delivery_total_liability" name="delivery_total_liability" placeholder="Total Liability *">
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <label for="delivery_liability_fee">Fee</label>
                            <input type="text" class="form-control" id="delivery_liability_fee" name="delivery_liability_fee" placeholder="Fee">
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <label for="delivery_requested_by">Requested By</label>
                            <input type="text" class="form-control" id="delivery_requested_by" name="delivery_requested_by" placeholder="Requested By *">
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <label for="delivery_liability_date">Date</label>
                            <input type="date" class="form-control" id="delivery_liability_date" name="delivery_liability_date" placeholder="Date *">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 form-section-wrap" id="location-section-wrap">
                    <div class="row inner-row col-sm-12 text-left form-section-title">
                        <h3>Location</h3>
                    </div>
                    <div class="row inner-row">
                        <div class="col-md-12 col-sm-12 form-group">
                            <label for="delivery_location">Location</label>
                            <input type="text" class="form-control" id="delivery_location" name="delivery_location" placeholder="Location">
                        </div>
                        <div class="col-md-12 col-sm-12 form-group">
                            <label for="delivery_how_did" >How did you hear about this service?</label>
                            <select name="delivery_how_did" id="delivery_how_did" class="form-control">
                                <option value="google_search">Google</option>
                                <option value="referral">Referral</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 form-section-wrap" id="delivery-submit-section-wrap">
                    <div class="form-group">
                        <input type="submit" id="delivery_submit" name="delivery_submit" value="Submit Request" class="btn btn-block btn-primary">
                    </div>
                </div>
            </div> */ ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
