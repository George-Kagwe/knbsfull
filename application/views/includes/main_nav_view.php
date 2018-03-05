<!-- start navbar -->
  
    <div id ="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=site_url('/')?>"><img id="logo" src="<?php echo base_url().'assets//img/menu/knbslogo.png';?>"  class="img-responsive"></a>
            </div>
            <div class="collapse navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?=site_url('api/')?>"  class="btn-menu">API</a></li>
                    <li><a href="#" target="_blank" class="btn-menu">PARTNERS</a></li>
                    <li><a href="#" target="_blank" class="btn-menu">REQUEST DATA</a></li>
                </ul>
                <!-- <ul class="nav navbar-nav navbar-right">
                    
                </ul> -->
                <ul class="nav navbar-nav">
                   
                    <li class="dropdowndropdown">
                        <a href="#"  class="dropdown-toggle sectorslinks" data-toggle="dropdown" id="sectorslinks"> SECTORS <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-level" id="sectors">
                            
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Public Finance</a>
                                <ul class="dropdown-menu " id="finance">
                                    <li class="row " >
                                        <ul class="col-md-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                          <li><a href="<?=site_url('Public_Finance/money_banking')?>" tabindex="-1" class="menu-item">Money and Banking</a></li>

                                          <li><a href="<?=site_url('Public_Finance/cdf_allocations')?>" tabindex="-1" class="menu-item">CDF Allocations</a></li>

                                          <li><a href="<?=site_url('Public_Finance/county_budget_allocations')?>" tabindex="-1" class="menu-item">County Budget Allocation</a></li>  

                                          <li><a href="<?=site_url('Public_Finance/county_government_revenue')?>" tabindex="-1" class="menu-item">County Government Revenue</a></li>

                                          <li><a href="<?=site_url('Public_Finance/county_government_expenditure')?>" tabindex="-1" class="menu-item">County Government Expenditure</a></li>

                                              <br><br>
                                               <a href="<?=site_url('All/Public_Finance')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>

                                        <ul class="col-md-6 menus">
                                            <li class="dropdown-header">National Datasets</li>

                                            <li><a href="<?=site_url('Public_Finance/excise_revenenue_by_commodity')?>" tabindex="-1" class="menu-item">Excise Revenue By Commodity</a></li>

                                            <li><a href="<?=site_url('Public_Finance/expenditure_classification')?>" tabindex="-1" class="menu-item">Economic Classification of National Government Expenditure</a></li>

                                            <li><a href="<?=site_url('Public_Finance/revenue_classification')?>" tabindex="-1" class="menu-item">Economic Classification of National Government Revenue</a></li>

                                            <li><a href="<?=site_url('Public_Finance/expenditure_by_purpose')?>" tabindex="-1" class="menu-item">National Government Expenditure By Purpose</a></li>
                                            
                                            <li><a href="<?=site_url('Public_Finance/outstanding_debt_by_country')?>" tabindex="-1" class="menu-item">Outstanding Debt by Lending Country</a></li>

                                            <li><a href="
                                            <?=site_url('Public_Finance/outstanding_debt_by_multilateral_lenders')?>" tabindex="-1" class="menu-item">Outstanding Debt by Multilateral Lenders</a></li>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Education</a>
                                <ul class="dropdown-menu " id="education">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                    <li class="dropdown-header" style=" color:#fff;">County Datasets</li>                 
                                    <li><a href="primaryschoolenrollmentcategory.php" tabindex="-1" class="menu-item">Primary SchooL Enrollment by Category and SubCounty</a></li>
                                    <li><a href="primaryenrollmentclasssexsubcounty.php" tabindex="-1" class="menu-item">Primary School Enrollment by Class, Sex and Subcounty</a></li>
                                    <li><a href="adultenrollmenteducationbysex.php" tabindex="-1" class="menu-item">Adult Enrollment Education by Sex and Subcounty</a></li>
                                    <li><a href="adultcentreseducationsubcounty.php" tabindex="-1" class="menu-item">Adult Centre Education by Subcounty</a></li>
                                    <li><a href="adultproficiencytestresults.php" tabindex="-1" class="menu-item">Adult Proficiency Test Results</a></li>
                                    <li><a href="ecdecentrescategory.php" tabindex="-1" class="menu-item">ECDE Centres by Category and Subcounty</a></li>
                                    <li><a href="secondaryschoolenrollment.php" tabindex="-1" class="menu-item">Number of Secondary School Enrollment</a></li>
                                    <li><a href="youthpolytechnics.php" tabindex="-1" class="menu-item">Youth Polytechnics by Category and Subcounty</a></li>
                                    <li><a href="teachertrainingcolleges.php" tabindex="-1" class="menu-item">Teacher Training Colleges</a></li>
                                        <br><br>
                                               <a href="<?=site_url('All/Education')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header" style=" color:#fff;">National Datasets</li>
                                      <li><a href="enrollmentpublicuniversities.php" tabindex="-1" class="menu-item">Student Enrollment in Public Universities</a></li>
                                      <li><a href="approveddegreevalidateddiploma.php" tabindex="-1" class="menu-item">Approved Degree Programmes and Validated Diploma Programmes</a></li>
                                      <li><a href="studentsextechnicalinstitutions.php" tabindex="-1" class="menu-item">Student Enrollment by Sex in Technical Institutions</a></li>
                                  
                                       <div class="education">
                                           </div>                                  
                                    </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Health</a>
                                <ul class="dropdown-menu " id="health">
                                    <li class="row menus">
                                        <ul class="col-md-6">
                                          <li class="dropdown-header">County Datasets</li>
                                          <li><a href="healthfacilitiesbyownership.php" tabindex="-1" class="menu-item">Health Facilities by Ownership</a></li>
                                          <li><a href="numberofhealthfacilities.php" tabindex="-1" class="menu-item">Number of Health Facilities</a></li>
                                          <li><a href="bedsandcots.php" tabindex="-1" class="menu-item">Hospital Beds and Cots</a></li>
                                          <li><a href="registeredmedicalpersonnel.php" tabindex="-1" class="menu-item">Registered Medical Personnel</a></li>
                                          <li><a href="immunizationcoveragerates.php" tabindex="-1" class="menu-item">Immunization Coverage Rates for Children Under One Year</a></li>
                                          <li><a href="maternalcare.php" tabindex="-1" class="menu-item">Maternal Care</a></li>
                                          <li><a href="hivawarenessandtesting.php" tabindex="-1" class="menu-item">HIV Awareness and Testing</a></li>
                                          <li><a href="useofmosquitonetsbychildren.php" tabindex="-1" class="menu-item">Use of Mosquito Nets by Children Under 5 Years</a></li>
                                          <li><a href="nutritionalstatusofchildren.php" tabindex="-1" class="menu-item">Nutritional Status of Children</a></li>
                                          <li><a href="nutritionalstatusofwomen.php" tabindex="-1" class="menu-item">Nutritional Status of Women</a></li>
                                          <li><a href="useofcontraceptionbycounty.php" tabindex="-1" class="menu-item">Use Of Contraception by County</a></li>
                                          <li><a href="outpatientvisitsbytypeofprovider.php" tabindex="-1" class="menu-item">Distribution of Out Patient Visits by Type of Healthcare Provider</a></li>
                                          <li><a href="registeredmedicallaboratories.php" tabindex="-1" class="menu-item">Registered Medical Laboratories</a></li>
                                          <li><a href="insurancecoveragebycountiesandtypes.php" tabindex="-1" class="menu-item">Insurance Coverage By Counties and Types</a></li>
                                        </ul>
                                        <ul class="col-md-6">
                                          <li class="dropdown-header">National Datasets</li>
                                          <li><a href="incidenceofdisease.php" tabindex="-1" class="menu-item">Top Ten Incidence of Disease</a></li>
                                          <li><a href="medicalpersonnel.php" tabindex="-1" class="menu-item">Medical Personnel</a></li>
                                          <li><a href="registereddeathsbymajorcause.php" tabindex="-1" class="menu-item">Deaths by Major Cause</a></li>
                                          <li><a href="nhifresources.php" tabindex="-1" class="menu-item">NHIF Resources</a></li>
                                          <li><a href="nhifmembers.php" tabindex="-1" class="menu-item">NHIF Members</a></li>     
                                               <a href="<?=site_url('All/Health')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>      
                                        </ul>
                                  </li>
    
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Agriculture</a>
                                <ul class="dropdown-menu " id="agriculture">
                                    <li class="row menus">
                                        <ul class="col-md-6">
                                          <li class="dropdown-header">County Datasets</li>
                                          <li><a href="landpotential.php">Agricultural Land Potential</a></li>
                                           <!--  <br><br>
                                          <label><center>Filter Data By County</center></label> -->
                                          <!-- <br><br>
                                          <form autocomplete="off" action="agriculture.php">
                                            <div class="autocomplete" style="width:300px;">
                                              <input id="myInput" type="text" name="County" placeholder="Enter County Name">
                                            </div>
                                            <input type="submit" value="GO">
                                          </form>
                                          --><br><br>
                                               <a href="<?=site_url('All/Agriculture')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>
                                        <ul class="col-md-6">
                                          <li class="dropdown-header">National Datasets</li>
                                          <li><a href="agriculturalinputs.php">Value of Agricultural Inputs</a></li>
                                          <li><a href="chemicalmedicinalfeedinputs.php">Chemical, Medicinal and Feed Inputs</a></li>
                                          <li><a href="irrigationschemes.php">Irrigation Schemes</a></li>
                                          <li><a href="totalsharecapital.php">Total Share Capital</a></li>
                                          <li><a href="turnoversocietiesandunions.php">Total Turnover of Societies and Unions</a></li>
                                          <li><a href="marketedproductionbyagricultureandlivestock.php">Gross Marketed Production by Agriculture and Livestock</a></li>
                                          <li><a href="pricetoproducersmeatporkandwholemilk.php">Price To Producers For Meat , Pork And Wholemilk</a></li>
                                          <li><a href="grossmarketedproductionatconstant.php">Gross Marketed Production At Constant</a></li>
                                         <li><a href="membershipofcooperativesocieties.php">Membership Of Co-operative Societies by Type Of Societies</a></li> 
                                        </ul>
                                  </li>
    
                                </ul>
                            </li>
                            


                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Population</a>
                                <ul class="dropdown-menu " id="population">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                          <li class="dropdown-header">Country Datasets</li>
                                          
                                            <li><a href="birthsdeaths.php" tabindex="-1" class="menu-item">Number of Births and Deaths Registered by Sex</a></li>
                                            <li><a href="deathcauses.php" tabindex="-1" class="menu-item">Top 10 Death Causes</a></li>
                                            <li><a href="populationsexhouseholdandcensus.php" tabindex="-1" class="menu-item">Population by Sex, Households and Density, and Census Years</a></li>
                                            <li><a href="projectionselectedagegroup.php" tabindex="-1" class="menu-item">Population Projections by Selected Age Group</a></li>
                                            <li><a href="projectionspecialagegroup.php" tabindex="-1" class="menu-item">Population Projections by Special Age Groups</a></li> 
                                            <br><br>
                                               <a href="<?=site_url('All/Population')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>        
                                  </ul>
                                  <ul class="col-md-6">
                                   
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>


                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Governance</a>
                                <ul class="dropdown-menu " id="governance">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                            <li class="dropdown-header">County Datasets</li>
                                            <li><a href="crimesreportedbycommandstations.php" tabindex="-1" class="menu-item">Crimes Reported to Police by Command Stations</a></li>
                                            <li><a href="identitycards.php" tabindex="-1" class="menu-item">Identity Cards Made, Processed and Collected</a></li>
                                            <li><a href="offencebysexandcommandstations.php" tabindex="-1" class="menu-item">Offence by Sex and Command Stations</a></li>
                                            <li><a href="registeredvotersbycounty.php" tabindex="-1" class="menu-item">Registered Voters by County and by Sex</a></li>
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header">National Datasets</li>
                                    <li><a href="caseshandledbyvariouscourts.php" tabindex="-1" class="menu-item">Cases Handled by Various Courts</a></li>
                                    <li><a href="convictedprisonersoffencesex.php" tabindex="-1" class="menu-item">Convicted Prisoners by Type of Offence and Sex</a></li>
                                    <li><a href="caseshandledethicscommision.php" tabindex="-1" class="menu-item">Cases Handled by Ethics Commision</a></li>  
                                    <li><a href="environmentalcrimesreportedtonema.php" tabindex="-1" class="menu-item">Environmental Crimes Reported to Nema</a></li>
                                    <li><a href="casesforwardedandctiontaken.php" tabindex="-1" class="menu-item">Cases Forwarded and Action Taken</a></li>
                                    <li><a href="convictedprisonpopulationagesex.php" tabindex="-1" class="menu-item">Convicted Prison Population by Age and Sex</a></li>
                                    <li><a href="policeandprobationofficers.php" tabindex="-1" class="menu-item">Number of Police Prisons and Probation Officers</a></li>
                                    <li><a href="offencescommittedagainstmorality.php" tabindex="-1" class="menu-item">Offences Committed Against Morality</a></li>
                                    <li><a href="committedhomicidebysex.php" tabindex="-1" class="menu-item">Persons Reported to have Committed Homicide by Sex</a></li>    
                                    <li><a href="committedrobberyandtheft.php" tabindex="-1" class="menu-item">Persons Reported to have Committed Robbery and Theft</a></li><br><br>
                                               <a href="<?=site_url('All/Governance')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Land & Climate</a>
                                <ul class="dropdown-menu " id="land">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                        <li class="dropdown-header">National Datasets</li>
                                            <li><a href="landsurfacearea.php" tabindex="-1" class="menu-item">County Surface Area by Category</a></li> 
                                            <li><a href="landtemparature.php" tabindex="-1" class="menu-item">County Temparature</a></li>
                                             <li><a href="landrainfall.php" tabindex="-1" class="menu-item">County Rainfall</a></li>
                                             <li><a href="landtopography.php" tabindex="-1" class="menu-item">County Topography and Altitude</a></li>                
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <br><br>
                                               <a href="<?=site_url('All/land')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Manufacturing</a>
                                <ul class="dropdown-menu " id="Manufacturing">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                            <li><a href="quantumindicesofmanufacturingproduction.php">Quantum Indices of Manufacturing Production</a></li>
                                            <li><a href="percentagechangeinquantumindicesofmanufacturingproduction.php">Percentage Change in Quantum Indices of Manufacturing Production</a></li>      
                                  </ul>
                                  <ul class="col-md-6">
                                   <br><br>
                                               <a href="<?=site_url('All/manufacturing')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">more</a>
                                <ul class="dropdown-menu " id="more">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                    <li class="dropdown-header">County Datasets</li>                 
                                    <li><a href="primaryschoolenrollmentcategory.php" tabindex="-1" class="menu-item">Primary SchooL Enrollment by Category and SubCounty</a></li>
                                    <li><a href="primaryenrollmentclasssexsubcounty.php" tabindex="-1" class="menu-item">Primary School Enrollment by Class, Sex and Subcounty</a></li>
                                    <li><a href="adultenrollmenteducationbysex.php" tabindex="-1" class="menu-item">Adult Enrollment Education by Sex and Subcounty</a></li>
                                    <li><a href="adultcentreseducationsubcounty.php" tabindex="-1" class="menu-item">Adult Centre Education by Subcounty</a></li>
                                    <li><a href="adultproficiencytestresults.php" tabindex="-1" class="menu-item">Adult Proficiency Test Results</a></li>
                                    <li><a href="ecdecentrescategory.php" tabindex="-1" class="menu-item">ECDE Centres by Category and Subcounty</a></li>
                                    <li><a href="secondaryschoolenrollment.php" tabindex="-1" class="menu-item">Number of Secondary School Enrollment</a></li>
                                    <li><a href="youthpolytechnics.php" tabindex="-1" class="menu-item">Youth Polytechnics by Category and Subcounty</a></li>
                                    <li><a href="teachertrainingcolleges.php" tabindex="-1" class="menu-item">Teacher Training Colleges</a></li>
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header">National Datasets</li>
                                      <li><a href="enrollmentpublicuniversities.php" tabindex="-1" class="menu-item">Student Enrollment in Public Universities</a></li>
                                      <li><a href="approveddegreevalidateddiploma.php" tabindex="-1" class="menu-item">Approved Degree Programmes and Validated Diploma Programmes</a></li>
                                      <li><a href="studentsextechnicalinstitutions.php" tabindex="-1" class="menu-item">Student Enrollment by Sex in Technical Institutions</a></li>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Energy</a>
                                <ul class="dropdown-menu " id="energy">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                    <li class="dropdown-header">County Datasets</li>                 
                                    <li><a href="primaryschoolenrollmentcategory.php" tabindex="-1" class="menu-item">Primary SchooL Enrollment by Category and SubCounty</a></li>
                                    <li><a href="primaryenrollmentclasssexsubcounty.php" tabindex="-1" class="menu-item">Primary School Enrollment by Class, Sex and Subcounty</a></li>
                                    <li><a href="adultenrollmenteducationbysex.php" tabindex="-1" class="menu-item">Adult Enrollment Education by Sex and Subcounty</a></li>
                                    <li><a href="adultcentreseducationsubcounty.php" tabindex="-1" class="menu-item">Adult Centre Education by Subcounty</a></li>
                                    <li><a href="adultproficiencytestresults.php" tabindex="-1" class="menu-item">Adult Proficiency Test Results</a></li>
                                    <li><a href="ecdecentrescategory.php" tabindex="-1" class="menu-item">ECDE Centres by Category and Subcounty</a></li>
                                    <li><a href="secondaryschoolenrollment.php" tabindex="-1" class="menu-item">Number of Secondary School Enrollment</a></li>
                                    <li><a href="youthpolytechnics.php" tabindex="-1" class="menu-item">Youth Polytechnics by Category and Subcounty</a></li>
                                    <li><a href="teachertrainingcolleges.php" tabindex="-1" class="menu-item">Teacher Training Colleges</a></li>
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header">National Datasets</li>
                                      <li><a href="enrollmentpublicuniversities.php" tabindex="-1" class="menu-item">Student Enrollment in Public Universities</a></li>
                                      <li><a href="approveddegreevalidateddiploma.php" tabindex="-1" class="menu-item">Approved Degree Programmes and Validated Diploma Programmes</a></li>
                                      <li><a href="studentsextechnicalinstitutions.php" tabindex="-1" class="menu-item">Student Enrollment by Sex in Technical Institutions</a></li>

                                      <br><br>
                                               <a href="<?=site_url('All/Energy')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Labor</a>
                                <ul class="dropdown-menu " id="labor">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                    <li class="dropdown-header">County Datasets</li>                 
                                    <li><a href="primaryschoolenrollmentcategory.php" tabindex="-1" class="menu-item">Primary SchooL Enrollment by Category and SubCounty</a></li>
                                    <li><a href="primaryenrollmentclasssexsubcounty.php" tabindex="-1" class="menu-item">Primary School Enrollment by Class, Sex and Subcounty</a></li>
                                    <li><a href="adultenrollmenteducationbysex.php" tabindex="-1" class="menu-item">Adult Enrollment Education by Sex and Subcounty</a></li>
                                    <li><a href="adultcentreseducationsubcounty.php" tabindex="-1" class="menu-item">Adult Centre Education by Subcounty</a></li>
                                    <li><a href="adultproficiencytestresults.php" tabindex="-1" class="menu-item">Adult Proficiency Test Results</a></li>
                                    <li><a href="ecdecentrescategory.php" tabindex="-1" class="menu-item">ECDE Centres by Category and Subcounty</a></li>
                                    <li><a href="secondaryschoolenrollment.php" tabindex="-1" class="menu-item">Number of Secondary School Enrollment</a></li>
                                    <li><a href="youthpolytechnics.php" tabindex="-1" class="menu-item">Youth Polytechnics by Category and Subcounty</a></li>
                                    <li><a href="teachertrainingcolleges.php" tabindex="-1" class="menu-item">Teacher Training Colleges</a></li>
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header">National Datasets</li>
                                      <li><a href="enrollmentpublicuniversities.php" tabindex="-1" class="menu-item">Student Enrollment in Public Universities</a></li>
                                      <li><a href="approveddegreevalidateddiploma.php" tabindex="-1" class="menu-item">Approved Degree Programmes and Validated Diploma Programmes</a></li>
                                      <li><a href="studentsextechnicalinstitutions.php" tabindex="-1" class="menu-item">Student Enrollment by Sex in Technical Institutions</a></li>
                                      <br><br>
                                               <a href="<?=site_url('All/Energy')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">CPI</a>
                                <ul class="dropdown-menu " id="cpi">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                    <li class="dropdown-header">County Datasets</li>                 
                                    <li><a href="primaryschoolenrollmentcategory.php" tabindex="-1" class="menu-item">Primary SchooL Enrollment by Category and SubCounty</a></li>
                                    <li><a href="primaryenrollmentclasssexsubcounty.php" tabindex="-1" class="menu-item">Primary School Enrollment by Class, Sex and Subcounty</a></li>
                                    <li><a href="adultenrollmenteducationbysex.php" tabindex="-1" class="menu-item">Adult Enrollment Education by Sex and Subcounty</a></li>
                                    <li><a href="adultcentreseducationsubcounty.php" tabindex="-1" class="menu-item">Adult Centre Education by Subcounty</a></li>
                                    <li><a href="adultproficiencytestresults.php" tabindex="-1" class="menu-item">Adult Proficiency Test Results</a></li>
                                    <li><a href="ecdecentrescategory.php" tabindex="-1" class="menu-item">ECDE Centres by Category and Subcounty</a></li>
                                    <li><a href="secondaryschoolenrollment.php" tabindex="-1" class="menu-item">Number of Secondary School Enrollment</a></li>
                                    <li><a href="youthpolytechnics.php" tabindex="-1" class="menu-item">Youth Polytechnics by Category and Subcounty</a></li>
                                    <li><a href="teachertrainingcolleges.php" tabindex="-1" class="menu-item">Teacher Training Colleges</a></li>
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header">National Datasets</li>
                                      <li><a href="enrollmentpublicuniversities.php" tabindex="-1" class="menu-item">Student Enrollment in Public Universities</a></li>
                                      <li><a href="approveddegreevalidateddiploma.php" tabindex="-1" class="menu-item">Approved Degree Programmes and Validated Diploma Programmes</a></li>
                                      <li><a href="studentsextechnicalinstitutions.php" tabindex="-1" class="menu-item">Student Enrollment by Sex in Technical Institutions</a></li>

                                      <br><br>
                                               <a href="<?=site_url('All/CPI')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">TRANSPORT</a>
                                <ul class="dropdown-menu " id="transport">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                    <li class="dropdown-header">County Datasets</li>                 
                                    <li><a href="primaryschoolenrollmentcategory.php" tabindex="-1" class="menu-item">Primary SchooL Enrollment by Category and SubCounty</a></li>
                                    <li><a href="primaryenrollmentclasssexsubcounty.php" tabindex="-1" class="menu-item">Primary School Enrollment by Class, Sex and Subcounty</a></li>
                                    <li><a href="adultenrollmenteducationbysex.php" tabindex="-1" class="menu-item">Adult Enrollment Education by Sex and Subcounty</a></li>
                                    <li><a href="adultcentreseducationsubcounty.php" tabindex="-1" class="menu-item">Adult Centre Education by Subcounty</a></li>
                                    <li><a href="adultproficiencytestresults.php" tabindex="-1" class="menu-item">Adult Proficiency Test Results</a></li>
                                    <li><a href="ecdecentrescategory.php" tabindex="-1" class="menu-item">ECDE Centres by Category and Subcounty</a></li>
                                    <li><a href="secondaryschoolenrollment.php" tabindex="-1" class="menu-item">Number of Secondary School Enrollment</a></li>
                                    <li><a href="youthpolytechnics.php" tabindex="-1" class="menu-item">Youth Polytechnics by Category and Subcounty</a></li>
                                    <li><a href="teachertrainingcolleges.php" tabindex="-1" class="menu-item">Teacher Training Colleges</a></li>
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header">National Datasets</li>
                                      <li><a href="enrollmentpublicuniversities.php" tabindex="-1" class="menu-item">Student Enrollment in Public Universities</a></li>
                                      <li><a href="approveddegreevalidateddiploma.php" tabindex="-1" class="menu-item">Approved Degree Programmes and Validated Diploma Programmes</a></li>
                                      <li><a href="studentsextechnicalinstitutions.php" tabindex="-1" class="menu-item">Student Enrollment by Sex in Technical Institutions</a></li>

                                      <br><br>
                                               <a href="<?=site_url('All/Transport')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">TRADE</a>
                                <ul class="dropdown-menu " id="trade">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                    <li class="dropdown-header">County Datasets</li>                 
                                    <li><a href="primaryschoolenrollmentcategory.php" tabindex="-1" class="menu-item">Primary SchooL Enrollment by Category and SubCounty</a></li>
                                    <li><a href="primaryenrollmentclasssexsubcounty.php" tabindex="-1" class="menu-item">Primary School Enrollment by Class, Sex and Subcounty</a></li>
                                    <li><a href="adultenrollmenteducationbysex.php" tabindex="-1" class="menu-item">Adult Enrollment Education by Sex and Subcounty</a></li>
                                    <li><a href="adultcentreseducationsubcounty.php" tabindex="-1" class="menu-item">Adult Centre Education by Subcounty</a></li>
                                    <li><a href="adultproficiencytestresults.php" tabindex="-1" class="menu-item">Adult Proficiency Test Results</a></li>
                                    <li><a href="ecdecentrescategory.php" tabindex="-1" class="menu-item">ECDE Centres by Category and Subcounty</a></li>
                                    <li><a href="secondaryschoolenrollment.php" tabindex="-1" class="menu-item">Number of Secondary School Enrollment</a></li>
                                    <li><a href="youthpolytechnics.php" tabindex="-1" class="menu-item">Youth Polytechnics by Category and Subcounty</a></li>
                                    <li><a href="teachertrainingcolleges.php" tabindex="-1" class="menu-item">Teacher Training Colleges</a></li>
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header">National Datasets</li>
                                      <li><a href="enrollmentpublicuniversities.php" tabindex="-1" class="menu-item">Student Enrollment in Public Universities</a></li>
                                      <li><a href="approveddegreevalidateddiploma.php" tabindex="-1" class="menu-item">Approved Degree Programmes and Validated Diploma Programmes</a></li>
                                      <li><a href="studentsextechnicalinstitutions.php" tabindex="-1" class="menu-item">Student Enrollment by Sex in Technical Institutions</a></li>
                                      <br><br>
                                               <a href="<?=site_url('All/Trade')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">TOURISM</a>
                                <ul class="dropdown-menu " id="tourism">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                    <li class="dropdown-header">County Datasets</li>                 
                                    <li><a href="primaryschoolenrollmentcategory.php" tabindex="-1" class="menu-item">Primary SchooL Enrollment by Category and SubCounty</a></li>
                                    <li><a href="primaryenrollmentclasssexsubcounty.php" tabindex="-1" class="menu-item">Primary School Enrollment by Class, Sex and Subcounty</a></li>
                                    <li><a href="adultenrollmenteducationbysex.php" tabindex="-1" class="menu-item">Adult Enrollment Education by Sex and Subcounty</a></li>
                                    <li><a href="adultcentreseducationsubcounty.php" tabindex="-1" class="menu-item">Adult Centre Education by Subcounty</a></li>
                                    <li><a href="adultproficiencytestresults.php" tabindex="-1" class="menu-item">Adult Proficiency Test Results</a></li>
                                    <li><a href="ecdecentrescategory.php" tabindex="-1" class="menu-item">ECDE Centres by Category and Subcounty</a></li>
                                    <li><a href="secondaryschoolenrollment.php" tabindex="-1" class="menu-item">Number of Secondary School Enrollment</a></li>
                                    <li><a href="youthpolytechnics.php" tabindex="-1" class="menu-item">Youth Polytechnics by Category and Subcounty</a></li>
                                    <li><a href="teachertrainingcolleges.php" tabindex="-1" class="menu-item">Teacher Training Colleges</a></li>
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header">National Datasets</li>
                                      <li><a href="enrollmentpublicuniversities.php" tabindex="-1" class="menu-item">Student Enrollment in Public Universities</a></li>
                                      <li><a href="approveddegreevalidateddiploma.php" tabindex="-1" class="menu-item">Approved Degree Programmes and Validated Diploma Programmes</a></li>
                                      <li><a href="studentsextechnicalinstitutions.php" tabindex="-1" class="menu-item">Student Enrollment by Sex in Technical Institutions</a></li>
                                      <br><br>
                                               <a href="<?=site_url('All/Tourism')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">BUILDING AND CONSTRUCTION</a>
                                <ul class="dropdown-menu " id="building">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                    <li class="dropdown-header">County Datasets</li>                 
                                    <li><a href="primaryschoolenrollmentcategory.php" tabindex="-1" class="menu-item">Primary SchooL Enrollment by Category and SubCounty</a></li>
                                    <li><a href="primaryenrollmentclasssexsubcounty.php" tabindex="-1" class="menu-item">Primary School Enrollment by Class, Sex and Subcounty</a></li>
                                    <li><a href="adultenrollmenteducationbysex.php" tabindex="-1" class="menu-item">Adult Enrollment Education by Sex and Subcounty</a></li>
                                    <li><a href="adultcentreseducationsubcounty.php" tabindex="-1" class="menu-item">Adult Centre Education by Subcounty</a></li>
                                    <li><a href="adultproficiencytestresults.php" tabindex="-1" class="menu-item">Adult Proficiency Test Results</a></li>
                                    <li><a href="ecdecentrescategory.php" tabindex="-1" class="menu-item">ECDE Centres by Category and Subcounty</a></li>
                                    <li><a href="secondaryschoolenrollment.php" tabindex="-1" class="menu-item">Number of Secondary School Enrollment</a></li>
                                    <li><a href="youthpolytechnics.php" tabindex="-1" class="menu-item">Youth Polytechnics by Category and Subcounty</a></li>
                                    <li><a href="teachertrainingcolleges.php" tabindex="-1" class="menu-item">Teacher Training Colleges</a></li>
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header">National Datasets</li>
                                      <li><a href="enrollmentpublicuniversities.php" tabindex="-1" class="menu-item">Student Enrollment in Public Universities</a></li>
                                      <li><a href="approveddegreevalidateddiploma.php" tabindex="-1" class="menu-item">Approved Degree Programmes and Validated Diploma Programmes</a></li>
                                      <li><a href="studentsextechnicalinstitutions.php" tabindex="-1" class="menu-item">Student Enrollment by Sex in Technical Institutions</a></li>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">POVERTY</a>
                                <ul class="dropdown-menu " id="poverty">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                    <li class="dropdown-header">County Datasets</li>                 
                                    <li><a href="primaryschoolenrollmentcategory.php" tabindex="-1" class="menu-item">Primary SchooL Enrollment by Category and SubCounty</a></li>
                                    <li><a href="primaryenrollmentclasssexsubcounty.php" tabindex="-1" class="menu-item">Primary School Enrollment by Class, Sex and Subcounty</a></li>
                                    <li><a href="adultenrollmenteducationbysex.php" tabindex="-1" class="menu-item">Adult Enrollment Education by Sex and Subcounty</a></li>
                                    <li><a href="adultcentreseducationsubcounty.php" tabindex="-1" class="menu-item">Adult Centre Education by Subcounty</a></li>
                                    <li><a href="adultproficiencytestresults.php" tabindex="-1" class="menu-item">Adult Proficiency Test Results</a></li>
                                    <li><a href="ecdecentrescategory.php" tabindex="-1" class="menu-item">ECDE Centres by Category and Subcounty</a></li>
                                    <li><a href="secondaryschoolenrollment.php" tabindex="-1" class="menu-item">Number of Secondary School Enrollment</a></li>
                                    <li><a href="youthpolytechnics.php" tabindex="-1" class="menu-item">Youth Polytechnics by Category and Subcounty</a></li>
                                    <li><a href="teachertrainingcolleges.php" tabindex="-1" class="menu-item">Teacher Training Colleges</a></li>
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header">National Datasets</li>
                                      <li><a href="enrollmentpublicuniversities.php" tabindex="-1" class="menu-item">Student Enrollment in Public Universities</a></li>
                                      <li><a href="approveddegreevalidateddiploma.php" tabindex="-1" class="menu-item">Approved Degree Programmes and Validated Diploma Programmes</a></li>
                                      <li><a href="studentsextechnicalinstitutions.php" tabindex="-1" class="menu-item">Student Enrollment by Sex in Technical Institutions</a></li>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">MONEY AND BANKING</a>
                                <ul class="dropdown-menu " id="money">
                                    <li class="row menus" >
                                       <ul class="col-md-6">
                                    <li class="dropdown-header">County Datasets</li>                 
                                    <li><a href="primaryschoolenrollmentcategory.php" tabindex="-1" class="menu-item">Primary SchooL Enrollment by Category and SubCounty</a></li>
                                    <li><a href="primaryenrollmentclasssexsubcounty.php" tabindex="-1" class="menu-item">Primary School Enrollment by Class, Sex and Subcounty</a></li>
                                    <li><a href="adultenrollmenteducationbysex.php" tabindex="-1" class="menu-item">Adult Enrollment Education by Sex and Subcounty</a></li>
                                    <li><a href="adultcentreseducationsubcounty.php" tabindex="-1" class="menu-item">Adult Centre Education by Subcounty</a></li>
                                    <li><a href="adultproficiencytestresults.php" tabindex="-1" class="menu-item">Adult Proficiency Test Results</a></li>
                                    <li><a href="ecdecentrescategory.php" tabindex="-1" class="menu-item">ECDE Centres by Category and Subcounty</a></li>
                                    <li><a href="secondaryschoolenrollment.php" tabindex="-1" class="menu-item">Number of Secondary School Enrollment</a></li>
                                    <li><a href="youthpolytechnics.php" tabindex="-1" class="menu-item">Youth Polytechnics by Category and Subcounty</a></li>
                                    <li><a href="teachertrainingcolleges.php" tabindex="-1" class="menu-item">Teacher Training Colleges</a></li>
                              
                                  </ul>
                                  <ul class="col-md-6">
                                    <li class="dropdown-header">National Datasets</li>
                                      <li><a href="enrollmentpublicuniversities.php" tabindex="-1" class="menu-item">Student Enrollment in Public Universities</a></li>
                                      <li><a href="approveddegreevalidateddiploma.php" tabindex="-1" class="menu-item">Approved Degree Programmes and Validated Diploma Programmes</a></li>
                                      <li><a href="studentsextechnicalinstitutions.php" tabindex="-1" class="menu-item">Student Enrollment by Sex in Technical Institutions</a></li>
                                  </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> 
                    <form autocomplete="off" action="agriculture.php">
                     <div id="imaginary_container"> 
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control input-lg"  placeholder="Search" >
                        <span class="input-group-addon">
                            <button type="submit" id="search_button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>  
                        </span>
                    </div>
                </div>
                  </form>
                      </form></li>
                    
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

<!-- end navbar -->
