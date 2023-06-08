<div class="w-3/4 h-3/4 mt-10 bg-slate-50 shadow-md rounded-md flex flex-col items-center justify-start space-y-10">
    <div class="w-full flex flex-row items-center justify-center space-x-4 px-4 mt-4 self-baseline">
        <input id="search-query" type="text" class="flex-grow bg-slate-50 border-2 border-gray-500 rounded-md text-md px-2 py-2" placeholder="Search for invoices...">
        <button class="rounded-md bg-violet-700 px-3 py-2 text-slate-50" type="button" id="open">
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
   <div id="modalOverlay" style="display:none;">
        <div id="modal" class="rounded-md max-w-2xl">
            <div class="flex py-2 w-full items-center justify-center border-b">
                <h1 class="pt-4 text-xl text-black font-semibold text-center pb-4">And that's how it's done baby!</h1>
                <button id="close" class="m-4 absolute top-0 right-1 hover:bg-gray-200 rounded-full p-1 focus:outline-none focus:ring-2 focus:ring-offset-0 focus:ring-black" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="p-12">
                <div class="flex items-center justify-center">
                    <form action="">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>