$(document).ready(function () {
    //fetching data from json file to display currency codes
    fetch("./codes-all_json.json")
    .then(response => {
    return response.json();
    })
    .then(function(data){ 
        var str ="";
        //displaying option values
        data.forEach(element => {
            str += `<option value="${element.AlphabeticCode}">${element.AlphabeticCode} - ${element.Currency}</option>`;
        });
        $("#fromCurrency").html(str);
        $("#toCurrency").html(str);

    });
    //swaping button
    $(document).on('click', '#swapBtn', function(){
        var fromCurrencyValue = $("#fromCurrency").val();
        var toCurrencyValue = $("#toCurrency").val();
        $("#fromCurrency").val(toCurrencyValue);
        $("#toCurrency").val(fromCurrencyValue);    
        ajaxCall();
    });
    //on keyup function
    $(document).on('keyup', '#amount', function(){
        ajaxCall();
    });
    //on change function
    $(document).on('change', '.form-select', function () {
        ajaxCall();
    });
});
//function fetching data from convert.php and displaying result
function ajaxCall() {
        //fetching values
        var amt = $("#amount").val();
        var fromCurrencyValue = $("#fromCurrency").val();
        var toCurrencyValue = $("#toCurrency").val();
        $.ajax({
            type: "POST",
            url: "./convert.php",
            data: {fromCurrencyValue : fromCurrencyValue, toCurrencyValue : toCurrencyValue},
            dataType: "json",
            success: function (response) {
                $("#rate").html(`<h5>Currency Rate: <span>${response.info.rate.toFixed(3)}</span></h5>`);
                var result = response.info.rate * amt;
                $("#conversionResult").html(`<h5>Converted Amount: <span>${result.toFixed(3)}</span></h5>`);
            }
        });
}