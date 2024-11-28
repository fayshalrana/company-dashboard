{
    // Hamburger Menu
    $('.ham-btn').on('click', function(e){
        $('aside').addClass('menu-active');
        $('.content-container').removeClass('menu-active');
    });
    $('#closeHam').on('click', function(e){
        $('aside').removeClass('menu-active');
        $('.content-container').addClass('menu-active');
    });
}

{
    // Minimize Menu
    let toggleValue = false;
    const value = localStorage.getItem('minimize-menu');

    if (value === 'true') {
        $('.sidebar-container').addClass('min');
        toggleValue = true;
    }

    // Add click event listener
    $('#minimizeMenu').on('click', function (e) {
        $('.sidebar-container').toggleClass('min');
        toggleValue = !toggleValue;
        localStorage.setItem('minimize-menu', toggleValue);
    });
}

{
    // Toggle Password
    function togglePassword() {
        const targetId = $(this).data('target');
        const passwordInput = $('#' + targetId);

        if ($(this).hasClass('fa-eye-slash')) {
            $(this).removeClass('fa-eye-slash').addClass('fa-eye');
            passwordInput.attr('type', 'text');
        } else {
            $(this).removeClass('fa-eye').addClass('fa-eye-slash');
            passwordInput.attr('type', 'password');
        }
    };

    $('.toggle-password').each(function(e){
        $(this).click(togglePassword);
    });

}

{
    // Select all file input elements
    const inputFiles = document.querySelectorAll('input[type="file"][accept="image/*"]');
    
    inputFiles.forEach(input => {
    
        const imageId = `uploaded-image-${input.id.split('-').pop()}`;  // Generate the corresponding image ID
        const dropdownMenu = document.querySelector(`.upload-file-option[data-input-id="${input.id}"]`);
        const updateButton = dropdownMenu.querySelector('.update-photo');
        const deleteButton = dropdownMenu.querySelector('.delete-photo');
        console.log('First', imageId)
        
        input.addEventListener('change', function(event) {
            const file = event.target.files[0];
            const uploadedImageBtn = document.getElementById(imageId);
            const uploadedImage = uploadedImageBtn.querySelector('.uploaded-file');
            const optionsMobileCascade = document.querySelector(`.upload-file-option[data-mob-options="${imageId}"]`);
            // console.log(uploadedImageBtn, uploadedImage, imageId, file)
            
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    uploadedImage.src = e.target.result;
                    uploadedImageBtn.style.display = 'block'; // Show the image
                    console.log(optionsMobileCascade, imageId);
                    if(optionsMobileCascade){ // To Show the file Edit options for Mobile version
                        optionsMobileCascade.style.display = 'flex'; 
                    }

                };
                
                reader.readAsDataURL(file); // Convert the file to a base64 string
            } else {
                alert('Please select a valid image file.');
            }
        });

        // Update Photo functionality
        updateButton.addEventListener('click', function() {
            input.click(); // Trigger file input click to select a new image
        });
    
        // Delete Photo functionality
        deleteButton.addEventListener('click', function() {
            const uploadedImageBtn = document.getElementById(imageId);
            const uploadedImage = uploadedImageBtn.querySelector('.uploaded-file');
            const optionsMobileCascade = document.querySelector(`.upload-file-option[data-mob-options="${imageId}"]`);
            
            uploadedImage.src = ''; // Remove the image source
            uploadedImageBtn.style.display = 'none'; // Hide the image and dropdown

            if(optionsMobileCascade){ // To Show the file Edit options for Mobile version
                optionsMobileCascade.style.display = 'none'; 
            }
        });
    });
    
}

