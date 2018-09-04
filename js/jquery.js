/* 
 * Javascript for html
 */



$(document).ready(function () {
    
    $('#operator_one').dropdown();

    $('#operator_two').dropdown();

    $('.ui.form').form({
        fields: {
            operand_one: {
                identifier: 'operand_one',
                rules: [
                    {
                        type: 'decimal',
                        prompt: 'Please enter a number'
                    }
                ]
            },
            operand_two: {
                identifier: 'operand_two',
                rules: [
                    {
                        type: 'decimal',
                        prompt: 'Please enter a number'
                    }
                ]
            },
            operand_three: {
                identifier: 'operand_three',
                optional    : true,
                rules: [
                    {
                        type: 'decimal',
                        prompt: 'Please enter a number'
                    }
                ]
            },
            operarator_one: {
                identifier: 'operator_one',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter a operator'
                    }
                ]
            }
        }
    });
    
    $('#reset_button').click(function() {
       $('.ui.form').form('reset');
    });

});

$(document).on('submit', 'form', function () {
    
    data = $('form').serialize();

    $.ajax({
        url: 'index.php',
        data: data,
        type: 'post',
        success: function (result) {
            $('#result').show();
            $('#result').html(result);
        }
    });
    return false;
});


