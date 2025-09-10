//-------------JPAYPALCART LIBRARY (more stuff below)------------------//
// Modified for use with Worldpay


$(document).ready(function() {

    var methods = {
        init: function (options) {
            return this.each(function () {
                var defaults = {
                    currency: 'GBP',
                    currencysign: '',
                    business: '',
                    virtual: false,
                    quantityupdate: true,
                    notifyurl: '',
                    minicartid: '',
                    persistdays: 0
                };
                this.settings = $.extend(defaults, options, { 'cartItems': new Array() });
                if (this.settings.persistdays >= 0) loadcart(this);
                //PayPalCartdisplay(this);
                WorldpayCartdisplay(this);
            });
        },
        add: function (code, description, quantity, value, tax) {
            return this.each(function () {
                var isadded = false;
                var itemcount = this.settings.cartItems.length;
                for (var i = 0; i < itemcount; i++) {
                    if (this.settings.cartItems[i]['code'] == code) {
                        this.settings.cartItems[i]['quantity'] = parseInt(this.settings.cartItems[i]['quantity']) + parseInt(quantity);
                        isadded = true;
                    }
                }
                if (!isadded) {
                    this.settings.cartItems.push({ 'code': code, 'description': description, 'quantity': quantity, 'value': value, 'tax': tax });
                }
                //PayPalCartdisplay(this);
                WorldpayCartdisplay(this);
            });
        },
        deductOne: function (code) {
            return this.each(function () {
                var itemcount = this.settings.cartItems.length;
                for (var i = 0; i < itemcount; i++) {
                    if (this.settings.cartItems[i]['code'] == code) {
	    				var newqty = parseInt(this.settings.cartItems[i]['quantity'])-1
                        this.settings.cartItems[i]['quantity']=newqty;
						if (newqty<1) {
						  // if there are none left remove from basket
						  var itemcount = this.settings.cartItems.length;
						  var newarray = new Array();
						  for (var i = 0; i < itemcount; i++) {
						    if (this.settings.cartItems[i]['code'] != code) {
						      newarray.push(this.settings.cartItems[i]);
						    }
						  }
						  this.settings.cartItems = newarray;
						}
						//PayPalCartdisplay(this);
                        WorldpayCartdisplay(this);
                    }
                }

            });
        },
        remove: function (code) {
            return this.each(function () {
                var itemcount = this.settings.cartItems.length;
                var newarray = new Array();
                for (var i = 0; i < itemcount; i++) {
                    if (this.settings.cartItems[i]['code'] != code) {
                        newarray.push(this.settings.cartItems[i]);
                    }
                }
                this.settings.cartItems = newarray;
                //PayPalCartdisplay(this);
                WorldpayCartdisplay(this);
            });
        },
        update: function (code, quantity) {
            return this.each(function () {
                var itemcount = this.settings.cartItems.length;
                for (var i = 0; i < itemcount; i++) {
                    if (this.settings.cartItems[i]['code'] == code) {
                        this.settings.cartItems[i]['quantity'] = parseInt(quantity);
                    }
                }
                //PayPalCartdisplay(this);
                WorldpayCartdisplay(this);
            });
        }
    };

    $.fn.Cart = function (method) {
        // Method calling logic
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + method + ' does not exist on jQuery.tooltip');
        }
    };

/*

 <!-- The first line of code creates a form which uses the POST method, and its action is to
 send the form to us.
 You do not need to set up a special connection to us before using it - your Internet
 connection is all you need to communicate with us.-->
 <form action="https://secure.worldpay.com/wcc/purchase" method=POST>
 <!-- This next line contains a mandatory parameter. Put your Installation ID inside the
 quotes after value= -->
 <input type="hidden" name="instId" value="Your installation ID ">
 <!-- Another mandatory parameter. Put your own reference identifier for the item purchased
 inside the quotes after value= -->
 <input type="hidden" name="cartId" value="Your ID for the product ">
 <!-- Another mandatory parameter. Put the total cost of the item inside the quotes after
 value= -->
 <input type="hidden" name="amount" value="The cost of the product ">
 <!-- Another mandatory parameter. Put the code for the purchase currency inside the quotes
 after value= -->
 <input type="hidden" name="currency" value="currency code e.g. GBP, USD ">
 <!-- This creates the button. When it is selected in the browser, the form submits the
 purchase details to us. -->
 <input type=submit value=" Buy This ">
 </form>

 */
