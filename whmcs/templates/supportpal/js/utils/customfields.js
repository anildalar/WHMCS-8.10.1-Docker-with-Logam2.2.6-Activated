import $ from 'jquery';
import 'jquery-ui/ui/widgets/datepicker.js'
import 'jquery-ui/themes/base/core.css'
import 'jquery-ui/themes/base/datepicker.css'
import 'jquery-ui/themes/base/theme.css'

$(function () {
    // Initialise date pickers.
    $(`.sp-date-picker`).each(function () {
        $(this)
            .datepicker({dateFormat: $(this).data(`date-format`)})
            .addClass(`calendarClass`);
    });

    // Disable/enable inputs.
    var resetForm = function ($container, disabled) {
        $container.find(`:input`).not(`:button, :submit, :reset`).prop(`disabled`, disabled);
    };

    // Handle locked custom fields.
    $(`.form-customfields[data-locked=1]`).each(function () {
        resetForm($(this), true);
    });

    // Dependent custom fields.
    var showDependentFields = function ($field) {
        var selected = $field.val();
        if (selected.length) {
            // Show the field that depends on the selected option.
            var $element = $(`[data-depends-on-option="` + selected + `"]`);
            $element.show();
            resetForm($element, $element.data(`locked`) === 1);

            // Check whether the field has a value selected, if so we can want to show any dependent fields.
            var $select = $element.find(`select:not([multiple])`);
            if ($select.length > 0 && $select.find(`:selected`).length > 0) {
                showDependentFields($select);
            }
        }
    };

    $(document).on(`change`, `.form-customfields select:not([multiple])`, function () {
        // Hide all dependent fields.
        var children = $(this).parents(`.form-customfields`).data(`dependent-children`);
        if (typeof children === `object` && children.length > 0) {
            $.each(children, function (index, value) {
                var $element = $(`[data-field="` + value + `"]`);
                $element.hide();
                resetForm($element, true);
            });
        }

        // We don't want this to run if they select the placeholder <option value=''>Please select...</option>
        // otherwise all non-dependent fields disappear.
        showDependentFields($(this));
    });

    // Run dependent custom fields code on page load.
    $(`.form-customfields select:not([multiple])`).trigger(`change`);
});