

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta check-circle *must* come first in the head; any other head content must come *after* these check-circle -->
<title>Osustech Staff Directory</title>

<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<!-- <link href="css/font-awesome.css" rel="stylesheet"> -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300italic,300,400italic,500italic,500,700,700italic' rel='stylesheet' type='text/css'>


<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<link type="text/css" rel="stylesheet" href="css/bootstrap-imgupload.css" />



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-image: url('images/yellow-bg.png'); background-color: #fefffa">

<br>
<!--header start-->
<div class="header-wrap">
  <div class="container"> 
    <!--row start-->
    <div class="row"> 
      <!--col-md-3 start-->
      <div class="col-md-3 col-sm-12">
      <div><a href="index"><img  class="img-responsive" style="margin-top:0px" src="images/logo-trans.png" alt=""></a></div>
      </div>
      <!--col-md-3 end--> 
      <!--col-md-7 end-->
      <div class="col-md-7 col-sm-9"> 
        <!--Navegation start-->
        <div class="navigationwrape">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <!-- <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown"> <a href="index" class="active"> Home <span class="caret"></span></a>
                  
                </li>
                <li> <a href="about-us.html"> About </a></li>
                
                <li> <a href="contact-us.html"> Categories </a></li>

                <li> <a href="contact-us.html"> Webmail </a></li>
              </ul>
            </div> -->
            <div class="clearfix"></div>
          </div>
        </div>
        <!--Navegation start--> 
      </div>
      <!--col-md-3 end--> 
      <!--col-md-2 start-->
      <div class="col-md-2 col-sm-3">
        <!-- <div class="post-btn"><button class="btn btn-outline btn-flat btn-md" style="background:#3f51b5; color: white; border: 1px solid #3f51b5" data-toggle="modal" data-target="#loginModal" data-ui-toggle-class="bounce" data-ui-target="#animate"><i class="fa fa-sign-in"></i> Login</button></div>
         -->
      </div>
      <!--col-md-2 end--> 
    </div>
    <!--row end--> 
  </div>
</div>
<!--header start end--> 
<style type="text/css">
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
</style>

<!--inner heading start-->
<div class="inner-heading" style="color:white; background: #10418c">
  <div class="container" >
    <h1><i class="fa fa-sellsy"></i> Staff Directory</h1>
  </div>
</div>
<!--inner heading end--> 

