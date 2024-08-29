<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venom Validation Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <section>
    <div class="square"></div>
<div class="square"></div>
<div class="square"></div>
<div class="square"></div>
<div class="square"></div>

<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>

<div class="triangle"></div>
<div class="triangle"></div>
<div class="triangle"></div>
<div class="triangle"></div>
<div class="triangle"></div>

    <div class="form-container">
    <form action="./php/data-collector.php" method="post" enctype="multipart/form-data">
        <div class="form-step active" id="step1">
            
            <label for="vn">1. Validator's Name</label>
            <input type="text" id="vn" name="vn" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="nextStep(2)">Next</div>
        </div>

        <div class="form-step" id="step2">
           
            <label for="iouv">2. Introduction of your validator</label>
            <input type="text" id="iouv" name="iouv"  placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(1)">Previous</div>
            <div class="form-button" onclick="nextStep(3)">Next</div>
        </div>
        <div class="form-step" id="step3">
           
            <label for="cwsm">3. Company website & social media</label>
            <input type="text" id="cwsm" name="cwsm" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(2)">Previous</div>
            <div class="form-button" onclick="nextStep(4)">Next</div>
        </div>
        <div class="form-step" id="step4">
           
            <label for="hcwc">4. How can we contact you if you are selected?</label>
            <input type="email" id="hcwc" name="hcwc" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(3)">Previous</div>
            <div class="form-button" onclick="nextStep(5)">Next</div>
        </div>
        <div class="form-step" id="step5">
           
            <label for="pdyu">5. Please describe your uniqueness and highlight as an Venom validator.</label>
            <input type="text" id="pdyu" name="pdyu" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(4)">Previous</div>
            <div class="form-button" onclick="nextStep(6)">Next</div>
        </div>
        <div class="form-step" id="step6">
           
            <label for="hlhybrn">6. How long have you been running nodes?</label>
            <input type="text" id="hlhybrn" name="hlhybrn" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(5)">Previous</div>
            <div class="form-button" onclick="nextStep(7)">Next</div>
        </div>
        <div class="form-step" id="step7">
           
            <label for="ohmc">7. On how many chains are you running the validator? </label>
            <input type="text" id="ohmc" name="ohmc" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(6)">Previous</div>
            <div class="form-button" onclick="nextStep(8)">Next</div>
        </div>
        <div class="form-step" id="step8">
           
            <label for="dyapt">8. Do you have a proven track record? </label>
            <input type="text" id="dyapt" name="dyapt" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(7)">Previous</div>
            <div class="form-button" onclick="nextStep(9)">Next</div>
        </div>
        <div class="form-step" id="step9">
           
            <label for="tsaa">9. Total staked asset amount & Total delegator amount? </label>
            <input type="text" id="tsaa" name="tsaa" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(8)">Previous</div>
            <div class="form-button" onclick="nextStep(10)">Next</div>
        </div>
        <div class="form-step" id="step10">
           
            <label for="yhms">10. Do you have a monitoring system in place? </label>
            <input type="text" id="yhms" name="yhms" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(9)">Previous</div>
            <div class="form-button" onclick="nextStep(11)">Next</div>
        </div>
        <div class="form-step" id="step11">
           
            <label for="hdyo">11. How do you organize backup solutions?</label>
            <input type="text" id="hdyo" name="hdyo" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(10)">Previous</div>
            <div class="form-button" onclick="nextStep(12)">Next</div>
        </div>

        
        <div class="form-step" id="step12">
           
            <label for="hdykm">12. How do you organize key management? </label>
            <input type="text" id="hdykm" name="hdykm" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(11)">Previous</div>
            <div class="form-button" onclick="nextStep(13)">Next</div>
        </div>
        <div class="form-step" id="step13">
           
            <label for="dyyys">13. Do you upgrade your software on time without missing too many blocks? </label>
            <input type="text" id="dyyys" name="dyyys" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(12)">Previous</div>
            <div class="form-button" onclick="nextStep(14)">Next</div>
        </div>

        <div class="form-step" id="step14">
           
            <label for="ayake">14.Are you a known entity within the community?  </label>
            <input type="text" id="ayake" name="ayake" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(13)">Previous</div>
            <div class="form-button" onclick="nextStep(15)">Next</div>
        </div>
        <div class="form-step" id="step15">
           
            <label for="dyrdton">15. Do you run different types of nodes, relayers, create tools, block explorers and other smart contract contributions for the blockchain? </label>
            <input type="text" id="dyrdton" name="dyrdton" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(14)">Previous</div>
            <div class="form-button" onclick="nextStep(16)">Next</div>
        </div>
        <div class="form-step" id="step16">
           
            <label for="dyeic">16. Do you engage in the community, create and distribute educational content? </label>
            <input type="text" id="dyeic" name="dyeic" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(15)">Previous</div>
            <div class="form-button" onclick="nextStep(17)">Next</div>
        </div>
        <div class="form-step" id="step17">
           
            <label for="yrii">17. Do you run infrastructure in a country that contributes to a higher geographical decentralization of the set?  </label>
            <input type="text" id="yrii" name="yrii" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(16)">Previous</div>
            <div class="form-button" onclick="nextStep(18)">Next</div>
        </div>
        <div class="form-step" id="step18">
           
            <label for="dyrti">18. Do you run their infrastructure on local hardware or rely on cloud providers? Which provider? </label>
            <input type="text" id="dyrti" name="dyrti" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(17)">Previous</div>
            <div class="form-button" onclick="nextStep(19)">Next</div>
        </div>
        <div class="form-step" id="step19">
           
            <label for="dyea">19. Do you engage actively in governance discussions and vote on every proposal? </label>
            <input type="text" id="dyea" name="dyea" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(18)">Previous</div>
            <div class="form-button" onclick="nextStep(20)">Next</div>
        </div>
        <div class="form-step" id="step20">
           
            <label for="wciyle">20. What country is your legal entity incorporated in? </label>
            <input type="text" id="wciyle" name="wciyle" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(19)">Previous</div>
            <div class="form-button" onclick="nextStep(21)">Next</div>
        </div>
    
        <div class="form-step" id="step21">
           
            <label for="dyhaww">21. Do you have a website where you advertise operations as they see fit as well as a communication channel? Can you verify yourselves? </label>
            <input type="text" id="dyhaww" name="dyhaww" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(20)">Previous</div>
            <div class="form-button" onclick="nextStep(22)">Next</div>
        </div>
        <div class="form-step" id="step22">
           
            <label for="cyetri">22. Can you ensure to run your infrastructure during an extended bear market?  </label>
            <input type="text" id="cyetri" name="cyetri" placeholder="Type your answer here.." required>
            <div class="form-button" onclick="prevStep(21)">Previous</div>
            <div class="form-button" onclick="nextStep(23)">Next</div>
        </div>
    

        <div class="form-step" id="step23">
            
            <label for="hmc">23. How much commission do you take and how fast can you increase it? Did you ever change commission?</label>
            <input type="text" id="hmc" name="hmc" placeholder="Type your answer here..">
            <div class="form-button" onclick="prevStep(22)">Previous</div>
            <button type="submit" class="form-button">Submit</button>
        </div>
    </form>
   </div>


    </section>

    <script src="js/animation-min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/animation.js"></script>

</body>
</html>