<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
      <!-- Standard Favicon-->
      <link rel="shortcut icon" href="http://doss.depa.or.th/public/assets/images/favicon.ico">

    <title>ข้อความถวายพระพร</title>
    <link href='https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bg.css" rel="stylesheet"/>
    
    
    <link href="css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
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
   font-size:20px;
   width: 100%;

}

.containMarquee{
    position:relative;
    top:65px;
    width:100%;
    margin:auto;
    display:block;
    height:600px;
    line-height:19px;
    overflow:hidden;
    opacity:0.4;
    filter:alpha(opacity=65); 

}
.obj_marquee
{
    position:absolute;
    display:block;
    white-space:nowrap;
    left: 70px;
    
}
label.font{
  color: #000000;
  text-shadow: 0 0 0px #000;
  width: 100%

}

</style>
    
</head>


<body>

    <canvas id="pixie"></canvas>
  
    <script src="https://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>

    <script src="js/parallaxsoon3.js" type="text/javascript"></script> 
    <div class="container-fluid">
      <div class="row">
       <center> 
        <div class="col-lg-12">
          <div class="col-md-6">
            <!-- <img src="/images/logo3.png" alt="" class="img-responsive" style="max-width: 150px;" >  -->
          </div>
            <div class="col-md-6">

              <div class="containMarquee" >

                <span class="obj_marquee">

                  @foreach($user as $users)
                 
                  <label class="font" >{{$users->sign}}</label><br><br>
                  <label class="font" style="font-size: 15px;">ด้วยเกล้าด้วยกระหม่อมขอเดชะ ข้าพระพุทธเจ้า&nbsp;:&nbsp;{{$users->name}}</label><br>
                  <img src="/images/line.jpg" alt="" class="img-responsive"/><br>

                  @endforeach
        
      
                </span>
               
              </div> 
             
            </div>
            </div>
        </div>
      </center>
     </div>
    </div>
 

<script type="text/javascript">
var move_marquee;
var marquee_status;
var marquee_move;
var marquee_speed;
var marquee_step;
var marquee_direction;
var newTop;

var obj;
$(function(){
     
    var divCover_h=$(".containMarquee").height(); // หาความสูงพื้นที่ส่วนแสดง marquee
    var divMarquee_h=$(".obj_marquee").height(); //หาความสูงของเนื้อหา marquee
    obj=$(".obj_marquee"); // กำหนดเป็น ตัวแปร jQuery object
    marquee_direction=1; /* กำหนดการเลื่อนซ้ายขวา 1 = ล่างขึ้นบน 2 = บนลงล่าง */
    marquee_speed=30; // กำหนดความเร็วของเวลาในการเคลื่อนที่ ค่ายิ่งมาก จะช้า
    marquee_step=2; // กำหนดระยะการเคลื่อนที่ ค่ายิ่งมาก จะเร็ว

     
    obj.css("top",(marquee_direction==1)?divCover_h:-divMarquee_h);
    marquee_move=function(obj){
        marquee_status=setTimeout(function(){
            move_marquee(obj)
        },marquee_speed);       
    }
    move_marquee=function(obj){
        var condition_mq=(marquee_direction==2)?'newTop<divCover_h':'newTop>-divMarquee_h';
        var initLeft=(marquee_direction==1)?divCover_h:-divMarquee_h;
        newTop=(marquee_direction==1)
        ?parseInt(obj.css('top'))-marquee_step
        :parseInt(obj.css('top'))+marquee_step;
        if(eval(condition_mq)){
            obj.css({
                'top':newTop+'px'
            });
        }
        else{
            obj.css("top",initLeft);
        }               
        marquee_move(obj);
    }   
    marquee_move(obj);
 
 
    $(".containMarquee").mouseover(function(){
        clearTimeout(marquee_status);
    }).mouseout(function(){
        marquee_move(obj);
    });
    
});
</script>


  
</body>
</html>