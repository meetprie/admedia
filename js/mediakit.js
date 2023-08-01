//popup
jQuery(document).on("click", ".mango-media-kit-btn", function () {
    //console.log( "Triggering..." );
    let cover = jQuery(this).data("cover");
    let brandId = jQuery(this).data("brand-id");
    let brandName = jQuery(this).data("brand-name");
    let hasPdf = jQuery(this).data("haspdf");
    let hasSvg = jQuery(this).data("hassvg");
    let hasAi = jQuery(this).data("hasai");
    let hasJpeg = jQuery(this).data("hasjpeg");
    let hasPng = jQuery(this).data("haspng");
    let hasAttachment = jQuery(this).data("hasattachment");
    jQuery('#pdf').prop('checked', false); // Unchecks it
    jQuery('#svg').prop('checked', false); // Unchecks it
    jQuery('#png').prop('checked', false); // Unchecks it
    jQuery('#jpeg').prop('checked', false); // Unchecks it
    jQuery('#ai').prop('checked', false); // Unchecks it
    jQuery("#mango-brand-cover").attr("src", cover);
    jQuery("#BrandId").val(brandId);
    jQuery("#BrandName").val(brandName);
    jQuery("#media-kit-info").addClass("show-popup");
    jQuery(".media-kit-popup").addClass("show");
    jQuery(this).data("haspdf") == "True" ? jQuery("#spanPdf").css("display", "block") : jQuery("#spanPdf").css("display", "none");
    jQuery(this).data("hassvg") == "True" ? jQuery("#spanSvg").css("display", "block") : jQuery("#spanSvg").css("display", "none");
    jQuery(this).data("hasai") == "True" ? jQuery("#spanAi").css("display", "block") : jQuery("#spanAi").css("display", "none");
    jQuery(this).data("hasjpeg") == "True" ? jQuery("#spanJpeg").css("display", "block") : jQuery("#spanJpeg").css("display", "none");
    jQuery(this).data("haspng") == "True" ? jQuery("#spanPng").css("display", "block") : jQuery("#spanPng").css("display", "none");
    if (jQuery(this).data("haspdf") == "True" || jQuery(this).data("hassvg") == "True" || jQuery(this).data("hasAi") == "True") {
        jQuery(`#btnContinue`).removeClass("isDisabled");
        jQuery(`.MediaAvailable`).text("");
    }
    else {
        jQuery(`#btnContinue`).addClass("isDisabled");
        jQuery(`.MediaAvailable`).text(JS_RESOURCES.NoMediaFilesAvailable);
    }
    if (jQuery(this).data("hasjpeg") == "True" || jQuery(this).data("haspng") == "True") {
        jQuery(`#btnContinuePrint`).removeClass("isDisabled");
        jQuery(`.PrintMediaAvailable`).text("");
    }
    else {
        jQuery(`#btnContinuePrint`).addClass("isDisabled");
        jQuery(`.PrintMediaAvailable`).text(JS_RESOURCES.NoMediaFilesAvailable);
    }
    if (hasAttachment == "True") {
        jQuery(`#btnContinueBrand`).removeClass("isDisabled");
        jQuery("#brandGuidlinesDetails").show();
        jQuery(`.BrandMediaAvailable`).text("");
    }
    else {
        jQuery(`#btnContinueBrand`).addClass("isDisabled");
        jQuery("#brandGuidlinesDetails").hide();
        jQuery(`.BrandMediaAvailable`).text(JS_RESOURCES.WillBeAvailableSoon + '...');
    }
});

jQuery(document).on("click", "[data-mango-media-popup]", function () {
    let screen = jQuery(this).data("mango-media-popup");
    jQuery("#screen").val(screen);
    jQuery(`.popupwrap`).removeClass("show-popup");
    jQuery("#media-kit-form").addClass("show-popup");
});

function mangoFormGuideSubmitCallback(result) {
    if (jQuery("#FormSubmitResult").val()) {
        result = JSON.parse(jQuery("#FormSubmitResult").val());
    }
    else {
        jQuery("#FormSubmitResult").val(JSON.stringify(result));
    }
    let screen = jQuery("#screen").val();
    if (screen == "icons" || screen == "print") {
        var file_path = '/Form/DownloadFile?exp=' + result.TokenExpiry + '&t=' + result.Token + '&bid=' + jQuery("#BrandId").val() + '&type=guide';
        download(file_path);
    }
    jQuery("#media-kit-form").removeClass("show-popup");
}

function mangoFormSubmitCallback(result) {
    if (jQuery("#FormSubmitResult").val()) {
        result = JSON.parse(jQuery("#FormSubmitResult").val());
    }
    else {
        jQuery("#FormSubmitResult").val(JSON.stringify(result));
    }
    //corresponding placements
    var checkedArr = [];
    if (jQuery("#svg").prop("checked")) {
        checkedArr.push("svg-secondary");
    }
    if (jQuery("#ai").prop("checked")) {
        checkedArr.push("ai-secondary");
    }
    if (jQuery("#pdf").prop("checked")) {
        checkedArr.push("pdf-secondary");
    }
    if (jQuery("#png").prop("checked")) {
        checkedArr.push("cover");
    }
    if (jQuery("#jpeg").prop("checked")) {
        checkedArr.push("jpeg-secondary");
    }

    let screen = jQuery("#screen").val();

    //console.log("screen: " + screen);

    if (screen == "icons" || screen == "print") {
        checkedArr.forEach(function (entry) {
            var file_path = '/Form/DownloadFile?exp=' + result.TokenExpiry + '&t=' + result.Token + '&bid=' + jQuery("#BrandId").val() + '&type=' + entry;
            download(file_path);
        });
    } else if (screen == "document") {
        var file_path = '/Form/DownloadFile?exp=' + result.TokenExpiry + '&t=' + result.Token + '&bid=' + jQuery("#BrandId").val() + '&type=attachment';
        download(file_path);
    }

    jQuery("#media-kit-form").removeClass("show-popup");
    //jQuery(".media-kit-popup").removeClass("show");

    //alert("submitted! \ntoken:" + result.Token + "\nexpiry" + result.TokenExpiry);
}
function printLogo() {
    let printSvg = jQuery("#BrandPrintSvg").val();
    let printPng = jQuery("#BrandPrintPng").val();
    if (printSvg) {
        var newWinSvg = window.open('', 'Print-Window-Svg');
        newWinSvg.document.open();
        newWinSvg.document.write('<html><body onload="window.print()"><img src=' + printSvg + '></body></html>');
        newWinSvg.document.close();
        //setTimeout(function () { newWinSvg.close(); }, 10);
    }
    if (printPng) {
        var newWinPng = window.open('', 'Print-Window-Png');
        newWinPng.document.open();
        newWinPng.document.write('<html><body onload="window.print()"><img src=' + printPng + '></body></html>');
        newWinPng.document.close();
        //setTimeout(function () { newWinPng.close(); }, 10);
    }
}

function download(file_path) {
    jQuery(".media-kit-popup").addClass("show");
    jQuery(".popupwrap").removeClass("show-popup");
    jQuery("#media-kit-download").addClass("show-popup");
    var a = document.createElement('A');
    a.href = file_path;
    a.download = file_path.substr(file_path.lastIndexOf('/') + 1);
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}