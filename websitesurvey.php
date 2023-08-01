

<!DOCTYPE html>
<html dir="rtl" lang="ar">
   <head>
      <title>Abu Dhabhi Media</title>
      <!-- header head -->
      <?php
         include_once 'includes/header-includes.php';
         ?>
      <!--close  header head -->
   </head>
   <body>
      <div id="wrapper">
         <div id="main-contant" class="main-contant inner-page">
            <!-- Header -->
            <?php
               include_once 'includes/header.php';
               ?>
            <!--close Header -->
            <!--breadcrumbs-->
            <?php
               include_once 'includes/breadcrumb.php';
               ?>
            <!--breadcrumbs end-->
            <section id="privacy" class="privacy ">
               <div class="container">
                  <div id="ctl00_ContentPlaceHolder1_PnlAllData" class="inner-container">
                     <div class="surver-stage surver-stage-input surver-stage-2">
                        <h2>الاسم <span class="text-danger">*</span></h2>
                        <div class="surverform-input">
                           <input name="ctl00$ContentPlaceHolder1$txtName" type="text" id="ctl00_ContentPlaceHolder1_txtName" placeholder="الاسم">
                           <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1" class="alert-danger" style="color:Red;display:none;">الاسم</span>
                        </div>
                     </div>
                     <div class="surver-stage surver-stage-input surver-stage-2">
                        <h2>البريد الإلكتروني <span class="text-danger">*</span></h2>
                        <div class="surverform-input">
                           <input name="ctl00$ContentPlaceHolder1$txtEmail" type="text" id="ctl00_ContentPlaceHolder1_txtEmail" placeholder="البريد الإلكتروني">
                           <span id="ctl00_ContentPlaceHolder1_reqtxtMobileOrEmail" class="alert-danger" style="color:Red;display:none;">البريد الإلكتروني</span>
                        </div>
                     </div>
                     <div class="surver-stage surver-stage-input surver-stage-2">
                        <h2>رقم الجوال <span class="text-danger">*</span></h2>
                        <div class="surverform-input">
                           <input name="ctl00$ContentPlaceHolder1$txtMobile" type="text" id="ctl00_ContentPlaceHolder1_txtMobile" class="form-fild">
                           <small>مثال : <span style="direction:ltr; display: inline-block">97150*******</span></small>
                           <span id="ctl00_ContentPlaceHolder1_RegularExpressionValidator1" class="alert alert-danger" style="color:Red;display:none;">من فضلك قم بإدخال رقم الجوال بشكل صحيح</span>
                        </div>
                     </div>
                     <div class="surver-stage surver-stage-radio surver-stage-4">
                        <h2>ما مدى رضاكم عن تصميم الموقع الإلكتروني؟ <span class="text-danger">*</span></h2>
                        <div class="surverform-radio">
                           <div class="surverform-inputradio">
                              <input id="ctl00_ContentPlaceHolder1_rdQuest1_1" type="radio" name="ctl00$ContentPlaceHolder1$Quest1VGroup" value="rdQuest1_1">
                              <label for="ctl00_ContentPlaceHolder1_rdQuest1_1" id="ctl00_ContentPlaceHolder1_lbl1"><i class="fico-smile"><img src="images/happy-color.png"></i><span>ممتاز</span></label>
                           </div>
                           <div class="surverform-inputradio">
                              <input id="ctl00_ContentPlaceHolder1_rdQuest1_2" type="radio" name="ctl00$ContentPlaceHolder1$Quest1VGroup" value="rdQuest1_2">
                              <label for="ctl00_ContentPlaceHolder1_rdQuest1_2" id="ctl00_ContentPlaceHolder1_lbl2"><i class="fico-meh"><img src="images/medium-color.png"></i><span>جيد</span></label>
                           </div>
                           <div class="surverform-inputradio">
                              <input id="ctl00_ContentPlaceHolder1_rdQuest1_3" type="radio" name="ctl00$ContentPlaceHolder1$Quest1VGroup" value="rdQuest1_3">
                              <label for="ctl00_ContentPlaceHolder1_rdQuest1_3" id="ctl00_ContentPlaceHolder1_lbl_3"><i class="fico-frown"><img src="images/sad-color.png"></i><span>ضعيف</span></label>
                           </div>
                        </div>
                        <span id="ctl00_ContentPlaceHolder1_CustomValidator1" class="alert-danger" style="color:Red;display:none;">من فضلك اختر إجابة</span>
                        <script type="text/javascript">
                           function CustomValidator1_ClientValidate(source,args)
                           {   
                               if(document.getElementById("ctl00_ContentPlaceHolder1_rdQuest1_1").checked || document.getElementById("ctl00_ContentPlaceHolder1_rdQuest1_2").checked || document.getElementById("ctl00_ContentPlaceHolder1_rdQuest1_3").checked)
                               {
                                   args.IsValid = true;
                               }
                               else
                               {
                                   args.IsValid = false;
                               }
                           }
                           //-->
                        </script>
                     </div>
                     <div class="surver-stage surver-stage-radio surver-stage-5">
                        <h2>ما مدى رضاكم عن سهولة الوصول إلى المحتوى أو المعلومات المطلوبة عبر الموقع الإلكتروني ؟ <span class="text-danger">*</span></h2>
                        <div class="surverform-radio">
                           <div class="surverform-inputradio">
                              <input id="ctl00_ContentPlaceHolder1_rdQuest2_1" type="radio" name="ctl00$ContentPlaceHolder1$Quest2VGroup" value="rdQuest2_1">
                              <label for="ctl00_ContentPlaceHolder1_rdQuest2_1" id="ctl00_ContentPlaceHolder1_Label1"><i class="fico-smile"><img src="images/happy-color.png"></i><span>ممتاز</span></label>
                           </div>
                           <div class="surverform-inputradio">
                              <input id="ctl00_ContentPlaceHolder1_rdQuest2_2" type="radio" name="ctl00$ContentPlaceHolder1$Quest2VGroup" value="rdQuest2_2">
                              <label for="ctl00_ContentPlaceHolder1_rdQuest2_2" id="ctl00_ContentPlaceHolder1_Label2"><i class="fico-meh"><img src="images/medium-color.png"></i><span>جيد</span></label>
                           </div>
                           <div class="surverform-inputradio">
                              <input id="ctl00_ContentPlaceHolder1_rdQuest2_3" type="radio" name="ctl00$ContentPlaceHolder1$Quest2VGroup" value="rdQuest2_3">
                              <label for="ctl00_ContentPlaceHolder1_rdQuest2_3" id="ctl00_ContentPlaceHolder1_Label3"><i class="fico-frown"><img src="images/sad-color.png"></i><span>ضعيف</span></label>
                           </div>
                        </div>
                        <span id="ctl00_ContentPlaceHolder1_CustomValidator2" class="alert-danger" style="color:Red;display:none;">من فضلك اختر إجابة</span>
                        <script type="text/javascript">
                           function CustomValidator2_ClientValidate(source,args)
                           {   
                               if(document.getElementById("ctl00_ContentPlaceHolder1_rdQuest2_1").checked || document.getElementById("ctl00_ContentPlaceHolder1_rdQuest2_2").checked || document.getElementById("ctl00_ContentPlaceHolder1_rdQuest2_3").checked)
                               {
                                   args.IsValid = true;
                               }
                               else
                               {
                                   args.IsValid = false;
                               }
                           }
                           //-->
                        </script>
                     </div>
                     <div class="surver-stage surver-stage-radio surver-stage-5">
                        <h2>ما مدى رضاكم عن سرعة الرد عند التواصل عبر صفحة "تواصل معنا" مع أبوظبي للإعلام <span class="text-danger">*</span></h2>
                        <div class="surverform-radio">
                           <div class="surverform-inputradio">
                              <input id="ctl00_ContentPlaceHolder1_rdQuest3_1" type="radio" name="ctl00$ContentPlaceHolder1$Quest3VGroup" value="rdQuest3_1">
                              <label for="ctl00_ContentPlaceHolder1_rdQuest3_1" id="ctl00_ContentPlaceHolder1_Label4"><i class="fico-smile"><img src="images/happy-color.png"></i><span>ممتاز</span></label>
                           </div>
                           <div class="surverform-inputradio">
                              <input id="ctl00_ContentPlaceHolder1_rdQuest3_2" type="radio" name="ctl00$ContentPlaceHolder1$Quest3VGroup" value="rdQuest3_2">
                              <label for="ctl00_ContentPlaceHolder1_rdQuest3_2" id="ctl00_ContentPlaceHolder1_Label5"><i class="fico-meh"><img src="images/medium-color.png"></i><span>جيد</span></label>
                           </div>
                           <div class="surverform-inputradio">
                              <input id="ctl00_ContentPlaceHolder1_rdQuest3_3" type="radio" name="ctl00$ContentPlaceHolder1$Quest3VGroup" value="rdQuest3_3">
                              <label for="ctl00_ContentPlaceHolder1_rdQuest3_3" id="ctl00_ContentPlaceHolder1_Label6"><i class="fico-frown"><img src="images/sad-color.png"></i><span>ضعيف</span></label>
                           </div>
                        </div>
                        <span id="ctl00_ContentPlaceHolder1_CustomValidator3" class="alert-danger" style="color:Red;display:none;">من فضلك اختر إجابة</span>
                        <script type="text/javascript">
                           function CustomValidator3_ClientValidate(source,args)
                           {   
                               if(document.getElementById("ctl00_ContentPlaceHolder1_rdQuest3_1").checked || document.getElementById("ctl00_ContentPlaceHolder1_rdQuest3_2").checked || document.getElementById("ctl00_ContentPlaceHolder1_rdQuest3_3").checked)
                               {
                                   args.IsValid = true;
                               }
                               else
                               {
                                   args.IsValid = false;
                               }
                           }
                           //-->
                        </script>
                     </div>
                     <div class="surver-stage surver-stage-comment surver-stage-6">
                        <h2>هل هناك أي اقتراحات أو ملاحظات لتطوير الموقع الإلكتروني؟ إذا كانت الإجابة بنعم، يرجى ذكرها</h2>
                        <div class="surverform-comment">
                           <textarea name="ctl00$ContentPlaceHolder1$txtQuestion5" rows="2" cols="20" id="ctl00_ContentPlaceHolder1_txtQuestion5" placeholder="هل هناك أي اقتراحات أو ملاحظات لتطوير الموقع الإلكتروني؟ إذا كانت الإجابة بنعم، يرجى ذكرها"></textarea>
                        </div>
                     </div>
                     <div class="surver-stage surver-stage-submit surver-stage-7">
                        <a id="ctl00_ContentPlaceHolder1_LinkSubmit" class="form-btn" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$LinkSubmit&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">إرسال</a>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <!--Content-->
         <!--footer -->
         <?php
            include_once 'includes/footer.php';
            ?>
         <!--close footer -->
      </div>
      <!--footer scrpit -->
      <?php
         include_once 'includes/footer-includes.php';
         ?>
      <!--close footer scrpit -->
   </body>
</html>

