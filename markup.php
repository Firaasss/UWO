<?php

class markup
{

    private static $debug = false;

    public function __construct()
    {
    }

    public static function getHeader()
    {
        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Western Faculty of Education</title>

            <meta name="robots" content="noindex">

            <meta name="title" content="Western Faculty of Education">
            <meta name="description"
                  content="Integrate research into your professional life with the Master of Professional Education (MPEd) program.">

            <meta property="og:type" content="website"/>
            <meta property="og:title" content="Western Faculty of Education"/>
            <meta property="og:url"
                  content="<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"/>
            <meta property="og:image" content="images/meta-image.jpg"/>
            <meta property="og:description"
                  content="Integrate research into your professional life with the Master of Professional Education (MPEd) program."/>
            <meta property="og:site_name" content="Western Faculty of Education"/>

            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>">
            <meta name="twitter:creator" content="Western Faculty of Education">
            <meta name="twitter:title" content="Western Faculty of Education">
            <meta name="twitter:description"
                  content="Integrate research into your professional life with the Master of Professional Education (MPEd) program.">
            <meta name="twitter:image" content="images/meta-image.jpg"/>

            <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
            <link rel="manifest" href="./favicon/site.webmanifest">
            <link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="theme-color" content="#ffffff">

            <link rel="stylesheet" href="https://use.typekit.net/sei8ccg.css">
            <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
            <link rel="stylesheet" href="styles/styles.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Google Analytics FOE -->
<script>// <![CDATA[
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3176599-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
// ]]></script>
<!-- Google Tag Manager FOE -->
<script>// <![CDATA[
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WXVZR8W');
// ]]></script>
<!-- End Google Tag Manager FOE -->   

<!-- WesternU Global site tag (gtag.js) - Google Ads: 989533795 -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-989533795"></script>
<script>// <![CDATA[
window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-989533795');
// ]]></script>

<!-- Global WesternU site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-130493133-1" type="text/javascript"></script>
<script type="text/javascript">
window.dataLayer = window.dataLayer || [];
  function gtag()
  {dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-130493133-1');
</script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
</script>
<script>
 window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
};   
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>// <![CDATA[

        $(document).ready(function() {
            $('#81474532365257 select[name="00N6A00000OrEop"]').change(function() {
                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').text() == '-None-') {
                    $('#fieldOfStudy').hide(); 
                } else {
                    $('#fieldOfStudy').show();
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Business Studies') {
                    $('#bus').show();
                    $('#bus2').prop('required', true);
                    $('#bus2').prop('name', '00N6A00000NKRjM');
                }

                else {
                    $('#bus').hide();
                    $('#bus2 option:selected').prop('selected', false);
                    $('#bus2').prop('required', false);
                    $('#bus2').prop('name', '');               
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Co-Operative Education') {
                    $('#coop').show();
                    $('#coop2').prop('required', true);
                    $('#coop2').prop('name', '00N6A00000NKRjM');
                } else {                
                    $('#coop').hide();
                    $('#coop2 option:selected').prop('selected', false);
                    $('#coop2').prop('required', false);
                    $('#coop2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Dramatic Arts') {              
                    $('#da').show();
                    $('#da2').prop('required', true);
                    $('#da2').prop('name', '00N6A00000NKRjM');
                } else {             
                    $('#da').hide();
                    $('#da2 option:selected').prop('selected', false);
                    $('#da2').prop('required', false);
                    $('#da2').prop('name', '');
                }
                
                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Family Studies') {             
                    $('#fs').show();
                    $('#fs2').prop('required', true);
                    $('#fs2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#fs').hide();
                    $('#fs2 option:selected').prop('selected', false);
                    $('#fs2').prop('required', false);
                    $('#fs2').prop('name', '');
                }
                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'French as a Second Language') {
                    $('#french').show();
                    $('#french2').prop('required', true);
                    $('#french2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#french').hide();
                    $('#french2 option:selected').prop('selected', false);
                    $('#french2').prop('required', false);
                    $('#french2').prop('name', '');
                }
                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Guidance and Career Education') {
                    $('#gce').show();
                    $('#gce2').prop('required', true);
                    $('#gce2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#gce').hide();
                    $('#gce2 option:selected').prop('selected', false);
                    $('#gce2').prop('required', false);
                    $('#gce2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Honour Specialist') {
                    $('#hs').show();
                    $('#hs2').prop('required', true);
                    $('#hs2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#hs').hide();
                    $('#hs2 option:selected').prop('selected', false);
                    $('#hs2').prop('required', false);
                    $('#hs2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Integration of Information and Computer Technology in Instruction') {
                    $('#ict').show();
                    $('#ict2').prop('required', true);
                    $('#ict2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#ict').hide();
                    $('#ict2 option:selected').prop('selected', false);
                    $('#ict2').prop('required', false);
                    $('#ict2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Intermediate Division') {
                    $('#int').show();
                    $('#int2').prop('required', true);
                    $('#int2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#int').hide();
                    $('#int2 option:selected').prop('selected', false);
                    $('#int2').prop('required', false);
                    $('#int2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Junior') {
                    $('#jd').show();
                    $('#jd2').prop('required', true);
                    $('#jd2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#jd').hide();
                    $('#jd2 option:selected').prop('selected', false);
                    $('#jd2').prop('required', false);
                    $('#jd2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Kindergarten') {
                    $('#kd').show();
                    $('#kd2').prop('required', true);
                    $('#kd2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#kd').hide();
                    $('#kd2 option:selected').prop('selected', false);
                    $('#kd2').prop('required', false);
                    $('#kd2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Mathematics') {
                    $('#math').show();
                    $('#math2').prop('required', true);
                    $('#math2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#math').hide();
                    $('#math2 option:selected').prop('selected', false);
                    $('#math2').prop('required', false);
                    $('#math2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Primary') {
                    $('#primary').show();
                    $('#primary2').prop('required', true);
                    $('#primary2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#primary').hide();
                    $('#primary2 option:selected').prop('selected', false);
                    $('#primary2').prop('required', false);
                    $('#primary2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Reading') {
                    $('#reading').show();
                    $('#reading2').prop('required', true);
                    $('#reading2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#reading').hide();
                    $('#reading2 option:selected').prop('selected', false);
                    $('#reading2').prop('required', false);
                    $('#reading2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Religious Education in Catholic Schools') {
                    $('#reg').show();
                    $('#reg2').prop('required', true);
                    $('#reg2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#reg').hide();
                    $('#reg2 option:selected').prop('selected', false);
                    $('#reg2').prop('required', false);
                    $('#reg2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Senior Division') {
                    $('#senior').show();
                    $('#senior2').prop('required', true);
                    $('#senior2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#senior').hide();
                    $('#senior2 option:selected').prop('selected', false);
                    $('#senior2').prop('required', false);
                    $('#senior2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Special Education') {
                    $('#spec').show();
                    $('#spec2').prop('required', true);
                    $('#spec2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#spec').hide();
                    $('#spec2 option:selected').prop('selected', false);
                    $('#spec2').prop('required', false);
                    $('#spec2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Teacher Librarian') {
                    $('#library').show();
                    $('#library2').prop('required', true);
                    $('#library2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#library').hide();
                    $('#library2 option:selected').prop('selected', false);
                    $('#library2').prop('required', false);
                    $('#library2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Teaching English Language Learners') {
                    $('#tell').show();
                    $('#tell2').prop('required', true);
                    $('#tell2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#tell').hide();
                    $('#tell2 option:selected').prop('selected', false);
                    $('#tell2').prop('required', false);
                    $('#tell2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Teaching Students who are Blind/Low Vision') {
                    $('#blind').show();
                    $('#blind2').prop('required', true);
                    $('#blind2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#blind').hide();
                    $('#blind2 option:selected').prop('selected', false);
                    $('#blind2').prop('required', false);
                    $('#blind2').prop('name', '');
                }

                if ($('#81474532365257 select[name="00N6A00000OrEop"] option:selected').val() == 'Visual Arts') {
                    $('#visual').show();
                    $('#visual2').prop('required', true);
                    $('#visual2').prop('name', '00N6A00000NKRjM');
                } else {
                    $('#visual').hide();
                    $('#visual2 option:selected').prop('selected', false);
                    $('#visual2').prop('required', false);
                    $('#visual2').prop('name', '');
                }
            });
        });


    // ]]></script>
<style>
 #g-recaptcha-response {
    display: block !important;
    position: absolute;
    margin: -78px 0 0 0 !important;
    width: 302px !important;
    height: 76px !important;
    z-index: -999999;
    opacity: 0;
}   
</style>

        </head>
        <body>
        <header id="masthead">
            <img src="images/logo.svg" alt="Western Eduction Logo">
        </header>
        <main>
        <?php
    }

    public static function getHero()
    {
        ?>
        <section class="hero">
            <h1>Distinguish Yourself with AQs and Certificates</h1>
            <h2>Boost Your Career in Education</h2>
            <a href="#more-info-form" class="btn white down">Learn More <img src="images/arrow.svg" alt="arrow"/></a>
        </section>
        <?php
    }

    public static function getDescription()
    {
        $text = array(
            "Here at Western we offer over 110 Additional Qualification Courses (AQs) as well as two post-degree certificates 
            to help you succeed in your teaching career. Designed for certified teachers, our AQ courses focus on the Ontario education curriculum. 
            Offered primarily online in a collaborative environment you gain flexibility as you stand out from the crowd, expand your knowledge and advance your career."
        );
        ?>
        <section class="description container-sm">
            <div class="text-wrapper">
                <?php foreach ($text as $t): ?>
                    <p><?php echo $t; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="image-wrapper">
                <div class="background">
                    <img src="./images/team.jpg" alt="Working Team image">
                </div>
                <div class="foreground">
                    <img src="./images/student.jpg" alt="Student Image">
                </div>
            </div>
        </section>
        <?php
    }

    public static function getForm()
    {
        ?>
        
        <section class="form" id="more-info-form">
            <div class="form-inner container">
                <h2>Have questions or would like more information?<span>Fill out the form:</span></h2>
                <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" class="formcontrol" id="81474532365257" method="POST">
                   	<!--#passthrough
	<input type=hidden name='captcha_settings' value='{"keyname":"Western_FOE_reCAPTCHA","fallback":"true","orgId":"00D6A000001kiPm","ts":""}'>
	#passthrough-->
                    <input name="oid" type="hidden" value="00D6A000001kiPm" />
                    <input name="retURL" type="hidden" value="https://www.edu.uwo.ca/recruitment/aspire/aspire-thank-you.html" />
                    <input id="lead_source" name="lead_source" type="hidden" value="Aspire Website" />
                    <!--<input name="debug" type="hidden" value="1" /><input name="debugEmail" type="hidden" value="fabousha@uwo.ca" />-->
                    
                    <div class="form-group">
                        <div class="input-wrapper">
                            <label for="fname">First Name *</label>
                            <input type="text" name="first_name" id="first_name" placeholder="ex: Johnathon" required>
                        </div>
                        <div class="input-wrapper">
                            <label for="lname">Last Name *</label>
                            <input type="text" name="last_name" id="last_name" placeholder="ex: Doe" required>
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <div class="input-wrapper">
                            <label for="email">E-mail *</label>
                            <input type="email" name="email" id="email" placeholder="ex: myname@example.com" required>
                        </div>
                        <div class="input-wrapper">
                            <label for="confirm_email">Confirm E-mail *</label>
                            <input type="email" id="confirm_email" name="confirm_email" autocomplete="off"
                                   placeholder="ex: myname@example.com"
                                   required>
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <div class="input-wrapper">
                            <label for="city">City *</label>
                            <input type="text" name="city" id="city" placeholder="ex: London" required>
                        </div>
                        <div class="input-wrapper">
                            <label for="country">Country *</label>
                            <div class="select-wrapper">
                                <select style="background-size:contain;" name="country" id="country" required>
                                    <?php echo (new markup)->getCountryDropDown(); ?>
                                </select>
                            </div>
                        </div>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <div class="input-wrapper">
                            <label for="00N6A00000OrEop">Subject*</label>
                            <div class="select-wrapper">
                                <select style="background-size:contain;" name="00N6A00000OrEop" id="00N6A00000OrEop" required>
                                    <option value="">-None-</option>
                                    <option value="Business Studies">Business Studies</option>
                                    <option value="Co-Operative Education">Co-Operative Education</option>
                                    <option value="Dramatic Arts">Dramatic Arts</option>
                                    <option value="Family Studies">Family Studies</option>
                                    <option value="French as a Second Language">French as a Second Language</option>
                                    <option value="Guidance and Career Education">Guidance and Career Education</option>
                                    <option value="Honour Specialist">Honour Specialist</option>
                                    <option value="Integration of Information and Computer Technology in Instruction">Integration of Information and Computer Technology in Instruction</option>
                                    <option value="Intermediate Division">Intermediate Division</option>
                                    <option value="Junior">Junior</option>
                                    <option value="Kindergarten">Kindergarten</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Primary">Primary</option>
                                    <option value="Reading">Reading</option>
                                    <option value="Religious Education in Catholic Schools">Religious Education in Catholic Schools</option>
                                    <option value="Senior Division">Senior Division</option>
                                    <option value="Special Education">Special Education</option>
                                    <option value="Teacher Librarian">Teacher Librarian</option>
                                    <option value="Teaching English Language Learners">Teaching English Language Learners</option>
                                    <option value="Teaching Students who are Blind/Low Vision">Teaching Students who are Blind/Low Vision</option>
                                    <option value="Visual Arts">Visual Arts</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-wrapper">
                            <label class="fieldOfStudy" id="fieldOfStudy" for="fieldOfStudy" style="display: none;">Field of Study*</label>

                            <!-- Business Field -->
                            <div class="bus" id="bus" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="bus2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="3213">Accounting Part 1</option>
                                        <option value="6264">Accounting Part 2</option>
                                        <option value="2169">Accounting Specialist</option>
                                        <option value="9163">Entrepreneurship Part 1</option>
                                        <option value="3540">Entrepreneurship Part 2</option>
                                        <option value="2217">Entrepreneurship Specialist</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Co-Operative Ed -->
                            <div class="coop" id="coop" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="coop2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="13269">Co-operative Education Part 1</option>
                                        <option value="5777">Co-operative Education Part 2</option>
                                        <option value="3846">Co-operative Education Specialist</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Drama Arts -->
                            <div class="da" id="da" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="da2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="10569">Dramatic Arts Part 1</option>
                                        <option value="5816">Dramatic Arts Part 2</option>
                                        <option value="7955">Dramatic Arts Specialist</option>
                                    </select>
                                </div>
                            </div>      
                            
                            <!-- Family Studies -->
                            <div class="fs" id="fs" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="fs2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="14868">Family Studies Part 1</option>
                                        <option value="3174">Family Studies Part 2</option>
                                        <option value="4575">Family Studies Specialist</option>
                                    </select>
                                </div>
                            </div>  

                            <!-- French -->
                            <div class="french" id="french" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="french2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="4527">French as a 2nd Language Part 1</option>
                                        <option value="7529">French as a 2nd Language Part 2</option>
                                        <option value="11756">French as a 2nd Language Specialist</option>
                                    </select>
                                </div>
                            </div>  

                            <!-- Guidance Career -->
                            <div class="gce" id="gce" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="gce2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="11036">Guidance and Career Part 1</option>
                                        <option value="11266">Guidance and Career Part 2</option>
                                        <option value="8366">Guidance and Career Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Honor Specialist -->
                            <div class="hs" id="hs" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="hs2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="7228">Honour Specialist - Business</option>
                                        <option value="7406">Honour Specialist - Chemistry</option>
                                        <option value="5834">Honour Specialist - Computer Studies</option>
                                        <option value="5946">Honour Specialist - Dramatic Arts</option>
                                        <option value="4378">Honour Specialist - English</option>
                                        <option value="14534">Honour Specialist - Environmental Science</option>
                                        <option value="8599">Honour Specialist - Family Studies</option>
                                        <option value="7724">Honour Specialist - French as a 2nd Language</option>
                                        <option value="10543">Honour Specialist - Health &amp; Physical Education</option>
                                        <option value="3451">Honour Specialist - History</option>
                                        <option value="7154">Honour Specialist - Mathematics</option>
                                        <option value="6336">Honour Specialist - Physics</option>
                                        <option value="14710">Honour Specialist - Religious Education in Catholic Schools</option>
                                        <option value="14702">Honour Specialist - Science</option>
                                        <option value="3136">Honour Specialist - Social Sciences</option>
                                        <option value="10639">Honour Specialist - Visual Arts</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Information Technology -->
                            <div class="ict" id="ict" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="ict2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="11968">Information and Communications Technology Part 1</option>
                                        <option value="7178">Information and Communications Technology Part 2</option>
                                        <option value="8799">Information and Communications Technology Specialist</option>
                                        <option value="8926">Integration of Information and Computer Technology in Instruction Part 1</option>
                                        <option value="4191">Integration of Information and Computer Technology in Instruction Part 2</option>
                                        <option value="5154">Integration of Information and Computer Technology in Instruction Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Intermediate Division -->
                            <div class="int" id="int" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="int2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="21777">Intermediate Division - Business Studies</option>
                                        <option value="2892">Intermediate Division - Computer Studies</option>
                                        <option value="9703">Intermediate Division - Dramatic Arts</option>
                                        <option value="14192">Intermediate Division - English</option>
                                        <option value="20469">Intermediate Division - Environmental Science</option>
                                        <option value="14842">Intermediate Division - Family Studies</option>
                                        <option value="18210">Intermediate Division - French as a 2nd Language</option>
                                        <option value="14183">Intermediate Division - Geography</option>
                                        <option value="14203">Intermediate Division - Health &amp; Physical Education</option>
                                        <option value="3859">Intermediate Division - Mathematics</option>
                                        <option value="8404">Intermediate Division - Music: Vocal</option>
                                        <option value="14708">Intermediate Division - Religious Education in Catholic Schools</option>
                                        <option value="14606">Intermediate Division - Science: General</option>
                                        <option value="6717">Intermediate Division - Visual Arts</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Junior -->
                            <div class="jd" id="jd" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="jd2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="13431">Junior Division</option>
                                        <option value="13206">Junior Education Part 1</option>
                                        <option value="11267">Junior Education Part 2</option>
                                        <option value="7090">Junior Education Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Kindergarten -->
                            <div class="kd" id="kd" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="kd2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="10779">Kindergarten Part 1</option>
                                        <option value="24464">Kindergarten Part 2</option>
                                        <option value="24463">Kindergarten Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Math -->
                            <div class="math" id="math" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="math2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="6871">Math (P/J) Part 1</option>
                                        <option value="11782">Math (P/J) Part 2</option>
                                        <option value="10806">Math (P/J) Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Primary -->
                            <div class="primary" id="primary" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="primary2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="9055">Primary Division</option>
                                        <option value="7377">Primary Education Part 1</option>
                                        <option value="10996">Primary Education Part 2</option>
                                        <option value="8758">Primary Education Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Reading -->
                            <div class="reading" id="reading" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="primary2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="12266">Reading Part 1</option>
                                        <option value="5752">Reading Part 2</option>
                                        <option value="4824">Reading Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Religious Education -->
                            <div class="reg" id="reg" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="reg2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="17881">Religious Education in Catholic Schools Part 1</option>
                                        <option value="17882">Religious Education in Catholic Schools Part 2</option>
                                        <option value="17883">Religious Education in Catholic Schools Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Senior Division -->
                            <div class="senior" id="senior" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="senior2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="6913">Senior Division - Biology</option>
                                        <option value="21776">Senior Division - Business Studies General</option>
                                        <option value="12770">Senior Division - Chemistry</option>
                                        <option value="8393">Senior Division - Computer Studies</option>
                                        <option value="6080">Senior Division - Dramatic Arts</option>
                                        <option value="9574">Senior Division - Economics</option>
                                        <option value="14193">Senior Division - English</option>
                                        <option value="14683">Senior Division - Family Studies</option>
                                        <option value="12779">Senior Division - French as a Second Language</option>
                                        <option value="14204">Senior Division - Health &amp; Physical Education</option>
                                        <option value="14556">Senior Division - History</option>
                                        <option value="12926">Senior Division - Law</option>
                                        <option value="8151">Senior Division - Mathematics</option>
                                        <option value="3590">Senior Division - Politics</option>
                                        <option value="14709">Senior Division - Religious Education in Catholic Schools</option>
                                        <option value="14701">Senior Division - Science: General</option>
                                        <option value="11972">Senior Division - Social Sciences</option>
                                        <option value="4719">Senior Division - Visual Arts</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Special Education -->
                            <div class="spec" id="spec" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="spec2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="13002">Special Education Part 1</option>
                                        <option value="10842">Special Education Part 2</option>
                                        <option value="9808">Special Education Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Library -->
                            <div class="library" id="library" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="library2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="4255">Teacher Librarian Part 1</option>
                                        <option value="13142">Teacher Librarian Part 2</option>
                                        <option value="7462">Teacher Librarian Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Teaching Eng Learners -->
                            <div class="tell" id="tell" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="tell2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="7846">Teaching English Language Learners Part 1</option>
                                        <option value="6395">Teaching English Language Learners Part 2</option>
                                        <option value="10705">Teaching English Language Learners Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Blind Low Vision -->
                            <div class="blind" id="blind" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="blind2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="6614">Teaching Students who are Blind/Low Vision Part 1</option>
                                        <option value="6226">Teaching Students who are Blind/Low Vision Part 2</option>
                                        <option value="11430">Teaching Students who are Blind/Low Vision Specialist</option>
                                    </select>
                                </div>
                            </div> 

                            <!-- Visual Arts -->
                            <div class="visual" id="visual" style="display: none;">
                                <div class="select-wrapper">
                                    <select class="fields required" id="visual2" name="" style="background-size:contain;">
                                        <option value="">-None-</option>
                                        <option value="17884">Visual Arts Part 1</option>
                                        <option value="8589">Visual Arts Part 2</option>
                                        <option value="13350">Visual Arts Specialist</option>
                                    </select>
                                </div>
                            </div> 
                        </div>  <!-- .input-wrapper -->
                    </div>  <!-- .form-group -->

                    <div class="form-group checkbox">
                        <span class="checkbox-wrapper">
                            <input type="checkbox" id="consent" value="1" name="00N6A00000NK2B9">
                            <span class="customChkBx"></span>
                        </span>
                        <label for="consent" class="checkbox-text">I would like to receive further information from
                            Western University's Faculty of Education</label>
                    </div>
					<div class="form-group">
					    <div class="g-recaptcha" data-sitekey="6LcecukUAAAAAJXkGGbzcTThm0SxzW6CFjJ8fw-c"></div>
					</div>
					
					<!-- .form-group.checkbox -->
                    <div class="form-group submit">
                        <input type="submit" class="btn purple" value="Submit Form">
                    </div><!-- .form-group -->
                </form><!-- #getMoreInfo -->
            </div>
        </section>
        <?php
    }

    public static function getCards()
    {

        $cards = array(
            array(
                'img' => 'Solve-01.svg',
                'heading' => 'Resume Building',
                'text' => 'Enhance your knowledge base to open new career opportunities.'
            ),
            array(
                'img' => 'Financial.svg',
                'heading' => 'Pay Increase',
                'text' => 'Gain critical professional development credit to advance up the pay scale. '
            ),
            array(
                'img' => 'OnlineLearning-01.svg',
                'heading' => 'Online Format',
                'text' => 'Maintain your flexibility with courses delivered online.'
            ),
            array(
                'img' => 'Library.svg',
                'heading' => 'Choice of 110+ Courses',
                'text' => 'Expansive course offerings that align with your individual needs.'
            )
        );

        ?>
        <section class="banner-cards">
            <div class="banner">
                <h2>Why Choose ASPirE AQ’s?</h2>
                <p>ASPirE (Advance Studies in Professional Education) is Western's Faculty of Education's 
                    commitment to assist teachers in their continued education journey. We have a wide variety of programs including ABQs, 
                    Three-Part AQs and Honour Specialist courses delivered in a flexible online format. Our certificates also provide unique 
                    opportunities to bolster your resume. Explore how you can take the next step in your career here at Western’s Faculty of Education.</p>
            </div>
            <div class="card-wrapper">
                <div class="cards container-sm">
                    <?php foreach ($cards as $card): ?>
                        <div class="card">
                            <img style="height:82px; width: 81px;" src="images/<?php echo $card['img']; ?>" alt="<?php echo $card['heading']; ?> Icon">
                            <h3 class="roboto"><?php echo $card['heading']; ?></h3>
                            <p><?php echo $card['text']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }

    public static function getTestimonialSlider()
    {

        $testimonials = array(
            array(
                'heading' => 'What I like about my MPEd program is the professors really understand that we are all professionals with more happening in our lives. They are very understanding of busy times and work/school life balance.',
                'img' => 'Grace-Kelly.jpg',
                'img-prev' => 'Manjeet-Dhillion.jpg',
                'img-next' => 'Jocelyn-GreyWall.jpg',
                'info' => array(
                    'name' => 'Grace Kelly',
                    'position' => 'MPEd in Educational Leadership',
                    'date' => '2020 August'
                )
            ),
            array(
                'heading' => 'My MPEd program helped me along my path by helping me to continue my education while I was on maternity leave. It also helped me increase my knowledge from my Bachelor of Education program.',
                'img' => 'Jocelyn-GreyWall.jpg',
                'img-prev' => 'Grace-Kelly.jpg',
                'img-next' => 'Katherine-Laid.jpg',
                'info' => array(
                    'name' => 'Jocelyn Brewer',
                    'position' => 'MPEd',
                    'date' => '2018 Graduate'
                )
            ),
            array(
                'heading' => 'It is incredibly rewarding to be involved in the field of Equity, Diversity and Social Justice. The course has such meaningful and applicable content which is relevant in today’s world.',
                'img' => 'Katherine-Laid.jpg',
                'img-prev' => 'Jocelyn-GreyWall.jpg',
                'img-next' => 'Manjeet-Dhillion.jpg',
                'info' => array(
                    'name' => 'Katherine Laid',
                    'position' => 'MPEd',
                    'date' => 'August 2020'
                )
            ),
            array(
                'heading' => 'What I like about my MPEd program is the way the courses have connected directly to my professional and personal life. It has also allowed me to grow as an educator in many positive ways. Our online experience has been great as everyone in the program is open, respectful and take pride in sharing their personal experiences.',
                'img' => 'Manjeet-Dhillion.jpg',
                'img-prev' => 'Katherine-Laid.jpg',
                'img-next' => 'Grace-Kelly.jpg',
                'info' => array(
                    'name' => 'Manjeet Dhillion',
                    'position' => 'MPEd',
                    'date' => 'August 2020'
                )
            )
        );

        ?>
        <section class="testimonials" id="slider">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="testimonial">
                    <div class="testimonial-inner container-sm">
                        <h2>"<?php echo $testimonial['heading']; ?>"</h2>
                        <div class="images">
                            <div class="profile-image prev-image">
                                <img src="images/slides/<?php echo $testimonial['img-prev']; ?>"
                                     alt="Previous Image">
                            </div>
                            <div class="profile-image">
                                <img src="images/slides/<?php echo $testimonial['img']; ?>"
                                     alt="<?php echo $testimonial['info']['name']; ?>'s Image">
                            </div>
                            <div class="profile-image next-image">
                                <img src="images/slides/<?php echo $testimonial['img-next']; ?>"
                                     alt="Next Image">
                            </div>
                        </div>
                        <div class="info">
                            <h3 class="name"><?php echo $testimonial['info']['name']; ?></h3>
                            <p class="position"><?php echo $testimonial['info']['position']; ?></p>
                            <p class="date"><?php echo $testimonial['info']['date']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
        <?php
    }

    public static function getFaq()
    {
        $faqs = array(
            array(
                'q' => 'How much does an Additional Qualification course cost?',
                'a' => 'ADDTIONAL BASIC AQs - $675 THREE-PART AQs - $675 HONOUR SPECIALIST - $725 '
            ),
            array(
                'q' => 'When do courses start?',
                'a' => 'SEASONAL SESSIONS Various start dates available in spring, summer, fall and winter '
            ),
            array(
                'q' => 'How are courses delivered?',
                'a' => 'ONLINE*'
            ),
            array(
                'q' => 'What is the length of an AQ course?',
                'a' => '125 HOURS'
            ),
            array(
                'q' => 'Do you have the ability to maintain full-time employment?',
                'a' => 'YES**'
            )
        );

        $disclaimers = array(
            '* With the exception of Teaching students who are Blind/Low Vision.',
            '** 40 hour/week commitment in the summer',
            // '*** Limited MPEd in the Fields of TESOL and ISL'
        );

        ?>
        <section class="faq">
            <div class="container-sm">
                <?php foreach ($faqs as $faq): ?>
                    <div class="collapse">
                        <h3 class="question"><?php echo $faq['q']; ?></h3>
                        <div class="content"><?php echo $faq['a']; ?></div>
                    </div>
                <?php endforeach; ?>
                <div class="disclaimers">
                    <?php foreach ($disclaimers as $disclaimer): ?>
                        <p><?php echo $disclaimer; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }

    public static function getLearnMore()
    {
        ?>
        <section class="learn-more">
            <h2>Ready to learn more about ASPirE AQ's?</h2>
            <a href="#more-info-form" class="btn white up">Get Started Today <img src="images/arrow.svg"
                                                                                  alt="arrow"/></a>
        </section>
        <?php
    }

    public static function getFooter()
    {
        ?>
        </main>
        <footer>
            <p class="copyright">&copy; 1878 - <?php echo date('Y'); ?> Western University</p>
        </footer>
        <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.0/flickity.pkgd.min.js"></script>
        <script type="text/javascript" src="scripts/app.js"></script>
        </body>
        </html>
        <?php
    }

    private function getFieldsOfStudy()
    {
        return '<option disabled="disabled" hidden="" selected="selected" value="">- Select -</option>
                <option value="MP455AB">Field of Applied Behavior Analysis</option>
                <option value="MP453EQ">Field of Equity, Diversity, and Social Justice</option>              
                <option value="MP454CS">Field of Curriculum and Pedagogy</option>
                <option value="MP454EC">Field of Early Childhood Education</option>
                <!--<option value="MP454FR">Field of French Education</option>-->
                <option value="MP454M">Field of Mathematics Education</option>
                <option value="MP454TE">Field of Teaching English to Speakers of Other Languages (TESOL)</option>
                <option value="Gen-MPEd">General MPEd Information</option>
                <option value="MP453EL">Field of Educational Leadership</option>
                <option value="MP453IL">Field of International School Leadership</option>
                <option value="MP455EX">Field of Teaching Students with Exceptionalities</option>
                <option value="MP456IE">Field of International Education</option>';
    }

    private function getCountryDropDown()
    {
        return '<option disabled="disabled" hidden="" selected="selected" value="">- Select -</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Aland Islands">Aland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote d\'Ivoire">Cote d’Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curacao">Curaçao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People\'s Republic of">Korea, Democratic People’s Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People\'s Democratic Republic">Lao People’s Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Barthélemy">Saint Barthélemy</option>
                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-Leste">Timor-Leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>';

    }

}
