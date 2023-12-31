@extends('main')



@section('comingsoon')
<section class="coming-soon-section">

    <div class="auto-container">

        <div class="outer-box">

            <h1 style="color: white; font-size: large">Only {{$seats}} available seats</h1>

        </div>

    </div>

</section>
@endsection
<!-- End Coming Soon -->

@section('content')
<section class="buy-ticket" id="book">

    <div class="anim-icons full-width">

        <span class="icon icon-circle-blue wow fadeIn"></span>

        <span class="icon icon-circle-1 wow zoomIn"></span>

    </div>

    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12 order-2">

                <div class="inner-column">

                    <div class="ticket-form">

                        <form method="post" action="{!! url('/confirm-purchase'); !!}">
                            {{ csrf_field() }}
                            <center>
                            <div class="form-group">
                                {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(250)->backgroundColor(255,255,255)->generate('0x2A8a0E238584Bf319116a0D6039B7f1941c28580') !!}
                            </div>
                            <div class="form-group">
                                <span id="address" style="font-size: x-small;">0x2A8a0E238584Bf319116a0D6039B7f1941c28580 </span><i class="fa fa-copy" onclick="myFunction()" style="cursor: pointer"></i>
                            </div>
                            </center>
                            <div class="form-group">

                                <input type="text" name="username" placeholder="Your Full Name" required="">

                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="from" placeholder="From Address" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="hash" placeholder="Transaction Hash" required="">
                            </div>
{{--                                <div class="form-group">--}}
{{--                                    <input type="checkbox" name="terms" id="term" required="">--}}
{{--                                    <label for="term">I accept the <span>Terms &amp; Conditions</span></label>--}}
{{--                                </div>--}}
                            <div class="form-group">

                                <button class="theme-btn btn-style-three" type="submit" name="Submit"><span class="btn-title">Confirm Your Purchase</span></button>

                            </div>

                        </form>

                    </div>


                    <!-- Follow Us -->

                </div>


            </div>



            <!-- Form Column -->

            <div class="form-column col-lg-4 col-md-12 col-sm-12">

                <div class="inner-column">

                    <h2>Buy Now <span>$NRK</span></h2>

                    <div class="instructions">
                    <p>
                    Here the Steps to Follow.
                    <ol>
                        <li>
                            Scan the QR Code.
                        </li>
                        <li>
                            Send <b>500 $NRK</b> to the account and copy the transaction hash.
                        </li>
                        <li>
                            Fill the form.
                        </li>
                        <li>
                            Paste the address you used to transfer $NRK.
                        </li>
                        <li>
                            Paste the transaction hash as a proof.
                        </li>
                        <li>
                            Lastly, Hit the "Confirm Your Purchase" Button..
                        </li>
                        Wait for the confirmation and get your E-Ticket.
                    </ol>
                        </p>
                    </div>


                </div>

            </div>

        </div>

    </div>

</section>


@endsection
<script>
    function myFunction() {
        // Get the text field
        var copyText = '0x2A8a0E238584Bf319116a0D6039B7f1941c28580';
        // Select the text field
   copyText.select();
        document.execCommand("copy");// For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText('0x2A8a0E238584Bf319116a0D6039B7f1941c28580');

        // Alert the copied text
        alert("Copied the text: " + copyText.value);
    }
</script>