{
    // Multiple Select
    var Utils = $.fn.select2.amd.require('select2/utils');
    var Dropdown = $.fn.select2.amd.require('select2/dropdown');
    var DropdownSearch = $.fn.select2.amd.require('select2/dropdown/search');
    var CloseOnSelect = $.fn.select2.amd.require('select2/dropdown/closeOnSelect');
    var AttachBody = $.fn.select2.amd.require('select2/dropdown/attachBody');
    
    var dropdownAdapter = Utils.Decorate(Utils.Decorate(Utils.Decorate(Dropdown, DropdownSearch), CloseOnSelect), AttachBody);
    
    // Initialising Multiple Select
    $('.form-select-multiple').each(function() {
        $(this).select2({
            placeholder: $(this).attr('placeholder'),
            dropdownParent: $(this).parent(),
            allowClear: true,
            closeOnSelect: false,
            // search: true,
            language: {
                noResults: function() {
                    return "No results found"; // Customize the "No results found" message
                }
            },
            templateSelection: function(data, container) {
                // Don't show "Select All" in the pills/tags area
                if (data.id === 'select-all' || data.id === '') {
                    $(container).addClass('hidden-items');
                }
                return data.text;
            },
            templateResult: function(data) {
                // Handle Select All option
                if (data.id === 'select-all') {
                    return $('<span class="select-all-option">' + data.text + '</span>');
                }
                return data.text;
            },
            // dropdownAdapter: dropdownAdapter,
        }).on('select2:open', function() {
            var dropdown = $(this).data('select2').$dropdown;
            let searchField = dropdown.find('.select2-search__field');
            searchField.attr('placeholder', 'Search here...');

            // Handle Select All functionality
            $(this).on('select2:select', function(e) {
                if (e.params.data.id === 'select-all') {
                    $(this).find('option[value][value!="select-all"]').prop('selected', true);
                    $(this).trigger('change');
                }
            });
        
            $(this).on('select2:unselect', function(e) {
                if (e.params.data.id === 'select-all') {
                    $(this).find('option[value][value!="select-all"]').prop('selected', false);
                    $(this).trigger('change');
                }
            });
        
            // Update Select All state when other options change
            $(this).on('change', function(e) {
                checkSelectedAll($(this), true);
            });

            // Check on initialization
            checkSelectedAll($(this), false);

            function checkSelectedAll(select, eventOnChange){
                let totalOptions = select.find('option:not([value="select-all"])').length;
                let selectedOptions = select.find('option:selected').not('[value="select-all"]').length;
                // console.log(totalOptions, selectedOptions);
                if (selectedOptions === totalOptions - 1) {
                    select.find('option[value="select-all"]').prop('selected', true);
                    // Close dropdown when all is selected
                    eventOnChange ? select.select2('close'): null;
                } else {
                    select.find('option[value="select-all"]').prop('selected', false);
                }
            }
            
        });
    
        // Add Select All option to the beginning of options
        let selectAllOption = new Option('All', 'select-all', false, false);
        $(this).prepend(selectAllOption);
    });

    // Intialising Single Select
    $('.form-select-single').each(function() {
        $(this).select2({
            dropdownParent: $(this).parent(),
            placeholder: $(this).attr('placeholder'),
        });
    });

}



//Card slider
$(document).ready(function () {
    function initOwlCarousel() {
        if ($(window).width() < 991) {
            // Initialize carousel if not already initialized
            if (!$('.owl-carousel').hasClass('owl-loaded')) {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    // autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    margin: 4,
                    dots: true,
                    items: $(window).width() < 576 ? 1 : 2,
                });
            }
        } else {
            // Destroy carousel if it exists
            if ($('.owl-carousel').hasClass('owl-loaded')) {
                $('.owl-carousel').trigger('destroy.owl.carousel');
                $('.owl-carousel').removeClass('owl-loaded');
                $('.owl-carousel').html($('.owl-carousel').find('.owl-item').html()); // Reset content
            }
        }
    }

    // Initialize Owl Carousel on page load
    initOwlCarousel();

    // Reinitialize on window resize with debounce
    let resizeTimer;
    $(window).resize(function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            initOwlCarousel();
        }, 100); 
    });
});

