import $ from 'jquery';
import 'jquery-validation';

$.validator.setDefaults({
    // Custom submit handler.
    submitHandler: function (form) {
        $(form).find(`input[type="submit"], button[type="submit"]`).attr(`disabled`, true);

        // Validate the form.
        if (this.form()) {
            // Handle remote validation rules.
            if (this.pendingRequest) {
                this.formSubmitted = true;

                return false;
            }

            // Submit the form (will cause the page to refresh etc).
            form.submit();
        } else {
            $(form).find(`input[type="submit"], button[type="submit"]`).prop(`disabled`, false);

            this.focusInvalid();

            return false;
        }
    },
});
