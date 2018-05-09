



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
            <a style="" href="<?=site_url('All/Agriculture')?>" class="btn btn-success ">
                                                    View all charts
                                               </a>
      </div>
      <div class="modal-footer">
         
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

         
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

              <a style="" href="<?=site_url('All/Education')?>" class="btn btn-success ">
                                                    View all charts
                                               </a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
        <h4 class="modal-title">Health Sector</h4>
      </div>
      <div class="modal-body">
      <h5> Notes And Definitions</h5>


              <p><strong>Health Facility: </strong>This is a defined a health service delivery structure from where services are provided e.g. Outpatient, pharmacy, laboratory. Government facilities are the ones which are gazetted and Non-Government facilities are registered with the regulator.

              <p><strong>Level 1 – Community Health Unit:</strong> This is a health service delivery structure within a defined geographical area covering a population of approximately 5,000 people.

              <p><strong>Level 2 – Dispensaries: </strong>Refers to the lowest point of contact with the public. These are run and managed by enrolled and registered nurses who are supervised by the nursing officer at the respective health centre.

              <p><strong>Level 3 - Health Centres:</strong> They have a clinical officer as in-charge and provide comprehensive primary care and mainly focus on preventive care such as childhood vaccination. They are medium-sized units which cater for a population of about 80,000 people.

              <p><strong>Level 4 – Sub County hospitals:</strong> Are hospitals which are the coordinating and referral centre for the smaller units. They usually have the resources to provide comprehensive medical and surgical services. They are managed by medical superintendents. .

              <p><strong>Level 5 - County hospitals:</strong> These are regional centres which provide specialised care including intensive care and life support and specialist consultations. These are referral points for the sub county hospitals

              <p><strong>Level 6 - National referral hospitals:</strong> Refers to National referral hospitals offering very specialized services. They are Kenyatta National Hospital, Moi Teaching and Referral Hospital, Mathare Mental Hospital and Nairobi Spinal Injury.</p>

                <a style="" href="<?=site_url('All/Health')?>" class="btn btn-success ">
                                                    View all charts
                                               </a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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

                <a style="" href="<?=site_url('All/Governance')?>" class="btn btn-success ">
                                                    View all charts
                                               </a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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

                 <a style="" href="<?=site_url('All/Population')?>" class="btn btn-success ">
                                                    View all charts
                                               </a>

      </div>
      <div class="modal-footer">
      
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

                    <a style="" href="<?=site_url('All/Public_Finance')?>" class="btn btn-success ">
                                                    View all charts
                                               </a>

              
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of public finance modal -->



<style type="text/css">


       .timeline {

    white-space:nowrap;
    overflow-x: scroll;
    padding:30px 0 10px 0;
    position:relative;
}

.entry {
    display:inline-block;
    vertical-align:top;
    background:#13519C;
    color:#fff;
    padding:10px;
    font-size:12px;
    text-align:center;
    position:relative;
    border-top:1px solid #06182E;
    border-radius:3px;
    min-width:200px;
    max-width:500px;
    margin-bottom: 100px;
}

.entry img {
    display:block;
    max-width:100%;
    height:auto;
    margin-bottom:10px;
}

.entry:after {
    content:'';
    display:block;
    background:#eee;
    width:20px;
    height:20px;
    border-radius:50%;
    border:3px solid #06182E;
    position:absolute;
    left:49.5%;
    top:-30px;
    bottom: 300px;
    margin-left:-6px;
    margin-bottom: 10px;
}

.entry:before {
    content:'';
    display:block;
    background:#06182E;
    width:5px;
    height:20px;
 
    position:absolute;
    left:51%;
    top:-20px;
    margin-left:-2px;
   
}

.entry h1 {
    color:#fff;
    font-size:18px;
    font-family:Georgia, serif;
    font-weight:bold;
    margin-bottom:10px;
}

.entry h2 {
    letter-spacing:.2em;
    margin-bottom:10px;
    font-size:14px;
}

.bar {
   margin-top: 100px;
    height:4px;
    background:#eee;
    width:100%;
    position:relative;
    top:13px;
    left:0;
}

</style>
<!-- BENCHMARK modal -->
     
