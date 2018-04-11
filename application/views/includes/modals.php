



<!-- request data modal -->
     
<!-- Modal -->
<div id="data_request" class="modal fade" role="dialog">
  <div class="modal-dialog data_modal">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">REQUEST DATA</h4>
      </div>
      <div class="modal-body">
        <form name="" role="form" method="post"
                        action="<?=site_url('home/data_request')?>">  
                      
                        <div class="form-group"  >  
                             <label for="usrname"><span class="glyphicon glyphicon-user"></span>Name</label>
                             <input class="form-control" placeholder="Name" name="name" type="text" required>  
                        </div>
                        <div class="form-group"  >  
                             <label for="usrname"><span class="glyphicon glyphicon-envelope"></span>Email</label>
                              <input class="form-control" placeholder="E-mail" name="email" type="email" required>  
                        </div>
                        <div class="form-group"  >  
                             <label for="usrname"><span class="glyphicon glyphicon-list"></span>Dataset</label>
                             <textarea rows="4" cols="60" class="form-control" name="dataset" required></textarea>          
                        </div>
                        <div class="form-group"  >  
                             <label for="usrname"><span class="glyphicon glyphicon-tags"></span>Year</label>
                             
                             <input class="form-control" placeholder="Enter years separated by commas" name="year" type="text" required>    
                        </div>
                        <input class="btn  btn-lg btn-success " type="submit" value="Submit"  >   
                      </form>
                      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of request data modal -->





<!-- agriculture modal -->
     
<!-- Modal -->
<div id="agriculture_sector" class="modal fade" role="dialog">
  <div class="modal-dialog sector_modal">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agricuture Sector</h4>
      </div>
      <div class="modal-body">
        <h5>Notes And Definitions</h5>


            <p><strong>High potential:</strong> Clay-loam soil with sufficient manure and good drainage.</p>

            <p><strong>Medium potential:</strong> Sandy-loam soil with high drainage.</p>

            <p><strong>Low potential: </strong>Sandy soil with very high drainage and low manure content</p>

            <p><strong>Agro-Ecological Zones (AEZ):</strong> Refers to the Division of an area of land into smaller units, which have similar characteristics related to land suitability, potential production and environmental impact. The zone groups are temperature belts defined according to the maximum temperature limits within which the main crops in Kenya can flourish.</p>

            <p><strong>Reporting period: </strong>The data is reported on calendar year as opposed to seasonal basis. Therefore, for crops where planting and harvesting may take place more than once in the year, the production data is aggregated to get the annual data.</p>

            <p><strong>Agricultural Area: </strong>refer to area under the crop or the area harvested. For a particular crop, the area reported is on what has been harvested.</p>

            <p><strong>Arable land:</strong> Is the land under temporary agricultural crops (multiple-cropped areas are counted only once), temporary meadows and pastures (for less than five years), land under market and kitchen gardens, barnyards, and land temporarily fallow (for less than five years). The abandoned land resulting from shifting cultivation is not included in this category. Data for “Arable land” are not meant to indicate the amount of land that is potentially </p>cultivable.

            <p><strong>Crop production:</strong> Refers to the actual harvested production from the field and excludes threshing losses and that part of crop not harvested for any reason.</p>

            <p><strong>Farm gate Prices:</strong> The value of production given in this report uses farm gate prices as the basis of valuation of the production from the county. Farm gate price is the price paid to farmer at the farm level and hence excludes margins on transport.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of agriculture modal -->




<!-- education modal -->
     
<!-- Modal -->
<div id="education_sector" class="modal fade" role="dialog">
  <div class="modal-dialog sector_modal">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Education Sector</h4>
      </div>
      <div class="modal-body">
        <h5>Notes And Definitions</h5>

            <p><strong>Net enrolment rate:</strong> Enrolment of the official age group for a given level of education expressed as a percentage of the corresponding population.</p>

            <p><strong>Gross enrolment rate:</strong> Total enrolment in a specific level of education, regardless of age, expressed as a percentage of the eligible official school-age population corresponding to the same level of education in a given school year.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of education modal -->


<!-- public health modal -->
     
<!-- Modal -->
<div id="public_health_sector" class="modal fade" role="dialog">
  <div class="modal-dialog sector_modal">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Education Sector</h4>
      </div>
      <div class="modal-body">
      <h5> Notes And Definitions</h5>


              <p><strong>Health Facility: </strong>This is a defined a health service delivery structure from where services are provided e.g. Outpatient, pharmacy, laboratory. Government facilities are the ones which are gazetted and Non-Government facilities are registered with the regulator.

              <p><strong>Level 1 – Community Health Unit:</strong> This is a health service delivery structure within a defined geographical area covering a population of approximately 5,000 people.

              <p><strong>Level 2 – Dispensaries: </strong>Refers to the lowest point of contact with the public. These are run and managed by enrolled and registered nurses who are supervised by the nursing officer at the respective health centre.

              <p><strong>Level 3 - Health Centres:</strong> They have a clinical officer as in-charge and provide comprehensive primary care and mainly focus on preventive care such as childhood vaccination. They are medium-sized units which cater for a population of about 80,000 people.

              <p><strong>Level 4 – Sub County hospitals:</strong> Are hospitals which are the coordinating and referral centre for the smaller units. They usually have the resources to provide comprehensive medical and surgical services. They are managed by medical superintendents. .

              <p><strong>Level 5 - County hospitals:</strong> These are regional centres which provide specialised care including intensive care and life support and specialist consultations. These are referral points for the sub county hospitals

              <p><strong>Level 6 - National referral hospitals:</strong> Refers to National referral hospitals offering very specialized services. They are Kenyatta National Hospital, Moi Teaching and Referral Hospital, Mathare Mental Hospital and Nairobi Spinal Injury.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of public health modal -->


