<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
    <!--begin::Head-->
    <head>
        <base href="" />
        <meta charset="utf-8" />
        <title>Metronic | Dashboard</title>
        <meta name="description" content="Updates and statistics" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->

        <!--begin::Page Vendors Styles(used by this page)-->
        <link href="/admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles-->

        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="/admin/assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/css/style.css" rel="stylesheet" type="text/css">
        <!--end::Global Theme Styles-->
        <link href="/admin/assets/css/customeCss.css" rel="stylesheet" type="text/css">

        <!--begin::Layout Themes(used by all pages)-->

        <link href="/admin/assets/css/themes/layout/header/base/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/css/themes/layout/header/menu/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/css/themes/layout/brand/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <!--end::Layout Themes-->

        <link rel="shortcut icon" href="/admin/assets/media/logos/favicon.ico" />
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <!--begin::Main-->
        <!--begin::Header Mobile-->
        <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
            <!--begin::Logo-->
            <a href="index.html">
                <img alt="Logo" src="admin/assets/media/logos/logo-light.png" />
            </a>
            <!--end::Logo-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Aside Mobile Toggle-->
                <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Aside Mobile Toggle-->

                <!--begin::Header Menu Mobile Toggle-->
                <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Header Menu Mobile Toggle-->

                <!--begin::Topbar Mobile Toggle-->
                <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                    <span class="svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                    fill="#000000"
                                    fill-rule="nonzero"
                                />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </button>
                <!--end::Topbar Mobile Toggle-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header Mobile-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Aside-->
                <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                    <!--begin::Brand-->
                    <div class="brand flex-column-auto" id="kt_brand">
                        <!--begin::Logo-->
                        <a href="index.html" class="brand-logo">
                            <img alt="Logo" src="admin/assets/media/logos/logo-light.png" />
                        </a>
                        <!--end::Logo-->

                        <!--begin::Toggle-->
                        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                            <span class="svg-icon svg-icon svg-icon-xl">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path
                                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                            fill="#000000"
                                            fill-rule="nonzero"
                                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "
                                        />
                                        <path
                                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                            fill="#000000"
                                            fill-rule="nonzero"
                                            opacity="0.3"
                                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "
                                        />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </button>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Brand-->

                    <!--begin::Aside Menu-->
                    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                        <!--begin::Menu Container-->
                        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                            <!--begin::Menu Nav-->
                            <ul class="menu-nav">
                                <li class="menu-item menu-item-active" aria-haspopup="true">
                                    <a href="index.html" class="menu-link">
                                        <span class="svg-icon menu-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                        fill="#000000"
                                                        fill-rule="nonzero"
                                                    />
                                                    <path
                                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                        fill="#000000"
                                                        opacity="0.3"
                                                    />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="menu-section">
                                    <h4 class="menu-text">Custom</h4>
                                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                                </li>
                                <li class="menu-item " aria-haspopup="true"><a target="_blank" href="https://preview.keenthemes.com/metronic/preview/demo1/builder.html" class="menu-link "><span class="svg-icon menu-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
                                        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
                                    </g>
                                </svg><!--end::Svg Icon--></span><span class="menu-text">القوائم</span></a>
                                </li>
                                
                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="svg-icon menu-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                    <path
                                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                        fill="#000000"
                                                        opacity="0.3"
                                                    />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-text">Applications</span><i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu">
                                        <i class="menu-arrow"></i>
                                        <ul class="menu-subnav">
                                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                                <span class="menu-link"><span class="menu-text">Applications</span></span>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Users</span><span class="menu-label"><span class="label label-rounded label-primary">6</span></span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/user/list-default.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Default</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/user/list-datatable.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Datatable</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/user/list-columns-1.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Columns 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/user/list-columns-2.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Columns 2</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/user/add-user.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add User</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/user/edit-user.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Edit User</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Profile</span><i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Profile 1</span><i class="menu-arrow"></i>
                                                            </a>
                                                            <div class="menu-submenu">
                                                                <i class="menu-arrow"></i>
                                                                <ul class="menu-subnav">
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/profile/profile-1/overview.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Overview</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/profile/profile-1/personal-information.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Personal Information</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/profile/profile-1/account-information.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Account Information</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/profile/profile-1/change-password.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Change Password</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/profile/profile-1/email-settings.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Email Settings</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/profile/profile-2.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Profile 2</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/profile/profile-3.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Profile 3</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/profile/profile-4.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Profile 4</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Contacts</span><i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/contacts/list-columns.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Columns</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/contacts/list-datatable.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Datatable</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/contacts/view-contact.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">View Contact</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/contacts/add-contact.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add Contact</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/contacts/edit-contact.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Edit Contact</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Projects</span><i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/projects/list-columns-1.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Columns 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/projects/list-columns-2.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Columns 2</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/projects/list-columns-3.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Columns 3</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/projects/list-columns-4.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Columns 4</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/projects/list-datatable.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Datatable</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/projects/view-project.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">View Project</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/projects/add-project.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add Project</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/projects/edit-project.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Edit Project</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Support Center</span><i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/support-center/home-1.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Home 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/support-center/home-2.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Home 2</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/support-center/faq-1.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">FAQ 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/support-center/faq-2.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">FAQ 2</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/support-center/faq-3.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">FAQ 3</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/support-center/feedback.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Feedback</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/support-center/license.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">License</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Chat</span><i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/chat/private.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Private</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/chat/group.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Group</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/chat/popup.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Popup</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Todo</span><i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/todo/tasks.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Tasks</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/todo/docs.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Docs</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/todo/files.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Files</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Education</span><i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">School</span><i class="menu-arrow"></i>
                                                            </a>
                                                            <div class="menu-submenu">
                                                                <i class="menu-arrow"></i>
                                                                <ul class="menu-subnav">
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/education/school/dashboard.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Dashboard</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/education/school/statistics.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Statistics</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/education/school/calendar.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Calendar</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/education/school/library.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Library</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/education/school/teachers.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Teachers</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/education/school/students.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Students</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Student</span><i class="menu-arrow"></i>
                                                            </a>
                                                            <div class="menu-submenu">
                                                                <i class="menu-arrow"></i>
                                                                <ul class="menu-subnav">
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/education/student/dashboard.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Dashboard</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/education/student/profile.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Profile</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/education/student/calendar.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Calendar</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a href="custom/apps/education/student/classmates.html" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Classmates</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="custom/apps/education/class/dashboard.html" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Class</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="custom/apps/inbox.html" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Inbox</span><span class="menu-label"><span class="label label-danger label-inline">new</span></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- theems -->
                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="svg-icon menu-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z"
                                                        fill="#000000"
                                                        fill-rule="nonzero"
                                                        transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) "
                                                    ></path>
                                                    <path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-text">Themes</span><i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu">
                                        <i class="menu-arrow"></i>
                                        <ul class="menu-subnav">
                                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                                <span class="menu-link"><span class="menu-text">Themes</span></span>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <div class="backGroundColor text-center">
                                                    <h3>الوان الخلفية</h3>
                                                    <ul class="list-unstyled">
                                                        <li data-value="css/defult_theme.css" style="background-color: rgb(228, 27, 23);"></li>   <!--عشان نغير لستايل -->
                                                        <li data-value="css/theme1.css" style="background-color: rgb(22, 74, 127);"></li>
                                                        <li data-value="css/theme2.css" style="background-color: rgb(214, 102, 23);"></li>
                                                        <li data-value="css/theme3.css" style="background-color: rgb(146, 8, 85);"></li>
                                                        <li data-value="css/theme4.css" style="background-color: rgb(85, 85, 85);"></li>
                                                        <li data-value="css/theme4.css">
                                                            <input type="color" id="groundColor" name="groundColor" value="#ff0000"><br><br>
                                                        </li>
                                                      </ul>
                                                </div>
                                                <div class="boxColor text-center">
                                                    <h3>الوان الخطوط</h3>
                                                    <ul class="list-unstyled">
                                                        <li data-value="css/defult_theme.css" style="background-color: rgb(00,00,00);"></li>   <!--عشان نغير لستايل -->
                                                        <li data-value="css/theme1.css" style="background-color: rgb(22, 74, 127);"></li>
                                                        <li data-value="css/theme2.css" style="background-color: rgb(214, 102, 23);"></li>
                                                        <li data-value="css/theme3.css" style="background-color: rgb(146, 8, 85);"></li>
                                                        <li data-value="css/theme4.css" style="background-color: rgb(85, 85, 85);"></li>
                                                        <li data-value="css/theme4.css">
                                                            <input type="color" id="TextColor" name="TextColor" value="#ff0000"><br><br>
                                                        </li>

                                                      </ul>
                                                </div>
                                            </li>
                                            <!-- <li class="menu-item menu-item-active" aria-haspopup="true">
                                                <a href="layout/themes/header-dark.html" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Dark Header</span>
                                                </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </li>
                                
                                
                                <!-- end themms -->
                            </ul>
                            <!--end::Menu Nav-->
                        </div>
                        <!--end::Menu Container-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside-->

                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <!--begin::Header-->
                    <div id="kt_header" class="header header-fixed">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex align-items-stretch justify-content-between">
                            <!--begin::Header Menu Wrapper-->
                            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                <!--begin::Header Menu-->
                                <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                                    <!--begin::Header Nav-->
                                    <ul class="menu-nav">
                                       
                                        
                                        
                                    </ul>
                                    <!--end::Header Nav-->
                                </div>
                                <!--end::Header Menu-->
                            </div>
                            <!--end::Header Menu Wrapper-->

                            <!--begin::Topbar-->
                            
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Subheader-->
                        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mr-2">
                                    <!--begin::Page Title-->
                                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                                        Dashboard
                                    </h5>
                                    <!--end::Page Title-->

                                    <!--begin::Actions-->
                                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>


                                   
                                    <!--end::Actions-->
                                </div>
                                <!--end::Info-->

                                <!--begin::Toolbar-->
                                
                                <!--end::Toolbar-->
                            </div>
                        </div>
                        <!--end::Subheader-->

                        <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class="container">
                                <!--begin::Dashboard-->
                                <!--begin::Row-->
                               
                                <!--end::Row-->
                                {{-- start content --}}
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="portlet light bordered">
                                            <div class="card card-custom">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <div class="portlet-title">
                                                            <div class="caption font-red-sunglo">
                                                              <i class="icon-settings font-red-sunglo"></i>
                                                              <span data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                                               aria-controls="collapseExample">اضافة صورة <i class="fa fa-chevron-down"></i> </span>
                                                            </div>
                                                          </div>
                                                    </h3>
                                                </div>
                                          
                                            </div>
                                          <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                          <div class="portlet-body form" >
                                            <form method="POST" action="/pg-admin/upload" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" role="form">
                                              @csrf
                                              <div class="form-body" >
                                                <div class="form-group">
                                                  <label>تحميل صورة</label>
                                                  <input class="form-control spinner" type="file" name="path" required/>
                                                  <div class="aa"></div>
                                                </div>
                                                <div class="form-group">
                                                  <label>اسم الصورة</label>
                                                  <input class="form-control spinner" type="text" placeholder="اسم الصورة" name="alt" required/>
                                                  <div class="aa"></div>
                                                </div>
                                              </div>
                                              <div class="form-actions">
                                                <button type="submit" class="btn blue">اضافة</button>
                                                {{-- <a href="/pg-admin/submenus" class="btn default">اضافة القائمة فرعية</a> --}}
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                      
                                      
                                      <span id="viewImg">       
                                      </span>
                                      
                                      
                                        </div>
                                      </div>
                                      <div class="col-md-8 col-sm-12">
                                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                                        <div class="portlet light bordered">
                                            <div class="card card-custom">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="icon-social-dribbble font-green"></i>
                                                        <span class="caption-subject font-green bold uppercase" >ألبوم الملفات</span>
                                                        
                                                    </h3>
                                                </div>
                                         
                                          @include('alerts.delete')
                                          @include('alerts.success')
                                      
                                          
                                          <div class="portlet-body bodyImg">
                                            <div class="table-scrollable">
                                      
                                              {{-- @foreach ($uploads as $upload)
                                              <img src="{{asset('/images/'.$upload->path)}}" alt="">
                                              @endforeach --}}
                                            </div>
                                                <span id="alertCopty" class="text-right fixed-top alert alert-success"  style="">تم النسخ</span>
                                              <hr class="mt-2 mb-5">
                                            
                                              <div class="row text-center text-lg-left">
                                      
                                                @foreach ($uploads as $upload)
                                                <div class="col-lg-3 col-md-4 col-6 colViewImg">
                                                  {{-- <a href="#" class="d-block mb-4 h-100"> --}}
                                                    
                                                      {{-- <span class="btn btn-info" onclick="FunctionCopy('{{$upload->path}}')">نسخ رابط الصورة</span> --}}
                                                  <form action="/pg-admin/upload/{{$upload->id}}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        
                                                      <button type="submit" class="btn btn-danger" id="btnDeleteImage" data-emilid="{{$upload->id}}">حذف</button>
                                                    </form>
                                                    <div class="form-group">
                                                    {{-- <span class="TrueSelect" id="{{$upload->path}}/trueIcon">✔</span> --}}
                                                    <label >
                                                      <input type="radio" name="radioImg" >
                                                          <img class="img-fluid img-thumbnail imgUpload asas" id="{{$upload->path}}img" onclick="FunctionCopy('{{$upload->path}}'),FunctionPast()"  style="height: 144px;" src="{{asset('/images/'.$upload->path)}}" alt="">
                                                          
                                                        </label>
                                                        
                                                        {{-- <p id="{{"images/".$upload->path}}">{{"images/".$upload->path}}</p> --}}
                                                      {{-- </a> --}}
                                                      {{-- {{"images/".$upload->path}} --}}
                                                      <input type="text" class="form-control" id="{{$upload->path}}" value="{{$upload->path}}">
                                                </div>
                                                </div>
                                                @endforeach
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                {{-- end content --}}
                                <!--end::Dashboard-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Footer-->
                    <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted font-weight-bold mr-2">2020&copy;</span>
                                <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->

                            <!--begin::Nav-->
                            <div class="nav nav-dark">
                                <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
                                <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
                                <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->

        

   

        



        <!--begin::Sticky Toolbar-->
        
        <!--end::Sticky Toolbar-->
        

        <script>
            var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
        </script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
                breakpoints: {
                    sm: 576,
                    md: 768,
                    lg: 992,
                    xl: 1200,
                    xxl: 1400,
                },
                colors: {
                    theme: {
                        base: {
                            white: "#ffffff",
                            primary: "#3699FF",
                            secondary: "#E5EAEE",
                            success: "#1BC5BD",
                            info: "#8950FC",
                            warning: "#FFA800",
                            danger: "#F64E60",
                            light: "#E4E6EF",
                            dark: "#181C32",
                        },
                        light: {
                            white: "#ffffff",
                            primary: "#E1F0FF",
                            secondary: "#EBEDF3",
                            success: "#C9F7F5",
                            info: "#EEE5FF",
                            warning: "#FFF4DE",
                            danger: "#FFE2E5",
                            light: "#F3F6F9",
                            dark: "#D6D6E0",
                        },
                        inverse: {
                            white: "#ffffff",
                            primary: "#ffffff",
                            secondary: "#3F4254",
                            success: "#ffffff",
                            info: "#ffffff",
                            warning: "#ffffff",
                            danger: "#ffffff",
                            light: "#464E5F",
                            dark: "#ffffff",
                        },
                    },
                    gray: {
                        "gray-100": "#F3F6F9",
                        "gray-200": "#EBEDF3",
                        "gray-300": "#E4E6EF",
                        "gray-400": "#D1D3E0",
                        "gray-500": "#B5B5C3",
                        "gray-600": "#7E8299",
                        "gray-700": "#5E6278",
                        "gray-800": "#3F4254",
                        "gray-900": "#181C32",
                    },
                },
                "font-family": "Poppins",
            };
        </script>
        <!--end::Global Config-->

        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="/admin/assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
        <script src="/admin/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
        <script src="/admin/assets/js/scripts.bundle.js?v=7.0.6"></script>
        <!--end::Global Theme Bundle-->

        <!--begin::Page Vendors(used by this page)-->
        <script src="/admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6"></script>
        <!--end::Page Vendors-->

        <!--begin::Page Scripts(used by this page)-->
        <script src="/admin/assets/js/pages/widgets.js?v=7.0.6"></script>
        <!--end::Page Scripts-->
        <script>
            function FunctionCopy(text) {
              var copyText = document.getElementById(text);
              console.log(copyText + " copytet");
             
              copyText.select();
              var success = document.execCommand("Copy");
              if(success){
                document.getElementById("alertCopty").style.display = "block"
                setTimeout(function(){
                  document.getElementById("alertCopty").style.display = "none"
                  }, 2000);
                  
              }
              console.log(text);
              
              localStorage.setItem("copyPath", text);
            console.log(success);
            // document.getElementsByClassName('imgUpload').style.border = "1px solid #fff"
            // document.getElementById(`${text}img`).style.border = "1px solid #f00"            
            }
            </script>
    </body>
    <!--end::Body-->
</html>
