<!DOCTYPE html>
<html>
<?php require 'head.php'; ?>

<body class="text-center">
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
        <div class="container">
            <a href="../../checkout" class="navbar-brand">bKash Checkout</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <span style="color: white;" id="version">1.2.0-beta</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!---->
    <div class="container">
        <div class="bs-docs-section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <div class="card mb-12">
                            <div class="card-header">bKash Checkout (<span>1.2.0-beta</span>)
                            </div>
                            <div class="card-body">
                                <div class="bs-docs-section">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="bs-component">
                                                <fieldset class="capture-void-layout">
                                                    <legend class="capture-void-legend-layout">Payment</legend>
                                                    <div class="form-group-amount">
                                                        <label class="col-form-label-payment" for="paymentIdForquery"> Amount</label>
                                                        <input style="color: #061148" type="text" class="form-control" placeholder="Payment ID" id="new_amount" />
                                                        <button id="change_amount" class="btn btn-primary btn-sm mx-3">Change Amount</button>

                                                        <button id="bKash_button" class="btn btn-primary btn-sm">Pay With bKash</button>
                                                    </div>
                                                </fieldset>

                                            </div>
                                            <div class="bs-component">
                                                <div id="dvqueryagreement">
                                                    <fieldset class="capture-void-layout">
                                                        <legend class="capture-void-legend-layout">Search Transaction</legend>
                                                        <div class="form-group-amount">
                                                            <label class="col-form-label" for="searchTransaction">
                                                                Transaction ID</label>

                                                            <input style="color: #061148" type="text" class="form-control" placeholder="Transaction ID" id="searchTransaction" width="100px;" />
                                                            <button id="searchTransaction_btn" class="btn btn-primary btn-sm">Search Transaction
                                                            </button>
                                                        </div>
                                                    </fieldset>
                                                </div>

                                            </div>
                                            <div class="bs-component">
                                                <fieldset class="capture-void-layout">
                                                    <legend class="capture-void-legend-layout">Payment Status</legend>
                                                    <div class="form-group-amount">
                                                        <label class="col-form-label-payment" for="paymentIdForquery">
                                                            Payment ID</label>
                                                        <input style="color: #061148" type="text" class="form-control" placeholder="Payment ID" id="paymentIdForquery" width="100px;" />
                                                        <button id="query_payment_btn" class="btn btn-primary btn-sm">Payment Status
                                                        </button>
                                                    </div>
                                                </fieldset>

                                            </div>
                                            <div class="bs-component">

                                                <fieldset class="capture-void-layout">
                                                    <legend class="capture-void-legend-layout">Refund</legend>
                                                    <div class="refund-layout">

                                                        <div class="form-group-intent-isaggregate">
                                                            <label class="col-form-label-refund" for="paymentIdForRefund">
                                                                Payment ID</label>
                                                            <input style="color: #061148" type="text" class="form-control-merchant-refund-info" placeholder="Payment ID" id="paymentIdForRefund" width="100px;" />
                                                        </div>

                                                        <div class="form-group-intent-isaggregate">
                                                            <label class="col-form-label-refund" for="transactionIdForRefund">
                                                                Transaction ID</label>

                                                            <input style="color: #061148" type="text" class="form-control-merchant-refund-info" placeholder="Transaction ID" id="transactionIdForRefund" width="100px;" />
                                                        </div>
                                                        <div class="form-group-intent-isaggregate">
                                                            <label class="col-form-label-refund" for="amountForRefund">
                                                                Refund Amount</label>
                                                            <input style="color: #061148" type="text" class="form-control-merchant-refund-info" placeholder="Refund Amount" id="amountForRefund" width="100px;" />
                                                        </div>
                                                        <div class="form-group-intent-isaggregate">
                                                            <label class="col-form-label-refund" for="skuForRefund">
                                                                SKU (Name of items for refund)</label>
                                                            <textarea style="color: #061148" type="text" class="form-control-merchant-refund-info" placeholder="Sku" id="skuForRefund" width="100px;"></textarea>
                                                        </div>
                                                        <div class="form-group-intent-isaggregate">
                                                            <label class="col-form-label-refund" for="reasonForRefund">
                                                                Reason For Refund</label>
                                                            <textarea style="color: #061148" type="text" class="form-control-merchant-refund-info" placeholder="Reason" id="reasonForRefund" width="100px;"></textarea>
                                                        </div>

                                                        <button id="requestRefund_btn" class="btn btn-primary btn-sm">Refund
                                                        </button>

                                                    </div>
                                                </fieldset>

                                            </div>

                                            <div class="bs-component">
                                                <fieldset class="capture-void-layout">
                                                    <legend class="capture-void-legend-layout">B2C Payout</legend>
                                                    <div class="form-group-amount">
                                                        <label class="col-form-label-payment" for="paymentIdForquery">
                                                            Amount</label>
                                                        <input style="color: #061148" type="text" class="form-control" placeholder="Amount" id="amount" width="100px;" />
                                                    </div>
                                                    <div class="form-group-amount">
                                                        <label class="col-form-label-payment">
                                                            Mobile Number</label>
                                                        <input style="color: #061148" type="text" class="form-control" placeholder="Mobile" id="mobile" width="100px;" />
                                                        <button id="b2c_payment_btn" class="btn btn-primary btn-sm">Pay</button>
                                                    </div>
                                                </fieldset>
                                                <br><br>


                                            </div>


                                        </div>
                                        <div class="col-lg-5">
                                            <div class="bs-component">
                                                <div id="note">
                                                    <p>Default values for checkout page:</p>
                                                    <div style="display: none">
                                                        <b>Amount :</b>
                                                        <span id="amount"></span>
                                                    </div>
                                                    <b>Wallet :</b> 01770618575
                                                    <br>
                                                    <b>OTP :</b> 123456
                                                    <br>
                                                    <b>PIN :</b> 12121
                                                    <br>
                                                </div>
                                                <br />
                                                <br />
                                                <p>API Call</p>
                                                <div id="api_call">
                                                </div>
                                                <br />
                                                <br />
                                                <p>Request</p>
                                                <pre id="request">

                                            </pre>
                                                <br />
                                                <br />
                                                <p>Response</p>
                                                <pre id="response">

                                            </pre>
                                                <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled">
                        <li class="float-lg-right"><a href="#top">Back to top</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    </div>

    <script type="text/javascript">
        var paymentID;
        var paymentRequest;
        var createCheckoutURL = "https://merchantserver.sandbox.bka.sh/api/checkout/v1.2.0-beta/payment/create";
        var executeCheckoutURL = "https://merchantserver.sandbox.bka.sh/api/checkout/v1.2.0-beta/payment/execute";

        $(document).ready(function() {
            initBkash();
        });

        var randomAmount = (Math.random() * 100).toFixed(2);
        $('#amount').text(randomAmount);
        $('#new_amount').val(randomAmount);
        paymentRequest = {
            amount: $('#amount').html(),
            intent: 'sale'
        };

        function initBkash() {
            bKash.init({
                paymentMode: 'checkout',
                paymentRequest: paymentRequest,
                createRequest: function(request) {
                    $("#api_call").text('Create Payment');
                    $('#request').html(JSON.stringify(request, undefined, 2));
                    alertify.message('Processing ...');
                    $.ajax({
                        url: createCheckoutURL,
                        type: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify(request),
                        success: function(data) {
                            // alert('inside success : create mandate() :; bKash-direct-old.js');
                            $('#response').html(JSON.stringify(data, undefined, 2));
                            alertify.success("Create Payment response found");
                            if (data && data.paymentID != null) {
                                paymentID = data.paymentID;
                                bKash.create().onSuccess(data);

                            } else {
                                bKash.create().onError(); //run clean up code
                                alert(data.errorMessage + " Tag should be 2 digit, Length should be 2 digit, Value should be number of character mention in Length, ex. MI041234 , supported tags are MI, MW, RF");
                            }
                        },
                        error: function() {
                            bKash.create().onError(); //run clean up code
                        }
                    });

                },
                executeRequestOnAuthorization: function() {
                    $("#api_call").text('Execute Payment');
                    $('#request').html(JSON.stringify({
                        "paymentID": paymentID
                    }, undefined, 2));
                    alertify.message("Processing ...");

                    $.ajax({
                        url: executeCheckoutURL,
                        type: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            "paymentID": paymentID
                        }),
                        success: function(data) {
                            $('#response').html(JSON.stringify(data, undefined, 2));
                            alertify.success("Execute Payment response found");
                            if (data && data.paymentID != null) {
                                bKash.execute().onError(); //run clean up code
                            } else {
                                alertify.error('Unsuccessful Checkout Payment');
                                bKash.execute().onError(); //run clean up code
                            }
                        },
                        error: function() {
                            alert('An alert has occured during execute');
                            bKash.execute().onError(); //run clean up code
                        }
                    });
                },
                onClose: function() {
                    alert('Close Page');
                }
            });


            $('#bKash_button').removeAttr('disabled');

        }


        //Refund Payment

        var refundURL = 'https://merchantserver.sandbox.bka.sh/api/checkout/v1.2.0-beta/payment/refundtransaction';

        $('#requestRefund_btn').click(function() {
            var transactionID = document.getElementById('transactionIdForRefund').value;
            transactionID = transactionID.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            var paymentID = document.getElementById('paymentIdForRefund').value;
            paymentID = paymentID.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            var amount = document.getElementById('amountForRefund').value;
            amount = amount.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            var sku = document.getElementById('skuForRefund').value;
            sku = sku.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            var reason = document.getElementById('reasonForRefund').value;
            reason = reason.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            console.log('Refund response:: transactionID' + transactionID + " Refund URL: " + refundURL);
            refundResponse(transactionID, paymentID, amount, sku, reason, refundURL)
                .done(function(response) {
                    console.log('Refund response:: ' + JSON.stringify(response));
                    $('#response').html(JSON.stringify(response, undefined, 2));

                    alertify.success('Refund response found');
                })
                .fail(function(error) {
                    console.log('Refund error:: ');
                    console.log(error);
                    alertify.error('Failed Refund');
                });

        });

        function refundResponse(transactionID, paymentID, amount, sku, reason, refundURL) {
            console.log(transactionID, paymentID, amount, sku, reason, refundURL);
            $("#api_call").text('Search Transaction');
            $('#request').html(JSON.stringify({
                "paymentID": paymentID,
                "amount": amount,
                "trxID": transactionID,
                "sku": sku,
                "reason": reason
            }, undefined, 2));
            alertify.message("Processing ...");

            return $.ajax({
                url: refundURL,
                type: 'POST',
                data: JSON.stringify({
                    "paymentID": paymentID,
                    "amount": amount,
                    "trxID": transactionID,
                    "sku": sku,
                    "reason": reason
                }),
                contentType: 'application/json'
            });
        }


        //Search Payment
        var searchURL = 'https://merchantserver.sandbox.bka.sh/api/checkout/v1.2.0-beta/searchtransaction/';

        $('#searchTransaction_btn').click(function() {
            var transactionID = document.getElementById('searchTransaction').value;
            transactionID = transactionID.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            console.log('Search Transaction response:: transactionID' + transactionID + " Search Transaction URL: " + searchURL);
            searchTransactionResponse(transactionID, searchURL)
                .done(function(response) {
                    console.log('Search Transaction response:: ' + JSON.stringify(response));
                    $('#response').html(JSON.stringify(response, undefined, 2));

                    alertify.success('Search transaction response found');
                })
                .fail(function(error) {
                    console.log('Search Transaction error:: ');
                    console.log(error);
                    alertify.error('Failed Search Transaction');
                });

        });


        function searchTransactionResponse(transactionID, searchURL) {
            console.log(searchURL);
            $("#api_call").text('Search Transaction');
            $('#request').html(JSON.stringify({
                "trxID": transactionID
            }, undefined, 2));
            alertify.message("Processing ...");

            return $.ajax({
                url: searchURL + transactionID,
                type: 'GET'
            });
        }



        //Query Transaction

        var queryURL = 'https://merchantserver.sandbox.bka.sh/api/checkout/v1.2.0-beta/payment/query';

        $('#query_payment_btn').click(function() {
            var paymentId = document.getElementById('paymentIdForquery').value;
            paymentId = paymentId.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            console.log('queryPayment response:: paymentId' + paymentId);
            paymentStatusResponse(paymentId, queryURL)
                .done(function(response) {
                    console.log('PaymentStatus response:: ' + JSON.stringify(response));
                    $('#response').html(JSON.stringify(response, undefined, 2));

                    alertify.success('Payment status response found');
                })
                .fail(function(error) {
                    console.log('PaymentStatus error:: ');
                    console.log(error);
                    alertify.error('Failed Payment Status');
                });

        });

        function paymentStatusResponse(paymentID, queryURL) {
            console.log(queryURL);
            $("#api_call").text('Query Payment Status');
            $('#request').html(JSON.stringify({
                "paymentID": paymentID
            }, undefined, 2));
            alertify.message("Processing ...");

            return $.ajax({
                url: queryURL,
                type: 'POST',
                data: JSON.stringify({
                    "paymentID": paymentID
                }),
                contentType: 'application/json'
            });
        }


        $("#change_amount").click(function() {
            console.log('Change Amount Clicked');
            var amountRegex = /^\d+(\.\d{2})?$/;
            var new_amount = $("#new_amount").val();
            new_amount = new_amount.replace(/</g, "&lt;").replace(/>/g, "&gt;");

            if (amountRegex.test(new_amount)) {
                $('#amount').text(new_amount);

                bKash.reconfigure({
                    paymentRequest: {
                        amount: $('#amount').html(),
                        intent: 'sale'
                    }
                });

            } else {
                alert('Invalid Amount');
            }
        });

        // B2C Payment 

        var b2cURL = 'https://merchantserver.sandbox.bka.sh/api/checkout/v1.2.0-beta/payment/b2cPayment';

        $('#b2c_payment_btn').click(function() {
            var currency = 'BDT';
            var amount = document.getElementById('amount').value;
            var receiverMSISDN = document.getElementById('mobile').value;
            var merchantInvoiceNumber = 'icche_' + Date.now();

            b2cResponse(amount, currency, receiverMSISDN, merchantInvoiceNumber, b2cURL)
                .done(function(response) {
                    console.log('B2C Transaction response:: ' + JSON.stringify(response));
                    $('#response').html(JSON.stringify(response, undefined, 2));
                    alertify.success('B2C Payment response found');
                })
                .fail(function(error) {
                    console.log('B2C Transaction error:: ');
                    console.log(error);
                    alertify.error('Failed Payment');
                });

        });

        function b2cResponse(amount, currency, receiverMSISDN, merchantInvoiceNumber, b2cURL) {
            alert('Not working on bKash sandbox API.'); // After integration remove this line
            console.log(b2cURL);
            $("#api_call").text('B2C Payment');
            $('#request').html(JSON.stringify({
                "amount": amount,
                "currency": currency,
                "receiverMSISDN": receiverMSISDN,
                "merchantInvoiceNumber": merchantInvoiceNumber
            }, undefined, 2));
            alertify.message("Processing ...");

            return $.ajax({
                url: b2cURL,
                type: 'POST',
                data: JSON.stringify({
                    "trxID": trxID,
                    "transactionStatus": transactionStatus,
                    "amount": amount,
                    "currency": currency,
                    "completedTime": completedTime,
                    "receiverMSISDN": receiverMSISDN,
                    "merchantInvoiceNumber": merchantInvoiceNumber,
                    "b2cFee": b2cFee

                }),
                contentType: 'application/json'
            });
        }
    </script>
</body>
</html>