<hr />

     <?php
            $current_user = $this->session->userdata('admin_id');
       
	   
						  $s="SELECT role FROM `admin` where admin_id ='$current_user'";
                          $ress = mysql_query($s) or die(mysql_error());
                          $rows = mysql_fetch_array($ress);
                           $role = $rows['role']; 
			                
					   ?>
    <div class="row">
    <?php echo form_open(base_url() . 'index.php?admin/system_settings/do_update' ,  array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
        <div class="col-md-6">
            
            <div class="panel panel-primary" >
            
                <div class="panel-heading">
                    <div class="panel-title">
                        <?php echo get_phrase('system_settings');?>
                    </div>
                </div>
				
				<?php if (trim($role !='Super_admin')){  ?>
                
                <div class="panel-body">
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_name');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="system_name" readonly
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_name'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_title');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="system_title" readonly
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_title'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="address" readonly
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'address'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="phone" readonly
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'phone'))->row()->description;?>">
                      </div>
                  </div>
 
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('currency');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="currency" readonly
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'currency'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_email');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="system_email" readonly
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_email'))->row()->description;?>">
                      </div>
                  </div>
				  
				<?php } 
				
				else{ ?>
				
			
				
              <div class="panel-body">
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_name');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="system_name" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_name'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_title');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="system_title" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_title'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="address" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'address'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="phone" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'phone'))->row()->description;?>">
                      </div>
                  </div>
 
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('currency');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="currency" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'currency'))->row()->description;?>">
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('system_email');?></label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="system_email" 
                              value="<?php echo $this->db->get_where('settings' , array('type' =>'system_email'))->row()->description;?>">
                      </div>
                  </div>				
				          
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('language');?></label>
                      <div class="col-sm-9">
                          <select name="language" class="form-control">
                                <?php
									$fields = $this->db->list_fields('language');
									foreach ($fields as $field)
									{
										if ($field == 'phrase_id' || $field == 'phrase')
											
											
										continue;
										// if($this->session->userdata('current_language') == $field){

									
										
										$current_default_language	=	$this->db->get_where('settings' , array('type'=>'language'))->row()->description;
										// }?>
                                		<option value="<?php echo $field;?>"
                                        	<?php if ($current_default_language == $field)
												echo 'selected';?>> <?php echo $field;?> </option>
                                        <?php
									}
									
									?>
                           </select>
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('text_align');?></label>
                      <div class="col-sm-9">
                          <select name="text_align" class="form-control">
                          	  <?php $text_align	=	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;?>
                              <option value="left-to-right" <?php if ($text_align == 'left-to-right')echo 'selected';?>> left-to-right</option>
                              <option value="right-to-left" <?php if ($text_align == 'right-to-left')echo 'selected';?>> right-to-left</option>
                          </select>
                      </div>
                  </div>
				  
				<?php }?>
				  
				  
				  			  
            
                  
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
                    </div>
                  </div>
                    <?php echo form_close();?>
                    
                </div>
            
            </div>
			 <?php 
    $edit_data =	$this->db->get_where('admin' , array('admin_id' =>$this->session->userdata('admin_id')))->result_array();
   foreach($edit_data as $row):
          $admin_id       = $row["admin_id"];  
         $skin_color      = $row["skin_colour"];  
         $currentlanguage = $row["language"]; 
		     $text_align  = $row["text_align"];
		 		  
     ?>
	 <?php endforeach ;?> 
	 
	 
           <div class="panel-body form-horizontal form-groups-bordered">
                <?php echo form_open(base_url().'index.php?admin/update_system/change/'.$row['admin_id'] , array('class' => 'form-horizontal form-groups-bordered', 'enctype' => 'multipart/form-data'));?>
                
                 <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('text_align');?></label>
                      <div class="col-sm-9">
                          <select name="text_align" class="form-control">
                          	  <?php //$text_align	=	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;?>
                              <option value="left-to-right" <?php if ($text_align == 'left-to-right')echo 'selected';?>> left-to-right</option>
                              <option value="right-to-left" <?php if ($text_align == 'right-to-left')echo 'selected';?>> right-to-left</option>
                          </select>
                      </div>
                  </div>
				  
				  
				    <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('background_color');?>:</label>
                      <div class="col-sm-9">
                          <select name="skin_colour" class="form-control">
                          	  <?php //$text_align	=	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;?>
                              <option value="blue" <?php if ($skin_color == 'blue')echo 'selected';?>>Blue</option>
                              <option value="black" <?php if ($skin_color == 'black')echo 'selected';?>>Black</option>
                              <option value="cafe" <?php if ($skin_color == 'cafe')echo 'selected';?>>Cafe</option>
							  <option value="green" <?php if ($skin_color == 'green')echo 'selected';?>>Green</option>
                              <option value="purple" <?php if ($skin_color == 'purple')echo 'selected';?>>Purple</option>
							  <option value="red" <?php if ($skin_color == 'red')echo 'selected';?>>Red</option>
                              <option value="white" <?php if ($skin_color == 'white')echo 'selected';?>>white</option>
                              <option value="yellow"  <?php if ($skin_color == 'yellow')echo 'selected';?>>yellow</option>
							  <option value="default"  <?php if ($skin_color == 'default')echo 'selected';?>>Defualt</option>
						 </select>
                      </div>
                  </div>
				  
				  
				  
				        <div class="form-group">
                      <label  class="col-sm-3 control-label"><?php echo get_phrase('language');?></label>
                      <div class="col-sm-9">
                          <select name="language" class="form-control">
                                <?php
									$fields = $this->db->list_fields('language');
									foreach ($fields as $field)
									{
										if ($field == 'phrase_id' || $field == 'phrase')continue;
										
										//$current_default_language	=	$this->db->get_where('settings' , array('type'=>'language'))->row()->description;
										?>
                                		<option value="<?php echo $field;?>"
                                        	<?php if ($currentlanguage == $field)echo 'selected';?>> <?php echo $field;?> </option>
                                        <?php
									}
									?>
                           </select>
                      </div>
                  </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <input type="submit" class="btn btn-primary pull-right" value="<?php echo get_phrase('change'); ?>" />
                        </div>
                    </div>
                        
                <?php echo form_close(); ?>
            </div>
			
			
			
			
			
			
			
			
			<!--
			
			<div class="panel panel-primary" data-collapsed="0">
            
            <div class="panel-heading">
                <div class="panel-title">
                    <?php //echo get_phrase('update_Version');?> 1.1
                </div>
            </div>

            
            <div class="panel-body form-horizontal form-groups-bordered">
                <?php //echo form_open(base_url().'index.php?admin/update' , array('class' => 'form-horizontal form-groups-bordered', 'enctype' => 'multipart/form-data'));?>
                
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php //echo get_phrase('file'); ?></label>

                        <div class="col-sm-5">

                            <input type="file" name="file_name" class="form-control " data-label="Browse" />

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <input type="submit" class="btn btn-primary pull-right" value="<?php //echo get_phrase('install_update'); ?>" />
                        </div>
                    </div>
                        
                <?php //echo form_close(); ?>
            </div>
                            
        </div> -->
        
        </div>

      <?php 
        $skin = $this->db->get_where('settings' , array('type' => 'skin_colour' ))->row()->description;
      ?>
     
	 
        <div class="col-md-6">
            
            <div class="panel panel-primary" >
            
                <div class="panel-heading">
                    <div class="panel-title">
                        <?php echo get_phrase('theme_settings');?>
                    </div>
                </div>
                
                <div class="panel-body">

                <div class="gallery-env">

                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="default">
                                    <img src="assets/images/skins/default.png"
                                    <?php if ($skin == 'default') echo 'style="background-color: black; opacity: 0.3;"';?> />
                                </a>
                                <a href="#" class="album-options" id="default">
                                    <i class="entypo-check"></i>
                                    <?php echo get_phrase('default');?>
                                </a>
                            </header>
                        </article>
                    </div>

                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="black">
                                    <img src="assets/images/skins/black.png" 
                                      <?php if ($skin == 'black') echo 'style="background-color: black; opacity: 0.3;"';?> />
                                </a>
                                <a href="#" class="album-options" id="black">
                                    <i class="entypo-check"></i>
                                    <?php echo get_phrase('select_theme');?>
                                </a>
                            </header>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="blue">
                                    <img src="assets/images/skins/blue.png"
                                    <?php if ($skin == 'blue') echo 'style="background-color: black; opacity: 0.3;"';?> />
                                </a>
                                <a href="#" class="album-options" id="blue">
                                    <i class="entypo-check"></i>
                                    <?php echo get_phrase('select_theme');?>
                                </a>
                            </header>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="cafe">
                                    <img src="assets/images/skins/cafe.png"
                                    <?php if ($skin == 'cafe') echo 'style="background-color: black; opacity: 0.3;"';?> />
                                </a>
                                <a href="#" class="album-options" id="cafe">
                                    <i class="entypo-check"></i>
                                    <?php echo get_phrase('select_theme');?>
                                </a>
                            </header>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="green">
                                    <img src="assets/images/skins/green.png"
                                    <?php if ($skin == 'green') echo 'style="background-color: black; opacity: 0.3;"';?> />
                                </a>
                                <a href="#" class="album-options" id="green">
                                    <i class="entypo-check"></i>
                                    <?php echo get_phrase('select_theme');?>
                                </a>
                            </header>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="purple">
                                    <img src="assets/images/skins/purple.png"
                                    <?php if ($skin == 'purple') echo 'style="background-color: black; opacity: 0.3;"';?> />
                                </a>
                                <a href="#" class="album-options" id="purple">
                                    <i class="entypo-check"></i>
                                    <?php echo get_phrase('select_theme');?>
                                </a>
                            </header>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="red">
                                    <img src="assets/images/skins/red.png"
                                    <?php if ($skin == 'red') echo 'style="background-color: black; opacity: 0.3;"';?> />
                                </a>
                                <a href="#" class="album-options" id="red">
                                    <i class="entypo-check"></i>
                                    <?php echo get_phrase('select_theme');?>
                                </a>
                            </header>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="white">
                                    <img src="assets/images/skins/white.png"
                                    <?php if ($skin == 'white') echo 'style="background-color: black; opacity: 0.3;"';?> />
                                </a>
                                <a href="#" class="album-options" id="white">
                                    <i class="entypo-check"></i>
                                    <?php echo get_phrase('select_theme');?>
                                </a>
                            </header>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="yellow">
                                    <img src="assets/images/skins/yellow.png"
                                    <?php if ($skin == 'yellow') echo 'style="background-color: black; opacity: 0.3;"';?> />
                                </a>
                                <a href="#" class="album-options" id="yellow">
                                    <i class="entypo-check"></i>
                                    <?php echo get_phrase('select_theme');?>
                                </a>
                            </header>
                        </article>
                    </div>

                </div>
                <center>
                  <div class="label label-primary" style="font-size: 12px;">
                    <i class="entypo-check"></i> <?php echo get_phrase('select_a_theme_to_make_changes');?>
                  </div>
                </center>
                </div>
            
            </div>

            <?php echo form_open(base_url() . 'index.php?admin/system_settings/upload_logo' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>

              <div class="panel panel-primary" >
              
                  <div class="panel-heading">
                      <div class="panel-title">
                         Upload Logo & Dashboard  <?php //echo get_phrase('upload_logo');?>
                      </div>
                  </div>
                  
                  <div class="panel-body">
                      
                    
                      <div class="form-group">
                          <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                          
                          <div class="col-sm-9">
                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                      <img src="<?php echo base_url();?>uploads/logo.png" alt="...">
                                  </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                  <div>
                                      <span class="btn btn-white btn-file">
                                          <span class="fileinput-new">Select image</span>
                                          <span class="fileinput-exists">Change</span>
                                          <input type="file" name="userfile" accept="image/*">
                                      </span>
                                      <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  </div>
                              </div>
							  
							     
                          </div>
                      </div>
					  
                    
                    
                    <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-9">
                          <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('upload');?></button>
                      </div>
                    </div>
                
                  </div>
              
              </div>

            <?php echo form_close();?>
            
        
        </div>

    </div>

<script type="text/javascript">
    $(".gallery-env").on('click', 'a', function () {
        skin = this.id;
        $.ajax({
            url: '<?php echo base_url();?>index.php?admin/system_settings/change_skin/'+ skin,
            success: window.location = '<?php echo base_url();?>index.php?admin/system_settings/'
        });
});
</script>