//Date picker functionality 
$(document).ready(function () {
    function initializeDatePicker(singleDatePicker = false) {
        const currentDate = moment(); // Set current date as the default start
        const input = $('.daterange');
        let isDateSelected = false;

        $('.daterange').daterangepicker({
            locale: {
                separator: ' → ',
                format: 'DD MMM YYYY',
                daysOfWeek: ['S', 'M', 'T', 'W', 'T', 'F', 'S']
            },
            autoApply: false,
            ranges: singleDatePicker
                ? undefined
                : {
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [
                        moment().subtract(1, 'month').startOf('month'),
                        moment().subtract(1, 'month').endOf('month'),
                    ],
                    'This Year': [moment().startOf('year'), moment()],
                    'Last Year': [
                        moment().subtract(1, 'year').startOf('year'),
                        moment().subtract(1, 'year').endOf('year'),
                    ],
                    'All Time': [currentDate, moment()],
                },
            singleDatePicker: singleDatePicker,
            showCustomRangeLabel: !singleDatePicker,
            alwaysShowCalendars: !singleDatePicker,
            startDate: currentDate,
            endDate: currentDate,
            opens: "center",
            buttonClasses: "btn",
            applyButtonClasses: "date-apply-btn",
            cancelClass: "date-cancel-btn",
            autoUpdateInput: false,
        }, function (start, end, label) {
            isDateSelected = true;
            input.css('color', 'black'); // Change text color to black

            if (label === 'All Time') {
                input.val('All Time');
            } else {
                input.val(start.format('DD MMM YYYY') + ' → ' + end.format('DD MMM YYYY'));
            }

            // Adjust max-width based on content
            adjustInputWidth(input);
        });

        // Prevent calendar from closing on outside click
        $('.daterangepicker').on('mousedown', function (e) {
            e.stopPropagation();
        });

        // Close on Cancel button click
        $('.daterange').on('cancel.daterangepicker', function () {
            if (!isDateSelected) {
                input.val('All Time');
                input.css('color', '#757A89'); // Reset text color to gray
                adjustInputWidth(input, true);
            }
        });

        // Default input value and adjust width
        input.val('All Time');
        input.css('color', '#757A89'); // Set default text color to gray
        adjustInputWidth(input);

        // Adjust width dynamically
        input.on('focus', function () {
            if (!isDateSelected) {
                adjustInputWidth(input, true);
            }
        });
    }

    // Adjust input width dynamically
    function adjustInputWidth(input, resetToDefault = false) {
        if (resetToDefault) {
            input.css('max-width', '7rem');
            return;
        }

        const tempSpan = $('<span>')
            .text(input.val())
            .css({
                visibility: 'hidden',
                position: 'absolute',
                fontSize: input.css('font-size'),
                fontWeight: input.css('font-weight'),
                fontFamily: input.css('font-family'),
                color: input.css('color'),
                whiteSpace: 'nowrap',
                letterSpacing: input.css('letter-spacing'),
            })
            .appendTo('body');

        const contentWidth = tempSpan.width();
        tempSpan.remove();

        input.css('max-width', contentWidth + 62 + 'px');
    }

    // Initialize date picker
    function initializeDatePickerBasedOnScreenSize() {
        const isMobile = $(window).width() <= 768; // Mobile devices (adjust breakpoint if needed)
        initializeDatePicker(isMobile);
    }

    initializeDatePickerBasedOnScreenSize();

    // Reinitialize on resize
    $(window).resize(function () {
        if ($('.daterange').data('daterangepicker')) {
            $('.daterange').data('daterangepicker').remove();
        }
        initializeDatePickerBasedOnScreenSize();
    });
});



$(document).on('click', '.td-show-btn button', function() {
    // Close any previously opened rows
    $('.tdd-container.open-td-details').not($(this).parent().parent()).each(function() {
        $(this).removeClass('open-td-details').attr('colspan', 1);
        $(this).parent().removeClass('open-tr-details');
    });

    // Toggle the clicked row
    const $currentRow = $(this).parent().parent('.tdd-container');
    $currentRow.toggleClass('open-td-details');
    $currentRow.parent().toggleClass('open-tr-details');
    $currentRow.attr('colspan', $currentRow.hasClass('open-td-details') ? 2 : 1);
});