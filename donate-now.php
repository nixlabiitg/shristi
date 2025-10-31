<?php include("include/header.php"); ?>
<style>
/* ===== Container ===== */
.enhanced-donation-form {
    background: rgba(255,255,255,0.75);
    border-radius: 20px;
    padding: 45px 40px;
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255,255,255,0.5);
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    position: relative;
    overflow: hidden;
}

/* Animated Glow */
/* .enhanced-donation-form::before {
    content: "";
    position: absolute;
    width: 350px;
    height: 350px;
    background: radial-gradient(circle, rgba(255,127,80,0.5), transparent 70%);
    top: -80px;
    right: -80px;
    animation: moveGlow 6s infinite alternate ease-in-out;
} */
@keyframes moveGlow {
    0% {transform: translate(0,0);}
    100% {transform: translate(-80px,80px);}
}

/* ===== Header ===== */
.title-area .sub-title {
    font-size: 16px;
    color: #FFAC00;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 6px;
}

.title-area .sec-title {
    font-size: 32px;
    font-weight: 800;
    color: #222;
    margin-bottom: 25px;
    line-height: 1.3;
}

/* ===== Input fields ===== */
.enhanced-donation-form .form-control {
    border-radius: 14px;
    border: 1px solid #dcdcdc;
    padding: 14px 18px;
    font-size: 16px;
    transition: 0.25s;
    background: rgba(255,255,255,0.9);
}

.enhanced-donation-form .form-control:focus {
    border-color: #ff7f50;
    box-shadow: 0px 0px 10px rgba(255,127,80,0.4);
    background: #fff;
}

/* ===== Amount Buttons ===== */
.donate-amount-button-list {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin: 15px 0 30px;
    padding: 0;
}

.donate-amount-button {
    padding: 12px 22px;
    border-radius: 40px;
    background: linear-gradient(to right, #f7f7f7, #ededed);
    border: 1px solid #ddd;
    cursor: pointer;
    transition: 0.3s;
    font-weight: 600;
    font-size: 15px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.08);
}

.donate-amount-button:hover {
    background: #FFAC00;
    color: #fff;
    border-color: transparent;
    transform: translateY(-4px);
}

/* Selected */
.donate-amount-button.active {
    background: #FFAC00 !important;
    color: #fff !important;
    border-color: transparent !important;
}

/* ===== Payment Method ===== */
.section-heading {
    font-size: 20px;
    margin-top: 25px;
    margin-bottom: 10px;
    font-weight: 700;
    color: #333;
}

.donate-payment-method li {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
    cursor: pointer;
    transition: 0.25s;
    padding: 10px;
    border-radius: 10px;
}

.donate-payment-method li:hover {
    background: rgba(255,127,80,0.08);
}

.donate-payment-method input {
    accent-color: #ff7f50;
}

.donate-payment-method label {
    font-size: 16px;
    font-weight: 500;
    color: #333;
}

/* ===== Button ===== */
.donate-btn {
    background: #FFAC00;
    padding: 16px 28px;
    border-radius: 50px;
    font-size: 18px;
    font-weight: 700;
    color: #fff;
    width: 100%;
    border: none;
    cursor: pointer;
    transition: 0.3s;
    box-shadow: 0 6px 16px rgba(255,90,42,0.4);
}

.donate-btn:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 20px rgba(255,90,42,0.5);
}

/* ===== Textarea ===== */
textarea {
    border-radius: 14px !important;
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
  .enhanced-donation-form {
      padding: 30px;
  }
  .title-area .sec-title {
      font-size: 26px;
  }
}
</style>

    <!--============================== Breadcumb ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Donate Now</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Donation</li>
                </ul>
            </div>
        </div>
    </div>
    <!--============================== Blog Area ==============================-->
    <section class="donation-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40 justify-content-center">
                <div class="col-lg-10">
                    <div class="donation-form-v1 enhanced-donation-form">
                        <div class="title-area text-center">
                            <span class="sub-title before-none">Donate Now</span>
                            <h2 class="sec-title">Your Contribution Helps Us Serve Better</h2>
                        </div>

                        <form action="donation-submit.php" method="POST" class="contact-form">

                            <!-- Donation Amount -->
                            <div class="form-group donate-input">
                                <label class="form-label">Donation Amount</label>
                                <input type="number" name="amount" class="form-control donate_amount" placeholder="Enter Amount" required>
                            </div>

                            <!-- Quick Amount Buttons -->
                            <ul class="donate-amount-button-list list-unstyled">
                                <li class="donate-amount-button" data-amount="100">₹100</li>
                                <li class="donate-amount-button" data-amount="200">₹200</li>
                                <li class="donate-amount-button" data-amount="500">₹500</li>
                                <li class="donate-amount-button" data-amount="1000">₹1000</li>
                                <li class="donate-amount-button" data-amount="Custom">Custom Amount</li>
                            </ul>

                            <!-- Payment Method -->
                            <h5 class="section-heading">Select Payment Method</h5>
                            <ul class="donate-payment-method list-unstyled">
                                <li>
                                    <input type="radio" id="upi" name="payment_method" value="UPI" checked>
                                    <label for="upi">UPI</label>
                                </li>
                                <li>
                                    <input type="radio" id="card" name="payment_method" value="Card">
                                    <label for="card">Credit/Debit Card</label>
                                </li>
                                <li>
                                    <input type="radio" id="bank" name="payment_method" value="Bank Transfer">
                                    <label for="bank">Bank Transfer</label>
                                </li>
                            </ul>

                            <h5 class="section-heading">Personal Information</h5>
                            <div class="row">
                                <div class="form-group style-border col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                </div>

                                <div class="form-group style-border col-md-6">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                                </div>

                                <div class="form-group style-border col-md-12">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                </div>

                                <div class="form-group style-border col-12">
                                    <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message (Optional)"></textarea>
                                </div>

                                <div class="form-btn col-12">
                                    <button type="submit" class="th-btn donate-btn">
                                        <i class="fas fa-heart me-2"></i> Donate Now
                                    </button>
                                </div>
                            </div>
                        </form>
                        <script>
                            const buttons = document.querySelectorAll(".donate-amount-button");
                            const amountInput = document.querySelector(".donate_amount");

                            buttons.forEach(btn => {
                            btn.addEventListener("click", () => {

                                buttons.forEach(b => b.classList.remove("active"));
                                btn.classList.add("active");

                                const value = btn.getAttribute("data-amount");
                                if (value !== "Custom") {
                                amountInput.value = value;
                                } else {
                                amountInput.value = "";
                                amountInput.focus();
                                }
                            });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <?php include("include/footer.php"); ?>