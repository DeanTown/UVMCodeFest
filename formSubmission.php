<?php
include 'top.php';
?>


<article id="main">

    <h2>Register Today</h2><p class="form-heading">Thank you!</p>

        <form action="/cs008/final/form.php"
              id="frmRegister"
              method="post">

            <fieldset class="contact">
                <legend>Contact Information</legend>
                <p>
                    <label class="required text-field" for="txtFullName">Name</label> 
                    <input autofocus
                                               id="txtFullName"
                           maxlength="45"
                           name="txtFullName"
                           onfocus="this.select()"
                           placeholder="Enter your full name"
                           tabindex="100"
                           type="text"
                           value=""                   
                           >                   
                </p>

                <p>  
                    <label class="required text-field" for="txtRoomNumber">Room Number</label>
                    <input
                                            id="txtRoomNumber"
                        maxlength="3"
                        onfocus="this.select()"
                        placeholder="Enter your current room number"
                        tabindex="120"
                        type="text"
                        value=""
                        >
                </p>
                <p>  
                    <label class="required text-field" for="txtRoommate">Roommate</label>
                    <input
                                            id="txtRoommate"
                        maxlength="45"
                        onfocus="this.select()"
                        placeholder="Enter your current roommate"
                        tabindex="120"
                        type="text"
                        value=""
                        >
                </p>                
            </fieldset> <!-- ends contact -->

            <fieldset class="radio">

                <legend>Current Learning Community</legend>
                <p>
                    <label class="radio-field">
                        <input type="radio"
                               id="radWellnessEnvironment"
                               name="radPerson"
                               value="Wellness Environment"
                               tabindex="572"
                                checked="checked" >
                        Wellness Environment</label>
                </p>

                <p>   
                    <label class="radio-field">
                        <input type="radio"
                               id="radHonorsColleg"
                               name="radPerson"
                               value="Honors Colleg"
                               tabindex="582"
                               >
                        Honors College</label>
                </p>

                
                <p>   
                    <label class="radio-field">
                        <input type="radio"
                               id="radOutdoorExperience"
                               name="radParent"
                               value="Outdoor Experience"
                               tabindex="582"
                               >
                        Outdoor Experience</label>
                </p>
                <p>   
                    <label class="radio-field">
                        <input type="radio"
                               id="radArtsandCreativity"
                               name="radParent"
                               value="Arts and Creativity"
                               tabindex="582"
                               >
                        Arts and Creativity </label>
                </p>
                <p>   
                    <label class="radio-field">
                        <input type="radio"
                               id="radCulturalCrossroad"
                               name="radParent"
                               value="CulturalCrossroad"
                               tabindex="582"
                               >
                        Cultural Crossroads </label>
                </p>
                <p>   
                    <label class="radio-field">
                        <input type="radio"
                               id="radInnovationandEntrepreneurship"
                               name="radParent"
                               value="Innovation and Entrepreneurship"
                               tabindex="582"
                               >
                        Innovation and Entrepreneurship </label>
                </p>
                
                <p>   
                    <label class="radio-field">
                        <input type="radio"
                               id="radLeadership"
                               name="radParent"
                               value="Leadership"
                               tabindex="582"
                               >
                        Leadership </label>
                </p>
                <p>   
                    <label class="radio-field">
                        <input type="radio"
                               id="radSustainability"
                               name="radParent"
                               value="Sustainability"
                               tabindex="582"
                               >
                        Sustainability </label>
                </p>
                <p>   
                    <label class="radio-field">
                        <input type="radio"
                               id="radJourneytoindependence"
                               name="radParent"
                               value="Journey to independence"
                               tabindex="582"
                               >
                        Journey to independence </label>
                </p>
            </fieldset> 

            <fieldset class="checkbox ">
                <legend>What are your preferred learning communities?</legend>

                <p>
                    <label class="check-field">
                        <input  checked                             id="chkWellnessEnvironment"
                            name="chkWellnessEnvironment"
                            tabindex="420"
                            type="checkbox"
                            value="Wellness Environment">Wellness Environment</label>
                </p>

                <p>
                    <label class="check-field">
                        <input                             id="chkHonorsCollege"
                            name="chkHonorsCollege"
                            tabindex="430"
                            type="checkbox"
                            value="Honors College">Honors College</label>
                </p>
                <p>
                    <label class="check-field">
                        <input                             id="chkWord"
                            name="chkSchool"
                            tabindex="430"
                            type="checkbox"
                            value="Outdoor Experience"> Outdoor Experience</label>
                </p>
                <p>
                    <label class="check-field">
                        <input                             id="chkArtsAndCreativity"
                            name="chkArtsAndCreativity"
                            tabindex="430"
                            type="checkbox"
                            value="Arts and Creativity"> Arts and Creativity</label>
                </p>
                <p>
                    <label class="check-field">
                        <input                             id="chkCulturalCrossroads"
                            name="chkCulturalCrossroads"
                            tabindex="430"
                            type="checkbox"
                            value="Cultural Crossroads"> Cultural Crossroads</label>                          
                </p>  
                <p>
                    <label class="check-field">
                        <input                             id="chkInnovationAndEntrepreneurship"
                            name="chkInnovationAndEntrepreneurship"
                            tabindex="430"
                            type="checkbox"
                            value="Innovation and Entrepreneurship"> Innovation and Entrepreneurship</label>                          
                </p> 
                <p>
                    <label class="check-field">
                        <input                             id="chkLeadership"
                            name="chkLeadership"
                            tabindex="430"
                            type="checkbox"
                            value="Leadership"> Leadership</label>                          
                </p>  
                <p>
                    <label class="check-field">
                        <input                             id="chkSustainability"
                            name="chkSustainability"
                            tabindex="430"
                            type="checkbox"
                            value="Sustainability"> Sustainability</label>                          
                </p>   
                <p>
                    <label class="check-field">
                        <input                             id="chkJourneyToIndependence"
                            name="chkJourneyToIndependence"
                            tabindex="430"
                            type="checkbox"
                            value="Journey to Independene"> Journey to Independence</label>                          
                </p>                                                                                         
            </fieldset>  

        </form>

        
</article>
<?php
include('footer.php');
?>
</body>
</html>

