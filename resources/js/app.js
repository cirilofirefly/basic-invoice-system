import './bootstrap';
import $ from 'jquery';

window.$ = window.jQuery = $;

$('#search-query').on('change', function () {
    console.log(this.value)
})

$('#open').on('click',function () {
    $('#modalOverlay').show().addClass('modal-open');
});

$('#view-invoice').on('click',function () {
    $('#modalOverlay').show().addClass('modal-open');
});

$('#close').on('click',function () {
    let modal = $('#modalOverlay');
    modal.removeClass('modal-open');
    setTimeout(function () {
        modal.hide();
    }, 200);
});