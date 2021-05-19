<?php 
	include 'inc/head.php';
	include 'inc/header.php';
?>
    <div id="check-out">
        <div class="row">
            <div class="col-75">
                <div>
                    <a href="#">
                        <img src="https://img.btdmp.com/files/10119129/2020/11/09/0x720@16049423383ad1c0bcc7.png" style="max-height: 60px" alt="logo">
                    </a>
                </div>
            </div>
        </div>
        <h1 class="title">Check Out</h1>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-50">
                                <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="Your Name">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" placeholder="abcd@example.com">
                                <label for="phone"><i class="fa fa-phone"></i> Phone Number</label>
                                <input type="text" id="email" name="email" placeholder="0123456789">
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city" placeholder="New York">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="country">Country</label>
                                        <select autocomplete="shipping country" id="checkout_shipping_address_country_name" name="countries">
                                            <option value="US">
                                                United States
                                            </option>
                                            <option value="CA">
                                                Canada
                                            </option>
                                            <option value="GB">
                                                United Kingdom
                                            </option>
                                            <option value="AL">
                                                Albania
                                            </option>
                                            <option value="AU">
                                                Australia
                                            </option>
                                            <option value="AT">
                                                Austria
                                            </option>
                                            <option value="BS">
                                                Bahamas
                                            </option>
                                            <option value="BE">
                                                Belgium
                                            </option>
                                            <option value="BR">
                                                Brazil
                                            </option>
                                            <option value="VG">
                                                British Virgin Islands
                                            </option>
                                            <option value="BI">
                                                Burundi
                                            </option>
                                            <option value="KH">
                                                Cambodia
                                            </option>
                                            <option value="KY">
                                                Cayman Islands
                                            </option>
                                            <option value="CF">
                                                Central African Republic
                                            </option>
                                            <option value="TD">
                                                Chad
                                            </option>
                                            <option value="CL">
                                                Chile
                                            </option>
                                            <option value="CZ">
                                                Czech Republic
                                            </option>
                                            <option value="DK">
                                                Denmark
                                            </option>
                                            <option value="DM">
                                                Dominica
                                            </option>
                                            <option value="ER">
                                                Eritrea
                                            </option>
                                            <option value="FI">
                                                Finland
                                            </option>
                                            <option value="FR">
                                                France
                                            </option>
                                            <option value="DE">
                                                Germany
                                            </option>
                                            <option value="GR">
                                                Greece
                                            </option>
                                            <option value="GL">
                                                Greenland
                                            </option>
                                            <option value="GP">
                                                Guadeloupe
                                            </option>
                                            <option value="GN">
                                                Guinea
                                            </option>
                                            <option value="GY">
                                                Guyana
                                            </option>
                                            <option value="HT">
                                                Haiti
                                            </option>
                                            <option value="HK">
                                                Hong Kong
                                            </option>
                                            <option value="HU">
                                                Hungary
                                            </option>
                                            <option value="ID">
                                                Indonesia
                                            </option>
                                            <option value="IT">
                                                Italy
                                            </option>
                                            <option value="JM">
                                                Jamaica
                                            </option>
                                            <option value="JP">
                                                Japan
                                            </option>
                                            <option value="KI">
                                                Kiribati
                                            </option>
                                            <option value="LV">
                                                Latvia
                                            </option>
                                            <option value="LU">
                                                Luxembourg
                                            </option>
                                            <option value="MO">
                                                Macau
                                            </option>
                                            <option value="MW">
                                                Malawi
                                            </option>
                                            <option value="MY">
                                                Malaysia
                                            </option>
                                            <option value="MQ">
                                                Martinique
                                            </option>
                                            <option value="MX">
                                                Mexico
                                            </option>
                                            <option value="NL">
                                                Netherlands
                                            </option>
                                            <option value="NC">
                                                New Caledonia
                                            </option>
                                            <option value="NO">
                                                Norway
                                            </option>
                                            <option value="PH">
                                                Philippines
                                            </option>
                                            <option value="PN">
                                                Pitcairn Islands
                                            </option>
                                            <option value="PL">
                                                Poland
                                            </option>
                                            <option value="RU">
                                                Russia
                                            </option>
                                            <option value="WS">
                                                Samoa
                                            </option>
                                            <option value="SM">
                                                San Marino
                                            </option>
                                            <option value="SA">
                                                Saudi Arabia
                                            </option>
                                            <option value="SG">
                                                Singapore
                                            </option>
                                            <option value="KR">
                                                South Korea
                                            </option>
                                            <option value="ES">
                                                Spain
                                            </option>
                                            <option value="SE">
                                                Sweden
                                            </option>
                                            <option value="CH">
                                                Switzerland
                                            </option>
                                            <option value="TW">
                                                Taiwan
                                            </option>
                                            <option value="TH">
                                                Thailand
                                            </option>
                                            <option value="TR">
                                                Turkey
                                            </option>
                                            <option value="TV">
                                                Tuvalu
                                            </option>
                                            <option value="VN">
                                                Vietnam
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-50">
                                        <label for="zip">Zip</label>
                                        <input type="text" id="zip" name="zip" placeholder="10001">
                                    </div>
                                </div>
                            </div>
                            <div class="col-50">
                                <h3>Payment method : Use your PayPal account</h3>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname" placeholder="You Name">
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2018">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="352">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Place Your Order" class="btn">
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container">
                    <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                    <div class="border-top">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="img-thumbnail"><img src="https://img.btdmp.com/10119/10119129/products/0x180@160623791925edfbb737.png"></div>
                                    </td>
                                    <td style="vertical-align: top; padding: 0px 10px 10px 10px"><span>Limited - Unique Nurse BB-050</span>
                                        <div class="size-small">Unisex Hoodie / Black / S</div>
                                    </td>
                                    <td style="vertical-align: top; padding: 0px 10px 10px 10px"><span class="price">$45.99</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="border-top">
                        <div>
                            <label for="discount-code"><i class="fa fa-ticket"></i> Discount Code</label>
                            <div style="display: flex"><input type="text" id="code" name="code" placeholder="Enter your discount code here"><button class="btn-apply">Apply</button></div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="sub-price"> <span>Subtotal</span>
                            <span class="price">$45.99</span>
                        </div>
                    </div>
                    <div class="sub-price"> <span>Shipping</span>
                        <span class="price">$8.99</span>
                    </div>
                    <div class="border-top">
                        <div class="sub-price"> <span>Total:</span>
                            <span class="price-toltal">$54.98</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>