   <?php 
 /*  	  $email = "noz@slashX.ant";
      $firstname = "Noz";
      $surname = "Experta";
      $birthdate = "2010-03-21";
      $address = "กากออล";
      $sent_address = "123 ปลาฉลามขึ้นบก";
      $country = "THA";
      $creditcard = "";
      $phone_number = "0123456789";
      */
   ?>

    <div class="main">
      <div class="container">
        <!-- BEGIN CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-1 col-sm-1"></div>
          <div class="col-md-10 col-sm-10">
            <h1>Manage Profile</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal" role="form" method="post" action=<?php echo site_url('user/manageprofile'); ?> id="manage_profile_form">
                    <fieldset>
                      <legend>Account details</legend>
                      <div class="form-group">
                        <label for="old_password" class="col-lg-4 control-label">Old password <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" id="old_password" name="old_password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">New Password </label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" id="password" name="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="confirm_password" class="col-lg-4 control-label">Confirm new password </label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="email" class="form-control" id="email" name="email" value=<?php echo $email; ?>>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Personal details</legend>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">Firstname <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="name" name="name" value=<?php echo $name;?>>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="surname" class="col-lg-4 control-label">Surname <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="surname" name="surname" value=<?php echo $surname;?>>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="barthdate" class="col-lg-4 control-label">Birthdate <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="date" class="form-control" id="birthday" name="birthday" value=<?php echo $birthday; ?>>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="address" class="col-lg-4 control-label"> Address <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="address" name="address" value="<?php echo $address;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="sent_address" class="col-lg-4 control-label">Billing address </label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="sent_address" name="sent_address" value="<?php echo $sent_address;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="country" class="col-lg-4 control-label">Country <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <select class="form-control input-sm" id="country" name="country">
                          		<option <?php if ($country == "THA" ) echo "selected"; ?> value="THA">Thailand</option>
								<option <?php if ($country == "AFG" ) echo "selected"; ?> value="AFG">Afghanistan</option>
								<option <?php if ($country == "ALA" ) echo "selected"; ?> value="ALA">Åland Islands</option>
								<option <?php if ($country == "ALB" ) echo "selected"; ?> value="ALB">Albania</option>
								<option <?php if ($country == "DZA" ) echo "selected"; ?> value="DZA">Algeria</option>
								<option <?php if ($country == "ASM" ) echo "selected"; ?> value="ASM">American Samoa</option>
								<option <?php if ($country == "AND" ) echo "selected"; ?> value="AND">Andorra</option>
								<option <?php if ($country == "AGO" ) echo "selected"; ?> value="AGO">Angola</option>
								<option <?php if ($country == "AIA" ) echo "selected"; ?> value="AIA">Anguilla</option>
								<option <?php if ($country == "ATA" ) echo "selected"; ?> value="ATA">Antarctica</option>
								<option <?php if ($country == "ATG" ) echo "selected"; ?> value="ATG">Antigua and Barbuda</option>
								<option <?php if ($country == "ARG" ) echo "selected"; ?> value="ARG">Argentina</option>
								<option <?php if ($country == "ARM" ) echo "selected"; ?> value="ARM">Armenia</option>
								<option <?php if ($country == "ABW" ) echo "selected"; ?> value="ABW">Aruba</option>
								<option <?php if ($country == "AUS" ) echo "selected"; ?> value="AUS">Australia</option>
								<option <?php if ($country == "AUT" ) echo "selected"; ?> value="AUT">Austria</option>
								<option <?php if ($country == "AZE" ) echo "selected"; ?> value="AZE">Azerbaijan</option>
								<option <?php if ($country == "BHS" ) echo "selected"; ?> value="BHS">Bahamas</option>
								<option <?php if ($country == "BHR" ) echo "selected"; ?> value="BHR">Bahrain</option>
								<option <?php if ($country == "BGD" ) echo "selected"; ?> value="BGD">Bangladesh</option>
								<option <?php if ($country == "BRB" ) echo "selected"; ?> value="BRB">Barbados</option>
								<option <?php if ($country == "BLR" ) echo "selected"; ?> value="BLR">Belarus</option>
								<option <?php if ($country == "BEL" ) echo "selected"; ?> value="BEL">Belgium</option>
								<option <?php if ($country == "BLZ" ) echo "selected"; ?> value="BLZ">Belize</option>
								<option <?php if ($country == "BEN" ) echo "selected"; ?> value="BEN">Benin</option>
								<option <?php if ($country == "BMU" ) echo "selected"; ?> value="BMU">Bermuda</option>
								<option <?php if ($country == "BTN" ) echo "selected"; ?> value="BTN">Bhutan</option>
								<option <?php if ($country == "BOL" ) echo "selected"; ?> value="BOL">Bolivia, Plurinational State of</option>
								<option <?php if ($country == "BES" ) echo "selected"; ?> value="BES">Bonaire, Sint Eustatius and Saba</option>
								<option <?php if ($country == "BIH" ) echo "selected"; ?> value="BIH">Bosnia and Herzegovina</option>
								<option <?php if ($country == "BWA" ) echo "selected"; ?> value="BWA">Botswana</option>
								<option <?php if ($country == "BVT" ) echo "selected"; ?> value="BVT">Bouvet Island</option>
								<option <?php if ($country == "BRA" ) echo "selected"; ?> value="BRA">Brazil</option>
								<option <?php if ($country == "IOT" ) echo "selected"; ?> value="IOT">British Indian Ocean Territory</option>
								<option <?php if ($country == "BRN" ) echo "selected"; ?> value="BRN">Brunei Darussalam</option>
								<option <?php if ($country == "BGR" ) echo "selected"; ?> value="BGR">Bulgaria</option>
								<option <?php if ($country == "BFA" ) echo "selected"; ?> value="BFA">Burkina Faso</option>
								<option <?php if ($country == "BDI" ) echo "selected"; ?> value="BDI">Burundi</option>
								<option <?php if ($country == "KHM" ) echo "selected"; ?> value="KHM">Cambodia</option>
								<option <?php if ($country == "CMR" ) echo "selected"; ?> value="CMR">Cameroon</option>
								<option <?php if ($country == "CAN" ) echo "selected"; ?> value="CAN">Canada</option>
								<option <?php if ($country == "CPV" ) echo "selected"; ?> value="CPV">Cape Verde</option>
								<option <?php if ($country == "CYM" ) echo "selected"; ?> value="CYM">Cayman Islands</option>
								<option <?php if ($country == "CAF" ) echo "selected"; ?> value="CAF">Central African Republic</option>
								<option <?php if ($country == "TCD" ) echo "selected"; ?> value="TCD">Chad</option>
								<option <?php if ($country == "CHL" ) echo "selected"; ?> value="CHL">Chile</option>
								<option <?php if ($country == "CHN" ) echo "selected"; ?> value="CHN">China</option>
								<option <?php if ($country == "CXR" ) echo "selected"; ?> value="CXR">Christmas Island</option>
								<option <?php if ($country == "CCK" ) echo "selected"; ?> value="CCK">Cocos (Keeling) Islands</option>
								<option <?php if ($country == "COL" ) echo "selected"; ?> value="COL">Colombia</option>
								<option <?php if ($country == "COM" ) echo "selected"; ?> value="COM">Comoros</option>
								<option <?php if ($country == "COG" ) echo "selected"; ?> value="COG">Congo</option>
								<option <?php if ($country == "COD" ) echo "selected"; ?> value="COD">Congo, the Democratic Republic of the</option>
								<option <?php if ($country == "COK" ) echo "selected"; ?> value="COK">Cook Islands</option>
								<option <?php if ($country == "CRI" ) echo "selected"; ?> value="CRI">Costa Rica</option>
								<option <?php if ($country == "CIV" ) echo "selected"; ?> value="CIV">Côte d'Ivoire</option>
								<option <?php if ($country == "HRV" ) echo "selected"; ?> value="HRV">Croatia</option>
								<option <?php if ($country == "CUB" ) echo "selected"; ?> value="CUB">Cuba</option>
								<option <?php if ($country == "CUW" ) echo "selected"; ?> value="CUW">Curaçao</option>
								<option <?php if ($country == "CYP" ) echo "selected"; ?> value="CYP">Cyprus</option>
								<option <?php if ($country == "CZE" ) echo "selected"; ?> value="CZE">Czech Republic</option>
								<option <?php if ($country == "DNK" ) echo "selected"; ?> value="DNK">Denmark</option>
								<option <?php if ($country == "DJI" ) echo "selected"; ?> value="DJI">Djibouti</option>
								<option <?php if ($country == "DMA" ) echo "selected"; ?> value="DMA">Dominica</option>
								<option <?php if ($country == "DOM" ) echo "selected"; ?> value="DOM">Dominican Republic</option>
								<option <?php if ($country == "ECU" ) echo "selected"; ?> value="ECU">Ecuador</option>
								<option <?php if ($country == "EGY" ) echo "selected"; ?> value="EGY">Egypt</option>
								<option <?php if ($country == "SLV" ) echo "selected"; ?> value="SLV">El Salvador</option>
								<option <?php if ($country == "GNQ" ) echo "selected"; ?> value="GNQ">Equatorial Guinea</option>
								<option <?php if ($country == "ERI" ) echo "selected"; ?> value="ERI">Eritrea</option>
								<option <?php if ($country == "EST" ) echo "selected"; ?> value="EST">Estonia</option>
								<option <?php if ($country == "ETH" ) echo "selected"; ?> value="ETH">Ethiopia</option>
								<option <?php if ($country == "FLK" ) echo "selected"; ?> value="FLK">Falkland Islands (Malvinas)</option>
								<option <?php if ($country == "FRO" ) echo "selected"; ?> value="FRO">Faroe Islands</option>
								<option <?php if ($country == "FJI" ) echo "selected"; ?> value="FJI">Fiji</option>
								<option <?php if ($country == "FIN" ) echo "selected"; ?> value="FIN">Finland</option>
								<option <?php if ($country == "FRA" ) echo "selected"; ?> value="FRA">France</option>
								<option <?php if ($country == "GUF" ) echo "selected"; ?> value="GUF">French Guiana</option>
								<option <?php if ($country == "PYF" ) echo "selected"; ?> value="PYF">French Polynesia</option>
								<option <?php if ($country == "ATF" ) echo "selected"; ?> value="ATF">French Southern Territories</option>
								<option <?php if ($country == "GAB" ) echo "selected"; ?> value="GAB">Gabon</option>
								<option <?php if ($country == "GMB" ) echo "selected"; ?> value="GMB">Gambia</option>
								<option <?php if ($country == "GEO" ) echo "selected"; ?> value="GEO">Georgia</option>
								<option <?php if ($country == "DEU" ) echo "selected"; ?> value="DEU">Germany</option>
								<option <?php if ($country == "GHA" ) echo "selected"; ?> value="GHA">Ghana</option>
								<option <?php if ($country == "GIB" ) echo "selected"; ?> value="GIB">Gibraltar</option>
								<option <?php if ($country == "GRC" ) echo "selected"; ?> value="GRC">Greece</option>
								<option <?php if ($country == "GRL" ) echo "selected"; ?> value="GRL">Greenland</option>
								<option <?php if ($country == "GRD" ) echo "selected"; ?> value="GRD">Grenada</option>
								<option <?php if ($country == "GLP" ) echo "selected"; ?> value="GLP">Guadeloupe</option>
								<option <?php if ($country == "GUM" ) echo "selected"; ?> value="GUM">Guam</option>
								<option <?php if ($country == "GTM" ) echo "selected"; ?> value="GTM">Guatemala</option>
								<option <?php if ($country == "GGY" ) echo "selected"; ?> value="GGY">Guernsey</option>
								<option <?php if ($country == "GIN" ) echo "selected"; ?> value="GIN">Guinea</option>
								<option <?php if ($country == "GNB" ) echo "selected"; ?> value="GNB">Guinea-Bissau</option>
								<option <?php if ($country == "GUY" ) echo "selected"; ?> value="GUY">Guyana</option>
								<option <?php if ($country == "HTI" ) echo "selected"; ?> value="HTI">Haiti</option>
								<option <?php if ($country == "HMD" ) echo "selected"; ?> value="HMD">Heard Island and McDonald Islands</option>
								<option <?php if ($country == "VAT" ) echo "selected"; ?> value="VAT">Holy See (Vatican City State)</option>
								<option <?php if ($country == "HND" ) echo "selected"; ?> value="HND">Honduras</option>
								<option <?php if ($country == "HKG" ) echo "selected"; ?> value="HKG">Hong Kong</option>
								<option <?php if ($country == "HUN" ) echo "selected"; ?> value="HUN">Hungary</option>
								<option <?php if ($country == "ISL" ) echo "selected"; ?> value="ISL">Iceland</option>
								<option <?php if ($country == "IND" ) echo "selected"; ?> value="IND">India</option>
								<option <?php if ($country == "IDN" ) echo "selected"; ?> value="IDN">Indonesia</option>
								<option <?php if ($country == "IRN" ) echo "selected"; ?> value="IRN">Iran, Islamic Republic of</option>
								<option <?php if ($country == "IRQ" ) echo "selected"; ?> value="IRQ">Iraq</option>
								<option <?php if ($country == "IRL" ) echo "selected"; ?> value="IRL">Ireland</option>
								<option <?php if ($country == "IMN" ) echo "selected"; ?> value="IMN">Isle of Man</option>
								<option <?php if ($country == "ISR" ) echo "selected"; ?> value="ISR">Israel</option>
								<option <?php if ($country == "ITA" ) echo "selected"; ?> value="ITA">Italy</option>
								<option <?php if ($country == "JAM" ) echo "selected"; ?> value="JAM">Jamaica</option>
								<option <?php if ($country == "JPN" ) echo "selected"; ?> value="JPN">Japan</option>
								<option <?php if ($country == "JEY" ) echo "selected"; ?> value="JEY">Jersey</option>
								<option <?php if ($country == "JOR" ) echo "selected"; ?> value="JOR">Jordan</option>
								<option <?php if ($country == "KAZ" ) echo "selected"; ?> value="KAZ">Kazakhstan</option>
								<option <?php if ($country == "KEN" ) echo "selected"; ?> value="KEN">Kenya</option>
								<option <?php if ($country == "KIR" ) echo "selected"; ?> value="KIR">Kiribati</option>
								<option <?php if ($country == "PRK" ) echo "selected"; ?> value="PRK">Korea, Democratic People's Republic of</option>
								<option <?php if ($country == "KOR" ) echo "selected"; ?> value="KOR">Korea, Republic of</option>
								<option <?php if ($country == "KWT" ) echo "selected"; ?> value="KWT">Kuwait</option>
								<option <?php if ($country == "KGZ" ) echo "selected"; ?> value="KGZ">Kyrgyzstan</option>
								<option <?php if ($country == "LAO" ) echo "selected"; ?> value="LAO">Lao People's Democratic Republic</option>
								<option <?php if ($country == "LVA" ) echo "selected"; ?> value="LVA">Latvia</option>
								<option <?php if ($country == "LBN" ) echo "selected"; ?> value="LBN">Lebanon</option>
								<option <?php if ($country == "LSO" ) echo "selected"; ?> value="LSO">Lesotho</option>
								<option <?php if ($country == "LBR" ) echo "selected"; ?> value="LBR">Liberia</option>
								<option <?php if ($country == "LBY" ) echo "selected"; ?> value="LBY">Libya</option>
								<option <?php if ($country == "LIE" ) echo "selected"; ?> value="LIE">Liechtenstein</option>
								<option <?php if ($country == "LTU" ) echo "selected"; ?> value="LTU">Lithuania</option>
								<option <?php if ($country == "LUX" ) echo "selected"; ?> value="LUX">Luxembourg</option>
								<option <?php if ($country == "MAC" ) echo "selected"; ?> value="MAC">Macao</option>
								<option <?php if ($country == "MKD" ) echo "selected"; ?> value="MKD">Macedonia, the former Yugoslav Republic of</option>
								<option <?php if ($country == "MDG" ) echo "selected"; ?> value="MDG">Madagascar</option>
								<option <?php if ($country == "MWI" ) echo "selected"; ?> value="MWI">Malawi</option>
								<option <?php if ($country == "MYS" ) echo "selected"; ?> value="MYS">Malaysia</option>
								<option <?php if ($country == "MDV" ) echo "selected"; ?> value="MDV">Maldives</option>
								<option <?php if ($country == "MLI" ) echo "selected"; ?> value="MLI">Mali</option>
								<option <?php if ($country == "MLT" ) echo "selected"; ?> value="MLT">Malta</option>
								<option <?php if ($country == "MHL" ) echo "selected"; ?> value="MHL">Marshall Islands</option>
								<option <?php if ($country == "MTQ" ) echo "selected"; ?> value="MTQ">Martinique</option>
								<option <?php if ($country == "MRT" ) echo "selected"; ?> value="MRT">Mauritania</option>
								<option <?php if ($country == "MUS" ) echo "selected"; ?> value="MUS">Mauritius</option>
								<option <?php if ($country == "MYT" ) echo "selected"; ?> value="MYT">Mayotte</option>
								<option <?php if ($country == "MEX" ) echo "selected"; ?> value="MEX">Mexico</option>
								<option <?php if ($country == "FSM" ) echo "selected"; ?> value="FSM">Micronesia, Federated States of</option>
								<option <?php if ($country == "MDA" ) echo "selected"; ?> value="MDA">Moldova, Republic of</option>
								<option <?php if ($country == "MCO" ) echo "selected"; ?> value="MCO">Monaco</option>
								<option <?php if ($country == "MNG" ) echo "selected"; ?> value="MNG">Mongolia</option>
								<option <?php if ($country == "MNE" ) echo "selected"; ?> value="MNE">Montenegro</option>
								<option <?php if ($country == "MSR" ) echo "selected"; ?> value="MSR">Montserrat</option>
								<option <?php if ($country == "MAR" ) echo "selected"; ?> value="MAR">Morocco</option>
								<option <?php if ($country == "MOZ" ) echo "selected"; ?> value="MOZ">Mozambique</option>
								<option <?php if ($country == "MMR" ) echo "selected"; ?> value="MMR">Myanmar</option>
								<option <?php if ($country == "NAM" ) echo "selected"; ?> value="NAM">Namibia</option>
								<option <?php if ($country == "NRU" ) echo "selected"; ?> value="NRU">Nauru</option>
								<option <?php if ($country == "NPL" ) echo "selected"; ?> value="NPL">Nepal</option>
								<option <?php if ($country == "NLD" ) echo "selected"; ?> value="NLD">Netherlands</option>
								<option <?php if ($country == "NCL" ) echo "selected"; ?> value="NCL">New Caledonia</option>
								<option <?php if ($country == "NZL" ) echo "selected"; ?> value="NZL">New Zealand</option>
								<option <?php if ($country == "NIC" ) echo "selected"; ?> value="NIC">Nicaragua</option>
								<option <?php if ($country == "NER" ) echo "selected"; ?> value="NER">Niger</option>
								<option <?php if ($country == "NGA" ) echo "selected"; ?> value="NGA">Nigeria</option>
								<option <?php if ($country == "NIU" ) echo "selected"; ?> value="NIU">Niue</option>
								<option <?php if ($country == "NFK" ) echo "selected"; ?> value="NFK">Norfolk Island</option>
								<option <?php if ($country == "MNP" ) echo "selected"; ?> value="MNP">Northern Mariana Islands</option>
								<option <?php if ($country == "NOR" ) echo "selected"; ?> value="NOR">Norway</option>
								<option <?php if ($country == "OMN" ) echo "selected"; ?> value="OMN">Oman</option>
								<option <?php if ($country == "PAK" ) echo "selected"; ?> value="PAK">Pakistan</option>
								<option <?php if ($country == "PLW" ) echo "selected"; ?> value="PLW">Palau</option>
								<option <?php if ($country == "PSE" ) echo "selected"; ?> value="PSE">Palestinian Territory, Occupied</option>
								<option <?php if ($country == "PAN" ) echo "selected"; ?> value="PAN">Panama</option>
								<option <?php if ($country == "PNG" ) echo "selected"; ?> value="PNG">Papua New Guinea</option>
								<option <?php if ($country == "PRY" ) echo "selected"; ?> value="PRY">Paraguay</option>
								<option <?php if ($country == "PER" ) echo "selected"; ?> value="PER">Peru</option>
								<option <?php if ($country == "PHL" ) echo "selected"; ?> value="PHL">Philippines</option>
								<option <?php if ($country == "PCN" ) echo "selected"; ?> value="PCN">Pitcairn</option>
								<option <?php if ($country == "POL" ) echo "selected"; ?> value="POL">Poland</option>
								<option <?php if ($country == "PRT" ) echo "selected"; ?> value="PRT">Portugal</option>
								<option <?php if ($country == "PRI" ) echo "selected"; ?> value="PRI">Puerto Rico</option>
								<option <?php if ($country == "QAT" ) echo "selected"; ?> value="QAT">Qatar</option>
								<option <?php if ($country == "REU" ) echo "selected"; ?> value="REU">Réunion</option>
								<option <?php if ($country == "ROU" ) echo "selected"; ?> value="ROU">Romania</option>
								<option <?php if ($country == "RUS" ) echo "selected"; ?> value="RUS">Russian Federation</option>
								<option <?php if ($country == "RWA" ) echo "selected"; ?> value="RWA">Rwanda</option>
								<option <?php if ($country == "BLM" ) echo "selected"; ?> value="BLM">Saint Barthélemy</option>
								<option <?php if ($country == "SHN" ) echo "selected"; ?> value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
								<option <?php if ($country == "KNA" ) echo "selected"; ?> value="KNA">Saint Kitts and Nevis</option>
								<option <?php if ($country == "LCA" ) echo "selected"; ?> value="LCA">Saint Lucia</option>
								<option <?php if ($country == "MAF" ) echo "selected"; ?> value="MAF">Saint Martin (French part)</option>
								<option <?php if ($country == "SPM" ) echo "selected"; ?> value="SPM">Saint Pierre and Miquelon</option>
								<option <?php if ($country == "VCT" ) echo "selected"; ?> value="VCT">Saint Vincent and the Grenadines</option>
								<option <?php if ($country == "WSM" ) echo "selected"; ?> value="WSM">Samoa</option>
								<option <?php if ($country == "SMR" ) echo "selected"; ?> value="SMR">San Marino</option>
								<option <?php if ($country == "STP" ) echo "selected"; ?> value="STP">Sao Tome and Principe</option>
								<option <?php if ($country == "SAU" ) echo "selected"; ?> value="SAU">Saudi Arabia</option>
								<option <?php if ($country == "SEN" ) echo "selected"; ?> value="SEN">Senegal</option>
								<option <?php if ($country == "SRB" ) echo "selected"; ?> value="SRB">Serbia</option>
								<option <?php if ($country == "SYC" ) echo "selected"; ?> value="SYC">Seychelles</option>
								<option <?php if ($country == "SLE" ) echo "selected"; ?> value="SLE">Sierra Leone</option>
								<option <?php if ($country == "SGP" ) echo "selected"; ?> value="SGP">Singapore</option>
								<option <?php if ($country == "SXM" ) echo "selected"; ?> value="SXM">Sint Maarten (Dutch part)</option>
								<option <?php if ($country == "SVK" ) echo "selected"; ?> value="SVK">Slovakia</option>
								<option <?php if ($country == "SVN" ) echo "selected"; ?> value="SVN">Slovenia</option>
								<option <?php if ($country == "SLB" ) echo "selected"; ?> value="SLB">Solomon Islands</option>
								<option <?php if ($country == "SOM" ) echo "selected"; ?> value="SOM">Somalia</option>
								<option <?php if ($country == "ZAF" ) echo "selected"; ?> value="ZAF">South Africa</option>
								<option <?php if ($country == "SGS" ) echo "selected"; ?> value="SGS">South Georgia and the South Sandwich Islands</option>
								<option <?php if ($country == "SSD" ) echo "selected"; ?> value="SSD">South Sudan</option>
								<option <?php if ($country == "ESP" ) echo "selected"; ?> value="ESP">Spain</option>
								<option <?php if ($country == "LKA" ) echo "selected"; ?> value="LKA">Sri Lanka</option>
								<option <?php if ($country == "SDN" ) echo "selected"; ?> value="SDN">Sudan</option>
								<option <?php if ($country == "SUR" ) echo "selected"; ?> value="SUR">Suriname</option>
								<option <?php if ($country == "SJM" ) echo "selected"; ?> value="SJM">Svalbard and Jan Mayen</option>
								<option <?php if ($country == "SWZ" ) echo "selected"; ?> value="SWZ">Swaziland</option>
								<option <?php if ($country == "SWE" ) echo "selected"; ?> value="SWE">Sweden</option>
								<option <?php if ($country == "CHE" ) echo "selected"; ?> value="CHE">Switzerland</option>
								<option <?php if ($country == "SYR" ) echo "selected"; ?> value="SYR">Syrian Arab Republic</option>
								<option <?php if ($country == "TWN" ) echo "selected"; ?> value="TWN">Taiwan, Province of China</option>
								<option <?php if ($country == "TJK" ) echo "selected"; ?> value="TJK">Tajikistan</option>
								<option <?php if ($country == "TZA" ) echo "selected"; ?> value="TZA">Tanzania, United Republic of</option>
								
								<option <?php if ($country == "TLS" ) echo "selected"; ?> value="TLS">Timor-Leste</option>
								<option <?php if ($country == "TGO" ) echo "selected"; ?> value="TGO">Togo</option>
								<option <?php if ($country == "TKL" ) echo "selected"; ?> value="TKL">Tokelau</option>
								<option <?php if ($country == "TON" ) echo "selected"; ?> value="TON">Tonga</option>
								<option <?php if ($country == "TTO" ) echo "selected"; ?> value="TTO">Trinidad and Tobago</option>
								<option <?php if ($country == "TUN" ) echo "selected"; ?> value="TUN">Tunisia</option>
								<option <?php if ($country == "TUR" ) echo "selected"; ?> value="TUR">Turkey</option>
								<option <?php if ($country == "TKM" ) echo "selected"; ?> value="TKM">Turkmenistan</option>
								<option <?php if ($country == "TCA" ) echo "selected"; ?> value="TCA">Turks and Caicos Islands</option>
								<option <?php if ($country == "TUV" ) echo "selected"; ?> value="TUV">Tuvalu</option>
								<option <?php if ($country == "UGA" ) echo "selected"; ?> value="UGA">Uganda</option>
								<option <?php if ($country == "UKR" ) echo "selected"; ?> value="UKR">Ukraine</option>
								<option <?php if ($country == "ARE" ) echo "selected"; ?> value="ARE">United Arab Emirates</option>
								<option <?php if ($country == "GBR" ) echo "selected"; ?> value="GBR">United Kingdom</option>
								<option <?php if ($country == "USA" ) echo "selected"; ?> value="USA">United States</option>
								<option <?php if ($country == "UMI" ) echo "selected"; ?> value="UMI">United States Minor Outlying Islands</option>
								<option <?php if ($country == "URY" ) echo "selected"; ?> value="URY">Uruguay</option>
								<option <?php if ($country == "UZB" ) echo "selected"; ?> value="UZB">Uzbekistan</option>
								<option <?php if ($country == "VUT" ) echo "selected"; ?> value="VUT">Vanuatu</option>
								<option <?php if ($country == "VEN" ) echo "selected"; ?> value="VEN">Venezuela, Bolivarian Republic of</option>
								<option <?php if ($country == "VNM" ) echo "selected"; ?> value="VNM">Viet Nam</option>
								<option <?php if ($country == "VGB" ) echo "selected"; ?> value="VGB">Virgin Islands, British</option>
								<option <?php if ($country == "VIR" ) echo "selected"; ?> value="VIR">Virgin Islands, U.S.</option>
								<option <?php if ($country == "WLF" ) echo "selected"; ?> value="WLF">Wallis and Futuna</option>
								<option <?php if ($country == "ESH" ) echo "selected"; ?> value="ESH">Western Sahara</option>
								<option <?php if ($country == "YEM" ) echo "selected"; ?> value="YEM">Yemen</option>
								<option <?php if ($country == "ZMB" ) echo "selected"; ?> value="ZMB">Zambia</option>
								<option <?php if ($country == "ZWE" ) echo "selected"; ?> value="ZWE">Zimbabwe</option>
						  </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="creditcard" class="col-lg-4 control-label">Credit card </label>
                        <div class="col-lg-8">
                          <input type="text" maxlength="16" class="form-control" id="creditcard" name"creditcard" value=<?php echo $creditcard; ?>>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="phone_number" class="col-lg-4 control-label">Phone number <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="number" class="form-control" id="phone_no" name="phone_no" value=<?php echo $phone_no; ?>>
                        </div>
                      </div>
                    </fieldset>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>