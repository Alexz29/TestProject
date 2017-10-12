$(document).ready(function () {

    $("#myForm").bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields:{
            count:{
                validators: {
                    notEmpty: {
                        message: 'Поле не может быть пустым'
                    },
                    integer:{
                        message: 'Поле должно быть целым числом'
                    }
                }
            },
            percent:{
                validators:{
                    notEmpty: {
                        message:'Поле не может быть пустым'
                    },
                    integer:{
                        message:'Поле должно быть целым числом'
                    },
                    between:{
                        min: 1,
                        max: 100,
                        message:'Поле должно быть целым числом от 1 до 100'
                    }
                }
            }
        }
    }).on('success.field.bv', function() {

        $("#result").html(($("#count").val()/100)*$("#percent").val());

    }).on('error.field.bv', function () {

        $("#result").html('error');
    });
});