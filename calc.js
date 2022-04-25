function clearValidations() {
    $('#maxNumber').val('0');
    $('#operatorLimit').val('0');
}

function getResult() {
    var number1 = $('#number1').val();
    var number2 = $('#number2').val();
    var operator = $('#operator').val();
    $.ajax({
        url: 'calc.php',
        type: 'POST',
        data: {
            "number1": number1,
            "number2": number2,
            "operator": operator
        },
        success: function(results) {
            $('#result_box').val(results);
        }
    });
}
$(document).ready(function() {
    clearValidations();
    $('.number').on('click', function() {
        var maxLimit = $('#maxNumber').val();
        if(parseInt(maxLimit) < 10)
        {
            var currLimit = parseInt(maxLimit)+1;
            $('#maxNumber').val(currLimit);
            var number = this.value;
            var prevVal = $('#result_box').val();
            var currentVal = prevVal+number;
            $('#result_box').val(currentVal);
            var operatorLim = $('#operatorLimit').val();
            if(operatorLim == 0)
            {
                $('#number1').val(parseInt(number));
            }
            else if(operatorLim == 1){
                $('#number2').val(parseInt(number));
            }
        }
        
    });
    $('.operator').on('click', function() {
        var maxLimit = $('#operatorLimit').val();
        if(parseInt(maxLimit) == 0)
        {
            $('#maxNumber').val('0');
            $('#operatorLimit').val(1);
            var operator = this.value;
            $('#operator').val(operator);
            var prevVal = $('#result_box').val();
            var currentVal = prevVal+operator;
            $('#result_box').val(currentVal);
        }
        
    });
    $('.clearAll').on('click', function() {
        clearValidations();
        $('#result_box').val('');
    }); 
});