<?php
require_once("hello.php");
?>
<div class="animation" id="sec2">
        <div style="width: 500px; float: left;" class="heading1">Join To Bharatiya Janata Yuva Morcha<img src="images/about_under_line.jpg" width="300" style="vertical-align: top;" /></div>
        <div class="clearfix"></div>

<section class="container">
		    <article class="half">
			        <div class="tabs">
                        <span class="tab signin active"><a href="#sigin">Join BJYM</a></span>
				            <!--<span class="tab signup "><a href="#signup">Sign in</a></span>-->
				            
			        </div>
                <div id="logo"class="run-animation"><?php if(isset($message)) echo $message; ?></div>
			        <div class="content">
				            
    				        <div class="signin-cont cont">
                <form action="#" method="post" enctype="multipart/form-data">
						                    <input type="text" name="name" id="name" class="inpt" required="required" placeholder="Your name">
						                    <label for="name">Your name</label>
                                           <input type="text" name="mobile" id="name" class="inpt" required="required" placeholder="Mobile Number">
                                           <label for="name">Mobile Number</label>
                                           <select class="droplist" type="option" name="statename" required="requrired">
                                            <option value="" > --Select State--</option>
                                            <option value="uttarpradesh">Uttar Pradesh</option>
                                               <option value="andhrapradesh">Andhra Pradesh</option>
                                               <option value="arunachalpradesh">Arunachal Pradesh</option> <option value="assam">Assam</option>
                                               <option value="bihar">Bihar</option>
                                               <option value="Chhattisgarh">Chhattisgarh</option>
                                               <option value="Goa">Goa</option>
                                               <option value="Gujarat">Gujarat</option>
                                               <option value="Haryana">Haryana</option>
                                               <option value="himachalpradesh">Himachal Pradesh</option>
                                               <option value="jk">Jammu and Kashmir</option>
                                               <option value="jharkhand">Jharkhand</option>
                                               <option value="karnataka">Karnataka</option>
                                               <option value="kerala">Kerala</option>
                                               <option value="madhyapradesh">Madhya Pradesh</option>
                                               <option value="maharashtra">Maharashtra</option>
                                               <option value="manipur">Manipur</option>
                                               <option value="meghalaya">Meghalaya</option>
                                               <option value="mizoram">Mizoram</option>
                                               <option value="nagaland">Nagaland</option>
                                               <option value="odisha">Odisha</option>
                                               <option value="punjab">Punjab</option>
                                               <option value="rajasthan">Rajasthan</option>
                                               <option value="sikkim">Sikkim</option>
                                               <option value="tamilnadu">Tamil Nadu</option>
                                               <option value="tripura">Tripura</option>
                                               <option value="uttarakhand">Uttarakhand</option>
                                               <option value="westbengal">West Bengal</option>
                                            </select>
                                          <input type="email" name="useremail" id="email" class="inpt" required="required" placeholder="Your email">
						                    <label for="email">Your email</label>
						                    <input type="password" name="password" id="password" class="inpt" required="required" placeholder="Your password">
                						    <label for="password">Your password</label>
						                    <div class="submit-wrap">
							                        <input type="submit" value="Sign up" class="submit">
						                    </div>
        					        </form>
            </div>
                        <div class="signup-cont cont">
					                <form action="#" method="post" enctype="multipart/form-data">
						                    <input type="email" name="useremail" id="email" class="inpt" required="required" placeholder="Your email">
						                    <label for="email">Your email</label>
						                    <input type="password" name="password" id="password" class="inpt" required="required" placeholder="Your password">
                						    <label for="password">Your password</label>
						                    <input type="checkbox" id="remember" class="checkbox" checked>
						                    <label for="remember">Remember me</label>
						                    <div class="submit-wrap">
							                        <input type="submit" value="Sign in" class="submit">
							                        <a href="#" class="more">Forgot your password?</a>
						                    </div>
        					        </form>
    				        </div>
			        </div>
		    </article>
    <div class="half bg"></div>
	</section>
    
   </div>