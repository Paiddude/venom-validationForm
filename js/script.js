
   
   
   let currentStep = 1;

    function nextStep(step) {
        document.getElementById('step' + currentStep).classList.remove('active');
        currentStep = step;
        document.getElementById('step' + currentStep).classList.add('active');
    }

    function prevStep(step) {
        document.getElementById('step' + currentStep).classList.remove('active');
        currentStep = step;
        document.getElementById('step' + currentStep).classList.add('active');
    }


