@extends('layouts.admin')
@section('content')
					<!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class=" container ">
                            <!--begin::Notice-->
                <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                    <div class="alert-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"/>
                        <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"/>
                    </g>
                </svg><!--end::Svg Icon--></span>	</div>
                    <div class="alert-text">
                        The Metronic Datatable allows the end user to select single or multiple rows using checkbox to perform operations over rows.
                        For more information visit <a class="font-weight-bold" href="https://keenthemes.com/metronic/?page=docs&section=html/components/datatable" target="_blank">Metronic KTDatatable Documentation</a>.
                    </div>
                </div>
                <!--end::Notice-->

                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-toolbar">
                <!--begin::Button-->
                <a href="/pg-admin/pages/create" class="btn btn-primary font-weight-bolder">
                    <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <circle fill="#000000" cx="9" cy="15" r="6"/>
                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                    </g>
                </svg><!--end::Svg Icon--></span>	اضافة صفحة جديدة
                </a>
                <!--end::Button-->
                        </div>
                    </div>

                    <div class="card-body">
                        <!--begin: Search Form-->
                        <!--begin::Search Form-->
                <div class="mb-7">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-xl-8">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="بحث..." id="kt_datatable_search_query" />
                                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                                    </div>
                                </div>

                                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                        <select class="form-control" id="kt_datatable_search_status">
                                            <option value="">All</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Delivered</option>
                                            <option value="3">Canceled</option>
                                            <option value="4">Success</option>
                                            <option value="5">Info</option>
                                            <option value="6">Danger</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                        <select class="form-control" id="kt_datatable_search_type">
                                            <option value="">All</option>
                                            <option value="1">Online</option>
                                            <option value="2">Retail</option>
                                            <option value="3">Direct</option>
                                        </select>
                                    </div>
                                </div>
                                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                            <a href="#" class="btn btn-light-primary px-6 font-weight-bold">
                                Search
                            </a>
                        </div>
                    </div>
                </div>
                <!--end::Search Form-->
                        <!--end: Search Form-->

                        <!--begin: Selected Rows Group Action Form-->
                        <div class="mt-10 mb-5 collapse" id="kt_datatable_group_action_form">
                            <div class="d-flex align-items-center">
                                <div class="font-weight-bold text-danger mr-3">
                                    Selected <span id="kt_datatable_selected_records">0</span> records:
                                </div>

                                <div class="dropdown mr-2">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Update status
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-sm">
                                        <ul class="nav nav-hover flex-column">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <span class="nav-text">Pending</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <span class="nav-text">Delivered</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <span class="nav-text">Canceled</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <button class="btn btn-sm btn-danger mr-2" type="button" id="kt_datatable_delete_all">
                                    Delete All
                                </button>

                                <button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#kt_datatable_fetch_modal">
                                    Fetch Selected Records
                                </button>
                            </div>
                        </div>
                        <!--end: Selected Rows Group Action Form-->

                        <!--begin: Datatable-->
                        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->

                <!--begin::Modal-->
                <div class="modal fade" id="kt_datatable_fetch_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Selected Records</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="scroll" data-scroll="true" data-height="200">
                                    <ul id="kt_datatable_fetch_display"></ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Modal-->

                              <!--begin::Modal-->
                <div class="modal fade" id="kt_datatable_fetch_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Selected Records</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="scroll" data-scroll="true" data-height="200">
                                    <ul id="kt_datatable_fetch_display_2"></ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Modal-->
                        </div>
                        <!--end::Container-->
                    </div>
                <!--end::Entry-->
                                </div>
                                <!--end::Content-->

@endsection



