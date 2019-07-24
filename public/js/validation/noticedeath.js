$(".select2").select2();
$('.selectpicker').selectpicker();

$(document).ready(function () {
    $("#mode_transport_other").hide();
    $("#race_other").hide();
    $("relationship_other").hide();
//Insured Person Details
$('select[name=race]').change(function () {
    if (this.value == 'Others') {
        $("#race_other").prop('readonly', false);
        $("#race_other").show();


    } else {
        $("#race_other").prop('readonly', true);  
        $("#race_other").val('');
        $("#race_other").hide();
    }
});

$('select[name=mode_transport]').change(function () {
    if (this.value == 'others') {
        $("#mode_transport_other").prop('readonly', false);
        $("#mode_transport_other").show();


    } else {
        $("#mode_transport_other").prop('readonly', true);  
        $("#mode_transport_other").val('');
        $("#mode_transport_other").hide();
    }
});

$('select[name=mode_transport]').change(function () {
    if (this.value == 'Others') {
        $("#mode_transport_other").prop('readonly', false);
        $("#mode_transport_other").show();


    } else {
        $("#mode_transport_other").prop('readonly', true);  
        $("#mode_transport_other").val('');
        $("#mode_transport_other").hide();
    }
});

$('select[name=relationship]').change(function () {
    if (this.value == 'Others') {
        $("#relationship_other").prop('readonly', false);
        $("#relationship_other").show();


    } else {
        $("#relationship_other").prop('readonly', true);  
        $("#relationship_other").val('');
        $("#relationship_other").hide();
    }
});
});



    //Custom design form example
    $(".tab-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit"
        },
        onFinished: function (event, currentIndex) {
            swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");

        }
    });


    var form = $(".validation-wizard").show();

    $(".validation-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit"
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
        },
        onFinishing: function (event, currentIndex) {
            return form.validate().settings.ignore = ":disabled", form.valid()
        },
        onFinished: function (event, currentIndex) {
            swal("Form Submitted!", "The form has been successfully submitted");
        }
    }), $(".validation-wizard").validate({
        ignore: "input[type=hidden]",
        errorClass: "text-danger",
        successClass: "text-success",
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass)
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass)
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element)
        },
        rules: {
            email: {
                email: !0
            }
        }
    })
