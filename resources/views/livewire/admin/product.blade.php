<div>
    <x-slot name="title">Product</x-slot>
    <div class="container">
        @if (session()->get('success'))
            <div class="alert alert-success">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
    </div>
    <div class="content">
        <div class="panel-body" style="background-color: white">
            <div class="clearfix"></div><br>
            <div class="col-md-12">
                <h4><i class="fa fa-list-ul">&nbsp;&nbsp;</i>Your products</h4>
                <hr>
            </div>
            <div class="col-md-3">
                <div class="clearfix"></div><br>
            </div>
            <div class="clearfix"></div>
            <hr class="hr-panel-heading">
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row"></div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                        name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                        class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="-1">All</option>
                                    </select></label></div>
                            <div class="dt-buttons btn-group"> <button
                                    class="btn btn-default buttons-collection btn-default-dt-options" tabindex="0"
                                    aria-controls="DataTables_Table_0" type="button" aria-haspopup="true"
                                    aria-expanded="false"><span>Export</span></button> <button
                                    class="btn btn-default btn-default-dt-options btn-dt-reload" tabindex="0"
                                    aria-controls="DataTables_Table_0" type="button" data-toggle="tooltip"
                                    title="" data-original-title="Reload"><span><i
                                            class="fa fa-refresh"></i></span></button> </div>
                        </div>
                        <div class="col-md-5">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>
                                    <div class="input-group"><span class="input-group-addon"><span
                                                class="fa fa-search"></span></span><input type="text"
                                            class="form-control input-sm" wire:model='search' placeholder="Search...">
                                    </div>
                                </label></div>
                        </div>
                    </div>
                    <div id="DataTables_Table_0_processing" class="dataTables_processing panel panel-default"
                        style="display: none;">
                        <div class="dt-loader"></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-category_management scroll-responsive dataTable"
                            id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" aria-sort="descending"
                                        aria-label="ID# activate to sort column ascending">ID#</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Category name activate to sort column ascending">
                                        Product Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Icon activate to sort column ascending">Customer Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Parent activate to sort column ascending">Domain
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Descriptions activate to sort column ascending">
                                        Key</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Descriptions activate to sort column ascending">
                                        Status</th>
                                    <th class="sorting not-export" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1"
                                        aria-label="Options activate to sort column ascending">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr class="odd">
                                        <td class="sorting_1">{{ $product->product_id }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->users->name }}</td>
                                        <td>{{ $product->domain }}</td>
                                        <td>{{ $product->key }}</td>
                                        <td>{{ $product->status == 1 ? 'Verify' : 'Not Verify' }}</td>
                                        <td><button wire:click='delete({{ $product->id }})'
                                                class="btn btn-danger">Delete</button></td>
                                    </tr>
                                @empty
                                    <h3>Record not found</h3>
                                @endforelse

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td rowspan="1" colspan="1"></td>
                                    <td rowspan="1" colspan="1"></td>
                                    <td rowspan="1" colspan="1"></td>
                                    <td rowspan="1" colspan="1"></td>
                                    <td rowspan="1" colspan="1"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                aria-live="polite">
                                Showing 1 to 1 of 1 entries</div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="colvis"></div>
                        <div id="" class="dt-page-jump"></div>
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="DataTables_Table_0_previous"><a
                                        href="#" aria-controls="DataTables_Table_0" data-dt-idx="0"
                                        tabindex="0">Previous</a></li>
                                <li class="paginate_button active"><a href="#"
                                        aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></li>
                                <li class="paginate_button next disabled" id="DataTables_Table_0_next"><a
                                        href="#" aria-controls="DataTables_Table_0" data-dt-idx="2"
                                        tabindex="0">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