/*
 <!-- The first line of code specifies the URL for our test environment.
 <form action="https://secure-test.worldpay.com/wcc/purchase" method=POST>
 <!-- This next line contains the testMode parameter - it specifies that the submission is a
 test submission -->
 <input type="hidden" name="testMode" value="100">
 <!-- This next line contains a mandatory parameter. Put your Installation ID inside the
 quotes after value= -->
 <input type="hidden" name="instId" value="Your installation ID ">
 <!-- Another mandatory parameter. Put your own reference identifier for the item purchased
 inside the quotes after value= -->
 <input type="hidden" name="cartId" value="Your ID for the product ">
 <!-- Another mandatory parameter. Put the total cost of the item inside the quotes after
 value= -->
 <input type="hidden" name="amount" value="The cost of the product ">
 <!-- Another mandatory parameter. Put the code for the purchase currency inside the quotes
 after value= -->
 <input type="hidden" name="currency" value="currency code e.g. GBP, USD ">
 <!-- This creates the button. When it is selected in the browser, the form submits the
 purchase details to us. -->
 <input type=submit value=" Buy This ">
 </form>
 */
    function WorldpayCartdisplay(theDiv) {
        savecart(theDiv);
        var overalltotal = 0;
        var overalltax = 0;
        var totalitems = 0;
        var linetotal = 0;
        var description = [];
        //var theform = '<form id="shopping-basket-form" action="https://secure.worldpay.com/wcc/purchase" method="post">\r\n';

        // Test
        var theform = '<form id="shopping-basket-form" action="https://secure.worldpay.com/wcc/purchase" method="post">\r\n';
        

        //Setup
        theform += '<input type="hidden" name="instId" value="F7858AA0C5A9E3A4FA86CA2F88D">\r\n';
        theform += '<input type="hidden" name="currency" value="' + theDiv.settings.currency + '">\r\n';

        //theform += '<input type="hidden" name="cmd" value="_cart" />\r\n';
        //theform += '<input type="hidden" name="upload" value="1" />\r\n';
        //theform += '<input type="hidden" name="currency_code" value="' + theDiv.settings.currency + '" />\r\n';
        //theform += '<input type="hidden" name="business" value="' + theDiv.settings.business + '" />\r\n';
        if (theDiv.settings.virtual) {
            theform += '<input type="hidden" name="no_shipping" value="1">\r\n';
        }
        if (theDiv.settings.notifyURL != '') {
            theform += '<input type="hidden" name="notify_url" value="' + theDiv.settings.notifyURL + '" />\r\n';
        }
        theform += '<table class="PayPalCart">\r\n';
        theform += '<tr><th align="left" colspan="2">Description</th><th>Quantity</th><th class="text-right">Price</th></tr>\r\n';
        // clear the on-screen qtys
        $('.price-option').each(function(){
            $(this).find(".product-cart-qtys").addClass("hidden");
            $(this).children(".add-to-cart").removeClass("hidden");
            $(this).find(".qty-in-cart").attr("value", 0);
        });
        for (var i = 0; i < theDiv.settings.cartItems.length; i++) {
            // display the on-screen qty
            if (i==0) {$(".goto-basket").removeClass("hidden");}
            $ciCode=theDiv.settings.cartItems[i]['code'];
            $ciQty=theDiv.settings.cartItems[i]['quantity'];
            $('.price-option').each(function(){
                if ($ciCode==$(this).children('.add-to-cart').attr('data-product-code')){
                    $(this).find(".qty-in-cart").attr("value", parseInt($ciQty));
                    if (parseInt($ciQty)>0) {
                        $(this).children(".add-to-cart").addClass("hidden");
                        $(this).find(".product-cart-qtys").removeClass("hidden");
                    }
                    else {
                        $(this).children(".add-to-cart").removeClass("hidden");
                        $(this).find(".product-cart-qtys").addClass("hidden");
                    }
                }
            });
            // create the cart content
            overalltotal += (theDiv.settings.cartItems[i]['quantity'] * theDiv.settings.cartItems[i]['value']);
            overalltax += (theDiv.settings.cartItems[i]['quantity'] * theDiv.settings.cartItems[i]['tax']);
            linetotal = (theDiv.settings.cartItems[i]['quantity'] * theDiv.settings.cartItems[i]['value']) + (theDiv.settings.cartItems[i]['quantity'] * theDiv.settings.cartItems[i]['tax']);
            totalitems += parseInt(theDiv.settings.cartItems[i]['quantity']);
            theform += '<tr class="cart-item">\r\n<td><a class="remove-item" href="javascript:void(0)" onclick="$(\'#' + theDiv.id + '\').Cart(\'remove\', \'' + theDiv.settings.cartItems[i]['code'] + '\');">x</a>\r\n';

            description.push(theDiv.settings.cartItems[i]['description'] + ' * ' + theDiv.settings.cartItems[i]['quantity']);
            theform += '<input type="hidden" name="cartId" value="' + theDiv.settings.cartItems[i]['code'] + '">\r\n';
            theform += '</td>\r\n';
            theform += '<td align="left">' + theDiv.settings.cartItems[i]['description'] + '</td>\r\n';

            if (theDiv.settings.quantityupdate) {
                theform += '<td><input type="text" size="2" name="' + theDiv.settings.cartItems[i]['code'] + '" value="' + theDiv.settings.cartItems[i]['quantity'] + '" onblur="$(\'#' + theDiv.id + '\').Cart(\'update\',\'' + theDiv.settings.cartItems[i]['code'] + '\', $(this).val());" /></td>\r\n';
            } else {
                theform += '<td>' + theDiv.settings.cartItems[i]['quantity'] + '</td>\r\n';
            }
            theform += '<td class="text-right">' + theDiv.settings.currencysign + parseFloat(linetotal).toFixed(2) + '</td></tr>\r\n';
        }
        theform += '<tr class="PayPalCartTotals"><td colspan="3" align="left">Total</td><td class="text-right">' + theDiv.settings.currencysign + parseFloat(overalltotal + overalltax).toFixed(2) + '</td></tr>\r\n';
        theform += '<tr><td colspan="4" class="text-right"><input id="basket-submit-button" onclick="PaymentGatewayLoading()" type="submit" value="Buy Now"></td></tr>\r\n';
        theform += '<tr><td colspan="4" class="text-right"><input id="basket-hide-button" onclick="HideCart()" type="button" value="Hide Basket"></td></tr>\r\n';
        theform += '</table>\r\n';
        theform += '<input type="hidden" name="desc" value="' + description.join(', ') + '">\r\n';
        theform += '<input type="hidden" name="amount" value="' + parseFloat(overalltotal + overalltax).toFixed(2) + '">\r\n';
        theform += '</form>\r\n';
        $(theDiv).html(theform).ready(function () {
            $(this).find('input').keypress(function (e) {
                if (e.which == 13) {
                    var thisitem = $(this).attr("name");
                    var thisval = $(this).val();
                    $(theDiv).Cart('update', thisitem, thisval);
                    return false;
                }
            });
        });
        //setup the mini cart
        if (theDiv.settings.minicartid != "") {
            var minicart = '';
            minicart += totalitems.toString() + " items<br />" + theDiv.settings.currencysign + parseFloat(overalltotal).toFixed(2);
            $('#' + theDiv.settings.minicartid).html(minicart);
        }
        //display on-screen qtys

    }

    function loadcart(theDiv) {
        var cartcount = getCookie('cart' + theDiv.id);
        if (cartcount != null && cartcount != "") {
            //a cart exists so load it up
            var actualcount = 0;
            for (i = 1; i <= cartcount; i++) {
                var thisline = getCookie('cart' + theDiv.id + i);
                if (thisline != null && thisline != "") {
                    var linearr = Array();
                    ARRline = thisline.split("##");
                    for (j = 0; j < ARRline.length; j++) {
                        var keyname = ARRline[j].substr(0, ARRline[j].indexOf("=")).replace(/^\s+|\s+$/g, "");
                        var keyval = ARRline[j].substr(ARRline[j].indexOf("=") + 1);
                        linearr[keyname] = keyval;
                    }
                    theDiv.settings.cartItems.push(linearr);
                    actualcount++;
                }
            }
        }
    }

    function savecart(theDiv) {
        //remove any existing cookies for this cart
        ARRcookies = document.cookie.split(";");
        for (i = 0; i < ARRcookies.length; i++) {
            if (ARRcookies[i].substr(0, ARRcookies[i].indexOf("=")).indexOf("cart" + theDiv.id) == 0) {
                setCookie(ARRcookies[i].substr(0, ARRcookies[i].indexOf("=")), "", 0);
            }
        }
        //Now save the cart
        if (theDiv.settings.persistdays >= 0) {
            setCookie('cart' + theDiv.id, theDiv.settings.cartItems.length, theDiv.settings.persistdays);
            for (var i = 0; i < theDiv.settings.cartItems.length; i++) {
                //save each line
                var thisline = '';
                for (var arr in theDiv.settings.cartItems[i]) {
                    if (thisline != '') thisline += '##';
                    thisline += arr + '=' + theDiv.settings.cartItems[i][arr];
                }
                setCookie("cart" + theDiv.id + (i + 1).toString(), thisline, theDiv.settings.persistdays);
            }
        }
    }

    function getCookie(c_name) {
        var i, x, y, ARRcookies = document.cookie.split(";");
        for (i = 0; i < ARRcookies.length; i++) {
            x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
            y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
            x = x.replace(/^\s+|\s+$/g, "");
            if (x == c_name) {
                return unescape(y);
            }
        }
        return "";
    }

    function setCookie(c_name, value, exdays) {
        if (exdays > 0) {
            var exdate = new Date();
            exdate.setDate(exdate.getDate() + exdays);
            var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
            document.cookie = c_name + "=" + c_value + ";path=/";
        } else {
            document.cookie = c_name + "=" + escape(value) + ";path=/";
        }
    }

});

