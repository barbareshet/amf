<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amf
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<div class="col-md-8 col-md-push-2 col sm-12 contact-form-wrap">
		<header class="entry-header entry-title">

			<?php
			if($page_title){
				echo "<h2>{$page_title}</h2>";
			} else{
				the_title( '<h2 class="entry-title">', '</h2>' );
			}?>
		</header><!-- .entry-header -->
		<div class="contact-form">
<!--			<div class="row form-wrap-row">-->
<!--				<div class="col-sm-12 stage" id="stage-1">-->
<!--					<div class="stage-intro text-center">-->
<!--						<div class="num-wrap">-->
<!--							<sapn class="step"></sapn><br/>-->
<!--							<span class="number">1</span><!-- /.number -->-->
<!--                        </div>-->
<!--                        <div class="stage-intro-text">-->
<!--                            <h3 class="intro-title">-->
<!--                                What are you moving?-->
<!--                            </h3>-->
<!--                            <div class="intro-lead">-->
<!--                                Select the size of your current home from the dropdown below.-->
<!--                            </div><!-- /.intro-lead -->-->
<!--                        </div><!-- /.intro-title -->-->
<!--                    </div><!-- /.stage-intro-text -->-->
<!--                    <div class="form-group col-md-6 col-md-push-3 col-sm-12">-->
<!--                        <label for="homeSize" class="sr-only">Home Size:</label>-->
<!--                        <select class="form-control" id="homeSize">-->
<!--                            <option>Studio (350 – 600 SF)</option>-->
<!--                            <option>1 Bedroom (600 – 900 SF)</option>-->
<!--                            <option>2 Bedroom (900 – 1300 SF)</option>-->
<!--                            <option>3 Bedroom (1300 – 2000 SF)</option>-->
<!--                            <option>4 Bedroom</option>-->
<!--                            <option>Office</option>-->
<!--                            <option>Other</option>-->
<!--                        </select>-->
<!--                    </div><!-- /.form-group col-sm-12 -->-->
<!--                </div><!-- /#stage-1.col-sm-12 stage -->-->
<!--                <div class="col-sm-12 stage" id="stage-2">-->
<!--                    <div class="stage-intro text-center">-->
<!--                        <div class="num-wrap">-->
<!--                            <sapn class="step"></sapn><br/>-->
<!--                            <span class="number">2</span><!-- /.number -->-->
<!--                        </div>-->
<!--                        <div class="stage-intro-text">-->
<!--                            <h3 class="intro-title">-->
<!--                                When and where are you moving?-->
<!--                            </h3>-->
<!--                            <div class="intro-lead">-->
<!--                                Select the size of your current home and add inventory from the dropdown below by room.<br/>-->
<!--                                A pre-selected number of rooms and items will be automatically added for convenience, so adjust as necessary.-->
<!--                            </div><!-- /.intro-lead -->-->
<!--                        </div><!-- /.intro-title -->-->
<!--                    </div><!-- /.stage-intro-text -->-->
<!--                    <div class="form-group col-md-6 col-sm-12">-->
<!--                        <label for="movingDate" class="sr-only">Moving Date:</label>-->
<!--                        <select class="form-control col-sm-12" id="movingDate">-->
<!--                            <option>Studio (350 – 600 SF)</option>-->
<!--                            <option>1 Bedroom (600 – 900 SF)</option>-->
<!--                            <option>2 Bedroom (900 – 1300 SF)</option>-->
<!--                            <option>3 Bedroom (1300 – 2000 SF)</option>-->
<!--                            <option>4 Bedroom</option>-->
<!--                            <option>Office</option>-->
<!--                            <option>Other</option>-->
<!--                        </select>-->
<!--                    </div><!-- /.form-group col-sm-12 -->-->
<!--                    <div class="form-group col-md-6 col-sm-12">-->
<!--                        <label for="movingTime" class="sr-only">Moving Time:</label>-->
<!--                        <select class="form-control col-sm-12" id="movingDate">-->
<!--                            <option>Morning</option>-->
<!--                            <option>Afternoon</option>-->
<!--                        </select>-->
<!--                    </div><!-- /.form-group col-sm-12 -->-->
<!--                    <div class="col-md-6 col-sm-12" id="from">-->
<!--                        <h4>Moving From:</h4>-->
<!--                        <div class="form-group col-sm-12">-->
<!--                            <label class="sr-only" for="fromStreet">Street Address</label>-->
<!--                            <input type="text" class="form-control" id="fromStreet" placeholder="Street Address" required="required">-->
<!--                        </div>-->
<!--                        <div class="form-group col-sm-12">-->
<!--                            <label class="sr-only" for="fromApt">APT#</label>-->
<!--                            <input type="text" class="form-control" id="fromApt" placeholder="APT#" required="required">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-4 col-sm-12">-->
<!--                            <label class="sr-only" for="fromCity">City</label>-->
<!--                            <input type="text" class="form-control" id="fromCity" placeholder="City" required="required">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-4 col-sm-12">-->
<!--                            <label for="fromState" class="sr-only">State</label>-->
<!--                            <select class="form-control" id="fromState">-->
<!--                                <option>TX</option>-->
<!--                                <option>Ok</option>-->
<!--                                <option>CA</option>-->
<!--                            </select>-->
<!--                        </div><!-- /.form-group col-sm-12 -->-->
<!--                        <div class="form-group col-md-4 col-sm-12">-->
<!--                            <label class="sr-only" for="fromZip">Zip Code</label>-->
<!--                            <input type="text" class="form-control" id="fromZip" placeholder="Zip Code" required="required">-->
<!--                        </div>-->
<!--                    </div><!-- /#from.col-md-6 col-sm-12 -->-->
<!--                    <div class="col-md-6 col-sm-12" id="to">-->
<!--                        <h4>Moving To:</h4>-->
<!--                        <div class="form-group col-sm-12">-->
<!--                            <label class="sr-only" for="toStreet">Street Address</label>-->
<!--                            <input type="text" class="form-control" id="toStreet" placeholder="Street Address" required="required">-->
<!--                        </div>-->
<!--                        <div class="form-group col-sm-12">-->
<!--                            <label class="sr-only" for="toApt">APT#</label>-->
<!--                            <input type="text" class="form-control" id="toApt" placeholder="APT#" required="required">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-4 col-sm-12">-->
<!--                            <label class="sr-only" for="toCity">City</label>-->
<!--                            <input type="text" class="form-control" id="toCity" placeholder="City" required="required">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-4 col-sm-12">-->
<!--                            <label for="toState" class="sr-only">State</label>-->
<!--                            <select class="form-control" id="toState">-->
<!--                                <option>TX</option>-->
<!--                                <option>Ok</option>-->
<!--                                <option>CA</option>-->
<!--                            </select>-->
<!--                        </div><!-- /.form-group col-sm-12 -->-->
<!--                        <div class="form-group col-md-4 col-sm-12">-->
<!--                            <label class="sr-only" for="toZip">Zip Code</label>-->
<!--                            <input type="text" class="form-control" id="toZip" placeholder="Zip Code" required="required">-->
<!--                        </div>-->
<!--                    </div><!-- /#to.col-md-6 col-sm-12 -->-->
<!--                </div><!-- /#stage-2.col-sm-12 stage -->-->
<!--                <div class="col-sm-12 stage" id="stage-3">-->
<!--                    <div class="stage-intro text-center">-->
<!--                        <div class="num-wrap">-->
<!--                            <sapn class="step"></sapn><br/>-->
<!--                            <span class="number">3</span><!-- /.number -->-->
<!--                        </div>-->
<!--                        <div class="stage-intro-text">-->
<!--                            <h3 class="intro-title">-->
<!--                                How can we reach you?-->
<!--                            </h3>-->
<!--                            <div class="intro-lead">-->
<!--                                Provide your contact information below so that our Roadway professional can contact you.-->
<!--                            </div><!-- /.intro-lead -->-->
<!--                        </div><!-- /.intro-title -->-->
<!--                    </div><!-- /.stage-intro-text -->-->
<!--                    <div class="form-group col-md-7 col-md-push-3 col-sm-12">-->
<!--                        <label class="sr-only" for="fullName">Full Name</label>-->
<!--                        <input type="text" class="form-control" id="fullName" placeholder="Full Name" required="required">-->
<!--                    </div>-->
<!--                    <div class="form-group col-md-7 col-md-push-3 col-sm-12">-->
<!--                        <label class="sr-only" for="email">Your email</label>-->
<!--                        <input type="text" class="form-control" id="email" placeholder="Your email">-->
<!--                    </div>-->
<!--                    <div class="form-group col-md-7 col-md-push-3 col-sm-12">-->
<!--                        <label class="sr-only" for="phone">Your Phone</label>-->
<!--                        <input type="text" class="form-control" id="phone" placeholder="Your Phone" required="required">-->
<!--                    </div>-->
<!--                </div><!-- /#stage-3.col-sm-12 stage -->-->
<!--                <div class="col-sm-12 stage" id="stage-4">-->
<!--                    <div class="stage-intro text-center">-->
<!--                        <div class="num-wrap">-->
<!--                            <sapn class="step"></sapn><br/>-->
<!--                            <span class="number">4</span><!-- /.number -->-->
<!--                        </div>-->
<!--                        <div class="stage-intro-text">-->
<!--                            <h3 class="intro-title">-->
<!--                                When are you available for a consultation?-->
<!--                            </h3>-->
<!--                            <div class="intro-lead">-->
<!--                                Give us a desired date for your consultation and we will follow up with the arrangements. You MUST BE HOME at the time of our consultation, since the site visit requires entry to your home.-->
<!--                            </div><!-- /.intro-lead -->-->
<!--                        </div><!-- /.intro-title -->-->
<!--                    </div><!-- /.stage-intro-text -->-->
<!--                    <div class="form-group col-md-6 col-sm-12">-->
<!--                        <label class="sr-only" for="consultationDate">Full Name</label>-->
<!--                        <input type="date" class="form-control" id="consultationDate" placeholder="Select Date" required="required">-->
<!--                    </div>-->
<!--                    <div class="form-group col-md-6 col-sm-12">-->
<!--                        <label for="consultationTime" class="sr-only">Select start time</label>-->
<!--                        <select class="form-control" id="consultationTime">-->
<!--                            <option>8-10am</option>-->
<!--                            <option>10am-12pm</option>-->
<!--                            <option>12-2pm</option>-->
<!--                            <option>2-4pm</option>-->
<!--                            <option>4-6pm</option>-->
<!--                            <option>6-7pm</option>-->
<!--                        </select>-->
<!--                    </div><!-- /.form-group col-sm-12 -->-->
<!--                </div><!-- /#stage-4.col-sm-12 stage -->-->
<!--                <div class="col-sm-12 stage" id="stage-5">-->
<!--                    <div class="stage-intro text-center">-->
<!--                        <div class="stage-intro-text">-->
<!--                            <h3 class="intro-title">-->
<!--                                How did you hear about us?-->
<!--                            </h3>-->
<!--                        </div><!-- /.intro-title -->-->
<!--                        <div class="form-group col-md-7 col-md-push-3 col-sm-12">-->
<!--                            <label for="consultationTime" class="sr-only">Source</label>-->
<!--                            <select class="form-control" id="consultationTime">-->
<!--                                <option>Used before</option>-->
<!--                                <option>Google</option>-->
<!--                                <option>Bing</option>-->
<!--                                <option>Yelp</option>-->
<!--                                <option>Moving reviews site</option>-->
<!--                                <option>Facebook</option>-->
<!--                                <option>Angies List</option>-->
<!--                                <option>Saw a Truck/Car</option>-->
<!--                                <option>Referred by a friend</option>-->
<!--                                <option>Twitter</option>-->
<!--                                <option>bbb</option>-->
<!--                                <option>Yahoo</option>-->
<!--                                <option>Other</option>-->
<!--                            </select>-->
<!--                        </div><!-- /.form-group col-sm-12 -->-->
<!--                    </div><!-- /.stage-intro-text -->-->
<!--                </div><!-- /#stage-5.col-sm-12 stage -->-->
<!--                <div class="col-sm-12 stage" id="stage-6">-->
<!--                    <div class="form-group col-sm-12 text-center">-->
<!--                        captcha-->
<!--                    </div><!-- /.form-group col-md-6 col-md-push-3 col-sm-12 -->-->
<!--                </div><!-- /#stage-6.col-sm-12 stage -->-->
<!--                <div class="form-group col-sm-12 text-center">-->
<!--                    <button type="submit" class="btn btn-lg btn-success">book consultation</button>-->
<!--                </div>-->
<!--                <!-- /.form-group col-sm-12 tyext-center -->-->
<!--            </div><!-- /.row form-wrap-row -->-->
        </div><!-- /.contact-form -->
    </div><!-- /.col-md-6 col sm-12 contact-form -->




</article><!-- #post-## -->
