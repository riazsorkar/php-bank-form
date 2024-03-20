<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Banking Form</title>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<?php 
session_start();

if(isset($_SESSION['error_msg'])) {
    echo $_SESSION['error_msg'];
    unset($_SESSION['error_msg']);
}


?>


<div class="form-container">

    <form action="form.php" method="POST"> 
        <div class="partOne">Part - I: Information Regarding Account</div>
        <ol type="1">
            <li>
                <label>Name of the Account (In English Block Letter): </label>
                    <input type="text" name="AfirstName" required>
                <br>
                <label>হিসাবের শিরোনাম (বাংলায়): </label>
                    <input type="text" name="BfirstName" required>            
            </li>

            <li>
                <label>Type of Account (Mark Tick): </label>
                    <input type="radio" name="ACC_checkbox[]" value="Saving" required> Saving 
                    <input type="radio" name="ACC_checkbox[]" value="Current" required> Current 
                    <input type="radio" name="ACC_checkbox[]" value="SND" required> SND 
                    <input type="radio" name="ACC_checkbox[]" value="FC" required> FC 
                    <input type="radio" name="ACC_checkbox[]" value="RFCD" required> RFCD 
                    <input type="radio" name="ACC_checkbox[]" value="NFCD" required> NFCD 
                    <input type="radio" name="ACC_checkbox[]" value="Other" required> Other 
                    <input type="text" name="Other_ACC" value="" >                  
            </li>

            <li>
                <label>Currency (Mark Tick): </label>
                    <input type="radio" name="Currency_checkbox[]" value="Taka " required> Taka 
                    <input type="radio" name="Currency_checkbox[]" value="USD " required> USD 
                    <input type="radio" name="Currency_checkbox[]" value="Euro" required> Euro 
                    <input type="radio" name="Currency_checkbox[]" value="GBP" required> GBP 
                    <input type="radio" name="Currency_checkbox[]" value="Other" required> Other
                    <input type="text" name="Currency" value="">                
            </li>

            <li>
                <label>Mode of Operation of Account (Mark Tick): 
                    <input type="radio" name="MOA[]" value="Singly" required> Singly 
                    <input type="radio" name="MOA[]" value="Jointly" required> Jointly 
                    <input type="radio" name="MOA[]" value="Either or Survivor" required> Either or Survivor 
                    <input type="radio" name="MOA[]" value="Any One " required> Any One 
                    <input type="radio" name="MOA[]" value="Other" required>  Other 
                    <input type="text" name="MODE_OP_ACC" value=""> </label>
            </li>

            <li>
                <label>Amount of Initial Deposit: </label> 
                    In Figure <input type="text" name="In_Figure" required> 
                    In Word <input type="text" name="In_Word" required> 
                <br/>
                   
            </li>

            <li>
                <label>Other Services: </label>
                    <input type="radio" name="Other_Services[]" value="Cheque Book " required> Cheque Book 
                    <input type="radio" name="Other_Services[]" value="Debit Card" required> Debit Card 
                    <input type="radio" name="Other_Services[]" value="Internet Banking" required> Internet Banking 
                    <input type="radio" name="Other_Services[]" value="SMS Banking" required> SMS Banking   
                    <input type="radio" name="Other_Services[]" value="Online Transaction" required> Online Transaction 
                    <input type="radio" name="Other_Services[]" value="E-Statement" required> E-Statement 
                    <input type="radio" name="Other_Services[]" value="TAP" required> TAP
            </li>

        </ol>

        <div class="partOne">Part II: Information Related to Person
            <sup>1</sup> 
        </div>
            <br/>
            <label class="acno"><input type="text" name="A/C_No" placeholder="For Bank's Use Only" required> A/C No: </label> 
                

        <ol type="1">
            <div class="container">
                <div class="folabel">
                    <li>
                        <label>Name of the Account (In English Block Letter):</label> 
                        <input type="text" name="A2firstName" required>
                        <br/>
                        <label>হিসাবের শিরোনাম (বাংলায়):</label>
                        <input type="text" name="B2firstName" required>       
                    </li>

                    <li>
                        <label>Date of Birth : </label> 
                        <input type="date" name="DOB" required>          
                    </li>

                    <li>
                        <label>Father's Name : </label>  
                        <input type="text" name="FatherName" required>           
                    </li>

                    <li>
                        <label>Mother's Name : </label>
                        <input type="text" name="MotherName" required>            
                    </li>

                    <li>
                        <label>Name of spouse: </label>
                        <input type="text" name="SpouseName" required>             
                    </li>
                </div>

                <div class="photo">
                    <div class="photo-sec">
                    <p>Photo Here</p>
                    <input class="img" type="file" name="image" accept="image/*" required>
                </div>
                   
                </div>
            </div>
            
            <div class="rowTwo">
                <li>
                    <label>Nationality: </label>
                    <input type="text" name="Nationality" value="" required>
                </li>  
                      
                <li>
                    <label>Gender: </label>
                    <input type="text" name="Gender" value="" required>             
                </li>
                (In case of foreign citizen, copy of passport with Valid VISA must be obtained)
                
            </div>

            <li>
                <label>Resident Status (Mark Tick): </label>
                <input type="radio" name="Resident[]" value="Resident " required> Resident 
                <input type="radio" name="Resident[]" value="Non-Resident" required> Non-Resident 
                <span>(If needed, instructions of Bank's Guidelines for Foreign Exchange Transaction should be followed)</span>
                <br/>                  
            </li>

            <div class="rowTwo">
                <li>
                    <label>Occupation (Detailed): </label>
                    <input type="text" name="Occupation" value="" required>              
                </li>
                <li>
                    <label>Monthly Income: </label>
                    <input type="text" name="Income" value="" required>              
                </li>
            </div>

            <li>
                <label>Source of Fund (Detailed): </label> 
                <input type="text" name="Fund" value="" required>             
            </li>

            <li>
                <label>Tax Identification No. (TIN) If applicable: </label> 
                    <input type="text" name="TIN" value="">              
            </li>

            <li>
                <ol type="a">
                    <li>
                        <label>Present Address: </label> 
                            Road/Village: <input type="text" name="R_V" required>
                            Post office: <input type="text" name="PO" required>
                            Police Station: <input type="text" name="PS" required>
                            District: <input type="text" name="DIS" required>
                    </li>
                    <li>
                        <label>Permanent Address: </label> 
                            Road/Village: <input type="text" name="P_R_V" required>
                            Post office: <input type="text" name="P_PO" required>
                            Police Station: <input type="text" name="P_PS" required>
                            District: <input type="text" name="P_DIS" required>
                            Phone Number: <input type="text" name="P_Number" required>
                            Email: <input type="text" name="P_Email" required>
                    </li>
                </ol>            
            </li>

            <li> 
                Identification:
                <ol type="a">
                    <li>
                        <label>National ID Card No: </label> 
                            <input type="text" name="NID" required>
                            <b>OR</b>
                    </li>
                    <li>
                        <label>Passport No./ Birth Registration No./ Others<sup>2</sup> / To be mentioned specifically:.... </label>
                            <input type="text" name="Docu" >  
                    </li>
                    <li>
                        <label>Introducer's Information: In case of unavailability of NID: </label><br>
                            Name: <input type="text" name="UN_name" > 
                            Account / National ID Card No. (with date of birth): <input type="text" name="UN_NID" > 
                            Signature (with date): <input type="text" name="Sign" >  
                    </li>
                </ol>            
            </li>
        </ol>
        <!-- <input class="btn" type="submit" name="submit" value="Submit"> -->
        <button class="btn" type="submit">Submit</button>
    </form>
</div>



<!-- SCRIPT START -->


<!-- SCRIPT START -->






</body>
</html>