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

</head>

<body>

    <canvas id="pixie"></canvas>
  
    <script src="https://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>

    <script src="js/parallaxsoon3.js" type="text/javascript"></script>
    
    <br><br><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3"></div>
          <div class="col-sm-3"> </div>
          
            <div class="col-sm-5">
              <div class="panel-heading">
                <a href="{{ url('/') }}" class="label label-primary pull-right">Black</a>
              </div><br><br><br>
                  <div style="background-color:#f2eb82;color:black;padding:20px;">
                    @foreach($user as $users)
                      <center>
                  
                        <img src="/images/1.jpg"  style="width:60%" />
                       
                        <h3>{{$users->sign}}</h3>
                        <p>จากคุณ&nbsp; : &nbsp;&nbsp;{{$users->name}}</p>
                        <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fstudent.coe.phuket.psu.ac.th%2F~s5735512046%2Fbless%2Fhome2&layout=button_count&size=small&mobile_iframe=true&width=64&height=20&appId" width="64" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></center>

                    @endforeach 

                  </div><br><br><br><br><br><br>
                  <marquee  direction="lefe" scrollamount="10" >สำนักงานส่งเสริมเศรษฐกิจดิจิทัล</marquee>
                <div class="col-sm-1"></div>
            </div>
          </div>
        </div>


<!-- <share facebook> -->
<script>
function fbs_click() {
  u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
}

</script>
<!-- </share facebook> -->


    
</body>
</html>