//-------------FUNCTIONS------------------//

function PaymentGatewayLoading() {
  $("#waitPayPal").show();
  $("#myCart").parent().hide();
}

function HideCart() {
  $("#myCart").parent().fadeOut("medium");
}

$(document).ready(function() {

  $('body').addClass('page-loaded');
  $("#waitPayPal").hide();

   //-------------BASKET------------------//

  $("#myCart").Cart({
    business: 'sandra@smjfalconry.co.uk',
    notifyURL: 'http://smjfalconry.co.uk',
    virtual: false, //set to true where you are selling virtual items such as downloads
    quantityupdate: true, //set to false if you want to disable quantity updates in the cart
    currency: 'GBP', //set to your trading currency – see PayPal for valid options
    currencysign: '£', //set the currency symbol
    minicartid: 'minicart', //element to show the number of items and net value
    persitdays: 2 //set to -1 for cookie-less cart for single page of products, // 0 (default) persist for the session, // x (number of days) the basket will persists between visits
  });

  $('.add-to-cart').on("click", function() {
    var productcode = $(this).attr('data-product-code');
    var description = $(this).attr('data-description');
    var quantity = $(this).attr('data-quantity');
    var value = $(this).attr('data-value');
    var vat = $(this).attr('data-vat');
    $('#myCart').Cart('add', productcode, description, quantity, value, vat);
  });

  $('.deduct-from-cart').on("click", function() {
    var productcode = $(this).attr('data-product-code');
	$('#myCart').Cart('deductOne', productcode);
  });

  function ShowBasket() {
    $("#myCart").css("margin-top", $("body").scrollTop()+50);
    $("#myCart").parent().fadeIn("medium");
  }

  $(".basket-icon").on("click", function() {ShowBasket();});
  $(".goto-basket").on("click", function() {ShowBasket();});

  //-------------MODALS------------------//

  $(".modal-background").click(function(e){
    if(e.target != this) return;
    $(this).fadeOut( "medium");
  });

  //-------------NAVIGATION------------------//

  $('#nav-toggle').click(function () {
    if (!$(this).hasClass('active')) {
	  $(this).addClass('active');
	  $('.page-inner').addClass('nav-open');
    }
    return false;
  });

  $(window).resize(function () {
    if ($(window).innerWidth() > 991) {
      if ($('#nav-toggle').hasClass('active')) {
	    //if nav is open on resize it closes it
        $('#nav-toggle').removeClass('active');
        $('.page-inner').removeClass('nav-open');
      }
    }
  });

  $(document).mouseup(function (e) {
    var nav = $("nav");
	if (!nav.is(e.target) && nav.has(e.target).length === 0) {
	  if ($('#nav-toggle').hasClass('active')) {
	    setTimeout(function () {
		  $('#nav-toggle').removeClass('active');
		  $('.page-inner').removeClass('nav-open');
	    }, 50);
	  }
	}
  });

  $('.drop-nav').each(function () {
    $(this).closest('li').addClass('drop');
  });

  function hoverNav() {
    $("nav li.drop").mouseenter(function () {
	  if ($(this).children('.drop-nav').length) {
	    $(this).children('.drop-nav').stop().slideDown();
      }
    }).mouseleave(function () {
      $(this).children('.drop-nav').stop().slideUp();
    });
  }

  function clickNav() {
    $("nav li.drop a").click(function () {
	  if ($(this).siblings('.drop-nav').length) {
	    if (!$(this).siblings('.drop-nav').hasClass('open-drop')) {
		  $(this).siblings('.drop-nav').slideDown().addClass('open-drop');
		  return false;
	    }
	  }
    });
  }

  if ($(window).innerWidth() > 991) {hoverNav();}
  else {clickNav();}

  $(window).resize(function () {
    if ($(window).innerWidth() > 991) {
	  $('.open-drop').removeAttr('style').removeClass('open-drop');
    }
  });
});

  //-------------CONTACT FORM------------------//

