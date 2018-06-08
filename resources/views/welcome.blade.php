<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>


    <title>ลงนามถวายพระพร</title>
    <link href='https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/circle.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    

  </head>

  <body>

    <canvas id="pixie"></canvas>
  
    <script src="https://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>

    <script src="js/parallaxsoon3.js" type="text/javascript"></script> <br><br><br><br><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3"></div>
          <div class="col-sm-3">


            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


            <button type="button" class="btn btn-default pull-center">จำนวนผู้เข้าร่วมถวายพระพร {{ $user }}</button> </div>

            

            


          	<form action="store" method="post" enctype="multipart/form-data">
            	<div class="col-sm-5">
              
                <!-- <div class="panel-heading">
                <a href="" class="btn btn-primary btn-xs pull-right">ข้อความถวายพระพร</a>
                </div><br> -->
                <br><br><br>

             		<center><div class="form-group">

                
                      <img src="/images/1.jpg"  style="width:70%" />
                       <!-- <input type="file"  name="image"> -->
                       

               		</div> </center>

                		<div class="form-group">

                  			<label for="exampleFormControlSelect1">เลือกคำถวายพระพร</label>
                  				<select name="sign" class="form-control" id="exampleFormControlSelect1">
                      				<option>ขอพระองค์ทรงพระเจริญยิ่งยืนนาน</option>
                      				<option>ขอพระองค์ทรงมีพระพลานามัยสมบูรณ์ แข็งแรง</option>
                      				<option>ขอพระองค์ทรงอยู่คู่ฟ้าแผ่นดินสยามยิ่งยืนนาน</option>
                      				<option>ขอพระองค์เป็นดั่งร่มโพธ์ร่มไทรของพสกนิกรไทย</option>
                  				</select>
              			</div>
               
               			<div class="form-group">
                  			<label for="exampleFormControlInput1">ชื่อ-สกุล</label>
                 			<input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
                		</div><br>
              
               			<input type="hidden" name="_token" value="{{csrf_token()}}"> 
                		<div class="form-group">
                      		<label class="col-md-4 control-label"></label>
                        	<div class="col-md-4">
                          		<center><button id="myBtn" type="submit" class="btn btn-success"  onclick="count()" >ถวายพระพร </button></center>
                              
                              
							</div> 
                		</div><br><br>
						
						<marquee  direction="lefe" scrollamount="10" >สำนักงานส่งเสริมเศรษฐกิจดิจิทัล  </marquee>
          		</div>
       		</form>
    
    			<div class="col-sm-1"></div>
  		</div>
	</div>

<script type="text/javascript">

    var clicks = 0;
    function count() {
        clicks += 1;
        document.getElementById("clicks").innerHTML = clicks;
    };
    </script>
  
</body>
</html>