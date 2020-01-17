import jQuery from 'jquery'

(($) => {
    console.log($('.class'))
    $('document').ready(function () {
        console.log('ready')
    })
})(jQuery)