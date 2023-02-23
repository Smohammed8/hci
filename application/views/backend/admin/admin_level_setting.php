 <style>
 body{
  font-family: sans-serif;
  color:black;

}
  	.hoverTable{
		width:70%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	

	
    .hoverTable tr:hover {
          background-color: #ffff99;
    }
	.asad{
		background-color:pink;
		
	}


tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>


<hr />
<a href="javascript:;" onclick="" 
	class="btn btn-primary pull-right">
    	<i class="fa fa-wrench"></i>
			Configuration Setting
</a> 
<br><br><br>

<div class="row">
	<div class="col-md-12">
	
		<div class="tabs-vertical-env">
		
			<ul class="nav tabs-vertical" >
		
				<li class="" style="background-color:lightblue;">
					<a href="#field1" data-toggle="tab">
						<i class="fa  fa-caret-right"></i>  
						User Level Setting
						
			</a>
				
			</li>
						
				<li class="" style="background-color:lightblue;">
					<a href="#field2" data-toggle="tab">
						<i class="fa  fa-caret-right"></i>   
						Patients Level Settings
						
			</a>
				
			</li>
						
				<li class="" style="background-color:lightblue;">
					<a href="#field3" data-toggle="tab">
						<i class="fa  fa-caret-right"></i>  
						Finance Level Setting
						
			</a>
			
			</li>
			
			
			<li class="" style="background-color:lightblue;">
					<a href="#field4" data-toggle="tab">
						<i class="fa  fa-caret-right"></i> 
						Message Settings
						
			</a>
				
			</li>
			<!--			
		<li class="" style="background-color:lightblue;">
					<a href="#field5" data-toggle="tab">
			  <i class="fa  fa-caret-right"></i> Permission Setting
						
			</a>
				
			</li>
						
				<li class="" style="background-color:lightblue;">
			<a href="#field6" data-toggle="tab">
				<i class="fa  fa-caret-right"></i>  User Level Setting
						
			</a>
				
			</li> -->
			
			</ul>
			
			
	
                    <div class="tab-content">
					
					
					

<!--- ///////////////////////////////  field1   //////////////////--->		
					<div class="tab-pane" id="field1">
					

				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="#list" data-toggle="tab"><i class="fa  fa-list"></i> 
				Personal Information Fields on Signup Page
                    	</a></b>
						</u>
				</div>
            </div>
					<form action="#" method="post">	
						
				  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label">
						<i class="fa fa-angle-double-right "></i>  Your users will have an opportunity to begin filling out their profile when they signup. Below, you can specify which profile fields will appear on the signup page, and which will be required. Keep in mind that a lengthly signup process may deter some users from signing up to your system.
						To add or delete profile fields, visit the Profile Fields page. </label>
                        
						<div class="col-sm-8">
						<input type="checkbox" checked style="">&nbsp;&nbsp;First Name   &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" style="">&nbsp;&nbsp;Phone<br> 
						<input type="checkbox" checked style="">&nbsp;&nbsp;Last Name    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" style="">&nbsp;&nbsp;Profile image<br> 
						<input type="checkbox" checked style="">&nbsp;&nbsp;Gender       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" style="">&nbsp;&nbsp;Role<br> 
						<input type="checkbox" checked style="">&nbsp;&nbsp;Email<br> 
						<input type="checkbox" checked style="">&nbsp;&nbsp;Password<br>
						

						
						</div>
						
			
					</div>
					<br><br><br><br><br><br>
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i> 
				User Photo Upload
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i>  Do you want your users to be able to upload a photo of themselves upon signup? </b></label>
                        
						<div class="col-sm-8">
						
						<input type="radio"  name="photo" style="">&nbsp;&nbsp;Yes, give users the option to upload a photo upon signup.
 	
                                        <br> 
						<input type="radio"  name="photo" checked style="">&nbsp;&nbsp;No, do not allow users to upload a photo upon signup.
						
						</div>
						
						<br> 
							<label for="field-1" style="color:green;" class="col-sm-12 control-label">  If you have selected "Yes" above, please input the maximum dimensions for the user photos. If your users upload a photo that is larger than these dimensions, the server will attempt to scale them down automatically.
							This feature requires that your PHP server is compiled with support for the GD Libraries. </label>
                       
					   <br>
					  &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;Maximum Width:&nbsp;<input type="text"  size="5" value="200" style=""> (in pixels, between 1 and 999)
 	
                                        <br>   
					&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;Maximum Height:<input type="text"   size="5"  value="200"  style=""> (in pixels, between 1 and 999)
						
						
						<br> 
							<label for="field-1" style="color:green;" class="col-sm-12 control-label">  If you have selected "Yes" above, please input the maximum dimensions for the user photos. If your users upload a photo that is larger than these dimensions, the server will attempt to scale them down automatically.
							What file types do you want to allow for user photos (gif, jpg, jpeg, or png)? Separate file types with commas, i.e. jpg, jpeg, gif, png
					   <br>
					   
						
						
					   </div>
					   Allowed File Types:<input type="text"  value="jpg,jpeg,gif,png"  style=""> 
					   
					   	<br><br>
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i> 
				Enable Users?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i>  If you have selected YES, users will automatically be enabled when they signup. If you select NO, you will need to manually enable users through the View Users page. Users that are not enabled cannot login.  </b></label>
                        
						<div class="col-sm-8">
						
						<input type="radio"  name="enable" style="">&nbsp;&nbsp; 	Yes, enable users upon signup.
 	
                                        <br> 
						<input type="radio"  name="enable" checked style="">&nbsp;&nbsp;No, do not enable users upon signup.
						
						</div>
					   </div>
					   
					   	<br><br><br>
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i> 
				Send Welcome Email?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i>  Send users a welcome email upon signup? If you have email verification activated, this email will be sent upon verification. You can modify this email on the System Emails page.  </b></label>
                        
						<div class="col-sm-8">
						
						<input type="radio"   name="email" value="1" style="">&nbsp;&nbsp;Yes, send users a welcome email.
 	
                                        <br> 
						<input type="radio"   name="email" value="0" checked style="">&nbsp;&nbsp; 	No, do not send users a welcome email.
						
						</div>
					   </div>
					   
					   	<br><br><br>
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i> 
				Verify Email Address?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i>  Force users to verify their email address before they can login? If set to YES, users will be sent an email with a verification link which they must click to activate their account.  </b></label>
                        
						<div class="col-sm-8">
						
						<input type="radio" name="verify_email" value="1" style="">&nbsp;&nbsp;	Yes, verify email addresses.
 	
                                        <br> 
						<input type="radio"  name="verify_email" value="0" checked  style="">&nbsp;&nbsp;No, do not verify email addresses.
						
						</div>
					   </div>
					  
					  
					   	<br><br><br>
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i> 
		 Password Expiration
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i>Did the password to expirw over time?</b></label>
                        
						<div class="col-sm-8">
						
						<input type="radio"  name="expire"  value="1"  style="">&nbsp;&nbsp;	Yes, Password will expire over time.
 	
                                        <br> 
						<input type="radio"  name="expire" checked  value="0" style="">&nbsp;&nbsp;No, do not password expire over time.
						
						</div>
					   </div>
					   
					   	  
					     	<br><br><br>
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i> 
			Change Password
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i>  Enable users to change thier own password any time .  </b></label>
                        
						<div class="col-sm-8">
						
						<input type="radio"  name="change" checked  style="">&nbsp;&nbsp;	Yes, User can change password.
 	
                                        <br> 
						<input type="radio"  name="change" style="">&nbsp;&nbsp;No, do not change orginal password.
						
						</div>
					   </div>
					   
					   	  
					     	<br><br><br>
					
						
						
				
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i> 
		Generate Random Passwords?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i>  If you have selected YES, a random password will be created for users when they signup. The password will be emailed to them upon the completion of the signup process. This is another method of verifying users' email addresses.  </b></label>
                        
						<div class="col-sm-8">
						
						<input type="radio"  name="random"  style="">&nbsp;&nbsp;Yes, generate random passwords and email to new users.
 	
                               <br> 
						<input type="radio"  name="random" checked   style="">&nbsp;&nbsp;No, let users choose their own passwords..
						
						</div>
					   </div><br><br><br><br><hr>
					  	
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"> <i class="fa  fa-pencil-square-o"></i> <?php echo get_phrase('save');?> changes</button>
		                    </div>
		                </div>
							</form>

		      	</div>

			
			
<!-- ///////////////////////////  field2  //////////////////////-->			
					
             <div class="tab-pane" id="field2">
				
						  <div class="form-group">
				
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i>
			How many times user can edit patient profile?
                    	</a></b>
						</u>
				</div>
            </div>  
			<form action="#" method="post">	
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i> Some times It might be impotrant modifiying data when ever error made. so configure this setting based on data sensetivity. </b></label>
                        
						<div class="col-sm-8">
					     <input type="radio"  name="edit_profile"  value="0">&nbsp;&nbsp; Zero times <br>             
						 <input type="radio"  name="edit_profile"  value="1">&nbsp;&nbsp;One times <br> 
                         <input type="radio"  name="edit_profile"  value="3">&nbsp;&nbsp;Three times<br> 
                          <input type="radio" name="edit_profile"  value="4">&nbsp;&nbsp; User can edit two times but admin can edit unlimited  times <br>  						 
                         <input type="radio"  name="edit_profile" checked   value="5">&nbsp;&nbsp; User can edit unlimited  times  
						
						</div>
					   </div> 
					   
					   
					   	   
					   <br> 
					   
					   	<br><br>	<br><br><br>   	
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i>
			Who is authorized to create Patient Profile?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i> Some times It might be impotrant modifiying data when ever error made. so configure this setting based on data sensetivity. </b></label>
                        
						<div class="col-sm-8">
						<input type="checkbox"  name="create" style=""  checked>&nbsp;&nbsp; Service change collector(Users)<br> 
						<input type="checkbox"  name="create" style=""  checked>&nbsp;&nbsp; Accountants<br> 
						<input type="checkbox"  name="create" style=""  checked>&nbsp;&nbsp; System Adminstrator<br>
                        <input type="checkbox"  name="create" style=""  checked>&nbsp;&nbsp; Super Adminstrator<br> 
				        <input type="checkbox"  name="create" style=""  >&nbsp;&nbsp; Woreda Users<br>
					    <input type="checkbox"  name="create" style=""  checked>&nbsp;&nbsp; All System Users
						
						
						</div>
					   </div>
					   
					   		   	<br><br>	<br><br><br><br>   <br><br>   


						
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i>
			Who can remove patient profile and Encounter?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i> Some times It might be impotrant modifiying data when ever error made. so configure this setting based on data sensetivity. </b></label>
						<div class="col-sm-8">
						<input type="checkbox"  name="remove"  style="">&nbsp;&nbsp; Service change collector(Users)<br> 
						<input type="checkbox"  name="remove"  style="">&nbsp;&nbsp;Accountants<br> 
						<input type="checkbox"  name="remove" checked style="">&nbsp;&nbsp; System Adminstrator<br> 
				        <input type="checkbox"  name="remove" checked style="">&nbsp;&nbsp; Super Adminstrator<br> 
				        <input type="checkbox"  name="remove"  style="">&nbsp;&nbsp; All System Users
						</div>
					   </div>
		<br><br>	<br><br><br><br>   		
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i>
			Users can find patient details by?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i> Some times It might be impotrant modifiying data when ever error made. so configure this setting based on data sensetivity. </b></label>
                        
						<div class="col-sm-8">
						<input type="checkbox"  name="search"  checked  style="">&nbsp;&nbsp;  Medical Record Number(MRN)<br> 
						<input type="checkbox"  name="search"  checked  style="">&nbsp;&nbsp; Cell Phone<br> 
						<input type="checkbox"  name="search"  checked  style="">&nbsp;&nbsp; Insurance Code<br> 
				        <input type="checkbox"  name="search"  checked  style="">&nbsp;&nbsp; CBHI #ID/ Personal #ID<br> 
						</div>
					   </div>
					   	<br><br> <br><br><br> 
						
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i>
			Who is authorized to create enacounter?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i> Some times It might be impotrant modifiying data when ever error made. so configure this setting based on data sensetivity. </b></label>
                        
						<div class="col-sm-8">
						<input type="checkbox" name="enacounter" checked style="">&nbsp;&nbsp; Service change collector(Users)<br> 
						<input type="checkbox" name="enacounter" checked style="">&nbsp;&nbsp;Accountants<br> 
						<input type="checkbox" name="enacounter" style="">&nbsp;&nbsp; System Adminstrator<br> 
                        <input type="checkbox" name="enacounter" style="">&nbsp;&nbsp; Super Adminstrator<br> 
				        <input type="checkbox" name="enacounter" style="">&nbsp;&nbsp; All System Users
						</div>
					   </div>
					   
				
					  
			            <br><br><br><br><br><br>		   
		                  <hr>

						
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"> <i class="fa  fa-pencil-square-o"></i> <?php echo get_phrase('save');?> changes</button>
		                    </div>
		                </div>
	</form>
		          	</div>

			
				</div>
<!-- ///////////////////////////  field4  //////////////////////-->	
				
<div class="tab-pane" id="field4">
					

				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="#list" data-toggle="tab"><i class="fa  fa-envelope"></i> 
				Who can users send private messages to?
                    	</a></b>
						
						</u><br>
						<p style="font-size:13px;"> Facilitating user interactivity is the key to developing a successful system. Allowing private messages between users is an excellent way to increase interactivity. From this page, you can enable the private messaging feature and configure its settings. 
			            	</p>
				</div>
            </div>
							
				<form action="#" method="post">	
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i>

						If set to "nobody," none of the other settings on this page will apply. Otherwise, users will have access to their private message inbox and will be able to send each other messages. </b></label>
                        
						<div class="col-sm-8">
						<input type="radio"   name="send" checked style="">&nbsp;&nbsp;Every user -users can send private messages to any user. <br> 
						<input type="radio"   name="send" style="">&nbsp;&nbsp;Co-worker only - users can send private messages to their Co-worker only only.<br> 
						<input type="radio"   name="send" style="">&nbsp;&nbsp;No body - users cannot send private messages.<br> 
                        <input type="radio"   name="send" style="">&nbsp;&nbsp; System adminstrator only - adminstrator  can send private messages to any user.        
						</div>
						
						
					   
					   	<br><br>	<br><br>  	<br><br><br>
						
						<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="#list" data-toggle="tab"><i class="fa  fa-envelope"></i> 
				The message inbox will notify user?
                    	</a></b>
						
						</u>
						
				</div>
            </div>
							
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i>

						If set to "Yes, while a user send private message to other, the user who recieved message will notified with blink blink red color envelope on the top corner of menu. </b></label>
                        
						<div class="col-sm-8">
						<input type="radio"   name="notify" >&nbsp;&nbsp;No, Inbox message does't notify unless user see inbox message. <br> 
						<input type="radio"   name="notify" checked >&nbsp;&nbsp; Yes,Inbox message does notify blink blink red envelop on top right corner of menu.<br> 
						</div>
						
						
					 		</div>  
					   	<br><br>	<br> 	
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa fa  fa-envelope-o"></i>
			Inbox/Outbox Capacity
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i>  How many total messages will users be allowed to store in their inbox and outbox? If a user's inbox or outbox is full and a new message arrives, the oldest message will be automatically deleted.  </b></label>
                        
						<div class="col-sm-8">
						
			     	  <br>
					 <i class="fa  fa-download"></i>&nbsp;&nbsp;<input type="text"  size="5" value="50" style="">  messages in inbox folder.
 	                     <br><br>
                     <i class="fa  fa-upload"></i>&nbsp;&nbsp;<input type="text"   size="5"  value="50"  style=""> messages in outbox folder.	
						</div>
					   </div>	  
			           <br><br>	<br>			   
		                <hr>

						
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"> <i class="fa  fa-pencil-square-o"></i> <?php echo get_phrase('save');?> changes</button>
		                    </div>
		                </div>
							</form>	
				   </div>

			
				</div>
<!-- ///////////////////////////  field3  //////////////////////-->						
				
                  <div class="tab-pane" id="field3">
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="#list" data-toggle="tab"><i class="fa  fa-list"></i> 
				How many times user can edit invoice?
                    	</a></b>
						
						</u><br>
						
				</div>
            </div>
							
				<form action="#" method="post">	
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i> Some times It might be impotrant modifiying data when ever error made. so configure this setting based on data sensetivity </b></label>
                        
						<div class="col-sm-8">
						
					    <input type="radio"  name="invoice" checked   style="">&nbsp;&nbsp; 	One times <br> 
						<input type="radio"  name="invoice" style="">&nbsp;&nbsp;Two times<br> 
						<input type="radio"  name="invoice" style="">&nbsp;&nbsp;Three times<br> 
						<input type="radio"  name="invoice"  style="">&nbsp;&nbsp;No, user cannot edit but Admin<br> 
						<input type="radio"  name="invoice" style="">&nbsp;&nbsp;Never, any user cannot edit it<br>
                        <input type="radio"  name="invoice" style="">&nbsp;&nbsp; Unlimited  times      
						
						</div>
						
						   	<br><br>	<br><br>  	<br><br>	<br><br><br><br>
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i>
			        Time interval to generate payment report?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i>
					     You can configure fime interval here to generate payment report based on listed terms as you needed.
						<div class="col-sm-8">
						    <input type="radio" name="interval" style="">&nbsp;&nbsp; Monthly report<br> 
						    <input type="radio" name="interval" style="">&nbsp;&nbsp;Quarterly report<br> 
						    <input type="radio" name="interval" style="">&nbsp;&nbsp;Customed report<br> 
					        <input type="radio" name="interval" checked style="">&nbsp;&nbsp;As needed per user  <br> 
				            <input type="radio" name="interval" style="">&nbsp;&nbsp; No report at this moment 
						
						</div>
					   </div> 
					   
					   
					   	   
					   
					   
						
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i>
			Who is authorized to generate payment report?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i> 
						
						Some times It might be madatory to authorizing users when ever assigning user account. so configure this setting based on data sensetivity. </b></label>
                        
						<div class="col-sm-8">
						   <input type="radio"  name="authorized"  style="">&nbsp;&nbsp; Service change collector(Users) <br> 
						   <input type="radio"  name="authorized"  style="">&nbsp;&nbsp;Accountants<br> 
						   <input type="radio"  name="authorized"  style="">&nbsp;&nbsp; System Adminstrator<br> 
                           <input type="radio"  name="authorized"  style="">&nbsp;&nbsp; Super Adminstrator<br> 
				           <input type="radio"  name="authorized"  style="">&nbsp;&nbsp; Woreda Users <br>
                           <input type="radio"  name="authorized"  checked style="">&nbsp;&nbsp; All users can generate thier own repor	
						</div>
					   </div>
					   
					   		   	<br><br>	<br><br><br><br><br> 


						
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i>
			Who can remove patient profile and Encounter?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i> 
						
							Some times It might be madatory to authorizing users when ever assigning user account. so configure this setting based on data sensetivity. </b></label>
                       
						 <div class="col-sm-8">
						    <input  type="checkbox"   name="delete"  style="">&nbsp;&nbsp;Service change collector(Users)<br> 
						    <input  type="checkbox"   name="delete"  style="">&nbsp;&nbsp;Accountants <br> 
						    <input  type="checkbox"   name="delete"  style="">&nbsp;&nbsp; System Adminstrator<br> 
                            <input  type="checkbox"   name="delete"  checked style="">&nbsp;&nbsp;Super Adminstrator<br> 
                            <input  type="checkbox"   name="delete"  style="">&nbsp;&nbsp; All System Users
						</div>
					   </div>
					   	   	<br><br><br><br><br><br>   


						
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i>
			Users can find patient encounter details by?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i> 
						
						
							Some times It might be neccessarily to assign search key so as to support user to finding patient profile. so configure this setting based on data sensetivity. </b></label>
                       
						 
						<div class="col-sm-8">
						<input type="checkbox"   name="find"   checked style="">&nbsp;&nbsp;  Medical Record Number(MRN) <br> 
						<input type="checkbox"   name="find"   checked style="">&nbsp;&nbsp; Cell Phone<br> 
						<input type="checkbox"   name="find"   checked  style="">&nbsp;&nbsp; Insurance Code<br> 
                        <input type="checkbox"   name="find"   checked style="">&nbsp;&nbsp; CBHI #ID/ Personal #ID
					    <br> 
						</div>
					   </div>
					   	<br><br>	<br><br><br> 


						
				<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="" data-toggle="tab"><i class="fa  fa-list"></i>
			Who is authorized to create enacounter?
                    	</a></b>
						</u>
				</div>
            </div>  
			
			
						  <div class="form-group">
				
						<label for="field-1" style=""class="col-sm-12 control-label"><b><i class="fa fa-angle-double-right "></i> 
						
						Some times It might be madatory to authorizing users when ever assigning user account. so configure this setting based on data sensetivity. </b></label>
                        
						<div class="col-sm-8">
						    <input type="checkbox"  name="create2" checked style="">&nbsp;&nbsp; Service change collector(Users) <br> 
					    	<input type="checkbox"  name="create2" checked style="">&nbsp;&nbsp;Accountants<br> 
						    <input type="checkbox"  name="create2" checked style="">&nbsp;&nbsp; System Adminstrator<br> 
                            <input type="checkbox"  name="create2" checked style="">&nbsp;&nbsp; Super Adminstrator<br> 
							<input type="checkbox"  name="create2" style="">&nbsp;&nbsp; Woreda Users<br> 
							<input type="checkbox"  name="create2" style="">&nbsp;&nbsp; All System Users
						</div>
					   </div>
					   
				
					  
		            <br><br><br><br><br><br>		   
		                  <hr>

					  
		
						
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"> <i class="fa  fa-pencil-square-o"></i> <?php echo get_phrase('save');?> changes</button>
		                    </div>
		                </div>
							</form>	

		      	</div>

			
				</div>
			        </div>

		      	</div>

			
			
				
<!-- ///////////////////////////  field4 //////////////////////	-->


         </div>  
		   </div>   
		   </div>   
		   </div> 



<br><br><br><br><br><br><br><br><br><br><br><br>