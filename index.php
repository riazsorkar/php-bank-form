<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-container">
    
    <form method="post" action="form.php">
        <div class="partOne">Part - I: Information Regarding Account</div>
        <ol type="1">
            <li>
                <label>Name of the Account (In English Block Letter): <input type="text" name="firstName" value=""> </label> <br/>
                <label>হিসাবের শিরোনাম (বাংলায়): <input type="text" name="firstName" value=""> </label>              
            </li>

            <li>
                <label>Type of Account (Mark Tick): <input type="checkbox" name="firstName" value=""> Saving <input type="checkbox" name="firstName" value=""> Current <input type="checkbox" name="firstName" value=""> SND <input type="checkbox" name="firstName" value=""> FC <input type="checkbox" name="firstName" value=""> RFCD <input type="checkbox" name="firstName" value=""> NFCD  <input type="checkbox" name="firstName" value="">Other <input type="text" name="firstName" value=""> </label> <br/>                  
            </li>

            <li>
                <label>Currency (Mark Tick): <input type="checkbox" name="firstName" value=""> Taka <input type="checkbox" name="firstName" value=""> USD <input type="checkbox" name="firstName" value=""> Euro <input type="checkbox" name="firstName" value=""> GBP <input type="checkbox" name="firstName" value=""> Other <input type="text" name="firstName" value=""> </label> <br/>                 
            </li>

            <li>
                <label>Mode of Operation of Account (Mark Tick): <input type="checkbox" name="firstName" value=""> Singly <input type="checkbox" name="firstName" value=""> Jointly <input type="checkbox" name="firstName" value=""> Either or Survivor <input type="checkbox" name="firstName" value=""> Any One <input type="checkbox" name="firstName" value=""> Other <input type="text" name="firstName" value=""> </label> <br/>
                   
            </li>

            <li>
                <label>Amount of Initial Deposit: In Figure 
                    <input type="text" name="firstName" value=""> In Word 
                    <input type="text" name="firstName" value="">  
                </label> <br/>
                   
            </li>

            <li>
                <label>Other Services: <input type="checkbox" name="firstName" value=""> Cheque Book <input type="checkbox" name="firstName" value=""> Debit Card <input type="checkbox" name="firstName" value=""> Internet Banking <input type="checkbox" name="firstName" value=""> SMS Banking <input type="checkbox" name="firstName" value=""> Online Transaction <input type="checkbox" name="firstName" value=""> E-Statement <input type="checkbox" name="firstName" value=""> TAP </label> <br/>
                   
            </li>

        </ol>

        <div class="partOne">Part II: Information Related to Person<sup>1</sup> </div>
        <br/>
        <label class="acno"> <span> A/C No: <input type="text" name="firstName" value="" placeholder="For Bank's Use Only"></span> </label> 
        <ol type="1">
            <div class="container">
                <div class="folabel">
                    <li>
                        <label>Name of the Account (In English Block Letter): <input type="text" name="firstName" value=""> </label> <br/>
                        <label>হিসাবের শিরোনাম (বাংলায়): <input type="text" name="firstName" value=""> </label>              
                    </li>

                    <li>
                        <label>Date of Birth : <input type="text" name="firstName" value=""> </label>            
                    </li>
                    <li>
                        <label>Father's Name : <input type="text" name="firstName" value=""> </label>            
                    </li>
                    <li>
                        <label>Mother's Name : <input type="text" name="firstName" value=""> </label>            
                    </li>
                    <li>
                        <label>Name of spouse: <input type="text" name="firstName" value=""> </label>            
                    </li>
                </div>

                <div class="photo">
                    <p>Photo Here</p>
                    <input type="file" id="img" name="img" accept="image/*">
                </div>
            </div>
            
            <div class="rowTwo">
                <li>
                    <label>Nationality: <input type="text" name="firstName" value=""> </label>              
                </li>
                <li>
                    <label> Gender: <input type="text" name="firstName" value=""> </label>              
                </li>

                (In case of foreign citizen, copy of passport with Valid VISA must be obtained)
                
            </div>

            <li>
                <label>Resident Status (Mark Tick): <input type="checkbox" name="firstName" value=""> Resident <input type="checkbox" name="firstName" value=""> Non-Resident <span>(If needed, instructions of Bank's Guidelines for Foreign Exchange Transaction should be followed)</span> </label> <br/>                  
            </li>

            <div class="rowTwo">
                <li>
                    <label>Occupation (Detailed): <input type="text" name="firstName" value=""> </label>              
                </li>
                <li>
                    <label>Monthly Income: <input type="text" name="firstName" value=""> </label>              
                </li>
                
            </div>

            <li>
                    <label>Source of Fund (Detailed): <input type="text" name="firstName" value=""> </label>              
            </li>

            <li>
                    <label>Tax Identification No. (TIN) If applicable: <input type="text" name="firstName" value=""> </label>              
            </li>

            <li>
                <ol type="a">
                    <li>
                        <label>Present Address: Road/Village: <input type="text" name="firstName" value=""> Post office: <input type="text" name="firstName" value=""> Police Station: <input type="text" name="firstName" value=""> District: <input type="text" name="firstName" value=""> </label> 
                    </li>
                    <li>
                        <label>Permanent Address: Road/Village: <input type="text" name="firstName" value=""> Post office: <input type="text" name="firstName" value=""> Police Station: <input type="text" name="firstName" value=""> District: <input type="text" name="firstName" value="">
                        Phone Number: <input type="text" name="firstName" value="">
                        email: <input type="text" name="firstName" value=""> </label> 
                    </li>

                </ol>            
            </li>

            <li> Identification:
                <ol type="a">
                    <li>
                        <label> National ID Card No: <input type="text" name="firstName" value=""><b>OR</b></label> 
                    </li>
                    <li>
                        <label>Passport No./ Birth Registration No./ Others2 / To be mentioned specifically:.... <input type="text" name="firstName" value=""> </label> 
                    </li>
                    <li>
                        <label>Introducer's Information: In case of unavailability of NID Name: <input type="text" name="firstName" value="">  Account / National ID Card No. (with date of birth):<input type="text" name="firstName" value=""> Signature (with date):<input type="text" name="firstName" value=""> </label> 
                    </li>

                </ol>            
            </li>

            

        </ol>
    <!-- <input class="btn" type="submit" name="submit" value="Submit"> -->
    <button class="btn" type="submit" name="submit">Submit</button>
    </form>
</div>


    
</body>
</html>