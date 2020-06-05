$(function () {



    //Masked Input ============================================================================================================================
    var $demoMaskedInput = $('.demo-masked-input');

    //Multi-select
    $('#optgroup').multiSelect({ selectableOptgroup: true });



});

//Get noUISlider Value and write on
function getNoUISliderValue(slider, percentage) {
    slider.noUiSlider.on('update', function () {
        var val = slider.noUiSlider.get();
        if (percentage) {
            val = parseInt(val);
            val += '%';
        }
        $(slider).parent().find('span.js-nouislider-value').text(val);
    });
}