<?php

$apiKey = "rzp_test_D0jyOOdZPPcfj6";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .razorpay-embed-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_HHhSoLJi6V6nzl/view" data-text="Pay Now" data-color="#528FF0" data-size="large" data-style="display:0px auto">
        <script>
            (function() {
                var d = document;
                var x = !d.getElementById('razorpay-embed-btn-js')
                if (x) {
                    var s = d.createElement('script');
                    s.defer = !0;
                    s.id = 'razorpay-embed-btn-js';
                    s.src = 'https://cdn.razorpay.com/static/embed_btn/bundle.js';
                    d.body.appendChild(s);
                } else {
                    var rzp = window['__rzp__'];
                    rzp && rzp.init && rzp.init()
                }
            })();
        </script>
    </div>
</body>