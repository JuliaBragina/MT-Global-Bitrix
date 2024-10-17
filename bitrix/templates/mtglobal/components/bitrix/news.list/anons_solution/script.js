$(document).ready(function () {

    $('.complexs_sections_block').on('click', function () {

        $('.complexs_sections_block').removeClass('active')
        $(this).addClass('active');

        var section_id = $(this).data('section-id');


        $('.complex-boxs .complex_box_custom').removeClass('active');

        $('.complex-boxs .complex_box_custom').each(function (i) {

            var link_section_id = $(this).data('link-section-id');

            console.log(link_section_id, 'testo')

            if (link_section_id.indexOf(section_id) != -1) {
                $(this).addClass('active');
            }


        })

        $('.mobile_section_element').removeClass('active')
        $(this).closest('.complexs_sections_blocks').find('.mobile_section_element[data-section-element-id="' + section_id + '"]').addClass('active')

    })

    $('.complex_boxs_custom a').on('click', function (e) {
        e.preventDefault();
    })

})