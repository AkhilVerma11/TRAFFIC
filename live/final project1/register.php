<html>
    <head>
        <title>form49A</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style3.css">
    </head>
    <body>
         <nav class="navbar navbar-inverse">
             <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#robust" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"><b>Simran</b></a>
                  </div>
             <div id="robust" class="collapse navbar-collapse" aria-expanded="true"> 
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="Downloads.html">Downloads</a></li>
                    <li><a href="Franchise.html">Franchise Registration</a></li>
                    <li><a href="status.html">Status</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li><a href="enquiry.html">Ask Enquiry</a></li>
                    <!--li><a href="contact.html">Contact us</a></li-->
                    <li><a href="training.html">Training Manual</a></li> 
                </ul>
                 <ul class="nav navbar-nav navbar-right">     
                     <li><a href="login.html"><i class="glyphicon glyphicon-log-in"></i>  Login</a></li>
                 </ul>
             </div>
             </div>
         </nav>
        <center>
            <h2><b>Form No.49A</b></h2>
            <p>
                Application for Allotment of Permanent Account Number<br>
                [In the case of Indian citizen/Indian Companies/Entitiesincorporated in India/<br>Unincorporated entities formed in India]
                <br>See Rule 114
            </p>
        </center>
        <hr>
        <form method="post" action="#" id="" style="display: block">
            <div class="col-md-3">
                <label>Area Code: </label>
                <select name="Area_Code">
                    <option value="A_code">GZB</option>
                    <option value="A_code">ALD</option>
                    <option value="A_code">KNP</option>
                    <option value="A_code">JHN</option>
                </select>
            </div>
             <div class="col-md-3">
                <label>AO type: </label>
                <select name="AO_type">
                    <option value="A_code">GZB</option>
                    <option value="A_code">ALD</option>
                    <option value="A_code">KNP</option>
                    <option value="A_code">JHN</option>
                </select>
            </div>
             <div class="col-md-3">
                <label>Range Code: </label>
                <select name="R_code">
                    <option value="R_code">GZB</option>
                    <option value="R_code">ALD</option>
                    <option value="R_code">KNP</option>
                    <option value="R_code">JHN</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>AO No: </label>
                <select name="A_No">
                    <option value="A_No">GZB</option>
                    <option value="A_No">ALD</option>
                    <option value="A_No">KNP</option>
                    <option value="A_No">JHN</option>
                </select>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" style="display: block" id="register-form" action="#">
                                        <div class="form-group">
                                            <h4>Full Name(Full expanded name to be mentioned as appearing in proof idetity/dob/address documents: initials are not permitted)</h4>
                                            <hr>
                                            <label>Please select title as applicable: </label>
                                            <input type="radio" name="title" value="title" placeholder="Shri">Shri
                                            <input type="radio" name="title" value="title" placeholder="Smt">Smt
                                            <input type="radio" name="title" value="title" placeholder="Kumari">Kumari
                                            <input type="radio" name="title" value="title" placeholder="M/s">M/s<br>
                                            <label>Last Name/SurName:</label>
                                            <input type="text" name="lName" tabindex="1" placeholder="Last Name" id="Name" class="form-control" required>
                                            <label>First Name:</label>
                                            <input type="text" name="fName" tabindex="2" placeholder="First Name" id="Name" class="form-control" required>
                                            <label>Middle Name:</label>
                                            <input type="text" name="mName" tabindex="3" placeholder="Middle Name" id="Name" class="form-control">  
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Abbreviations of the name,as you would like it to be printed on the PAN card</h4>
                                            <input type="text" name="ShName" tabindex="4" placeholder="Abbreviation" id="Name" class="form-control">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Gender(for individuals only)</h4>
                                            <input type="radio" name="gender" value="gender" placeholder="male">Male<br>
                                            <input type="radio" name="gender" value="gender" placeholder="female">Female<br>
                                            <input type="radio" name="gender" value="gender" placeholder="Others">Others<br>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Date of Birth/Incorporation/Partnership or Trust Deed/Formation of Body of individuals or Association of Persons</h4>
                                            <input type="date" name="cdob" tabindex="5" placeholder="Date Of Birth" id="DOB" class="form-control">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Details of Parents(applicable only for individual applicants)<br><hr>
                                            Father's Name(Manadatory.even married womwn should fill in father's name only:</h4>
                                            <label>Last Name/SurName:</label>
                                            <input type="text" name="FlName" tabindex="6" placeholder="Last Name" id="Name" class="form-control" required>
                                            <label>First Name:</label>
                                            <input type="text" name="FfName" tabindex="7" placeholder="First Name" id="Name" class="form-control" required>
                                            <label>Middle Name:</label>
                                            <input type="text" name="FmName" tabindex="8" placeholder="Middle Name" id="Name" class="form-control">
                                            <hr>
                                            <h4>Mother's Name:</h4>
                                            <label>Last Name/SurName:</label>
                                            <input type="text" name="FlName" tabindex="6" placeholder="Last Name" id="Name" class="form-control" required>
                                            <label>First Name:</label>
                                            <input type="text" name="FfName" tabindex="7" placeholder="First Name" id="Name" class="form-control" required>
                                            <label>Middle Name:</label>
                                            <input type="text" name="FmName" tabindex="8" placeholder="Middle Name" id="Name" class="form-control">
                                            <h5>Select the Name of either father or mother which you may like to be printed on PAN card (select one only)</h5>
                                            <input type="radio" name="Father" value="Father" placeholder="Father">Father's Name
                                            <input type="radio" name="Mother" value="Mother" placeholder="Mother">Mother's Name
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Address</h4>
                                            <label>Residence Address:</label>
                                            <input type="text" name="Add1" tabindex="9" placeholder="Flat/Room/Door/Block No." class="form-control"><br>
                                            <input type="text" name="Add2" tabindex="10" placeholder="Name of Premises/Building/Village" class="form-control"><br>
                                            <input type="text" name="Add3" tabindex="11" placeholder="Road/Street/Lane/Post office" class="form-control"><br>
                                            <input type="text" name="Add4" tabindex="12" placeholder="Area/Locality/Taluka/Sub-Divisions" class="form-control"><br>
                                            <input type="text" name="Add5" tabindex="13" placeholder="Town/City/District" class="form-control"><br>
                                            <div class="col-md-4">    
                                                <label>State/Union Territory</label>
                                                <select name="State">
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Pincode/Zip Code</label>
                                                <input type="number" maxlength="6" name="Pcode" tabindex="14" placeholder="Pincode/Zipcode">
                                            </div>
                                            <div class="col-md-4">    
                                                <label>Country Name</label>
                                                <select name="Country">
                                                    <option value="India">India</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <hr>
                                        <div class="form-group">
                                            <label>Office Address:</label>
                                            <input type="text" name="Add1" tabindex="9" placeholder="Flat/Room/Door/Block No." class="form-control"><br>
                                            <input type="text" name="Add2" tabindex="10" placeholder="Name of Premises/Building/Village" class="form-control"><br>
                                            <input type="text" name="Add3" tabindex="11" placeholder="Road/Street/Lane/Post office" class="form-control"><br>
                                            <input type="text" name="Add4" tabindex="12" placeholder="Area/Locality/Taluka/Sub-Divisions" class="form-control"><br>
                                            <input type="text" name="Add5" tabindex="13" placeholder="Town/City/District" class="form-control"><br>
                                            <div class="col-md-4">    
                                                <label>State/Union Territory</label>
                                                <select name="State">
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Pincode/Zip Code</label>
                                                <input type="number" maxlength="6" name="Pcode" tabindex="14" placeholder="Pincode/Zipcode">
                                            </div>
                                            <div class="col-md-4">    
                                                <label>Country Name</label>
                                                <select name="Country">
                                                    <option value="India">India</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Address for Communication</h4>
                                            <input type="radio" name="Re" value="Residence" placeholder="Residence">Residence<br>
                                            <input type="radio" name="Of" value="Office" placeholder="Office">Office<br>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Contact Details & Email ID details</h4>
                                            <div class="col-md-4">
                                                <label>Country Code:</label>
                                                <input type="text" maxlength="3" name="Ccode" tabindex="15" placeholder="Country Code" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Area/STD Code:</label>
                                                <input type="Number" maxlength="7" name="STcode" tabindex="16" placeholder="Area/STD Code">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Telephone/Mobile number:</label>
                                                <input type="Number" maxlength="10" name="Mnumber" tabindex="17" placeholder="Telephone/Mobile Number" required>
                                            </div>
                                            <br>
                                            <label>Email ID</label>
                                            <input type="email" class="form-control" name="cmail" placeholder="Email" required tabindex="18">
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Status of Applicant</h4>
                                            <label>Please Select Status As Applicable</label>
                                            <br>
                                            <div class="col-md-4">
                                                <input type="radio" name="gov" value="Government" placeholder="Government">Government
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="Indv" value="Individual" placeholder="Individual">Individual
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="HUF" value="HUF" placeholder="Hindu Undivided Family">Hindu Undivided Family
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="cmpny" value="company" placeholder="Company">Company
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="PF" value="parnership" placeholder="Partnership">Partnership Firm
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="AOP" value="AOP" placeholder="Association Of Persons">Association Of Persons
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="Tr" value="trusts" placeholder="Trusts">Trusts
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="BOI" value="BOI" placeholder="Body Of Individuals">Body Of Individuals
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="LA" value="LA" placeholder="Local Authority">Local Authority
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="AJP" value="AJP" placeholder="Artificial Judicial Persons">Artificial Judicial Persons
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="LLP" value="LLP" placeholder="Limited Liability Partnership">Limited Liability Partnership
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Registration Number(for company,firms,LLPs etc)</h4>
                                            <input type="number" class="form-control" name="Rnum" placeholder="Registation Number" tabindex="19"> 
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <h4>In case of person Quote Aadhar number or the Enrolment ID of Aadhar Application as per section 139AA</h4>
                                            <label>Aadhar Number:</label>
                                            <input type="number" maxlength="12" tabindex="20" name="Aanum" placeholder="Aadhar Number" class="form-control">
                                            <label><h5>if Aadhar number is not allotted please mention the enrolment ID of Aadhar Application</h5></label>
                                            <input type="number" maxlength="20" tabindex="21" name="Aaenid" placeholder="Enrolment ID" class="form-control">
                                            <label>Name as per on Aadhar letter/card:</label>
                                            <input tabindex="22" type="text" name="Aaname" class="form-control" placeholder="Name as per Aadhar Card">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Source of Income</h4>
                                            <div class="col-md-4">
                                                <input type="radio" name="sal" value="sal" placeholder="Salary">Salary<br>
                                                <input type="radio" name="IFB" value="IFB" placeholder="Income From Profession">Income from Buiseness<br>
                                                <input type="radio" name="IFHP" value="Income from House property" placeholder="Income from house property">Income from house property<br>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Buiseness/Profession Code</h5>
                                                <input maxlength="2" name="BPC" tabindex="23" type="number" placeholder="B/P code">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="cAg" value="Capital Gains" placeholder="Capital Gains">Capital Gains<br>
                                                <input type="radio" name="AOfP" value="Association Of Persons" placeholder="Association Of Persons">Association Of Persons<br>
                                                <input type="radio" name="LLP" value="limited liability Partnership" placeholder="limited liability Partnership">Limited Liability Partnership<br>
                                            </div>
                                        </div>
                                        <hr>
                                        <br>
                                        <div class="form-group">
                                            <hr>
                                            <h4>Representative Assessee</h4>
                                            <label><h4>Full Name</h4></label><br>
                                            <label>Please select title as applicable: </label>
                                            <input type="radio" name="title" value="title" placeholder="Shri">Shri
                                            <input type="radio" name="title" value="title" placeholder="Smt">Smt
                                            <input type="radio" name="title" value="title" placeholder="Kumari">Kumari
                                            <input type="radio" name="title" value="title" placeholder="M/s">M/s<br>
                                            <label>Last Name/SurName:</label>
                                            <input type="text" name="lName" tabindex="1" placeholder="Last Name" id="Name" class="form-control" required>
                                            <label>First Name:</label>
                                            <input type="text" name="fName" tabindex="2" placeholder="First Name" id="Name" class="form-control" required>
                                            <label>Middle Name:</label>
                                            <input type="text" name="mName" tabindex="3" placeholder="Middle Name" id="Name" class="form-control">  
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Address</h4>
                                            <input type="text" name="Add1" tabindex="9" placeholder="Flat/Room/Door/Block No." class="form-control"><br>
                                            <input type="text" name="Add2" tabindex="10" placeholder="Name of Premises/Building/Village" class="form-control"><br>
                                            <input type="text" name="Add3" tabindex="11" placeholder="Road/Street/Lane/Post office" class="form-control"><br>
                                            <input type="text" name="Add4" tabindex="12" placeholder="Area/Locality/Taluka/Sub-Divisions" class="form-control"><br>
                                            <input type="text" name="Add5" tabindex="13" placeholder="Town/City/District" class="form-control"><br>
                                            <div class="col-md-4">    
                                                <label>State/Union Territory</label>
                                                <select name="State">
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Pincode/Zip Code</label>
                                                <input type="number" maxlength="6" name="Pcode" tabindex="14" placeholder="Pincode/Zipcode">
                                            </div>
                                            <div class="col-md-4">    
                                                <label>Country Name</label>
                                                <select name="Country">
                                                    <option value="India">India</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Documents submitted as Proof of identity(POI),Proof of Address(POA) and Proof of Date of Birth</h4>
                                            <p>
                                                I/WE have enclosed <select name="POI">
                                                <option value="Aadhaar">Aadhaar</option>
                                                <option value="Driving license">Driving license</option>
                                                </select> as proof of identity,<select name="POA">
                                                <option value="Aadhaar">Aadhaar</option>
                                                <option value="Driving license">Driving license</option>
                                                <option value="Address proof">Address Proof</option>
                                                </select> and <select name="POA">
                                                <option value="Aadhaar">Aadhaar</option>
                                                <option value="Driving license">Driving license</option>
                                                <option value="Birth Certificate">Birth certificate</option>
                                                </select> as proof of date of birth <br>
                                                [please refer to the instructions(specified in Rule 114 of I.T. Rules,1962)for list of manadatory certified documents to be submtted as applicable]<br>
                                                [Annexure A,Annexure B & Annexure C are to be used wherever applicable]
                                            </p>
                                            <p>
                                                I/We <input type="text" name="Cname" placeholder="" required>, the applicant,in the capacity of <select name="hh"><option value="hh">Himself</option><option value="hh">Herself</option></select><br>
                                                do hereby declare thet what is stand above is true to the best of my/our information and belief
                                            </p>
                                            <input type="text" placeholder="Place" name="cPlace"><br><br>
                                            <input type="date" placeholder="Date" name="cSubmitD">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label>Photograph (only jpg, 300 DPI)</label>
                                            <input type="file" name="photofile" placeholder="Upload Your Photograph" class="form-control btn btn-enquiry" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Signature (only jpg, 300 DPI)</label>
                                            <input type="file" name="signfile" placeholder="Upload Your Signature" class="form-control btn btn-enquiry" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Thumb Impression(left hand)(only jpg, 300 DPI)</label>
                                            <input type="file" name="signfile" placeholder="Upload Your Left hand Thumb Impression" class="form-control btn btn-enquiry" required>
                                        </div>
                                        <center>
                                            <div class="form-group">
                                                <input type="checkbox">I here agree on Terms & Conditions
                                            </div>
                                            <div class="form-group">                            
                                                <input type="submit" name="enquiry-submit" id="enquiry-submit" class="form-control btn btn-enquiry" value="Submit" required>
                                            </div>
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
<?php include("includes/footer.php")?>