<!-- Modal -->
<div id="benchmark" class="modal fade" role="dialog">
  <div class="modal-dialog sector_modal">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Significant Benchmarks/Landmarks in the history of Kenya</h4>
      </div>
      <div class="modal-body">
              
                 <div class="bar"></div>
                <div class="timeline">
                    <div class="entry">
                        <h1>1800</h1>
                             <p>  First group of women freedom fighters</p>
                    </div>
                    <div class="entry">
                        <h1>1922</h1>
                         <p>   Women led demonstration against colonialism</p>
                    </div>
                    <div class="entry">
                        <h1>1940        </h1>
                         <p>   First African women own an automobile and becomes a millionaire</p>
                    </div>
                    <div class="entry">
                        <h1>1945 </h1>
                        <p>First African girl school started</p>
                    </div>
                    <div class="entry">
                        <h1>1945</h1>
                         <p> First woman head of church (legio Maria)</p>
                    </div>
                    <div class="entry">
                        <h1>1952               </h1>
                       <p>Women joined fight for freedom</p>
                    </div>
                    <div class="entry">
                        <h1>1952</h1>
                        <p>First African women’s organization formed (MYWO)</p>
                    </div>
                    <div class="entry">
                        <h1>1955</h1>
                        <p>First group of women to become headmistress</p>
                    </div>
                    <div class="entry">
                        <h1>1955</h1>
                        <p>   First group of women admitted to University of Nairobi</p>
                    </div>
                    <div class="entry">
                        <h1>1958</h1>
                         <p>First African woman joins the Legislative Council</p>
                    </div>
                    <div class="entry">
                        <h1>1959</h1>
                        <p>First African woman becomes president of the giant MYWO</p>
                    </div>
                    <div class="entry">
                        <h1>1960</h1>
                        <p>First African woman ventures in to broadcasting</p>
                    </div>
                    <div class="entry">
                        <h1>1961</h1>
                         <p>First African woman attends the Lancaster constitutional talks in London</p>
                    </div>
                    <div class="entry">
                        <h1>1963</h1>
                         <p> Women given the right to vote</p>
                    </div>
                    <div class="entry">
                        <h1>1964</h1>
                        <p>First group of African women joins the trade union movement</p>
                    </div>
                    <div class="entry">
                        <h1>1964</h1>
                        <p>  Equality opportunity act established</p>
                    </div>
                    <div class="entry">
                        <h1>1964</h1>
                        <p>Maternity leave granted for women</p>
                    </div>
                    <div class="entry">
                        <h1>1964</h1>
                        <p>Basic pension adopted for women</p>
                    </div>
                    <div class="entry">
                        <h1>1967</h1>
                        <p>First woman magistrate appointed</p>
                    </div>
                    <div class="entry">
                        <h1>1968</h1>
                        <p>   First woman appointed mayor</p>
                    </div>
                     <div class="entry">
                        <h1>1969</h1>
                        <p>   First woman become Members of parliament</p>
                    </div>
                     <div class="entry">
                        <h1>1969</h1>
                        <p>   First woman appointed District Officer</p>
                    </div>
                     <div class="entry">
                        <h1>1971</h1>
                        <p>     First woman in East and Central Africa earns PHD</p>
                    </div>
                      <div class="entry">
                        <h1>1974</h1>
                        <p>      First woman appointed Assistant Minister</p>
                    </div>
                      <div class="entry">
                        <h1>1976</h1>
                        <p>   The women’s bureau established</p>
                    </div>
                      <div class="entry">
                        <h1>1982</h1>
                        <p>     First women judge appointed</p>
                    </div>
                    <div class="entry">
                        <h1>1983</h1>
                        <p>      First women appointed to head public parastatal</p>
                    </div>
                    <div class="entry">
                        <h1>1984</h1>
                        <p>   First woman Ambassador appointed</p>
                    </div>
                    <div class="entry">
                        <h1>1986</h1>
                        <p>    First woman elected as clergy (PCEA)</p>
                    </div>
                    <div class="entry">
                        <h1>1986</h1>
                        <p>  First woman appointed to senior diplomatic mission (UNEP7HABITAT)</p>
                    </div>
                    <div class="entry">
                        <h1>1987</h1>
                        <p>    First woman permanent secretary</p>
                    </div>
                     <div class="entry">
                        <h1>1993</h1>
                        <p>   House allowance granted to women in the public sector</p>
                    </div>
                     <div class="entry">
                        <h1>1995</h1>
                        <p>     First woman appointed to cabinet </p>
                    </div>
                     <div class="entry">
                        <h1>1997</h1>
                        <p>     First woman vies for presidency</p>
                    </div>
                     <div class="entry">
                        <h1>1999</h1>
                        <p>  First woman appointed Provincial commissioner</p>
                    </div>
                </div>

              
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of public finance modal -->

