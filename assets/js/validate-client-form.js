/** validate form before submission */
function validateForm(){
    $("#register-client-form").validate({
        rules: {
            organization_name : "required",
            reg_number : "required",
            legal_entity_type : "required",
            physical_address : "required",
            postal_address : "required",
            telephone_number : "required",
            email_address : "required",
            website_address : "required",
            business_type : "required"
        },
        messages:{
            organization_name : "<p>this is a required field</p>",
            reg_number : "<p>this is a required field</p>",
            legal_entity_type : "<p>this is a required field</p>",
            physical_address : "<p>this is a required field</p>",
            postal_address : "<p>this is a required field</p>",
            telephone_number : "<p>this is a required field</p>",
            email_address : "<p>this is a required field</p>",
            website_address : "<p>this is a required field</p>",
            business_type : "<p>this is a required field</p>"
        },

        submitHandler: function (form) {
            Swal.fire({
                title: 'Proceed to save?',
                showDenyButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
                }).then((result) => {
            
                if (result.isConfirmed) {
                    
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
                })
        }
    });
}