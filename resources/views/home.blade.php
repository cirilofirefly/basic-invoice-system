@extends('layouts.app')
@section('content')
    <div class="w-3/4 h-3/4 mt-10 bg-slate-50 shadow-md rounded-md flex flex-col items-center justify-start space-y-10">
        <div class="w-full flex flex-row items-center justify-center space-x-4 px-4 mt-4 self-baseline">
            <input id="search-query" type="text" class="flex-grow bg-slate-50 border-2 border-gray-500 rounded-md text-md px-2 py-2" placeholder="Search for invoices...">
            <button class="rounded-md bg-violet-700 px-3 py-2 text-slate-50" type="button" id="open"  data-bs-toggle="modal" data-bs-target="#addForm">
                Add New Invoice
            </button>
        </div>
        <div class="w-full px-4 overflow-y-auto">
            <table class="w-full " id="invoiceTbl">
                <thead>
                    <th>Invoice Number</th>
                    <th>Invoice Date</th>
                    <th>Customer Name</th>
                    <th>Total Amount</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6">
                            <p class="text-center my-4">No Records</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#search-query').on('change', function () {
                console.log(this.value)
            });

            $('#invoiceStore').on('submit', function(e){
                    e.preventDefault();
                    let form  = $(this).serialize();
                    let url   = $(this).attr('action');

                    let response = $.ajax({
                        type: 'POST',
                        url: url,
                        data: form,
                        dataType: 'json',
                        success: function(){
                            $('#addForm').modal('hide');
                            $('#invoiceStore')[0].reset();
                        },
                        error: function(error) {
                            if(error.status == 422) generateValidationErrorMessages(error?.responseJSON?.errors)
                        }
                    });

            });
           
        })

        function generateValidationErrorMessages(errors) {
            for (const key in errors) {
                if (errors.hasOwnProperty(key)) {
                    errors[key].forEach(error => { toastr.error(error) });
                }
            }
        }
        
        // $(document).on('ready', function() {
       
             
        //     showMember();



        //     $('#open').on('click',function () {
        //         $('#modalOverlay').show().addClass('modal-open');
        //         let value = {invoiceNumber: 123, invoiceDate: '4-6-2023', customerName: 'Cirilo', total: 1000};
        //         $("#invoiceTbl > tbody").append(getRowTemplate(value));
        //     });

        //     $('#view-invoice').on('click',function () {
        //         $('#modalOverlay').show().addClass('modal-open');
        //     });

        //     $('#close').on('click',function () {
        //         let modal = $('#modalOverlay');
        //         modal.removeClass('modal-open');
        //         setTimeout(function () {
        //             modal.hide();
        //         }, 200);
        //     });

        //     function getRowTemplate({invoiceNumber, invoiceDate, customerName, total}) {
        //         return '<tr>' +
        //                 `<td>${invoiceNumber}</td>` +
        //                 `<td>${invoiceDate}</td>` +
        //                 `<td>${customerName}</td>` +
        //                 `<td>${total}</td>` +
        //                 `<td class="flex items-center justify-center space-x-3">` +
        //                     '<button id="view-invoice" class="inline-block bg-green-400 px-4 py-1 rounded-md text-white">View</button>' +
        //                     '<button class="inline-block bg-indigo-500 px-5 py-1 rounded-md text-white">Edit</button>' +
        //                     '<button class="inline-block bg-red-500 px-2 py-1 rounded-md text-white">Delete</button>' +
        //                 '</td>' +
        //             '</tr>';
        //     }

        //     function loadInvoices() {
        //         // $.get(baseUrl + '/test', function(data, status) {
        //         //     console.log(data);
        //         // })
        //         console.log('test')
        //     }


        // })

        // function showMember(){ 
        //     $.get("{{ URL::to('show') }}", function(data){ 
        //         $('#memberBody').empty().html(data);
        //     })
        // }
    </script>
@endsection