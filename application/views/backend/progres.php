    
	  
	  
	  <?php 
if(isset($_POST['btn_log']))
{
	echo '<img src="home/loading.gif" width="20" height="20" border="0"> ';
?>   
  <div class="span12">
   <script type="text/javascript">
	$(document).ready(function()
		{
		 var delay = 7000;
		setTimeout(function(){ 
		window.location = 'users/index.php';
		},
		delay);  
    });
</script>
            <section id="h-default">
                <div class="row-fluid">
						<h2>Please, wait...</h2>
						
                        <div id="prog" class="progress progress-info progress-striped">
                        <div class="bar text-filled-1" data-amount-part="1337" data-amount-total="9000" data-percentage="100"></div>
                        </div>
                </div>
            </section>
        </div>
		<?php
		}
		?>

<!-- Bootstrap -->
		<link href="csspro/bootstrap.css" rel="stylesheet" media="screen">
	    <link href="csspro/bootstrap-progressbar.css" rel="stylesheet" type="text/css">

	<!-- js -->			
		 <script src="jspro/jquery_1.9.js"></script>
		 <script src="jspro/bootstrap-progressbar.js" type="text/javascript"></script>
		
		<style type="text/css">
        .progress .bar.six-sec-ease-in-out {
            -webkit-transition: width 6s ease-in-out;
            -moz-transition: width 6s ease-in-out;
            -ms-transition: width 6s ease-in-out;
            -o-transition: width 6s ease-in-out;
            transition: width 6s ease-in-out;
        }
        .progress.vertical .bar.six-sec-ease-in-out {
            -webkit-transition: height 6s ease-in-out;
            -moz-transition: height 6s ease-in-out;
            -ms-transition: height 6s ease-in-out;
            -o-transition: height 6s ease-in-out;
            transition: height 6s ease-in-out;
        }
        .progress.wide {
            width: 60px;
        }
        .vertical-progressbar-span {
            height: 50px;
        }
    </style>

    <script>
        $(document).ready(function() {
		
               
                $('.progress .bar.text-filled-1').progressbar({
                    display_text: 1,
					         refresh_speed: 200,
                   transition_delay: 500,
             
            });
            
            });
   
    </script>
	