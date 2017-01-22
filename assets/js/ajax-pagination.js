/**
 * Created by USER on 1/19/2017.
 */
// (function($) {
//
//     function find_page_number( element ) {
//         element.find('span').remove();
//         return parseInt( element.html() );
//     }
//
//     $(document).on( 'click', '.btn-loadmore', function( event ) {
//         event.preventDefault();
//         console.log('btn click');
//         page = find_page_number( $(this).clone() );
//
//         $.ajax({
//             url: ajaxpagination.ajaxurl,
//             type: 'post',
//             data: {
//                 action: 'ajax_pagination',
//                 query_vars: ajaxpagination.query_vars,
//                 page: page
//             },
//             beforeSend: function() {
//                 $('#main').find( 'article' ).remove();
//                 $('#main nav').remove();
//                 $(document).scrollTop();
//                 $('#main').append( '<div class="page-content" id="loader">Loading New Posts...</div>' );
//             },
//             success: function( html ) {
//                 $('#main #loader').remove();
//                 $('#main').append( html );
//             }
//         })
//     })
// })(jQuery);
jQuery(document).ready(function($){

    function find_page_number( element ) {
        element.find('span').remove();
        return parseInt( element.html() );
    }

    var page = 1;
    $('a.loadmore').on('click', function( event ){
        event.preventDefault();
        console.log('clicked');
        page++;
        $.ajax({
            url: ajaxpagination.ajaxurl,
            type: 'post',
            data: {
                action: 'ajax_pagination',
                query_vars: ajaxpagination.query_vars,
                page: page,
                postType: $(this).data('type')
            },
            beforeSend: function(){
                $('.all-events').after( '<div class="page-content" id="loader" style="text-align:center;"><?xml version="1.0" encoding="utf-8"?><svg width="124px" height="124px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-facebook"><rect x="0" y="0" width="100" height="100" fill="#ffffff" class="bk"></rect><g transform="translate(20 50)"><rect x="-10" y="-30" width="20" height="60" fill="#3769c8" opacity="0.6"><animateTransform attributeName="transform" type="scale" from="2" to="1" begin="0s" repeatCount="indefinite" dur="1.4s" calcMode="spline" keySplines="0.1 0.9 0.4 1" keyTimes="0;1" values="2;1"></animateTransform></rect></g><g transform="translate(50 50)"><rect x="-10" y="-30" width="20" height="60" fill="#3769c8" opacity="0.8"><animateTransform attributeName="transform" type="scale" from="2" to="1" begin="0.13s" repeatCount="indefinite" dur="1.4s" calcMode="spline" keySplines="0.1 0.9 0.4 1" keyTimes="0;1" values="2;1"></animateTransform></rect></g><g transform="translate(80 50)"><rect x="-10" y="-30" width="20" height="60" fill="#3769c8" opacity="0.9"><animateTransform attributeName="transform" type="scale" from="2" to="1" begin="0.27s" repeatCount="indefinite" dur="1.4s" calcMode="spline" keySplines="0.1 0.9 0.4 1" keyTimes="0;1" values="2;1"></animateTransform></rect></g></svg></div>' );

            },
            success: function( html ) {
                $('#loader').remove();
                $('.all-events').append( html );
                //console.log( html);
                if(html == ''){
                    $('a.showmore').hide();
                    $('.all-events').after( '<div class="no-more-posts" style="text-align:center;">No More Events to Show</div>' );
                }
            }
        })
    });
});