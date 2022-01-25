@extends('layouts.auth')
@section('content')
<form id="paymentForm" method="post" action="{{ url('charge') }}">
        {{ csrf_field() }}
        <p><input type="text" name="amount" placeholder="Enter Amount" /></p>
        <p><input type="text" name="cc_number" placeholder="Card Number" /></p>
        <p><input type="text" name="expiry_month" placeholder="Month" /></p>
        <p><input type="text" name="expiry_year" placeholder="Year" /></p>
        <p><input type="text" name="cvv" placeholder="CVV" /></p>
        <input type="submit" name="submit" value="Submit" />
    </form>
</form>
<script type="text/javascript" src="https://jstest.authorize.net/v1/Accept.js" charset="utf-8"></script>
<script type="text/javascript">
function sendPaymentDataToAnet() {
    // Set up authorisation to access the gateway.
    var authData = {};
        authData.clientKey = "{!! env('ANET_PUBLIC_CLIENT_KEY') !!}";
        authData.apiLoginID = "{!! env('ANET_API_LOGIN_ID') !!}";

    var cardData = {};
        cardData.cardNumber = document.getElementById("cardNumber").value;
        cardData.month = document.getElementById("expMonth").value;
        cardData.year = document.getElementById("expYear").value;
        cardData.cardCode = document.getElementById("cardCode").value;

    // Now send the card data to the gateway for tokenisation.
    // The responseHandler function will handle the response.
    var secureData = {};
        secureData.authData = authData;
        secureData.cardData = cardData;
        Accept.dispatchData(secureData, responseHandler);
}

function responseHandler(response) {
    if (response.messages.resultCode === "Error") {
        var i = 0;
        while (i < response.messages.message.length) {
            console.log(
                response.messages.message[i].code + ": " +
                response.messages.message[i].text
            );
            i = i + 1;
        }
    } else {
        paymentFormUpdate(response.opaqueData);
    }
}

function paymentFormUpdate(opaqueData) {
    document.getElementById("opaqueDataDescriptor").value = opaqueData.dataDescriptor;
    document.getElementById("opaqueDataValue").value = opaqueData.dataValue;
    document.getElementById("paymentForm").submit();
}
</script>
@endsection
