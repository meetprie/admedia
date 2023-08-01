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

                <section id="violation-section" class="violation-section">
                    <div class="container">
                        <h2 class="title">تاـــــفـــــلاـــــخـــــمـــــلا نـــــع غالـــــبإلا</h2>

                        <div class="grey-bg">
                            <h3>غالب جذومـن  </h3>
                            <p>.ةمات ةيرسب هعم لماعتلا متيسو ينعملا فرطلا ىلإ غالبلا لاسرإ متيس    </p>
                            <form class="violation-form">
                                <div class="field">
                                    <input type="text" name="" placeholder="(يرايتخا) مسالا">
                                </div>
                                <div class="two-field">
                                    <div class="field">
                                        <input type="text" name="" placeholder="(يرايتخإ) ينورتكلإلا ديربلا  ">
                                    </div>
                                    <div class="field">
                                        <input type="text" name="" placeholder="(يرايتخإ) فتاهلا  ">
                                    </div>
                                </div>
                                <div class="field">
                                    <textarea placeholder="(يمازلإ) ةلاحلا فصو"></textarea>
                                </div>
                                <div class="field checkbox">
                                    <input type="checkbox" name="" id="accept">
                                    <label for="accept">ةحلاصلا تادنتسملا عيمج تقفرأ دقل</label>
                                </div>
                                <div class="field two-btn">
                                    <input type="submit" class="btn" name="" value="تادنتسملا قافرإ  ">

                                    <input type="submit" class="btn red" name="" value="لسرا">
                                </div>
                            </form>
                            <ul class="uploading-list">
                                <li><span>conversation screenshots.pdf </span><a href="#0"><img src="images/remove.png"></a></li>
                                <li><span>conversati.............vendor for.pdf </span><a href="#0"><img src="images/remove.png"></a></li>
                                <li class="loading"><img class="loading-img" src="images/loading.png"><span>ليمحت   </span></li>
                            </ul>
                        </div>
                    </div>
                </section>


                <div class="violation-popup">
                    <div class="popup-wrap">
                        <a href="#0" class="close">
                            <img src="images/close.png">
                        </a>
                        <div class="popup-grey">
                            <h2>ةـــظـــحالـــم</h2>
                            <p>.ةيرادإلاو ةيلاملا تافلاخملا ةهبش نع غالبإلل ةصنم ريفوتل جذومنلا اذه فدهي  </p>
                            <p>طبارلا ىلإ عوجرلا ىجري ،ىرخألا تافلاخملاو ءالمعلا تامدخو ةدوجلاب ةقلعتملا تاظحالملل.عقوملا ىلع بسانملا  </p>
                            <div class="button-right">
                                <a href="#0" class="btn red">دكؤت </a>
                            </div>
                        </div>
                    </div>
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
