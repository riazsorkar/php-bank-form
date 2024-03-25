<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Create Bank Account </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="form-container">
    <div class="head-name">
    <div class="bankname">
    <h1>Bangladesh Money Bank </h1>
    <h3> Branch 71, Block B, Banani, Dhaka 1213</h3>
    <h3>Create New Account</h3>
    </div>
    <h5><i>Assignment Submit By,<br/> Name: Shakawat Hosen Riaz <br/> ID: 2020000000107 </i></h5>
    </div>

    <form action="output.php" method="POST"> 
        <div class="partOne">Part - I: Information Regarding Account</div>
        <ol type="1">
            <li>
                <label>Name of the Account (In English Block Letter): </label>
                    <input type="text" name="nameOfTheAccount" placeholder="USE CAPITAL LETTER" required >
                <br>
                <label>হিসাবের শিরোনাম (বাংলায়): </label>
                    <input type="text" name="hisab" required >            
            </li>

            <li>
                <label>Type of Account (Mark Tick): </label>
                    <input type="radio" name="typeOfAc[]" value="Saving" required > Saving 
                    <input type="radio" name="typeOfAc[]" value="Current" required > Current 
                    <input type="radio" name="typeOfAc[]" value="SND" required > SND 
                    <input type="radio" name="typeOfAc[]" value="FC" required > FC 
                    <input type="radio" name="typeOfAc[]" value="RFCD" required > RFCD 
                    <input type="radio" name="typeOfAc[]" value="NFCD" required > NFCD 
                    <input type="radio" name="typeOfAc[]" value=" " required > Other 
                    <input type="text" name="typeOfAcOther" value=" " >                  
            </li>

            <li>
                <label>Currency (Mark Tick): </label>
                    <input type="radio" name="CurrencyMarkTick[]" value="Taka " required > Taka 
                    <input type="radio" name="CurrencyMarkTick[]" value="USD " required > USD 
                    <input type="radio" name="CurrencyMarkTick[]" value="Euro" required > Euro 
                    <input type="radio" name="CurrencyMarkTick[]" value="GBP" required > GBP 
                    <input type="radio" name="CurrencyMarkTick[]" value=" " required > Other
                    <input type="text" name="otherCurrencyMarkTick" value="">                
            </li>

            <li>
                <label>Mode of Operation of Account (Mark Tick): 
                    <input type="radio" name="modeOfOperation[]" value="Singly" required > Singly 
                    <input type="radio" name="modeOfOperation[]" value="Jointly" required > Jointly 
                    <input type="radio" name="modeOfOperation[]" value="Either or Survivor" required > Either or Survivor 
                    <input type="radio" name="modeOfOperation[]" value="Any One " required > Any One 
                    <input type="radio" name="modeOfOperation[]" value=" " required >  Other 
                    <input type="text" name="otherModeOfOperation" value=""> </label>
            </li>

            <li>
                <label>Amount of Initial Deposit: </label> 
                    In Figure <input type="text" name="amountFigure" required > 
                    In Word <input type="text" name="amountWord" required > 
                <br/>
                   
            </li>

            <li>
                <label>Other Services: </label>
                    <input type="radio" name="otherServices[]" value="Cheque Book " required > Cheque Book 
                    <input type="radio" name="otherServices[]" value="Debit Card" required > Debit Card 
                    <input type="radio" name="otherServices[]" value="Internet Banking" required > Internet Banking 
                    <input type="radio" name="otherServices[]" value="SMS Banking" required > SMS Banking   
                    <input type="radio" name="otherServices[]" value="Online Transaction" required > Online Transaction 
                    <input type="radio" name="otherServices[]" value="E-Statement" required > E-Statement 
                    <input type="radio" name="otherServices[]" value="TAP" required > TAP
            </li>

        </ol>

        <div class="partOne">Part II: Information Related to Person
            <sup>1</sup> 
        </div>
            <br/>
            <label class="acno"><input type="text" name="acNo" placeholder="For Bank's Use Only" > <b>A/C No:</b> </label> 
                

        <ol type="1">
            <div class="container">
                <div class="folabel">
                    <li>
                        <label>Name of the Account (In English Block Letter):</label> 
                        <input type="text" name="nameOf_the_aco" placeholder="USE CAPITAL LETTER" required >
                        <br/>
                        <label>হিসাবের শিরোনাম (বাংলায়):</label>
                        <input type="text" name="sironameHisab" required >       
                    </li>

                    <li>
                        <label>Date of Birth : </label> 
                        <input type="date" name="dateOfBirth" required >          
                    </li>

                    <li>
                        <label>Father's Name : </label>  
                        <input type="text" name="fathersName" required >           
                    </li>

                    <li>
                        <label>Mother's Name : </label>
                        <input type="text" name="mothersName" required >            
                    </li>

                    <li>
                        <label>Name of spouse: </label>
                        <input type="text" name="spouseOfName" required >             
                    </li>
                </div>

                <div class="photo">
                    <div class="photo-sec">
                    <p>Photo Here</p>
                    <input type="file" name="photo" accept="image/*" required >
                </div>
                   
                </div>
            </div>
            
            <div class="rowTwo">
                <li>
                    <label>Nationality: </label>
                    <input type="text" name="nationality" value="" required >
                </li>  
                      
                <li>
                    <label>Gender: </label>
                    <input type="text" name="gender" value="" required >             
                </li>
                (In case of foreign citizen, copy of passport with Valid VISA must be obtained)
                
            </div>

            <li>
                <label>Resident Status (Mark Tick): </label>
                <input type="radio" name="resident[]" value="Resident " required > Resident 
                <input type="radio" name="resident[]" value="Non-Resident" required > Non-Resident 
                <span>(If needed, instructions of Bank's Guidelines for Foreign Exchange Transaction should be followed)</span>
                <br/>                  
            </li>

            <div class="rowTwo">
                <li>
                    <label>Occupation (Detailed): </label>
                    <input type="text" name="occupationDetailed" value="" required >              
                </li>
                <li>
                    <label>Monthly Income: </label>
                    <input type="text" name="monthlyIncome" value="" required >              
                </li>
            </div>

            <li>
                <label>Source of Fund (Detailed): </label> 
                <input type="text" name="sourceOfFund" value="" required >             
            </li>

            <li>
                <label>Tax Identification No. (TIN) If applicable: </label> 
                    <input type="text" name="taxIdentification" value="">              
            </li>

            <li>
                <ol type="a">
                    <li>
                        <label>Present Address: </label> 
                            Road/Village: <input type="text" name="roadVill" required >
                            Post office: <input type="text" name="postOffice" required >
                            Police Station: <input type="text" name="policeSta" required >
                            District: <input type="text" name="district" required >
                    </li>
                    <li>
                        <label>Permanent Address: </label> 
                            Road/Village: <input type="text" name="perRoadVil" required >
                            Post office: <input type="text" name="perPostOffice" required >
                            Police Station: <input type="text" name="perPoliceStation" required >
                            District: <input type="text" name="perDistrict" required >
                            Phone Number: <input type="text" name="phoneNumber" required >
                            Email: <input type="text" name="emailAddress" required >
                    </li>
                </ol>            
            </li>

            <li> 
                Identification:
                <ol type="a">
                    <li>
                        <label>National ID Card No: </label> 
                            <input type="text" name="nationalIdCardNo" required >
                            <b>OR</b>
                    </li>
                    <li>
                        <label>Passport No./ Birth Registration No./ Others<sup>2</sup> / To be mentioned specifically:.... </label>
                            <input type="text" name="passportNo" >  
                    </li>
                    <li>
                        <label>Introducer's Information: In case of unavailability of NID: </label><br>
                            Name: <input type="text" name="nidOfUnaName" > 
                            Account / National ID Card No. (with date of birth): <input type="text" name="accountNationalIdCart" > 
                            Signature (with date): <input type="text" name="signature" >  
                    </li>
                </ol>            
            </li>
        </ol>
        <button class="btn" type="submit" > Create </button>
    </form>
</div>









</body>
</html>