<!-- governance modal -->
     
<!-- Modal -->
<div id="governance_sector" class="modal fade" role="dialog">
  <div class="modal-dialog sector_modal">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Governance Sector</h4>
      </div>
      <div class="modal-body">
              <p><strong>Duplicate ID:</strong>Refers to an identity card (ID) issued for replacement of lost, misplaced or damaged ID card.</p>

              <p><strong>Order and Administration of Lawful Authority:</strong> These include treason, incitement to mutiny, and aiding civil disobedience.</p>

              <p><strong>Injurious to Public:</strong> Includes stealing government property, stealing by person in public service, stealing from state corporations.</p>

              <p><strong>Against Person:</strong> Includes assault, grievous harm, murder etc.</p>

              <p><strong>Related to Property:</strong> Includes theft, robbery with violence, arson.</p>

              <p><strong>Attempts and Conspiracies:</strong> Includes attempts to commit offence, neglect to prevent offences, conspiracy to commit offences.</p>

              <p><strong>Employment Offences:</strong>Includes employment of aliens without permit.</p>

              <p><strong>Drugs related:</strong> Includes possession, manufacture, trafficking etc of any quantity of illegal substances.</p>

              <p><strong>Various Cases:</strong> Includes by – laws under County Government, Traffic Act etc.</p>

              <p><strong>Prison personnel:</strong> Only uniformed personnel and excludes all the other staff.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of governance modal -->



<!-- population modal -->
     
<!-- Modal -->
<div id="population_sector" class="modal fade" role="dialog">
  <div class="modal-dialog sector_modal">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Population Sector</h4>
      </div>
      <div class="modal-body">
               
               <p><strong>Density:</strong> Refers number of persons per square kilometre, obtained by dividing the enumerated persons in a given area by the size of the area expressed in KM2.</p>

               <p><strong>Area:</strong> Is the extent of a surface enclosed within a specified boundary, expressed in square kilometers. This excludes areas covered by water.</p>

               <p><strong>Birth:</strong> Is the complete expulsion or extraction from its mother of a product of conception, irrespective of the duration of pregnancy</p>

               <p><strong>Death:</strong> Is the permanent disappearance of all evidence of life at any time after live birth has taken place (postnatal cessation of vital functions without capability of resuscitation). This definition excludes fetal deaths.</p>

               <p><strong>Expected Birth or Expected Death:</strong>Is derived from the prevailing fertility or mortality conditions and total female population of reproductive age or the total population. The number of expected births or deaths is calculated using age-specific birth and death rates.</p>

               <p><strong>Place of Occurrence:</strong> It is where birth or death occurs</p>

               <p><strong>Coverage rate:</strong>Coverage rate is the percentage of registered events out of the total number of expected events. Although the denominators ideally should be the total number of events, which occurred, the actual number of such events is unknown and hence estimated as ‘expected events’.</p>

               <p><strong>Births or Deaths Registered at Health Facilities:</strong>Refer to births or deaths that occur at a health facility and a notification is issued by a health worker at the facility</p>

               <p><strong>Births or Deaths Registered outside Health Facilities:</strong>Refer to births or deaths that occur at home and a notification is issued by an Assistant Chief.</p>
      </div>
      <div class="modal-footer">
        <button type="link" class="btn btn-success" data-dismiss="modal"><a href="<?phpsite_url('all/population')?>">View Charts</a></button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of population modal -->

<!-- public finance modal -->
     
<!-- Modal -->
<div id="public_finance_sector" class="modal fade" role="dialog">
  <div class="modal-dialog sector_modal">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Public Finance Sector</h4>
      </div>
      <div class="modal-body">
               <h5>Notes And Definitions</h5>


                <p><strong>Equalization Funds:</strong>These are Funds established under the Article 204 of the constitution in which shall be paid one-half percent of all the revenue collected by the national government each year calculated based on the most recent audited accounts of revenue received, as approved by the National Assembly.<p>
              
      </div>
      <div class="modal-footer">
        <button type="link" class="btn btn-success" data-dismiss="modal"><a href="<?phpsite_url('all/population')?>">View Charts</a></button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of public finance modal -->