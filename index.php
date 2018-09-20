<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">    <!-- Custom styles for this template -->
    <link href="./static/form-validation.css" rel="stylesheet">
    <style>
      #console {
        position: fixed;
        top: 10px;
        right: 10px;
        z-index: 1000;
      }
      #console .card-body {
        background: #000;
        color: greenyellow;
        font-family: 'Courier New', Courier, monospace;
        text-align: left;
      }
      #list-modal {
        padding-left: 0px;
      }
    </style>
  </head>

  <body class="bg-light" data-gr-c-s-loaded="true">

    <div class="container">

      <div class="py-5 text-center">
        <i class="fa-4x fas fa-shopping-cart"></i>
        <h2>Checkout form</h2>
      </div>
        <div class="col-md-8 order-md-1">
          <form id="billing-form" action="threeds.php" method="post" class="needs-validation" novalidate="">
              <input type="hidden" name="orderid" id="orderid" value="2938765" data-threeds="id">
              <input type="hidden" name="username" id="username" value="demo">
              <input type="hidden" name="password" id="password" value="password">
              <input type="hidden" name="cardholder_auth" id="cardholder_auth">

              <h4 class="mb-3">Transaction details</h4>

              <div class="row transactionDetails">
                <div class="col-md-6 mb-3">
                  <label for="amount">Transaction amount</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control" name="amount" id="amount" value="0.18" data-threeds="amount">
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" name="order_description" id="order_description">
                </div>
              </div>

              <hr class="mb-4">
              <h4 class="mb-3">Payment</h4>

              <div class="row payment">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">First name on card</label>
                  <input type="text" class="form-control" id="first_name" placeholder="" required="">
                  <small class="text-muted">First name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Last name on card</label>
                  <input type="text" class="form-control" id="last_name" placeholder="" required="">
                  <small class="text-muted">Last name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="ccnumber">Credit card number</label>
                  <input type="text" class="form-control" name="ccnumber" id="ccnumber" data-descrip="CC Number" data-threeds="pan" placeholder="" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
              </div>
              <div class="row payment">
                <div class="col-md-6 mb-6">
                  <label for="cc-expiration">Expiration</label>
                  <div class="row">
                  <div class="col-md-6 mb-6" style="padding-right: 6px">
                    <select class="custom-select d-block w-100" id="cc-expiration-month" data-descrip="Exp month" data-threeds="month" placeholder="" required>
                        <option value=""></option>
                        <option value="01">January</option>
                        <option value="02">February </option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-6" style="padding-left: 6px">
                    <select class="custom-select d-block w-100" id="cc-expiration-year" data-descrip="Exp year" data-threeds="year" placeholder="" required>
                        <option value=""> </option>
                        <option value="18"> 2018</option>
                        <option value="19"> 2019</option>
                        <option value="20"> 2020</option>
                        <option value="21"> 2021</option>
                        <option value="22"> 2022</option>
                        <option value="23"> 2023</option>
                        <option value="24"> 2024</option>
                        <option value="25"> 2025</option>
                    </select>
                  </div>
                  <input type="hidden" id="ccexp" name="ccexp">
                </div>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="ccexp">CVV</label>
                  <input type="text" class="form-control" id="cvv" placeholder="" required="">
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <h4 class="mb-3">Billing address</h4>
              <div class="row">
                <div class="col-md-6 mb-3">
                <label for="firstname">First name</label>
                <input type="text" class="form-control" id="firstname" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control" id="lastname" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email </label>
              <input type="email" class="form-control" id="email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address1">Address</label>
              <input type="text" class="form-control" id="address1" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" >
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Choose...</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <h4 class="mb-3">Shipping address</h4>
            <div class="col-md-6 mb-3 form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="sameAsBilling">
              <label class="form-check-label" for="sameAsBilling">Shipping same as billing</label>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
              <label for="shipping_firstname">First name</label>
              <input type="text" class="form-control" id="shipping_firstname" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="shipping_lastname">Last name</label>
              <input type="text" class="form-control" id="shipping_lastname" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="shipping_email">Email </label>
            <input type="email" class="form-control" id="shipping_email">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="mb-3">
            <label for="shipping_address">Address</label>
            <input type="text" class="form-control" id="shipping_address1" required="">
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="mb-3">
            <label for="shipping_address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="shipping_address2" >
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="shipping_country">Country</label>
              <select class="custom-select d-block w-100" id="shipping_country" required="">
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="shipping_state">State</label>
              <select class="custom-select d-block w-100" id="shipping_state" required="">
                <option value="">Choose...</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="shipping_zip">Zip</label>
              <input type="text" class="form-control" id="shipping_zip" placeholder="" required="">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>
          <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" id="submitButton" data-toggle="modal" data-target="#exampleModal">Checkout</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">

      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script src="./static/holder.min.js"></script> -->
    <script src="https://cdn.3dsintegrator.com/threeds.min.latest.js"></script>
    <script>
    $(document).ready(function(){
      $("#sameAsBilling").change(function(){
        if(this.checked){

          // then add those values to your billing infor window fields
          $("#shipping_firstname").val($("#firstname").val());
          $("#shipping_lastname").val($("#lastname").val());
          $("#shipping_email").val($("#email").val());
          $("#shipping_address1").val($("#address1").val());
          $("#shipping_address2").val($("#address2").val());
          $("#shipping_country").val($("#country").val());
          $("#shipping_state").val($("#state").val());
          $("#shipping_zip").val($("#zip").val());
        }

        else{
          $("#shipping_firstName").val('');
          $("#shipping_lastName").val('');
          $("#shipping_email").val('');
          $("#shipping_address1").val('');
          $("#shipping_address2").val('');
          $("#shipping_country").val('');
          $("#shipping_state").val('');
          $("#shipping_zip").val('');
        }
      });

      $("#cc-expiration-year").change(function(){
        $("#ccexp").val($("#cc-expiration-month").val() + $("#cc-expiration-year").val());
      });

      /*$("#submitButton").click(function(e){
          e.preventDefault();
      })*/

      /*var submit = false;
      $("#submitButton").click(function(e) {
         setTimeout(function(){
             //alert("me after 1000 mili seconds");
             submit = true;
             $("#submitButton").submit(); // if you want
         }, 1000);
         if(!submit){
             e.preventDefault();
          }
        });
    });*/

    var tds = new ThreeDS("billing-form", "lYEz0fQi35O7hYT4WQt4FRHC717K1JZc",null,{verbose:true});

    $("[data-threeds]").on("change", function() {
      var readyState = 1;
    $("[data-threeds]").each(function() {
      if (!$(this).val()) {
        readyState = 0
      }
    });
    if (readyState) {
      tds.verify(function(sResponse){

          if(sResponse.eci == 05 || sResponse.eci == 02){
            $("#cardholder_auth").val("verified")
            console.log("verified");
          }

          else if(sResponse.eci == 06 || sResponse.eci == 01){
            $("#cardholder_auth").val("attempted")
            console.log("attempted");
          }
      },function(fResponse){
      },{
        amount:$("#amount").val()
      })
    }
  });
});

    </script>


</body><div id="__genieContainer" style="all: initial;"></div></html>
