<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Grab Diet Plan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="assets/css/colors/switch.css">
    <!-- Color Alternatives -->
    <link href="assets/css/colors/color-2.css" rel="alternate stylesheet" type="text/css" title="color-2">
    <link href="assets/css/colors/color-3.css" rel="alternate stylesheet" type="text/css" title="color-3">
    <link href="assets/css/colors/color-4.css" rel="alternate stylesheet" type="text/css" title="color-4">
    <link href="assets/css/colors/color-5.css" rel="alternate stylesheet" type="text/css" title="color-5">
    <style type="text/css">
    .qty-wz-form{
        margin-bottom: 15px;
    }
    .qty-wz-form input{
        height: 60px;
    }
    </style>
</head>

<body>

    <!-- This code is use for color chooser, you can delete -->
    <div id="switch-color" class="color-switcher">
        <div class="open"><i class="fas fa-cog"></i></div>
        <h4>COLOR OPTION</h4>
        <ul>
            <li><a class="color-2" onclick="setActiveStyleSheet('color-2'); return false;" href="#"><i class="fas fa-cog"></i></a> </li>
            <li><a class="color-3" onclick="setActiveStyleSheet('color-3'); return false;" href="#"><i class="fas fa-cog"></i></a> </li>
            <li><a class="color-4" onclick="setActiveStyleSheet('color-4'); return false;" href="#"><i class="fas fa-cog"></i></a> </li>
            <li><a class="color-5" onclick="setActiveStyleSheet('color-5'); return false;" href="#"><i class="fas fa-cog"></i></a> </li>
        </ul>
    </div>
    <div class="clearfix"></div>


    <div class="wrapper wizard d-flex clearfix multisteps-form position-relative">
        <div class="steps order-2 position-relative w-25">
            <div class="multisteps-form__progress">
                <span class="multisteps-form__progress-btn js-active" title="Tax residency"><i class="fab fa-font-awesome-flag"></i><span>Goal</span></span>
                <span class="multisteps-form__progress-btn " title="Application data"><i class="far fa-user"></i><span>Name</span></span>              
                <span class="multisteps-form__progress-btn" title="Tax residency"><i class="fas fa-venus-mars"></i><span>Gender</span></span>
                {{-- <span class="multisteps-form__progress-btn" title="Indentity documents"><i class="fas fa-fish"></i><span>Fish</span></span>
                <span class="multisteps-form__progress-btn" title="Investability"><i class="fas fa-wine-bottle"></i><span>Dairy</span></span>
                <span class="multisteps-form__progress-btn" title="Review"><i class="fas fa-dumbbell"></i><span>Physical Activity </span></span>
                <span class="multisteps-form__progress-btn" title="Investability"><i class="fas fa-snowboarding"></i><span>Lifestyle</span></span> --}}
                <span class="multisteps-form__progress-btn" title="Review"><i class="fas fa-ruler-combined"></i><span>Measurements </span></span>
                
            </div>
            <div style="height: 400px;"></div>
        </div>
        <form class="multisteps-form__form w-75 order-1" action="/thankyou" id="wizard" method="POST">
            @csrf
            <div class="form-area position-relative">
                <!-- div goal -->
                <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                    <div class="wizard-forms">
                        <div class="inner pb-100 clearfix">
                            <div class="wizard-title text-center">
                                <h3>Personalized meal plans to lose weight FAST</h3>
                                <p>Eat well, look <b>AMAZING!</b> </p>
                            </div>
                            
                            <div class="wizard-duration mb-60">
                                <span class="wizard-sub-text">What is your Goal?</span>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="duration-option">
                                            <input type="radio" name="goal" value="loss" class="d-checkbox">
                                            <span class="checkbox-circle-tick"></span>
                                            <span class="duration-box text-center" style="height:155px;">
                                                <br/>                                             
                                                <span class="">Weight Loss</span>
                                            </span>
                                        </label>                                       
                                    </div>
                                    <div class="col-md-4">
                                        <label class="duration-option">
                                            <input type="radio" name="goal" value="gain" class="d-checkbox">
                                            <span class="checkbox-circle-tick"></span>
                                            <span class="duration-box text-center" style="height:155px;">
                                                <br/>                                             
                                                <span class="">Weight Gain</span>
                                            </span>
                                        </label>                                       
                                    </div>
                                    <div class="col-md-4">
                                        <label class="duration-option">
                                            <input type="radio" name="goal" value="maintain" class="d-checkbox">
                                            <span class="checkbox-circle-tick"></span>
                                            <span class="duration-box text-center" style="height:155px;">
                                                <br/>                                             
                                                <span class="">Maintain Weight</span>
                                            </span>
                                        </label>                                       
                                    </div>                                                                      
                                </div>
                            </div>                         
                            <div class="wizard-v3-progress" style="right:70px;top:900px;">
                                <span style="color: #474747;">1 to 4 step</span>
                                <h3 style="color: #474747;">25% to complete</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 25%">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- ./inner -->
                        <div class="vector-img-one" style="left:200px;top:600px;">
                            <img src="assets/img/tht5.png" alt="">
                        </div>
                        <div class="actions">
                            <ul>
                                <li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- div name -->
                <div class="multisteps-form__panel" data-animation="slideHorz">
                    <div class="wizard-forms">
                        <div class="inner pb-100 clearfix">                           
                            
                            <div class="wizard-duration mb-60">
                                <span class="wizard-sub-text">What is your Name?</span>
                                <div class="row">
                                    <div class="wizard-form-input position-relative form-group has-float-label qty-wz-form" style="top:80px;">
                                        <!-- <label>Age</label><br/> -->
                                        <input id="name" type="text" name="name" class="form-control" placeholder="Name" >                               
                                    </div>                                                              
                                </div>
                            </div>                         
                            <div class="wizard-v3-progress" style="right:70px;top:900px;">
                                <span style="color: #474747;">2 to 4 step</span>
                                <h3 style="color: #474747;">50% to complete</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 50%">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- ./inner -->
                        <div class="vector-img-one" style="left:200px;top:400px;">
                            <img src="assets/img/vb1.png" alt="">
                        </div>
                        <div class="actions">
                            <ul>
                                <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK </span></li>                      
                                <li><span class="js-btn-next" title="NEXT" onclick="getname()">NEXT <i class="fa fa-arrow-right"></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- div gender -->
                <div class="multisteps-form__panel" data-animation="slideHorz">
                    <div class="wizard-forms">
                        <div class="inner pb-100 clearfix">                          
                            <div class="wizard-duration mb-60">
                                
                                <span class="wizard-sub-text" id="namedisplay"></span>
                                <span>Please select your gender</span>
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- <label class="duration-option">
                                            <input type="radio" name="duration-service" value="4 weeks" class="d-checkbox">
                                            <span class="checkbox-circle-tick"></span>
                                            <span class="duration-box text-center">
                                                <span class="title">4</span>
                                                <span>Weeks</span>
                                            </span>
                                        </label> -->
                                    </div>
                                    <div class="col-md-4">
                                        <label class="duration-option">
                                            <input type="radio" name="gender" value="1" class="d-checkbox">
                                            <span class="checkbox-circle-tick"></span>
                                            <span class="duration-box text-center" style="height:470px;">
                                                <span class="title">Male</span>
                                                <span><img src="assets/img/g-men.png" alt="malephoto"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="duration-option">
                                            <input type="radio" name="gender" value="0.9" class="d-checkbox">
                                            <span class="checkbox-circle-tick"></span>
                                            <span class="duration-box text-center" style="height:470px;">
                                                <span class="title">Female</span>
                                                <span><img src="assets/img/g-lady.png" alt="femalephoto"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="wizard-v3-progress" style="right:70px;top:900px;">
                                <span style="color: #474747;">3 to 4 step</span>
                                <h3 style="color: #474747;">75% to complete</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 75%">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- ./inner -->
                        <div class="vector-img-one">
                            <img src="assets/img/g.png" alt="">
                        </div>
                        <div class="actions">
                            <ul>
                                <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK </span></li>
                                <li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- div metrics -->
                <div class="multisteps-form__panel" data-animation="slideHorz">
                    <div class="wizard-forms">
                        
                        <div class="inner pb-100">
                            <div class="wizard-title text-center">
                                <h3>Thank You!</h3>
                                <p>has been a while. I would like to present you the meal plan for you</p>
                            </div>
                            <div class="wizard-day-item">
                                <span class="wizard-sub-text">Measurement System</span>
                                
                                <div class="social-media-find">
                                    {{-- <span class="wizard-sub-text">Measurement System</span> --}}
                                    <div>
                                        {{-- <select>
                                            <option onselect="toggle('form1');">Metric</option>
                                            <option onselect="toggle('form2');">Imperical</option>
                                        </select> --}}
                                        <input type="radio" name=myradio value="2" onclick="toggle('form1');">Matric
                                        <input type="radio" name=myradio value="2" onclick="toggle('form2');">Imperical
                                    </div>
                                </div>
                            </div>
                            
                                <div id="form1" style="display: block; padding: 30px;">
                                
                                    <div class="wizard-form-input position-relative form-group has-float-label qty-wz-form">                             
                                        <input type="number" name="age" id="age" class="form-control" placeholder="Age" required>                                
                                    </div>
                                    <div class="wizard-form-input position-relative form-group has-float-label qty-wz-form">
                                        <input type="number" name="heightcm" id="heightcm" class="form-control" placeholder="Height (CM)" required>                                
                                    </div>
                                    <div class="wizard-form-input position-relative form-group has-float-label qty-wz-form">
                                        <input type="number" name="weightkg" id="weightkg" class="form-control" placeholder="Weight (kg)" required>                                
                                    </div>
                                    <div class="wizard-form-input position-relative form-group has-float-label qty-wz-form">
                                        <input type="number" name="targetweightkg" id="targetweightkg" class="form-control" placeholder="Target Weight (kg)" required>                                
                                    </div>
                                    <div class="wizard-form-input position-relative form-group has-float-label qty-wz-form">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>                                
                                    </div>
                                
                                </div>
    
                                <div id="form2" style="display:none; padding: 30px;">
                                
                                    <div class="wizard-form-input position-relative form-group has-float-label qty-wz-form">                             
                                        <input type="number" name="agelb" id="agelb" class="form-control" placeholder="Age" >                                
                                    </div>
                                    <div class="wizard-form-input position-relative form-group has-float-label qty-wz-form">
                                            <input type="number" name="heightft" id="heightft" class="form-control" placeholder="Height (ft)" > 
                                            <input type="number" name="heightinch" id="heightinch" class="form-control" placeholder="Height (inch)"> 
                                    </div>
                                    <div class="wizard-form-input position-relative form-group has-float-label qty-wz-form">
                                        <input type="number" name="weightlbs" id="weightlbs" class="form-control" placeholder="Weight (lbs)" >                                
                                    </div>
                                    <div class="wizard-form-input position-relative form-group has-float-label qty-wz-form">
                                        <input type="number" name="targetweightlbs" id="targetweightlbs" class="form-control" placeholder="Target Weight (lbs)" >                                
                                    </div>
                                    <div class="wizard-form-input position-relative form-group has-float-label qty-wz-form">
                                        <input type="email" name="emaillb" id="emaillb" class="form-control" placeholder="Email" >                                
                                    </div>
                                
                                </div>

                            <div class="wizard-v3-progress" style="bottom: 100px;">
                                <span>4 to 4 step</span>
                                <h3>100% to complete</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.inner -->
                        <div class="vector-img-one position-relative" style="bottom: 50px;">
                            <img src="assets/img/tv1.png" alt="">
                        </div>
                        <div class="actions mt-60" style="bottom: 300px;">
                            <ul>
                                <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK </span></li>
                                <li><button type="submit" title="Submit" >SUBMIT <i class="fa fa-arrow-right"></i></button></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </form>
    </div>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/switch.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://kit.fontawesome.com/4ba460b96f.js" crossorigin="anonymous"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#profile-image')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };
        $("#customFile").change(function() {
            filename = this.files[0].name
        });
    </script>
</body>

</html>