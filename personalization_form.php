<!-- Content Wrapper. Contains page content -->
<script type="text/javascript">
  $(document).ready(function e(){
    function confirm_save_settings(header_color,footer_color,link) {
    
         $.ajax({
        type:"POST",
        url: "<?php echo site_url('consult/Ajax/save_settings');?>",
        data:{header_color:header_color,footer_color:footer_color,link:link},
         success: function(result)
           {
          $("#div1").html(result);
           }
        });
     
   
}


 $(".video-prev").click(function(){
  $("table.table-view").addClass("hide");
 $(".preview-img").removeClass("hide");
 $(".preview-img").show();
  $(".preview-img").attr('src',$(this).attr('img-path'));
 /* $("table.table-view").replaceWith("<img src='../../assets/images/preview-1.jpg' class='preview-img1' width='100%' height='100%' >");
  $("img.preview-img2").attr("src",'../../assets/images/preview-1.jpg');*/
  });
$(".call-prev").click(function(){
 $("table.table-view").addClass("hide");
 $(".preview-img").removeClass("hide");
 $(".preview-img").show();
 $(".preview-img").attr('src',$(".call-prev").attr('img-callpath'));
  });

    $("#preview").click(function(e){
        e.preventDefault();
        $("table.table-view").removeClass("hide");
        $(".preview-img").hide();
       var header_color=$("#header_color").val();
      var footer_color=$("#footer_color").val();
      var link=$("#input-header-name").val();
      var uid=$("#userid").val();
      var logo=$("#file-5").val();
      /*******Get File Type************/
        var fileExtension = ['jpeg', 'jpg','png','gif'];
                    if ($.inArray($("#file-5").val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                        $('#spanFileName').html("Only '.jpeg','.jpg','.png','.gif' formats are allowed.");
                    }
                    else {
                        $('#spanFileName').html(this.value);
                         $('#spanFileName').html('');
                       //do what ever you want
                    } 
      /************End file Validation******/
      if(header_color=='')
      {
        $(".head_color").html("Please choose header color");
      }
      else
      {
        $(".head_color").html('');
      }      
      if(footer_color=='')
      {
        $(".footer_color").html("Please choose footer color.");
      }
      else
      {
        $(".footer_color").html('');
      }
      if(link=='')
      {
        $(".link").html("Please enter web page url.");
      }
      else
      {
        $(".link").html('');
      }
      if(logo=='')
      {
        $(".logo_file").html("Please choose logo.");
      }
      else
      {
        $(".logo_file").html('');
      }


      if(header_color!='' && footer_color!='' && link!='' && logo!='')
      {
      $(".color").css("background",header_color);
      $(".footer_style").css("background",footer_color);
      
 /***********Ajax File Upload Code****************/
 var fd = new FormData(document.getElementById("settings"));
 var new_logo='../../assets/uploads/logo/';
      
            fd.append("label", "WEBUPLOAD");
            $.ajax({
              url: "<?php echo site_url('consult/Ajax/ajax_upload');?>",
              type: "POST",
              data: fd,
              processData: false,  // tell jQuery not to process the data
              contentType: false   // tell jQuery not to set contentType
            }).done(function( data ) {
                console.log( data );
                var upload_logo_file=data;
                $(".uploadlogo").attr("src",new_logo+data);
            });

/*******End file Upload*******/

   /******Save Settings********/
confirm_save_settings(header_color,footer_color,link);
  /****End Save Settings*******/
    }
    }); 

  });
</script>
 
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <div class="clearfix">

        <div class="pull-left">

          <h1>Personalization</h1>

        </div>

        <!--div class="pull-right">

          <a class="btn btn-default" href="<?php //echo site_url($this->consult_folder.'/personalization/')?>"><i class="fa fa-long-arrow-left"></i> Back</a>

        </div-->

      </div>

    </section>



    <!-- Main content -->

    <section class="content">



      <!-- Default box -->

    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Create/Edit Personalization</h3>
        </div>

        <!-- /.box-header -->
        <form name="settings" id="settings" action="" method="post">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
            	<h4 class="h4">Upload Your Settings</h4>
             	<!-- Color Picker -->
              <div class="form-group">
                <label>Upload Logo:</label>
                <div class="">
                    <input type="file" name="file" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
                    <label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose a file&hellip;</span></label>
                </div>
                  <span class="logo_file error"></span>
                  <span id='spanFileName' class="error"></span>
                  
                <!-- /.input group -->
              </div>
              
              <div class="form-group">
                <label>Header Background Color</label>

                <div class="input-group my-colorpicker2">
                 <input name="header_color" id="header_color" type="text" class="form-control" required placeholder="Type color name or code" />
    
                  <div class="input-group-addon">
                    <i></i>
                    
                  </div>
                  
                </div>
                <span class="head_color error"></span>
                <!-- /.input group -->
              </div>
              
              <div class="form-group">
                <label>Footer Border Color</label>

                <div class="input-group my-colorpicker2">
                 <input name="footer_color" id="footer_color" type="text" class="form-control" required="required" placeholder="Type color name or code" />

                  <div class="input-group-addon">
                   <i></i>
                 
<input type="hidden" id="userid" name="logged_userid" value="<?php echo $this->session->userdata('consult')['id']; ?>">
                  </div>
                </div>
                  <div class="footer_color error"></div>
                <!-- /.input group -->
              </div>
              
            </div>
            <!-- /.col -->
            <div class="col-md-6">
			
            	<h4 class="h4">Preview</h4>
				<?php 
			//print_r($personalization);
			if(!empty($personalization)) { 
			$header_color = '';
			$footer_color = '';
			$image = '';
			foreach($personalization as $customer) { 
				//echo "<pre>"; print_r($customer);
					
				if($customer->per_key == 'header_color'){ 
					$header_color = $customer->per_value;
				}else{
					//$header_color = '009999';
				}
				
				if($customer->per_key == 'footer_color' && $customer->per_value != ''){ 
					$footer_color = $customer->per_value;
				}else{
					//$footer_color = '009999';
				}
				
				if($customer->per_key == 'image' && $customer->per_value != ''){
					$image = site_url("assets/uploads/logo/".$customer->per_value);	
					
				}else{
					//$image = "../../assets/uploads/logo/logo-placeholder.png"; 
				} 
			}
			}
			if(empty($image)) {
					$image = "../../assets/uploads/logo/logo-placeholder.png";
				}			
			?>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-view">
              <tr>
                <td style=" padding: 0"></td>
				
                <td class="color"  style="height: 5px; background:<?php echo $header_color;?>; padding: 0"></td>
              </tr>
                  <tr>
                    <td><div class="logo">
					<img src="<?php echo $image;?>" class="uploadlogo" alt="logo" /> 
                    </div></td>
                    <td align="right" width="60%"><div class="btn btn-danger">Login</div></td>
                  </tr>
                  <tr>
                    <td colspan="2"><img src="https://www.goconsult.in/goconsult/go_consult_assests/image/request-img.png" class="img-responsive"></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                        <div class="block_value">
                        <figure>
						<?php 
						$image = ($consult_appointment[0]->image!='')  ? $consult_appointment[0]->image :'user.jpg';
						?>
                        	<img src="<?php echo $app_path; ?>assets/uploads/seller/<?php echo $image;?>" class="img-responsive">
                        </figure>
                        <figcaption>
						<?php 
						//print_r($consult_appointment);
						?>
                            <h1><?php echo ucfirst($consult_appointment[0]->name)?></h1>
                            <p class="address"><?php echo $consult_appointment[0]->full_add; ?></p>
                            <p class="mobile"><?php echo $consult_appointment[0]->phone; ?></p>
                            <p class="timming">
							<?php 
								$doctor_slot = $this->Doctor_model->get_doctor_slot_time($consult_appointment[0]->id);
								if(!empty($doctor_slot)) { ?>

							<?php foreach($doctor_slot as $res) { 
							?>

							<?php echo $res['day'];?><br>

							<?php echo $res['slot_time'];?>

							<?php } ?>

							<?php } ?>

						  </p>
						  <?php echo ($consult_appointment[0]->is_login == '1' ? '<p class="online">Online</p>': '<p class="off-online">Offline</p>');?> 
                            <!--p class="online">Online</p-->
                            <button href="" class="btn btn-lg btn-book" data-toggle="modal" data-target="#myModal3" disabled>BOOK APPOINTMENT</button> 
                        </figcaption>
                        </div>
                    </td>
                  </tr>
                  <tr>
                  <td colspan="2" >
                    <p class="footer_style" style="height:5px;margin:0; background: <?php echo $footer_color;?>"></p>
                  </td>
                  </tr>
                  <tr>
                    <td colspan="2" class="text-center">All Rights Reserved</td>
                  </tr>
                </table>

			<img src="" class="preview-img hide"  width='100%' height='100%' >




            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
	
    <div class="row">
    	<div class="col-md-4 col-sm-6 col-xs-12">
            <div class="box" style="    border: 0;    min-height: 300px;    position: relative;">
                <div class="box-header with-border" style="background:#f04333; color:#fff;">
                  <h3 class="box-title">Embed Code For Website</h3>
                </div>
                <div class="box-body">
                	<div class="form-group">
                	<label>Webpage Url</label>
				 
				  <?php
      $org_rel=$this->database_model->get_recordlist('gc_organisation_company_rel','',array('com_id'=>$this->session->userdata('consult')['id']));
       
      if(!empty($org_rel[0]->com_id)){  
        $org_id = $org_rel[0]->org_id;
         @$org_name = $this->database_model->records_by_name('gc_organisation',array('id'=>@$org_id),'org_name');
         //@$org_logo = $this->database_model->records_by_name('gc_organisation',array('id'=>@$org_id),'org_logo');   
         //@$org_logo = site_url('assets/uploads/logo/'.$org_logo); 
      }else{
        $org_name = 'company';
      }
          $link = site_url('vconsult/'.create_slug($org_name).'-'.$this->session->userdata('consult')['id']); ?>

                    <?php echo form_textarea(array('id'=>'input-header-name','style'=> 'max-height: 50px; background: #eeeeee;', 'class'=>'form-control', 'name'=>'link', 'autocomplete'=>'off', 'placeholder' => 'Link Name', 'value'=> set_value('link', $link)));?>
                <span class="link error"></span>
                <!-- /.input group -->
            </div>
              
              <div class="form-group" style="position:absolute; bottom:10px;">
              	<a img-path="../../assets/images/preview-1.jpg" href="javascript:void(0)" id="preview" class="btn preview"><i class="fa fa-search"></i> PREVIEW & SAVE</a>
              </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="box"  style="    border: 0;    min-height: 300px;    position: relative;">
                <div class="box-header with-border" style="background:#009999; color:#fff;">
                  <h3 class="box-title">Embed Code For Video Button</h3>
                </div>
                <div class="box-body">
                	<div class="form-group">
                		<label>Video Call button</label>
						<img src="https://www.goconsult.in/images/video-call.png" style="display:block;">
              		</div>
              
                  <div class="form-group">
                    <label>Video Call Button Embed Code</label>
                    <?php
                      $random =  rand(0,100000);	  
                      $firstname = $this->session->userdata('consult')['firstname'];
                      $lastname = $this->session->userdata('consult')['lastname'];
                      $full_name = $firstname.' '.$lastname;
                      $script = '<div id="wd_id"></div><script src="'.site_url('assets/js/widget.js').'" type="text/javascript"> </script><script type="text/javascript">init_widget("'.$this->session->userdata('consult')['id'].'P'.$random.'", "'.$full_name.'", "click here for video chat");</script>';
                      
                      $script1 ='<a href="'.$link.'"> <img src="https://www.goconsult.in/images/video-call.png" /> </a>';
                    ?>
                    <div id="box1" class="box-1">
                        <div  style="display:none;" class="n-dlactv nwset1"><?php echo $script1;?></div>
                        
                        </div>
                        
                        <div id="box2" class="box-2">
                        <div  style="visibility: hidden;" class="n-dlactv nwset"><?php echo $script;?></div>
                        
                        </div>
                    <textarea class="form-control html-viewer1" id="cc1" placeholder="" readonly></textarea>
                  </div>
              
                  <div class="form-group" style="position:absolute; bottom:10px;">
                    <a href="javascript:void(0)" img-path="../../assets/images/preview-1.jpg" class="btn preview video-prev"><i class="fa fa-search"></i> PREVIEW</a>
                    <a id="cpy260571" onclick="copytext('#cc1','cpy260571');" rel="nofollow" style="cursor:pointer" class="cusec btn copy-code">
                        <i class="fa fa-code"></i> COPY CODE</a>
                  </div>
                </div>
           </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="box" style="    border: 0;    min-height: 300px;    position: relative;">
                <div class="box-header with-border" style="background:#e4b217; color:#fff;">
                  <h3 class="box-title">Embed Code For Video Button</h3>
                </div>  
                <div class="box-body">
                	<div class="form-group">
                        <label>Footer Widget</label>
                        <img src="https://www.goconsult.in/images/callnow.png" style="display:block;">
                      </div>
                      <div class="form-group">
                        <label>Footer Widget Embed Code</label>
                        <div id="box2" class="box-2">
                            <div  style="visibility: hidden;" class="n-dlactv nwset"><?php echo $script;?></div>
                        </div>
                        <textarea class="form-control html-viewer" id="cc2" placeholder="" readonly ></textarea>
                     </div>
                        <div class="form-group" style="position:absolute; bottom:10px;">
                            <a img-callpath="../../assets/images/preview-2.jpg" href="javascript:void(0)" class="btn preview call-prev"><i class="fa fa-search"></i> PREVIEW</a>
                            <a id="cpy260572" onclick="copytext('#cc2','cpy260572');" rel="nofollow" style="cursor:pointer" class="cusec btn copy-code">
                            <i class="fa fa-code"></i> COPY CODE</a>
                      </div>
                </div>  
            </div>
        </div>
    </div>
      <!-- /.box -->



    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->
<style type="text/css">
  .footer-border{
    border-top:5px solid !important;
  }
</style>
	<script>

	(function($){

	  var code = $('.nwset').html();

	  $('.html-viewer').text(code);
	  
	  var code = $('.nwset1').html();

	  $('.html-viewer1').text(code);

	})(jQuery);



	function copytext(texttocopyid, anchorid) {

        var $temp = $("<input>");

        $("body").append($temp);

        //var copyied = $(texttocopyid).text().trim();

        var copyied = $.trim($(texttocopyid).text());

        //var copyied = document.getElementById(texttocopyid).innerHTML;

        //copyied = copyied.trim();

        $temp.val(copyied).select();

        document.execCommand("copy");

        $temp.remove();

        $('#' + anchorid).text('COPIED');

    }



	</script>



  <script><!--

  $(document).ready(function(){

	 

    $('#input-country_id').change(function(){

      $.post('<?php echo site_url($this->consult_folder.'/ajax/get_zone_menu');?>',{id:$('#input-country_id').val()}, function(data) {

        $('#input-zone_id').html(data);

      });

    });

  });    

  //--></script>
  
  <!-- Bootstrap Color Picker -->
 <link rel="stylesheet" href="<?php echo $app_path; ?>assets/backend/plugins/colorpicker/bootstrap-colorpicker.min.css">
<!-- bootstrap color picker -->
<script src="<?php echo $app_path; ?>assets/backend/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

  <script>
 (function($){
   //Initialize Select2 Elements
   //$(".select2").select2();
   //Colorpicker
   $(".my-colorpicker1").colorpicker();
   //color picker with addon
   $(".my-colorpicker2").colorpicker();

 })(jQuery);
</script>
  
  <style type="text/css">

.inputfile {    width: 0.1px;    height: 0.1px;    opacity: 0;    overflow: hidden;    position: absolute;    z-index: -1;}
.inputfile + label {    max-width: 80%;    font-size: 1.25rem;    /* 20px */    font-weight: 700;    text-overflow: ellipsis;    white-space: nowrap;
    cursor: pointer;    display: inline-block;    overflow: hidden;    padding: 0.625rem 1.25rem;    /* 10px 20px */}
.no-js .inputfile + label {    display: none;}
.inputfile:focus + label,.inputfile.has-focus + label {    outline: 1px dotted #000;    outline: -webkit-focus-ring-color auto 5px;}
.inputfile + label * {    /* pointer-events: none; */    /* in case of FastClick lib use */}
.inputfile + label svg {    width: 1em;    height: 1em;    vertical-align: middle;    fill: currentColor;    margin-top: -0.25em;    /* 4px */    margin-right: 0.25em;    /* 4px */}
		/* style 4 */
.inputfile-4 + label {    color: #009999;}
.inputfile-4:focus + label,.inputfile-4.has-focus + label,.inputfile-4 + label:hover {    color: #017575;}
.inputfile-4 + label figure {    width: 120px;    height: 120px;    border-radius: 50%;    background-color: #009999;    display: block;    padding: 20px;    margin: 0 auto 10px;}
.inputfile-4:focus + label figure,.inputfile-4.has-focus + label figure,.inputfile-4 + label:hover figure {    background-color: #017575;}
.inputfile-4 + label svg {    width: 100%;    height: 100%;    fill: #f1e5e6;}
.preview{background:#00e4ff; color:#fff; padding:5px 15px;}
.copy-code{background:#5cab40; color:#fff; padding:5px 15px;}
.h50{height:80px !important;}
label{color:#999; font-size:15px; font-weight:500;}
.h4{    font-size: 20px;    color: #666;    font-weight: 600;    border-bottom: 1px solid #ccc;    line-height: 30px;    display: inline-block;}
.table-view{padding:10px; box-shadow: 0px 0px 2px 0px #ccc;}
.table-view td {    padding: 8px;}
.table-view .logo{max-height:60px; max-width:150px;}
.table-view .logo img {    max-height: 60px;max-width:150px;}

  
.block_value{padding: 15px; background-color: #fff; border: 1px solid #eaeaea; float:left; width:100%; margin:0;}
.block_value figure{max-width:150px; height:auto; float:left}
.block_value figure img{width:100%; height:auto;}
.block_value figcaption{float:left; margin-left:15px; width:calc(100% - 165px);}
.block_value figcaption h1{font-size: 20px;    color: #333;   margin-top: 0;    text-transform: capitalize;}
.block_value figcaption p{font-size: 14px;    color: #666666;    margin: 8px 0px;    line-height: 18px;    padding: 5px 0px 0px 35px;}

.block_value1{padding: 15px; background-color: #fff; border: 1px solid #eaeaea; float:left; width:100%; margin:0 0 30px 0px;}
.block_value1 figure{max-width:150px; height:auto; float:left}
.block_value1 figure img{width:100%; height:auto;}
.block_value1 figcaption{float:left; margin-left:15px; width:calc(100% - 420px);}
.block_value1 figcaption h1{font-size: 20px;    color: #333;   margin-top: 0;    text-transform: capitalize;}
.block_value1 figcaption p{font-size: 14px;    color: #666666;    margin: 8px 0px;    line-height: 18px;    padding: 5px 0px 0px 35px;}
.block_value1 .btn-book1{background-color: #fff; background-image:url(../image/edit.png); background-position:left 20px center; background-repeat:no-repeat;    border-color: #999;    margin-top: 55px;    color: #333;    font-size: 14px;    padding: 13px 0px 13px 20px; width:250px; text-align:center; float:right;}
.block_value1 .btn-book1:hover{background-color:#333; color:#fff;  background-image:url(../image/edit_over.png);}

.block_value:hover, .block_value1:hover {box-shadow:0px 0px 5px #666; -webkit-transition: ease-in 0.2s; /* Safari */    transition: ease-in 0.2s;}

.address{background:url(https://www.goconsult.in/goconsult/go_consult_assests/image/location.png) no-repeat left center;}
.mobile{background:url(https://www.goconsult.in/goconsult/go_consult_assests/image/phone-icon.png) no-repeat left center;}
.timming{background:url(https://www.goconsult.in/goconsult/go_consult_assests/image/time.png) no-repeat left top 5px; }
.online{background:url(https://www.goconsult.in/goconsult/go_consult_assests/image/online-icon.png) no-repeat left center;}
.off-online{background:url(../image/offline-icon.png) no-repeat left center; }
.btn-book{background-color: #fff; background-image:url(../image/edit.png); background-position:left 20px center; background-repeat:no-repeat;    border-color: #999;    margin-top: 15px;    color: #333;    font-size: 14px;    padding: 13px 55px;}
.btn-book:hover{background-color:#333; color:#fff;  background-image:url(../image/edit_over.png);}

.ftr{background:#fff; border-top:3px solid #c41230; padding:5px 0px; text-align:center}
.hdr{padding:15px 0px;}
.btn-login{background:#ef3b3a; padding:10px 25px; text-transform:uppercase; color:#fff;}
p.line {   position: absolute;    right: 0;   width: 70%;    height: 5px;    background: #c41230;    top: 0;}.
label {    font-size: 13px;}
</style>