document.addEventListener('DOMContentLoaded', function () {
  var submitBtn = document.querySelector('.standardOrangeBtn');

  submitBtn.addEventListener('click', function (event) {
    var form = document.querySelector('.contact-form');

    // Validate form fields
    var isValid = validateForm(form);

    if (!isValid) {
      event.preventDefault(); // Prevent form submission if not valid
      console.log('Form is not valid');
      return;
    }

    // If validation passes, send data using Fetch API
    sendFormData();
  });

  function validateForm(form) {
    var isValid = true;

    // Reset error classes
    form.querySelectorAll('.error-input').forEach(function (input) {
      input.classList.remove('error-input');
    });

    // Validate name
    var nameInput = form.querySelector('.contact-form-name');
    if (!nameInput.value.trim()) {
      nameInput.classList.add('error-input');
      isValid = false;
    }

    // Validate email
    var emailInput = form.querySelector('.contact-form-email');
    if (!emailInput.value.trim()) {
      emailInput.classList.add('error-input');
      isValid = false;
    }

    // Validate message
    var messageInput = form.querySelector('.contact-form-message');
    if (!messageInput.value.trim()) {
      messageInput.classList.add('error-input');
      isValid = false;
    }

    // Validate reCAPTCHA
    var recaptchaResponse = grecaptcha.getResponse();
    if (!recaptchaResponse) {
      // reCAPTCHA not checked
      console.log('reCAPTCHA not checked');
      isValid = false;
    }

    return isValid;
  }

  function sendFormData() {
    var formData = new FormData(document.querySelector('.contact-form'));

    fetch('/site-files/php/send-email.php', {
      method: 'POST',
      body: formData,
      headers: {
        'recaptcha-response': grecaptcha.getResponse(),
      },
    })
      .then(response => response.json())
      .then(data => {
        var topSlideDownMessage = $("#topSlideDownMessage");
        var topSlideDownMessageContent = $("#topSlideDownMessageContent");

        if (data.success) {
          // Display success message
          topSlideDownMessageContent.text(data.message);
          topSlideDownMessage.slideDown('slow');

          // Optionally, hide the success message after a certain duration
          setTimeout(function () {
            topSlideDownMessage.slideUp('slow');
          }, 5000); // 5000 milliseconds (adjust as needed)
        } else {
          // Display error message
          console.error('Error:', data.message);
        }
      })
      .catch(error => {
        // Handle network or server errors
        console.error('Fetch Error:', error);
      });
  }

  // Handle sliding up and down of the success message
  var topSlideDownMessage = $("#topSlideDownMessage");

  topSlideDownMessage.on("click", function () {
    topSlideDownMessage.slideUp("slow");
  });

  var topSlideDownMessageContent = $("#topSlideDownMessage p");
  if (topSlideDownMessageContent.text().length > 0) {
    topSlideDownMessage.slideDown("slow");
  }
});

