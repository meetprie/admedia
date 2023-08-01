<!DOCTYPE html>
<html dir="ltr" lang="en">
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
                    include_once 'includes/header-en.php';
                ?>
                <!--close Header -->

                <!--breadcrumbs-->
                <?php
                    include_once 'includes/breadcrumb.php';
                ?>
                <!--breadcrumbs end-->

                <section id="contact-page" class="contact-page">
                    <div class="container">
                        <h2 class="title">COntact</h2>
                        <div class="address-iframe">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1815.868556378637!2d54.38618029650647!3d24.459904485912638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e688172277a63%3A0x61c6164f6ac52094!2sAl%20Ittihad%20Newspaper!5e0!3m2!1sen!2sin!4v1608637343040!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>

                        <div class="contact-img">
                            <div class="adm-img">
                                <img class="lozad" data-src="images/contact-us.png">
                            </div>
                            <div class="address-detail for-mobile">
                                <h2 class="title">لـــــيـــــصاـــــفـــــت  </h2>
                                <ul>
                                    <li class="address">
                                        <span class="icon">
                                            <img class="lozad" data-src="images/location.png">
                                        </span>
                                       <p>P.O. Box: 63, Abu Dhabi, United Arab Emirates</p>
                                    </li>
                                    <li class="call">
                                        <span class="icon">
                                            <img class="lozad" data-src="images/phone.png">
                                        </span>
                                         <span>Phone: </span> <a href="#0" tel="024455555">02-4455555</a> 
                                    </li>
                                    <li class="call">
                                        <span class="icon">
                                            <img class="lozad" data-src="images/phone.png">
                                        </span>
                                         <span>Toll-Free Phone: </span><a href="#0" tel="8003322">8003322</a> 
                                    </li>
                                    <li class="advertisement">
                                        <span class="icon">
                                            <img class="lozad" data-src="images/advertisement.png">
                                        </span>
                                         <label>Commercial Advertisement:</label>
                                         <a href="#0"> sales@admedia.ae </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="contact-form" class="contact-form">
                    <div class="container">
                        <div class="address-detail">
                            <h2 class="title">Details</h2>
                            <ul>
                                <li class="address">
                                    <span class="icon">
                                        <img class="lozad" data-src="images/location.png">
                                    </span>
                                   <p>P.O. Box: 63, Abu Dhabi, United Arab Emirates</p>
                                </li>
                                <li class="call">
                                    <span class="icon">
                                        <img class="lozad" data-src="images/phone.png">
                                    </span>
                                     <span>Phone: </span> <a href="#0" tel="024455555">02-4455555</a> 
                                </li>
                                <li class="call">
                                    <span class="icon">
                                        <img class="lozad" data-src="images/phone.png">
                                    </span>
                                     <span>Toll-Free Phone: </span><a href="#0" tel="8003322">8003322</a> 
                                </li>
                                <li class="advertisement">
                                    <span class="icon">
                                        <img class="lozad" data-src="images/advertisement.png">
                                    </span>
                                     <label>Commercial Advertisement:</label>
                                     <a href="#0"> sales@admedia.ae </a>
                                </li>
                            </ul>
                        </div>

                        <div class="c-form">
                            <h2 class="title">Contact Form</h2>
                            <form class="Content-form">
                                <div class="field">
                                    <div class="select">
                                        <select>
                                            <option>*Inquiry</option>
                                            <option>مسقلا  </option>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="name" placeholder="*Name">
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="email" placeholder="*Mobile Number">
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="input-field error">
                                        <label class="error">*Please enter a valid email</label>
                                        <input type="text" name="number" placeholder="*Email">
                                    </div>
                                    <div class="input-radio">
                                        <label> Preferred Mode of Communication:</label>
                                        <span class="radio">
                                            <input type="radio" name="select-one" id="email">
                                            <label for="email">Email</label>
                                        </span>
                                        <span class="radio">
                                            <input type="radio" name="select-one" id="number">
                                            <label for="number">Mobile</label>
                                        </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="textarea">
                                        <textarea placeholder="*Your Message"></textarea>
                                    </div>
                                </div>
                                
                                <div class="field captcha-uploaded">
                                    <div class="upload-main-wrapper">
                                        <div class="upload-wrapper">
                                                    <input type="file" id="upload-file" accept=".pdf, .doc, .DOCX, .png, .SVG, .jpg, .jpeg">
                                                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.97461 3.75V14.6875C9.97461 16.9375 8.16211 18.75 5.91211 18.75C3.66211 18.75 1.84961 16.9375 1.84961 14.6875V3.75C1.84961 2.375 2.97461 1.25 4.34961 1.25C5.72461 1.25 6.84961 2.375 6.84961 3.75V14.6875C6.84961 15.2188 6.44336 15.625 5.91211 15.625C5.38086 15.625 4.97461 15.2188 4.97461 14.6875V3.75H3.72461V14.6875C3.72461 15.9062 4.69336 16.875 5.91211 16.875C7.13086 16.875 8.09961 15.9062 8.09961 14.6875V3.75C8.09961 1.6875 6.41211 0 4.34961 0C2.28711 0 0.599609 1.6875 0.599609 3.75V14.6875C0.599609 17.625 2.97461 20 5.91211 20C8.84961 20 11.2246 17.625 11.2246 14.6875V3.75H9.97461Z" fill="#00448A"/>
                                                    </svg>
                                                    <span class="file-upload-text">Attach supporting documents</span>
                                                    <div class="file-success-text">
                                                     <svg version="1.1" id="check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 100 100"  xml:space="preserve">
                                            <circle style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;" cx="49.799" cy="49.746" r="44.757"/>
                                            <polyline style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                                                27.114,51 41.402,65.288 72.485,34.205 "/>
                                            </svg> <span>Successfully</span></div>
                                            <progress id="filestatus" value="0" max="100"></progress>
                                        </div>
                                        <p id="file-upload-name"></p>
                                        <p class="upload-place">Supported Formats (JPEG, PDF etc)</p>
                                        <h3 id="status"></h3>
                                        <p id="loaded_n_total"></p>
                                    </div>
                                    <div class="capctha-block">
                                        <div class="g-recaptcha" data-sitekey="6LcGq8wUAAAAADDzsZ74Fkr3oZXMw96FTR9J8MgU"></div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="submit">
                                        <a href="#0" class="btn red">Send</a>
                                        <div class="loader"><i class="fas fa-spinner fa-pulse"></i></div>
                                        <p class="green">*Sent</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <!--Content-->

            <!--footer -->
            <?php
                include_once 'includes/footer-en.php';
            ?>
            <!--close footer -->
        </div>

        <!--footer scrpit -->
        <?php
            include_once 'includes/footer-includes.php';
        ?>
        <script type="text/javascript">
            function __id(el) {
              return document.getElementById(el);
            }

            function uploadFile() {
              jQuery('.upload-wrapper').removeClass("success");
              var file = __id("upload-file").files[0];
              // alert(file.name+" | "+file.size+" | "+file.type);
              var formdata = new FormData();
              formdata.append("upload-file", file);
              var ajax = new XMLHttpRequest();
              ajax.upload.addEventListener("progress", progressHandler, false);
              ajax.addEventListener("load", completeHandler, false);
              ajax.addEventListener("error", errorHandler, false);
              ajax.addEventListener("abort", abortHandler, false);
              ajax.open("POST", "file_upload_parser.php");
              ajax.send(formdata);
            }

            function progressHandler(event) {
              __id("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
              var percent = (event.loaded / event.total) * 100;
              __id("filestatus").value = Math.round(percent);
              __id("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
            }

            function completeHandler(event) {
              __id("status").innerHTML = event.target.responseText;
              __id("filestatus").value = 0; //wil clear progress bar after successful upload

                setTimeout(function () {
                    jQuery('.upload-wrapper').addClass("uploaded");
                }, 200);
                setTimeout(function () {
                    jQuery('.upload-wrapper').removeClass("uploaded");
                    jQuery('.upload-wrapper').addClass("success");
                }, 800);
                    
            }

            function errorHandler(event) {
              __id("status").innerHTML = "Upload Failed";
            }

            function abortHandler(event) {
              __id("status").innerHTML = "Upload Aborted";
            }

            jQuery('#upload-file').change(function () {
                uploadFile();
            });

        </script>
        <!--close footer scrpit -->
    </body>
</html>
