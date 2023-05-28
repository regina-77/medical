@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xl-8 col-12">
        <div class="box">
            <div class="box-body">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="d-flex align-items-center mb-15 mb-lg-0">
                            <div
                                class="me-15 bg-danger w-60 h-60 rounded-circle text-center l-h-70">
                                <i class="fs-24 fa fa-user"></i>
                            </div>
                            <div>
                                <p class="text-fade fs-16 mb-0">Patients</p>
                                <h3 class="fw-500 my-0">1,421</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="d-flex align-items-center mb-15 mb-lg-0">
                            <div
                                class="me-15 bg-warning w-60 h-60 rounded-circle text-center l-h-70">
                                <i class="fs-24 fa fa-user-md"></i>
                            </div>
                            <div>
                                <p class="text-fade fs-16 mb-0">Staffs</p>
                                <h3 class="fw-500 my-0">1,521</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="d-flex align-items-center mb-15 mb-md-0">
                            <div
                                class="me-15 bg-success w-60 h-60 rounded-circle text-center l-h-70">
                                <i class="fs-24 fa fa-hospital-o"></i>
                            </div>
                            <div>
                                <p class="text-fade fs-16 mb-0">Rooms</p>
                                <h3 class="fw-500 my-0">2,415</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="d-flex align-items-center mb-15 mb-md-0">
                            <div class="me-15 bg-info w-60 h-60 rounded-circle text-center l-h-70">
                                <i class="fs-24 fa fa-ambulance"></i>
                            </div>
                            <div>
                                <p class="text-fade fs-16 mb-0">Ambulance</p>
                                <h3 class="fw-500 my-0">15</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Patients</h4>
                    </div>
                    <div class="box-body">
                        <p class="mb-0 text-muted">Total Patients</p>
                        <h3 class="text-success mt-0">412,154 People</h3>
                        <div class="d-md-flex align-items-center">
                            <div id="patient_overview" class="min-h-250"></div>
                            <div class="d-md-block d-flex">
                                <div class="d-flex align-items-center me-md-0 me-15">
                                    <div class="me-10 bg-success w-30 h-30 rounded"></div>
                                    <div>
                                        <p class="text-fade mb-0">New</p>
                                        <h4 class="fw-500 my-0">64</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center my-20 me-md-0 me-15">
                                    <div class="me-10 bg-warning w-30 h-30 rounded"></div>
                                    <div>
                                        <p class="text-fade mb-0">Recovered</p>
                                        <h4 class="fw-500 my-0">73</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center me-md-0 me-15">
                                    <div class="me-10 bg-danger w-30 h-30 rounded"></div>
                                    <div>
                                        <p class="text-fade mb-0">In Treatment</p>
                                        <h4 class="fw-500 my-0">48</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Daily Revenue Report</h4>
                    </div>
                    <div class="box-body">
                        <h3 class="text-primary mt-0">$32,485 <small
                                class="text-muted">$12,458</small></h3>
                        <div id="recent_trend"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Next Patient</h4>
                    </div>
                    <div class="box-body">
                        <div class="news-slider owl-carousel owl-sl">
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="me-15">
                                        <img src="https://rhythm-admin-template.multipurposethemes.com/images/avatar/1.jpg"
                                            class="w-auto avatar avatar-lg rounded10 bg-primary-light"
                                            alt="" />
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14">Shawn Hampton
                                        </p>
                                        <span class="text-dark fs-16">Emergency appointment</span>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm mx-15"><i
                                                class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-between align-items-end mt-40 py-10 bt-dashed border-top">
                                    <div>
                                        <p class="mb-0 text-muted"><i
                                                class="fa fa-clock-o me-5"></i> 10:00 <span
                                                class="mx-20">$ 30</span></p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"
                                                class="base-font mx-30"><i
                                                    class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-import"></i> Import</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-export"></i> Export</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-printer"></i> Print</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="me-15">
                                        <img src="https://rhythm-admin-template.multipurposethemes.com/images/avatar/2.jpg"
                                            class="w-auto avatar avatar-lg rounded10 bg-primary-light"
                                            alt="" />
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14">Polly Paul
                                        </p>
                                        <span class="text-dark fs-16">USG + Consultation</span>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm mx-15"><i
                                                class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-between align-items-end mt-40 py-10 bt-dashed border-top">
                                    <div>
                                        <p class="mb-0 text-muted"><i
                                                class="fa fa-clock-o me-5"></i> 10:30 <span
                                                class="mx-20">$ 50</span></p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"
                                                class="base-font mx-30"><i
                                                    class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-import"></i> Import</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-export"></i> Export</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-printer"></i> Print</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="me-15">
                                        <img src="https://rhythm-admin-template.multipurposethemes.com/images/avatar/3.jpg"
                                            class="w-auto avatar avatar-lg rounded10 bg-primary-light"
                                            alt="" />
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14">Johen Doe</p>
                                        <span class="text-dark fs-16">Laboratory screening</span>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm mx-15"><i
                                                class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-between align-items-end mt-40 py-10 bt-dashed border-top">
                                    <div>
                                        <p class="mb-0 text-muted"><i
                                                class="fa fa-clock-o me-5"></i> 11:00 <span
                                                class="mx-20">$ 70</span></p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"
                                                class="base-font mx-30"><i
                                                    class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-import"></i> Import</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-export"></i> Export</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-printer"></i> Print</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Laboratory tests</h4>
                    </div>
                    <div class="box-body">
                        <div class="news-slider owl-carousel owl-sl">
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14"><i
                                                class="fa fa-link"></i> Shawn Hampton</p>
                                        <span class="text-dark fs-16">Beta 2 Microglobulin</span>
                                        <p class="mb-0 fs-14">Marker Test <span
                                                class="badge badge-dot badge-primary"></span></p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"
                                                class="base-font mx-30"><i
                                                    class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-import"></i> Import</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-export"></i> Export</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-printer"></i> Print</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end py-10">
                                    <div>
                                        <a href="#"
                                            class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                        <a href="#"
                                            class="waves-effect waves-light btn btn-sm btn-primary-light">Contact
                                            Patient</a>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="waves-effect waves-light btn btn-sm btn-primary-light"><i
                                                class="fa fa-check"></i> Archive</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14"><i
                                                class="fa fa-link"></i> Johen Doe</p>
                                        <span class="text-dark fs-16">Keeping pregnant</span>
                                        <p class="mb-0 fs-14">Prga Test <span
                                                class="badge badge-dot badge-primary"></span></p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"
                                                class="base-font mx-30"><i
                                                    class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-import"></i> Import</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-export"></i> Export</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-printer"></i> Print</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end py-10">
                                    <div>
                                        <a href="#"
                                            class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                        <a href="#"
                                            class="waves-effect waves-light btn btn-sm btn-primary-light">Contact
                                            Patient</a>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="waves-effect waves-light btn btn-sm btn-primary-light"><i
                                                class="fa fa-check"></i> Archive</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-10">
                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <p class="hover-primary text-fade mb-1 fs-14"><i
                                                class="fa fa-link"></i> Polly Paul</p>
                                        <span class="text-dark fs-16">USG + Consultation</span>
                                        <p class="mb-0 fs-14">Marker Test <span
                                                class="badge badge-dot badge-primary"></span></p>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"
                                                class="base-font mx-30"><i
                                                    class="ti-more-alt text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-import"></i> Import</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-export"></i> Export</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-printer"></i> Print</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ti-settings"></i> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end py-10">
                                    <div>
                                        <a href="#"
                                            class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                        <a href="#"
                                            class="waves-effect waves-light btn btn-sm btn-primary-light">Contact
                                            Patient</a>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="waves-effect waves-light btn btn-sm btn-primary-light"><i
                                                class="fa fa-check"></i> Archive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Overal appointment</h4>
                    </div>
                    <div class="box-body">
                        <div id="appointment_overview"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Patients Pace</h4>
                    </div>
                    <div class="box-body">
                        <div id="patients_pace"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Available Doctors</h4>
                <p class="mb-0 pull-right">Today</p>
            </div>
            <div class="box-body">
                <div class="inner-user-div3">
                    <div class="d-flex align-items-center mb-30">
                        <div class="me-15">
                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/avatar/avatar-1.png"
                                class="avatar avatar-lg rounded10 bg-primary-light"
                                alt="" />
                        </div>
                        <div class="d-flex flex-column flex-grow-1 fw-500">
                            <a href="#" class="text-dark hover-primary mb-1 fs-16">Dr.
                                Jaylon Stanton</a>
                            <span class="text-fade">Dentist</span>
                        </div>
                        <div class="dropdown">
                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i
                                    class="ti-more-alt"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item flexbox" href="#">
                                    <span>Inbox</span>
                                    <span class="badge badge-pill badge-info">5</span>
                                </a>
                                <a class="dropdown-item" href="#">Sent</a>
                                <a class="dropdown-item" href="#">Spam</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item flexbox" href="#">
                                    <span>Draft</span>
                                    <span class="badge badge-pill badge-default">1</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-30">
                        <div class="me-15">
                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/avatar/avatar-10.png"
                                class="avatar avatar-lg rounded10 bg-primary-light"
                                alt="" />
                        </div>
                        <div class="d-flex flex-column flex-grow-1 fw-500">
                            <a href="#" class="text-dark hover-danger mb-1 fs-16">Dr.
                                Carla Schleifer</a>
                            <span class="text-fade">Oculist</span>
                        </div>
                        <div class="dropdown">
                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i
                                    class="ti-more-alt"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item flexbox" href="#">
                                    <span>Inbox</span>
                                    <span class="badge badge-pill badge-info">5</span>
                                </a>
                                <a class="dropdown-item" href="#">Sent</a>
                                <a class="dropdown-item" href="#">Spam</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item flexbox" href="#">
                                    <span>Draft</span>
                                    <span class="badge badge-pill badge-default">1</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-30">
                        <div class="me-15">
                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/avatar/avatar-11.png"
                                class="avatar avatar-lg rounded10 bg-primary-light"
                                alt="" />
                        </div>
                        <div class="d-flex flex-column flex-grow-1 fw-500">
                            <a href="#" class="text-dark hover-success mb-1 fs-16">Dr.
                                Hanna Geidt</a>
                            <span class="text-fade">Surgeon</span>
                        </div>
                        <div class="dropdown">
                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i
                                    class="ti-more-alt"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item flexbox" href="#">
                                    <span>Inbox</span>
                                    <span class="badge badge-pill badge-info">5</span>
                                </a>
                                <a class="dropdown-item" href="#">Sent</a>
                                <a class="dropdown-item" href="#">Spam</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item flexbox" href="#">
                                    <span>Draft</span>
                                    <span class="badge badge-pill badge-default">1</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-30">
                        <div class="me-15">
                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/avatar/avatar-12.png"
                                class="avatar avatar-lg rounded10 bg-primary-light"
                                alt="" />
                        </div>
                        <div class="d-flex flex-column flex-grow-1 fw-500">
                            <a href="#" class="text-dark hover-info mb-1 fs-16">Dr. Roger
                                George</a>
                            <span class="text-fade">General Practitioners</span>
                        </div>
                        <div class="dropdown">
                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i
                                    class="ti-more-alt"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item flexbox" href="#">
                                    <span>Inbox</span>
                                    <span class="badge badge-pill badge-info">5</span>
                                </a>
                                <a class="dropdown-item" href="#">Sent</a>
                                <a class="dropdown-item" href="#">Spam</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item flexbox" href="#">
                                    <span>Draft</span>
                                    <span class="badge badge-pill badge-default">1</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-15">
                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/avatar/avatar-15.png"
                                class="avatar avatar-lg rounded10 bg-primary-light"
                                alt="" />
                        </div>
                        <div class="d-flex flex-column flex-grow-1 fw-500">
                            <a href="#" class="text-dark hover-warning mb-1 fs-16">Dr.
                                Natalie doe</a>
                            <span class="text-fade">Physician</span>
                        </div>
                        <div class="dropdown">
                            <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i
                                    class="ti-more-alt"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item flexbox" href="#">
                                    <span>Inbox</span>
                                    <span class="badge badge-pill badge-info">5</span>
                                </a>
                                <a class="dropdown-item" href="#">Sent</a>
                                <a class="dropdown-item" href="#">Spam</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item flexbox" href="#">
                                    <span>Draft</span>
                                    <span class="badge badge-pill badge-default">1</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box bg-success box-inverse">
            <div class="box-header">
                <h4 class="box-title">Doctor of the Month</h4>
            </div>
            <div class="box-body text-center">
                <div class="mb-0">
                    <img src="https://rhythm-admin-template.multipurposethemes.com/images/avatar/avatar-12.png"
                        width="100" class="rounded-circle bg-info-light" alt="user">
                    <h3 class="mt-20 mb-0">Dr. Johen Doe</h3>
                    <p class="mb-0">Cardiologists</p>
                </div>
            </div>
            <div class="p-20">
                <div class="row">
                    <div class="col-6 be-1">
                        <div class="d-flex align-items-center">
                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/health-1.png"
                                class="img-fluid me-10 w-50" alt="" />
                            <div>
                                <h2 class="mb-0 text-white">10</h2>
                                <p class="mb-0 text-white-50">Operations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/health-2.png"
                                class="img-fluid me-10 w-50" alt="" />
                            <div>
                                <h2 class="mb-0 text-white">47</h2>
                                <p class="mb-0 text-white-50">Patients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="box">
            <div class="box-header no-border">
                <h4 class="box-title">Admission by Division</h4>
            </div>
            <div class="box-body pt-0">
                <div id="chart124"></div>
                <div class="row mt-25">
                    <div class="col-6">
                        <p class="mb-5"><span class="badge badge-dot badge-success"></span>
                            Cardiology</p>
                        <p class="mb-5"><span class="badge badge-dot badge-info"></span>
                            Endocrinology</p>
                        <p class="mb-0"><span class="badge badge-dot badge-danger"></span>
                            Physicians</p>
                    </div>
                    <div class="col-6">
                        <p class="mb-5"><span class="badge badge-dot badge-warning"></span>
                            Dermatology</p>
                        <p class="mb-5"><span class="badge badge-dot badge-primary"></span>
                            Orthopedics</p>
                        <p class="mb-0"><span class="badge badge-dot badge-secondary"></span>
                            Immunology</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
