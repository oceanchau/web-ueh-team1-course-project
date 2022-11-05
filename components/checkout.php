<?php
require_once("handler/payment-handler.php");

$currentUser = $_SESSION['currentUser'];
$address = getShippingAddress($currentUser);

if(isset($address)) {
    $address->setUsername($currentUser);
}

if (isset($_POST['submit'])) {
    if (isset($_POST["save-info"])) {
        $address = ($address ?? new ShippingAddress())
            ->setFirstName($_POST['firstName'])
            ->setLastName($_POST['lastName'])
            ->setUsername($currentUser)
            ->setAddress($_POST['address'])
            ->setPhone($_POST['phone'])
            ->setArea($_POST['area'])
            ->setProvince($_POST['province'])
            ->setZip($_POST['zip']);
        saveShippingAddress($address);
    }
    $transaction = (new Transaction())
        ->setAmount(2)
        ->setPaymentMethod(PaymentMethod::CREDIT_CARD->name)
        ->setShippingAddressId($address->getId())
        ->setOrderId(1)
        ->setStatus(TransactionStatus::PAID->name)
        ->setUsername($_SESSION['currentUser']);
    saveTransaction($transaction);
}
?>

<section class="container">
    <div class="py-5 text-center">
        <h2>Checkout</h2>
    </div>

    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Your cart</span>
                <span class="badge bg-primary rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">−$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$20</strong>
                </li>
            </ul>

            <form class="card p-2">
                <div class="input-group">
                    <label>
                        <input type="text" class="form-control" placeholder="Promo code">
                    </label>
                    <button type="submit" class="btn btn-secondary">Redeem</button>
                </div>
            </form>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" method="post" novalidate="">
                <?php
                echo "
                <div class='row g-3'>
                    <div class='col-sm-6'>
                        <label for='firstName' class='form-label'>First name</label>
                        <input type='text' class='form-control' id='firstName' name='firstName' placeholder='' value='".$address->getFirstName()."' required=''>
                        <div class='invalid-feedback'>
                            Valid first name is required.
                        </div>
                    </div>

                    <div class='col-sm-6'>
                        <label for='lastName' class='form-label'>Last name</label>
                        <input type='text' class='form-control' id='lastName' name='lastName' placeholder='' value='".$address->getLastName()."' required=''>
                        <div class='invalid-feedback'>
                            Valid last name is required.
                        </div>
                    </div>

                    <div class='col-12'>
                        <label for='username' class='form-label'>Email</label>
                        <div class='input-group has-validation'>
                            <span class='input-group-text'>@</span>
                            <input type='email' disabled class='form-control' name='username' id='username'
                                   value='".$address->getUsername()."'
                                   required=''>
                            <div class='invalid-feedback'>
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class='col-12'>
                        <label for='address' class='form-label'>Phone</label>
                        <input type='text' class='form-control' name='phone' value='".$address->getPhone()."' id='phone' placeholder='0342021302' required=''>
                        <div class='invalid-feedback'>
                            Please enter your phone number.
                        </div>
                    </div>

                    <div class='col-12'>
                        <label for='address' class='form-label'>Address</label>
                        <input type='text' class='form-control' name='address' value='".$address->getAddress()."' id='address' placeholder='1234 Main St' required=''>
                        <div class='invalid-feedback'>
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class='col-md-5'>
                        <label for='area' class='form-label'>Area</label>
                        <select class='form-select' name='area' id='area' required=''>
                            <option value=''>Choose...</option>
                            <option value='Quan 3' ".($address->getArea() == 'Quan 3' ? 'selected' : '').">Quan 3</option>
                        </select>
                        <div class='invalid-feedback'>
                            Please select a valid area.
                        </div>
                    </div>

                    <div class='col-md-4'>
                        <label for='province' class='form-label'>Province</label>
                        <select class='form-select' name='province' id='province' required=''>
                            <option value=''>Choose...</option>
                            <option value='Ho Chi Minh' ".($address->getProvince() == 'Ho Chi Minh' ? 'selected' : '').">Ho Chi Minh</option>
                        </select>
                        <div class='invalid-feedback'>
                            Please provide a valid province.
                        </div>
                    </div>

                    <div class='col-md-3'>
                        <label for='zip' class='form-label'>Zip</label>
                        <input type='text' class='form-control' name='zip' id='zip' value='".$address->getZip()."' placeholder='' required=''>
                        <div class='invalid-feedback'>
                            Zip code required.
                        </div>
                    </div>
                </div>
                    ";
                ?>

                <hr class="my-4">

                <div class="form-check">
                    <input type="checkbox" class="form-input" name="save-info" checked id="save-info">
                    <label class="form-label" for="save-info">Save this information for next time</label>
                </div>

                <hr class="my-4">

                <h4 class="mb-3">Payment</h4>

                <div class="my-3">
                    <div class="form-check">
                        <input id="payOnDelivery" name="paymentMethod" type="radio" class="form-input" checked="" required="">
                        <label class="form-label" for="payOnDelivery">Payment on delivery</label>
                    </div>
                    <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-input" required="">
                        <label class="form-label" for="credit">Credit card</label>
                    </div>
                </div>

                <div class="row gy-3 form-card">
                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Name on card</label>
                        <input type="text" class="payOnDelivery-check form-control" id="cc-name" placeholder="">
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback label-payOnDelivery-check">
                            Name on card is required
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="cc-number" class="form-label">Credit card number</label>
                        <input type="text" class="payOnDelivery-check form-control" id="cc-number" placeholder="" >
                        <div class="invalid-feedback label-payOnDelivery-check">
                            Credit card number is required
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-expiration" class="form-label">Expiration</label>
                        <input type="text" class="payOnDelivery-check form-control" id="cc-expiration" placeholder="">
                        <div class="invalid-feedback label-payOnDelivery-check">
                            Expiration date required
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-cvv" class="form-label">CVV</label>
                        <input type="text" class="payOnDelivery-check form-control " id="cc-cvv" placeholder="">
                        <div class="invalid-feedback label-payOnDelivery-check">
                            Security code required
                        </div>
                    </div>
                </div>

                <hr class="my-4">
                <button class="w-100 btn btn-primary btn-lg" name="submit" type="submit"">Continue to checkout
            </form>
        </div>
    </div>
</section>