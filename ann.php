<html>
<!--
### COPYRIGHT XLASH 2014 ###

### Tous droits réservés ###
### Auteur : Kida Jean-Sébastien ###
### Contact : js.kida@gmail.com ###
-->
                <meta charset="UTF-8">
                <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
                <meta name="author" content="XLASH - xlashdev.fr">
                <meta name="categories" content="Emploi">
                <meta name="robots" content="INDEX, FOLLOW">
                <meta name="revisit-after" content="1 Day">
                <meta name="expires" content="Thu, 01 May 2014 16:58:54 GMT">
                <meta name="generator" content="fXLASH 1.0 - HTML5  - Framework">
                <meta name="description" content="Moteur de recherche d'emploi de la Haute-Vienne">
                
               
                
                <title>Les dernières Annonces</title>
                    <div id="bgann"> 
    <head>
                <center><img src="img/logo.png" alt=""/></center>
                    
                <!-- import css / js -->
                <link rel="stylesheet" type="text/css" href="css/style.css">
                <!-- editeur CMS -->
                <script src="js/create.js" type="text/javascript"></script>
                <!-- import jQuery 1.9.1 via CDN -->
                <script src="//cdn.jsdelivr.net/jquery/1.9.1/jquery-1.9.1.js"></script>
                <script src="//cdn.jsdelivr.net/jquery/1.9.1/jquery-1.9.1.min.js"></script>
                <script src="//cdn.jsdelivr.net/jquery/1.9.1/jquery.js"></script>
                <script src="//cdn.jsdelivr.net/jquery/1.9.1/jquery.min.js"></script>
             
                <!-- menu --> 
                <center>
                    <ul id="menu-bar">
                    <li class="active"><a href="http://www.emploi87.com">Emploi87</a></li>
                    <li><a href="http://www.emploi87.com/ann.php">Annonces</a>                  
                    <li><a href="http://www.emploi87.com/contact.php">Contactez-nous</a></li>
                </ul>
                </center>
                    </div>
    </head>           
            <body>
                                    
                <div id="ann">
                                               
                <script>
                    (function() {
                    var cx = '011322310957145596424:mzi5f-zhzp4';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                    '//www.google.com/cse/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                    })();
                </script>
                <gcse:search></gcse:search>                
                   
                <br>
                <!-- loader css -->
                    <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                    </div>
                <br>
               <blockquote>

               <!-- load parser php / update des flux -->
               <?php
               
               include("parser.inc.php");
                              
               ?>
               
               
                </blockquote><br><br>
                    </div>
                    
                    <footer>
                    <center>
                    <style type='text/css'>#indJobContent{padding-bottom:5px;}#indJobContent .company_location{font-size:11px;overflow:hidden;display:block;}#indJobContent.wide .job{display:block;float:left;margin-right:5px;width:135px;overflow:hidden}#indeed_widget_wrapper{position:relative;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:13px;font-weight:normal;line-height:18px;padding:10px;height:auto;overflow:hidden;}#indeed_widget_header{font-size:18px;padding-bottom:5px;}#indeed_search_wrapper{clear:both;font-size:12px;margin-top:5px;padding-top:5px;}#indeed_search_wrapper label{font-size:12px;line-height:inherit;text-align:left;margin-right:5px;}#indeed_search_wrapper input[type='text']{width:500px;font-size:11px;}#indeed_search_wrapper #qc{float:left;}#indeed_search_wrapper #lc{float:right;}#indeed_search_wrapper.stacked #qc,#indeed_search_wrapper.stacked #lc{float:none;clear:both;}#indeed_search_wrapper.stacked input[type='text']{width:550px;}#indeed_search_wrapper.stacked label{display:block;padding-bottom:5px;}#indeed_search_footer{width:295px;padding-top:5px;clear:both;}#indeed_link{position:absolute;bottom:1px;right:5px;clear:both;font-size:11px;}#indeed_link a{text-decoration:none;}#results .job{padding:1px 0px;}#pagination{clear:both;}</style><style type='text/css'>#indeed_widget_wrapper{width:500px;height:500px;background:#ffffff;}#indeed_widget_wrapper{border:1px solid #DDDDDD;}#indJobContent,#indeed_search_wrapper{border-top:1px solid #DDDDDD;}#indJobContent a{color:#00c;}#indeed_widget_header{color:#000000;}</style>
                    <script type='text/javascript'>
                    var ind_pub = '6109709619095042';
                    var ind_el = 'indJobContent';
                    var ind_pf = '';
                    var ind_q = '';
                    var ind_l = 'haute vienne';
                    var ind_chnl = 'haute vienne';
                    var ind_n = 12;
                    var ind_d = 'http://www.indeed.fr';
                    var ind_t = 40;
                    var ind_c = 30;
                    </script>

                    <script type='text/javascript' src='http://www.indeed.fr/ads/jobroll-widget-v3.js'></script>
                    <div id='indeed_widget_wrapper' style=''>
                    <div id='indeed_widget_header'>Offres en LIVE</div>
                    <div id='indJobContent' class=""></div>
                    <script type='text/javascript'>
                    function clearDefaults(){
                    var formInputs=document.getElementById('indeed_jobform').elements;
                    for(var i=0;i<formInputs.length;i++){
                    if(formInputs[i].value=='métier, mots-clés' || formInputs[i].value=='ville, département'){
                    formInputs[i].value='';
                    }
                    }
                    }
                    </script>
                    </footer>

                <label id="Actu"><br><center><b><p>.. Les annonces sont actualisées en temps réel ..</p></b></center></label> 
                        <script type="text/javascript">
                        var signe = -1;
                        var clignotementFading = function(){
                        var obj = document.getElementById('Actu');
                        if (obj.style.opacity >= 0.96){
                        signe = -1;
                            }
                        if (obj.style.opacity <= 0.04){
                        signe = 1;
                            }
                        obj.style.opacity = (obj.style.opacity * 1) + (signe * 0.04);
                          };
                        periode = setInterval(clignotementFading, 85 );
                        clignotementFading()
                        </script> 
                    
                    <div id="bp">
                        
                        <center><p>── Raffraichissement automatique de l'onglet, toutes les 15 min ──</p></center>
                    </div>              
                        
                        
                    </div>
    
                    <div class="loading-container">
                    <div class="loading">
                    <div class="l1">
                    <div></div>
                    </div>
                    <div class="l2">
                    <div></div>
                    </div>
                    <div class="l3">
                    <div></div>
                    </div>
                    <div class="l4">
                    <div></div>
                    </div>
                    </div>
                    </div>
                    
                   

<!-- meta de refresh pour retour sur la page annonces actualisee -->
<meta http-equiv="refresh" content="900"; url=http://emploi87.com/ann.php">


                   </div>
                                      
                </body>
             </html>
          
             
         