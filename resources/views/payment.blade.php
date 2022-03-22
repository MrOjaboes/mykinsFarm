@extends('layouts.auth')
@section('content')
 <div class="container px-5 py-5">


                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                       <form id="paymentForm" method="post" action="{{ url('charge') }}">
                           {{ csrf_field() }}
                           <div class="form-group">
                               <input type="hidden"  value="{{ Cart::getTotal() }}" name="amount" />
                            </div>
                           <div class="form-group">
                               <input type="text" class="form-control" name="cc_number" class="form-control" placeholder="Card Number" />
                            </div>
                           <div class="form-group">
                               <input type="text" name="expiry_month" class="form-control" placeholder="Month" />
                            </div>
                           <div class="form-group">
                               <input type="text" name="expiry_year" class="form-control" placeholder="Year" />
                            </div>
                           <div class="form-group">
                               <input type="text" name="cvv" class="form-control" placeholder="CVV" />
                            </div>
                           <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                           </div>
                       </form>
                    </div>
                </div>
                    </div>
                    <div class="col-md-3"></div>

         </div>
     </div>


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
