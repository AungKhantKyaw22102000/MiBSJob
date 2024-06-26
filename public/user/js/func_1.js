/*  Wizard */


$("#wizard_container").wizard({
    transitions: {
        branchtype: function($step, action) {
            var branch = $step.find(":checked").val();
            if (!branch) {
                $("form").valid();
            }
            return branch;
        }
    }
});

/* File upload validate size and file type - For details: https://github.com/snyderp/jquery.validate.file*/
$("form#wrapped")
    .validate({
        rules: {
            fileupload: {
                fileType: {
                    types: ["pdf", "application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"]
                },
                maxFileSize: {
                    "unit": "MB",
                    "size": 15
                },
                minFileSize: {
                    "unit": "KB",
                    "size": "20"
                }
            }
        }
    });

// Input name and email value
function getVals(formControl, controlType) {
    switch (controlType) {

        case 'name_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#name_field").text(value);
            break;

        case 'email_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#email_field").text(value);
            break;
    }
}
