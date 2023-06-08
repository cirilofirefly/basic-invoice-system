$('#search-query').on('change', function () {

})

$('#open').on('click',function () {
    $('#modalOverlay').show().addClass('modal-open');
    let value = {invoiceNumber: 123, invoiceDate: '4-6-2023', customerName: 'Cirilo', total: 1000};
    $("#invoiceTbl > tbody").append(getRowTemplate(value));
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

function getRowTemplate({invoiceNumber, invoiceDate, customerName, total}) {
    return '<tr>' +
            `<td>${invoiceNumber}</td>` +
            `<td>${invoiceDate}</td>` +
            `<td>${customerName}</td>` +
            `<td>${total}</td>` +
            `<td class="flex items-center justify-center space-x-3">` +
                '<button id="view-invoice" class="inline-block bg-green-400 px-4 py-1 rounded-md text-white">View</button>' +
                '<button class="inline-block bg-indigo-500 px-5 py-1 rounded-md text-white">Edit</button>' +
                '<button class="inline-block bg-red-500 px-2 py-1 rounded-md text-white">Delete</button>' +
            '</td>' +
        '</tr>';
}

function loadInvoices() {
    // $.get(baseUrl + '/test', function(data, status) {
    //     console.log(data);
    // })
    console.log('test')
}