<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account Information</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


<div class="form-container">
    <div class="form-container">
        <div class="head-name">
            <div class="bankname">
                <h1>Bangladesh Money Bank </h1>
                <h3 style="color: rgb(139, 210, 158);">Account Create Successfully</h3>
            </div>
        <h5><i>Assignment Submit By,<br/> Name: Shakawat Hosen Riaz <br/> ID: 2020000000107 </i></h5>
    </div>

    <form action="index.php" method="POST"> 
        <div class="partOne">Part - I: Information Regarding Account</div>
        <ol type="1">
            <li>
                <label>Name of the Account (In English Block Letter): </label>
                    <?php 
                        $nameOfTheAccount = $_POST['nameOfTheAccount'];
                        echo "<b><u>{$nameOfTheAccount}</u></b>";
                    ?>
                <br>
                <label>হিসাবের শিরোনাম (বাংলায়): </label>
                    <?php 
                        $hisab = $_POST['hisab'];
                        echo "<b><u>{$hisab}</u></b>";
                    ?>           
            </li>

            <li>
                <label>Type of Account (Mark Tick): </label>

                <?php 
                    $typeOfAc = $_POST['typeOfAc'];
                    $typeOfAcOther = $_POST['typeOfAcOther'];
                    foreach($typeOfAc as $typeOfAc)
                    {
                        if ($typeOfAc == true){
                            echo "<b><u>{$typeOfAc} </u></b>";
                        }
                    
                    }
                    echo "<b><u>{$typeOfAcOther} </u></b>";
                ?>
            </li>
            <li>
                <label>Currency (Mark Tick): </label>
                    <?php 
                    
                        $CurrencyMarkTick = $_POST['CurrencyMarkTick'];
                        $otherCurrencyMarkTick = $_POST['otherCurrencyMarkTick'];
                        foreach($CurrencyMarkTick as $CurrencyMarkTick)
                        {
                            if ($CurrencyMarkTick == true){
                            echo "<b><u>{$CurrencyMarkTick} </u></b>";
                        }
                    
                        }
                        echo "<b><u>{$otherCurrencyMarkTick} </u></b>";
                    ?>                
            </li>

            <li>
                <label>Mode of Operation of Account (Mark Tick): 
                <?php 
                    
                    $modeOfOperation = $_POST['modeOfOperation'];
                    $otherModeOfOperation = $_POST['otherModeOfOperation'];
                foreach($modeOfOperation as $modeOfOperation){
                    if ($modeOfOperation == true){
                        echo "<b><u>{$modeOfOperation} </u></b>";
                    }
                
                }
                echo "<b><u>{$otherModeOfOperation} </u></b>";
            ?>     
            </li>

            <li>
                <label>Amount of Initial Deposit: </label> 
                    In Figure <?php 
                    $amountFigure = $_POST['amountFigure'];
                    echo "<b><u>{$amountFigure}</u></b>";
                ?> 
                    In Word <?php 
                    $amountWord = $_POST['amountWord'];
                    echo "<b><u>{$amountWord}</u></b>";
                ?>  
                <br/>
                   
            </li>

            <li>
                <label>Other Services: </label>
                <?php 
                    
                    $otherServices = $_POST['otherServices'];
                foreach($otherServices as $otherServices){
                    if ($otherServices == true){
                        echo "<b><u>{$otherServices} </u></b>";
                    }
                
                }
               
            ?>   
            </li>

        </ol>

        <div class="partOne">Part II: Information Related to Person
            <sup>1</sup> 
        </div>
            <br/><label class="acno"> <?php 
                    $acNo = $_POST['acNo'];
                    echo "<b><u>{$acNo}</u></b>";
                ?> <b>A/C No:</b>  </label>
                

        <ol type="1">
            <div class="container">
                <div class="folabel">
                    <li>
                        <label>Name of the Account (In English Block Letter):</label> 
                        <?php 
                            $nameOf_the_aco = $_POST['nameOf_the_aco'];
                            echo "<b><u>{$nameOf_the_aco}</u></b>";
                ?>
                        <br/>
                        <label>হিসাবের শিরোনাম (বাংলায়):</label>
                        <?php 
                    $sironameHisab = $_POST['sironameHisab'];
                    echo "<b><u>{$sironameHisab}</u></b>";
                ?>         
                    </li>

                    <li>
                        <label>Date of Birth : </label> 
                        <?php 
                    $dateOfBirth = $_POST['dateOfBirth'];
                    echo "<b><u>{$dateOfBirth}</u></b>";
                ?>            
                    </li>

                    <li>
                        <label>Father's Name : </label>  
                        <?php 
                    $fathersName = $_POST['fathersName'];
                    echo "<b><u>{$fathersName}</u></b>";
                ?>             
                    </li>

                    <li>
                        <label>Mother's Name : </label>
                        <?php 
                    $mothersName = $_POST['mothersName'];
                    echo "<b><u>{$mothersName}</u></b>";
                ?>                  
                    </li>

                    <li>
                        <label>Name of spouse: </label>
                        <?php 
                    $spouseOfName = $_POST['spouseOfName'];
                    echo "<b><u>{$spouseOfName}</u></b>";
                ?>                  
                    </li>
                </div>

                <div class="photo">
                    <div class="photo-sec">
                    <p>Photo Here</p>
                    <?php 
                    $photo = $_POST['photo'];
                    echo "<b><u>{$photo}</u></b>";
                    echo '<img src="' .$photo . '" alt="Uploaded">';

                ?>      
                </div>
                   
                </div>
            </div>
            
            <div class="rowTwo">
                <li>
                    <label>Nationality: </label>
                    <?php 
                    $nationality = $_POST['nationality'];
                    echo "<b><u>{$nationality}</u></b>";
                ?>   
                </li>  
                      
                <li>
                    <label>Gender: </label>
                    <?php 
                    $gender = $_POST['gender'];
                    echo "<b><u>{$gender}</u></b>";
                ?>             
                </li>
                
            </div>

            <li>
                <label>Resident Status (Mark Tick): </label>
                <?php 
                    
                    $resident = $_POST['resident'];
                foreach($resident as $resident){
                    if ($resident == true){
                        echo "<b><u>{$resident} </u></b>";
                    }
                
                }
               
            ?>   
                <br/>                  
            </li>

            <div class="rowTwo">
                <li>
                    <label>Occupation (Detailed): </label>
                    <?php 
                    $occupationDetailed = $_POST['occupationDetailed'];
                    echo "<b><u>{$occupationDetailed}</u></b>";
                ?>            
                </li>
                <li>
                    <label>Monthly Income: </label>
                    <?php 
                    $monthlyIncome = $_POST['monthlyIncome'];
                    echo "<b><u>{$monthlyIncome}</u></b>";
                ?>               
                </li>
            </div>

            <li>
                <label>Source of Fund (Detailed): </label> 
                <?php 
                    $sourceOfFund = $_POST['sourceOfFund'];
                    echo "<b><u>{$sourceOfFund}</u></b>";
                ?>             
            </li>

            <li>
                <label>Tax Identification No. (TIN) If applicable: </label> 
                <?php 
                    $taxIdentification = $_POST['taxIdentification'];
                    echo "<b><u>{$taxIdentification}</u></b>";
                ?>              
            </li>

            <li>
                <ol type="a">
                    <li>
                        <label>Present Address: </label> 
                            Road/Village: <?php 
                    $roadVill = $_POST['roadVill'];
                    echo "<b><u>{$roadVill}</u></b>";
                ?>
                            Post office: <?php 
                    $postOffice = $_POST['postOffice'];
                    echo "<b><u>{$postOffice}</u></b>";
                ?>
                            Police Station: <?php 
                    $policeSta = $_POST['policeSta'];
                    echo "<b><u>{$policeSta}</u></b>";
                ?>
                            District: <?php 
                    $district = $_POST['district'];
                    echo "<b><u>{$district}</u></b>";
                ?>
                    </li>
                    <li>
                        <label>Permanent Address: </label> 
                            Road/Village: <?php 
                    $perRoadVil = $_POST['perRoadVil'];
                    echo "<b><u>{$perRoadVil}</u></b>";
                ?>
                            Post office: <?php 
                    $perPostOffice = $_POST['perPostOffice'];
                    echo "<b><u>{$perPostOffice}</u></b>";
                ?>
                            Police Station: <?php 
                    $perPoliceStation = $_POST['perPoliceStation'];
                    echo "<b><u>{$perPoliceStation}</u></b>";
                ?>
                            District: <?php 
                    $perDistrict = $_POST['perDistrict'];
                    echo "<b><u>{$perDistrict}</u></b>";
                ?>
                            Phone Number: <?php 
                    $phoneNumber = $_POST['phoneNumber'];
                    echo "<b><u>{$phoneNumber}</u></b>";
                ?>
                            Email: <?php 
                    $emailAddress = $_POST['emailAddress'];
                    echo "<b><u>{$emailAddress}</u></b>";
                ?>
                    </li>
                </ol>            
            </li>

            <li> 
                Identification:
                <ol type="a">
                    <li>
                        <label>National ID Card No: </label> 
                        <?php 
                    $nationalIdCardNo = $_POST['nationalIdCardNo'];
                    echo "<b><u>{$nationalIdCardNo}</u></b>";
                ?>
                            <b>OR</b>
                    </li>
                    <li>
                        <label>Passport No./ Birth Registration No./ Others<sup>2</sup> / To be mentioned specifically:.... </label>
                        <?php 
                    $passportNo = $_POST['passportNo'];
                    echo "<b><u>{$passportNo}</u></b>";
                ?> 
                    </li>
                    <li>
                        <label>Introducer's Information: In case of unavailability of NID: </label><br>
                            Name: <?php 
                    $nidOfUnaName = $_POST['nidOfUnaName'];
                    echo "<b><u>{$nidOfUnaName}</u></b>";
                ?> 
                            Account / National ID Card No. (with date of birth): <?php 
                    $accountNationalIdCart = $_POST['accountNationalIdCart'];
                    echo "<b><u>{$accountNationalIdCart}</u></b>";
                ?> 
                            Signature (with date): <?php 
                    $signature = $_POST['signature'];
                    echo "<b><u>{$signature}</u></b>";
                ?>   
                    </li>
                </ol>            
            </li>
        </ol>
        <button class="btn" type="submit" onclick="printPage()">Print</button>
    </form>
</div>


<!-- SCRIPT START -->
<script>
    function printPage()
    {
        window.print();
    }
</script>
<!-- SCRIPT START -->


</body>
</html>