<!--listing start-->
<div class="inner-wrap listing">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <div class="leftSidebar">
          <center><h3 style="background:#10418c; color: white"><i class="fa fa-th-list"></i> Menu</h3></center>
          <div class="sidebarpad">
            <form>
              
              <div class="sub-btn">
                <center><a href="dashboard" class="btn btn-default btn-md btn-block"><i class="fa fa-home"></i> Home</a></center><br>
                <center><a href="add_staff" class="btn btn-default btn-md btn-block"><i class="fa fa-plus-square-o"></i> Add New Staff</a></center><br>
                <center><a href="../index" target="_blank" class="btn btn-default btn-md btn-block"><i class="fa fa-arrows"></i> Directory</a></center><br>
                <!-- <center><button class="btn btn-primary btn-md btn-block">Add New Staff</button></center><br> -->
                <center><a href="logout" class="btn btn-default btn-md btn-block"><i class="fa fa-power-off"></i> Logout</a></center><br>
                
              </div>
            </form>
            
          </div>
        </div>
      </div>

      <div class="card card-primary"> 
      <div class="col-md-9 col-sm-8">
      
        <div class="login" style="border:8px solid transparent; background: url('images/cove.jpg')">
           
          <div class="contctxt"><center>Staff Information</center></div>
          
                 
                    	

        <div class="panel panel-primary" style="margin:20px;">

        <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user-plus"></i> Entry Form</h3>
        </div>

        <div class="panel-body">
            <form action="/staffdirectory/admincp/add_staff.php" method="post" enctype="multipart/form-data">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group col-md-6 col-sm-6">
                            <label for="name">Name*	</label>
                            <input type="text" name="fullname" style="color:#071930; font-weight:bold" class="form-control input-sm" required id="name" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="staffid">Staff Id*</label>
                            <input type="text" name="staffid" style="color:#071930; font-weight:bold" class="form-control input-sm" required id="staffid" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="email">Email*</label>
                            <input type="email" name="email" style="color:#071930; font-weight:bold" class="form-control input-sm" required id="email" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="mobile">Mobile*</label>
                            <input type="text" name="mobile" style="color:#071930; font-weight:bold" class="form-control input-sm" required id="mobile" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="qualifications">Qualifications*</label>
                            <textarea name="qualifications" style="color:#071930; font-weight:bold" class="form-control input-sm" id="qualifications" required  rows="3"></textarea>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-6">
                                <label for="designation">Designation</label>
                                <select name="designation" id="designation" class="form-control input-sm" style="font-weight:bold; color: #071930; font-size:14px">
                                    <option value="">-- Choose an Option--</option>
                                    <option value="Adjunct Lecturer">Adjunct Lecturer</option>
                                    <option value="Assistant Lecturer">Assistant Lecturer</option>
                                    <option value="Assistant Professor">Associate Professor</option>
                                    <option value="Graduate Assistant">Graduate Assistant</option>
                                    <option value="Senior Lecturer">Senior Lecturer</option>
                                    <option value="Lecturer I">Lecturer I</option>
                                    <option value="Lecturer II">Lecturer II</option>
                                    <option value="Reader">Reader</option>
                                    <option value="Professor">Professor</option>
                                </select>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-6">
                                <label for="researchinterest">Research Interest</label>
                                <textarea style="color:#071930; font-weight:bold" name="researchinterest" class="form-control input-sm" id="researchinterest" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                                <label for="position">Position</label>
                                <input type="text" style="color:#071930; font-weight:bold"  name="position" class="form-control input-sm" id="position" placeholder="">
                        </div>

                   

                    <div class = "form-group col-md-6 col-sm-6">
                        <label for="years">Choose a Staff Category *</label>	 
                        
                        
                        <select name="category" id="category" required class="form-control input-sm" style="font-weight:bold; color:#071930; font-size:14px">
                            <option>--SELECT--</option>
                            <option value="">Select category</option>

                            <option value="1">Academic Staff</option><option value="3">Principal Officer</option><option value="2">Technologist</option><option value="4">Units</option>                        </select>

                    </div>

                    <div class = "form-group col-md-6 col-sm-6">
                        <label for="months">Choose a Department/Unit *</label>
                        <select name="department" id="department" required class="form-control input-sm" style="font-weight:bold; color: #071930; font-size:14px">
							<option value="">-- SELECT--</option>
						</select>
                    </div>

                    
                </div>

                <div class="form-group col-md-12">
                  <div class="col-md-12">
                    <div class="well">
                            <label for="photo">CV</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-lg btn-block">
                                       <input type="file" name="cv"  readonly>
                                    </span>
                                </span>
                            </div>
                            <p class="help-block" style="color:crimson; font-weight:bold">Please upload PDF Resume Only. MS Words document is not acceptable.</p>
                           
                        </div>  
                    </div>
                </div>

                    <div class="col-md-12">
                      <div class="col-sm-9">
                        <div class="well">

                            <label>Passport*</label>
                            <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-lg btn-file">
                                            Browse… <input type="file" id="imgInp" name="user_image">
                                        </span>
                                    </span>
                                    <input type="text" name="" class="form-control" value="Passport not Selected" readonly>
                                    
                             </div>
                           </div>
                        </div>

                        <div class="col-sm-3"><div class="well" ><img id='img-upload' class='img-responsive' style="height=40px; width=40px" /></div></div>

                        </div>
              

                <br><br>
                
                <div class="col-md-12 col-sm-12">
                    <div class="form-group col-md-12" >
                            <button type="submit" class="btn btn-primary btn-block btn-lg" name="add-entry"><i class="fa fa-plus-square"></i> Add Entry</button>
                    </div>
                </div>
          </form>
        </div>








        </div>
      </div>
</div>
</div>

      </div>
    </div>
  </div>
</div>
<!--listing end-->
<!--inner heading start-->
<div class="inner-heading" style="color:white; background: #10418c">
  <div class="container" >
    <center><h5><i class="fa fa-code"></i> Developed by the Dev Team @ <a href="https://osustech.edu.ng" style="color:#f5f5d4; text-decoration: none"> ICT Unit</a></h5></center>
  </div>
</div>
<!--inner heading end-->  
<!--footer end--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 

<!-- general script file --> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript">

  $(document).ready(function()
  {  
	$('#category').on('change',function()
        {
        var categoryID =$(this).val();
        if(categoryID)

        {
        $.ajax
        ({
        type:'POST',
        url:'ajax.php',
        data:'category_id='+categoryID,
        success:function(html)
        {

        $('#department').html(html);
        }


        });
        }else
        {
        $('#department').html('<option value="" class="form-control">Select Category First</option>');

        }

		})

	});


</script>

<!-- My Image Upload Previewer -->
<script>

$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    }); 	
});

</script>

