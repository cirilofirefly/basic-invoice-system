<div class="modal fade" id="addForm" tabindex="-1" aria-labelledby="addFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addFormLabel">Add New Invoice</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="invoiceStore" method="post" action="{{ route('invoices.store') }}">
                <div class="modal-body">
                    <div class="flex flex-col space-y-2 mb-2">
                        <label for="invoice_number">Invoice Number</label>
                        <input class="bg-white border-2 border-gray-500 rounded-sm text-md px-2 py-2" type="text" id="invoice_number" name="invoice_number" autofocus>
                    </div>
                    <div class="flex flex-col space-y-2 mb-2">
                        <label for="invoice_date">Invoice Date</label>
                        <input class="bg-white border-2 border-gray-500 rounded-sm text-md px-2 py-2" type="date" id="invoice_date" name="invoice_date">
                    </div>
                    <div class="flex flex-col space-y-2 mb-2">
                        <label for="customer_name">Customer Name</label>
                        <input class="bg-white border-2 border-gray-500 rounded-sm text-md px-2 py-2" type="text" id="customer_name" name="customer_name">
                    </div>
                    <div class="flex flex-col space-y-2 mb-2 scroll-y-auto">
                        <label for="products">Products</label>
                        <table id="products" class="text-center">
                            <thead>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input class="w-full border-2 border-gray-700" type="number" name="product_name[]" type="text">
                                    </td>
                                    <td>
                                        <input class="w-full border-2 border-gray-700" type="number" name="quantity[]" type="text">
                                    </td>
                                    <td>
                                        <input class="w-full border-2 border-gray-700" type="number" name="price[]" type="text">
                                    </td>
                                    <td>
                                        <input class="w-full border-2 border-gray-700" type="number" name="subtotal[]" type="text">
                                    </td>
                                    <td class="flex items-center justify-center">
                                        <button type="button" class="inline-block px-2 rounded text-white bg-blue-500">&plus;</button>
                                        <button type="button" class="inline-block px-2 rounded text-white bg-red-500">&times;</button>
                                    </td>
                                </tr>
                                <tr>
                                   <td colspan="4" class="text-end">
                                        <p class="text-xl font-bold">Total Amount <input type="text" id="total" name="total"></p>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="bg-red-500 px-4 py-2 rounded-md text-slate-50" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="bg-violet-500 px-4 py-2 rounded-md text-slate-50">Save</button>
                </div>
                @csrf
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editForm" tabindex="-1" aria-labelledby="editFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editFormLabel">Add New Invoice</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="updateInvoice" method="post" action="{{ route('invoices.update') }}">
                <div class="modal-body">
                    <div class="flex flex-col space-y-2 mb-2">
                        <label for="invoice_number">Invoice Number</label>
                        <input class="bg-white border-2 border-gray-500 rounded-sm text-md px-2 py-2" type="text" id="invoice_number" name="invoice_number" autofocus>
                    </div>
                    <div class="flex flex-col space-y-2 mb-2">
                        <label for="invoice_date">Invoice Date</label>
                        <input class="bg-white border-2 border-gray-500 rounded-sm text-md px-2 py-2" type="date" id="invoice_date" name="invoice_date">
                    </div>
                    <div class="flex flex-col space-y-2 mb-2">
                        <label for="customer_name">Customer Name</label>
                        <input class="bg-white border-2 border-gray-500 rounded-sm text-md px-2 py-2" type="text" id="customer_name" name="customer_name">
                    </div>
                    <div class="flex flex-col space-y-2 mb-2 scroll-y-auto">
                        <label for="products">Products</label>
                        <table id="products" class="text-center">
                            <thead>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input class="w-full border-2 border-gray-700" type="number" name="product_name[]" type="text">
                                    </td>
                                    <td>
                                        <input class="w-full border-2 border-gray-700" type="number" name="quantity[]" type="text">
                                    </td>
                                    <td>
                                        <input class="w-full border-2 border-gray-700" type="number" name="price[]" type="text">
                                    </td>
                                    <td>
                                        <input class="w-full border-2 border-gray-700" type="number" name="subtotal[]" type="text">
                                    </td>
                                    <td class="flex items-center justify-center">
                                        <button type="button" class="inline-block px-2 rounded text-white bg-blue-500">&plus;</button>
                                        <button type="button" class="inline-block px-2 rounded text-white bg-red-500">&times;</button>
                                    </td>
                                </tr>
                                <tr>
                                   <td colspan="4" class="text-end">
                                        <p class="text-xl font-bold">Total Amount <input type="text" id="total" name="total"></p>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="bg-red-500 px-4 py-2 rounded-md text-slate-50" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="bg-violet-500 px-4 py-2 rounded-md text-slate-50">Save</button>
                </div>
                @csrf
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteForm" tabindex="-1" aria-labelledby="deleteFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteFormLabel">Add New Invoice</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="deleteInvoice" method="post" action="{{ route('invoices.delete') }}">
                <div class="modal-body">
                   <h1>Are you sure want to delete this invoice?</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="bg-red-500 px-4 py-2 rounded-md text-slate-50" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="bg-violet-500 px-4 py-2 rounded-md text-slate-50">Save</button>
                </div>
                @csrf
            </form>
        </div>
    </div>
</div>