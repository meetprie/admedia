<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <title>Abu Dhabhi Media</title>

        <!-- header head -->
        <?php include_once 'includes/header-includes.php';?>
        <?php include_once 'includes/footer-includes.php'; ?>
        <!--close  header head -->

        <script type="text/javascript">
            function _(el) {
              return document.getElementById(el);
            }

            function uploadFile() {
              var file = _("file1").files[0];
              // alert(file.name+" | "+file.size+" | "+file.type);
              var formdata = new FormData();
              formdata.append("file1", file);
              var ajax = new XMLHttpRequest();
              ajax.upload.addEventListener("progress", progressHandler, false);
              ajax.addEventListener("load", completeHandler, false);
              ajax.addEventListener("error", errorHandler, false);
              ajax.addEventListener("abort", abortHandler, false);
              ajax.open("POST", "file_upload_parser.php");
              //use file_upload_parser.php from above url
              ajax.send(formdata);
            }

            function progressHandler(event) {
                jQuery('.drop-zone').removeClass('uploading');
                jQuery('.drop-zone').removeClass('uploading-completed');
              _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
              var percent = (event.loaded / event.total) * 100;
              _("progressBar").value = Math.round(percent);
              _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
               jQuery('.drop-zone').addClass('uploading');
            }

            function completeHandler(event) {
                jQuery('.drop-zone').addClass('uploading-completed');
              _("status").innerHTML = event.target.responseText;
              _("progressBar").value = 0; //wil clear progress bar after successful upload
            }

            function errorHandler(event) {
              _("status").innerHTML = "Upload Failed";
            }

            function abortHandler(event) {
              _("status").innerHTML = "Upload Aborted";
            }

            //option code
            //next-click
            jQuery(document).on("click", ".next-step-click", function () {
                jQuery('html,body').animate({
                    scrollTop: jQuery(".step-form-progress").offset().top - 100},
                '1500');
                jQuery(this).parents('.content-hub-form').addClass('show-step-two');
                jQuery('.step-two').addClass('s-active');
            });
        </script>
        <!--close footer scrpit -->
    </head>

    <body>
        <div id="wrapper">
            <div id="main-contant" class="main-contant inner-page brad-page content-hub">
                <!-- Header -->
                <?php
				    include_once 'includes/header-en.php';
			     ?>
                <!--close Header -->  

                <section id="brand-banner" class="brand-banner">
                    <div class="brand-banner-video">
                        <img class="lozad" data-src="images/content-hub-bg.jpg">
                        <div class="banner-logo">
                            <img class="lozad" data-src="images/content-logo.jpg">
                        </div>
                    </div>
                </section>

                <?php
                    include_once 'includes/breadcrumb.php';
                ?> 

                <section id="content-hub-sec" class="content-hub-sec">
                    <div class="container">
                        <div class="content-hub">
                            <div class="sec-heading">
                                <h2 class="title">Yothmla Aans</h2>
                            </div>
                            <div class="bouble-bribe-info">
                                <div class="bouble-info-text">
                                    <p>تالئاعلاو بابشلا نم روهمجلا فدهتسي ىوتحم مدقتُ ةماع ةيهيفرت ةانق يهو ،مالعإلل يبظوبأ يف يبظوبأ نويزفلت تاونق ةكبشل ةعباتلا تاونقلا ىدحإ "يبظوبأ" ةانق دع .ايقيرفأ لامشو طسوألا قرشلا ةقطنم يف ،ةيبرعلا  </p>

                                    <p>تامامتها شقاني نومضم ريفوت بناج ىلإ ،نمآو قوثومو يلعافتو ركتبم بولسأب عمتجملا تائف فلتخم يكاحت يتلا ةيرصحلا ةيهيفرتلاو ةيماردلا لامعألا ةانقلا ىوتحم  نمضتيو .يرصعلا ةايحلا بولسأو ةأرملا</p>

                                    <p>ينورتكلإلا اهعقوم 2020 ماع يبظوبأ نويزفلت تاونق ةكبش قالطإ ةداعإ نم ةديفتسم ،يعامتجالا لصاوتلا لئاسوو ةيمقرلا تاصنملا ىلع اهاوتحم ثب يف يبظوبأ ةانق زكرتو ةمدخ لالخ نم ةكبشلا تالسلسمو جمارب عيمج ةعباتم ةيناكمإ عم رشابملا ثبلا ةينقت كلذ يف امب ،اهتاونق عيمجل ةيمقر تاقيبطت صيصخت بناج ىلإ ،ةديدج ةلحب ."يالب لجوج"و "روتس لبآ"و "يف يت لبآو" "يف يت ديوردنآ" تاصنم ربع حاتملا ةينويزفلتلا اهتاونق عيمجل "ADTV" قيبطت قالطإو ،"Catch up"</p>
                                </div>
                            </div>

                            <div class="content-hub-bran-logo">
                                <ul>
                                    <li>
                                        <a href="#0" class="content-bran-box">
                                            <img class="lozad" data-src="images/brand/Vector-4.png" alt="alittihad">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="content-bran-box">
                                            <img class="lozad" data-src="images/brand/Vector-2.png" alt="majid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="content-bran-box">
                                            <img class="lozad" data-src="images/brand/Vector-1.png" alt="zahratalkhaleej">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="content-bran-box">
                                            <img class="lozad" data-src="images/brand/Vector.png" alt="Mohtawa">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>  


                <section class="content-hub-form">
                    <div class="container">
                        <div class="step-form-progress">
                            <span class="step-one s-active">
                                <img src="images/1st.png">
                                <p><img src="images/feedback-tick.png">ىوتحملا لمّح  </p>
                            </span>
                            <span class="parth">
                                <span class="btw-arrow">
                                    <img class="default" src="images/btw-arrow.png">
                                    <img class="blue-arrow" src="images/btw-arrow-blue.png">
                                </span>
                            </span>
                            <span class="step-two">
                                <img src="images/2nd.png">
                                <p><img src="images/feedback-tick.png">كتامولعم لجس   </p>
                            </span>
                        </div>

                        
                        <div class="step-form">
                            <form class="Content-form web-form" id="upload_form" >
                                <div class="step-one-form">
                                    <p>1. ىلوألا ةوطخلا   <span>ليمحتلل عبرملا لخاد ىوتحملا بحسا و تاناخلا ألما  </span></p>
                                    <div class="field">
                                        <div class="select">
                                            <select>
                                                <option>ىوتحملا عون</option>
                                                <option value="Enquiry">option-1</option>
                                                <option value="Enquiry">option-2</option>
                                                <option value="Enquiry">option-3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field painting">
                                        <input type="text" name="painting" placeholder="ةيحيضوتلا ةيمستلا">
                                    </div>
                                    <div class="field painting-desdription">
                                        <textarea maxlength="150" placeholder="فصولا" ></textarea>
                                    </div>

                                    <div class="field">
                                        <div class="drop-zone">
                                            <span class="drop-zone__prompt">
                                                <img src="images/drag-drop.png">
                                                ةناخلا لخاد ىوتحملا بحسا 
                                            </span>
                                            <input required type="file" name="file1" id="file1" onchange="uploadFile()">
                                            <div class="show-progress">
                                              <progress id="progressBar" value="0" max="100" style="max-width:755px;width:100%"></progress>
                                              <p>ليمحتلا يراج</p>
                                              <h3 id="status"></h3>
                                              <p id="loaded_n_total"></p>
                                            </div>
                                            <div class="uploading-complete-done">
                                                <img src="images/done.png">
                                                <p>حاجنب ليمحتلا مت</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="submit">
                                            <a class="btn next-step-click" href="#0">
                                                ةيلاتلا ةوطخلا
                                                <img src="images/left-arrow.png">
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="step-two-form">
                                    <p>2. ةيناثلا ةوطخلا <span> لسرأ مث تاناخلا لخاد كتامولعم لجس</span></p>

                                    <div class="two-field-row">
                                        <div class="field">
                                            <input type="text" name=" " placeholder="لماكلا مسإلا">
                                        </div>
                                        <div class="field">
                                            <input type="text" name=" " placeholder="ينورتكلإلا ديربلا">
                                        </div>
                                        <div class="field">
                                            <input type="text" name=" " placeholder="لاوجلا مقر">
                                        </div>
                                        <div class="field">
                                            <div class="select">
                                                <select>
                                                    <option>رمعلا</option>
                                                    <option value="Enquiry">option-1</option>
                                                    <option value="Enquiry">option-2</option>
                                                </select>
                                            </div>
                                            <div class="select">
                                                <select>
                                                    <option>سنجلا</option>
                                                    <option value="Enquiry">option-1</option>
                                                    <option value="Enquiry">option-2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <input type="text" name=" " placeholder="ةيسنجلا">
                                        </div>
                                        <div class="field">
                                            <select>
                                                <option>ةماقإلا دلب</option>
                                                <option value="Enquiry">option-1</option>
                                                <option value="Enquiry">option-2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="two-field-row">
                                            <div class="submit">
                                                <a class="btn next-final-click" href="#0">
                                                    لسرأ
                                                    <img src="images/left-arrow.png">
                                                </a>
                                                <div class="loader"><i class="fas fa-spinner fa-pulse"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="submit-popup">
                                    <div class="overlay"></div>
                                    <div class="white-box">
                                        <a class="SubmitPopupClose" href="javascript:void(0)">
                                            <img src="images/close.png">
                                        </a>
                                        <div class="text-center">
                                            <p>The user of the Abu Dhabi Media website, the "content makers" of the site, acknowledges his own responsibility for the material and Abu Dhabi Media does not bear any responsibility for any damage.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-submited-done">

                                    <div class="complete-done">
                                        <div class="done-img">
                                            <img class="lozad" data-src="images/done.png" alt="done">
                                        </div>
                                        <div class="done-message">
                                            <p>حاجنب ىوتحملا عفر مت</p>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>

                    </div>
                </section>

            </div>
            <!--Content-->

            <!--footer -->
            <?php include_once 'includes/footer-en.php'; ?>
            <!--close footer -->
        </div>        
    </body>
</html>
