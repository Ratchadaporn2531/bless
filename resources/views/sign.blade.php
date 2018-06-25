<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
      <!-- Standard Favicon-->
    <link rel="shortcut icon" href="http://doss.depa.or.th/public/assets/images/favicon.ico">

    <title>ลงนามถวายพระพร</title>
    <link href='https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/circle.css" rel="stylesheet"/>
    
    <link href="css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- reCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
<style type="text/css">
  @font-face {
    font-family: 'THSarabunNew';
    src: url('font/thsarabunnew-webfont.eot');
    src: url('font/thsarabunnew-webfont.eot?#iefix') format('embedded-opentype'),
         url('font/thsarabunnew-webfont.woff') format('woff'),
         url('font/thsarabunnew-webfont.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'THSarabunNew';
    src: url('font/thsarabunnew_bolditalic-webfont.eot');
    src: url('font/thsarabunnew_bolditalic-webfont.eot?#iefix') format('embedded-opentype'),
         url('font/thsarabunnew_bolditalic-webfont.woff') format('woff'),
         url('font/thsarabunnew_bolditalic-webfont.ttf') format('truetype');
    font-weight: bold;
    font-style: italic;

}

@font-face {
    font-family: 'THSarabunNew';
    src: url('font/thsarabunnew_italic-webfont.eot');
    src: url('font/thsarabunnew_italic-webfont.eot?#iefix') format('embedded-opentype'),
         url('font/thsarabunnew_italic-webfont.woff') format('woff'),
         url('font/thsarabunnew_italic-webfont.ttf') format('truetype');
    font-weight: normal;
    font-style: italic;

}

@font-face {
    font-family: 'THSarabunNew';
    src: url('font/thsarabunnew_bold-webfont.eot');
    src: url('font/thsarabunnew_bold-webfont.eot?#iefix') format('embedded-opentype'),
         url('font/thsarabunnew_bold-webfont.woff') format('woff'),
         url('font/thsarabunnew_bold-webfont.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;

}

body{
   font-family: 'THSarabunNew', sans-serif;
}
</style>
    
  </head>


  <body>

    <canvas id="pixie"></canvas>
  
    <script src="https://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>

    <script src="js/parallaxsoon3.js" type="text/javascript"></script> 
 <div class="container-fluid">

    	<center><div class="col-lg-12 col-md-12">
					<img src="/images/logo3.png" alt="" class="img-responsive" style="max-width:350px">
    	</div></center>

    	<center><div class="col-lg-12 col-md-12">
    		
    			<form action="store" method="post" enctype="multipart/form-data"><br>
					<div class="form-group">
                			 

                  			<!-- <label for="exampleFormControlSelect1">เลือกคำถวายพระพร</label>  -->
                  				<select name="sign" class="form-control" id="exampleFormControlSelect1" style="max-width:500px">
                  					<option>เลือกคำถวายพระพร</option> 
                      				<option>ขอพระองค์ทรงพระเจริญยิ่งยืนนาน</option>
                      				<option>ขอพระองค์ทรงมีพระพลานามัยสมบูรณ์ แข็งแรง</option>
                      				<option>ขอพระองค์ทรงอยู่คู่ฟ้าแผ่นดินสยามยิ่งยืนนาน</option>
                      				<option>ขอพระองค์เป็นดั่งร่มโพธิ์ร่มไทรของพสกนิกรไทยตลอดกาลนานเทอญ</option>
                  				</select>
              			</div>
               
               			<div class="form-group">

                  			<!-- <label for="exampleFormControlInput1">ชื่อ-สกุล</label> -->
                 			<input type="text" name="name" class="form-control"  placeholder="ชื่อ-สกุล" style="max-width:500px">
                		</div>
                    <div class="form-group">

                    

                    <div class="g-recaptcha" data-sitekey="6Lf11V8UAAAAAFqt-77u-jmOYtclz8wWereG-KIv"></div><br>

               			<input type="hidden" name="_token" value="{{csrf_token()}}"> 
                		<input id="submit_btn" type="submit" value="">

                  

             

                    </div>
                	</div>
                </form>

            
        	</div></center>


    	</div>



      



  
</body>
</html>