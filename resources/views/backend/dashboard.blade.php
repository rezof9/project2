@extends('main');


@section('section')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex px-4 pb-0 justify-content-between">
                                    <div>
                                        <h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Clients</h4>
                                        <div class="d-flex align-items-center">
                                            <h2 class="fs-32 font-w700 mb-0">68</h2>
                                            <span class="d-block ms-4">
                                                <svg width="21" height="11" viewBox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z" fill="#09BD3C"></path>
                                                </svg>
                                                <small class="d-block fs-16 font-w400 text-success">+0,5%</small>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="bg-gradient1 rounded text-center p-3">
                                        <div class="d-inline-block position-relative donut-chart-sale mb-3">
                                            <span class="donut1" data-peity="{ " fill":="" ["var(--primary)",="" "rgba(238,="" 238,="" 237,="" 1)"],="" "innerradius":="" 33,="" "radius":="" 10}"="">5/8</span>
                                            <small class="text-primary">71%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body px-4">
                                    <h4 class="fs-18 font-w600 mb-5 text-nowrap">Total Clients</h4>
                                    <div class="progress default-progress">
                                        <div class="progress-bar progress-animated" style="width: 40%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end mt-1 justify-content-between">
                                        <span><small class="text-primary">76</small> left from target</span>
                                        <h4 class="mb-0 fs-32 font-w800">42</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex px-4  justify-content-between">
                                    <div>
                                        <div class="">
                                            <h2 class="fs-32 font-w700">562</h2>
                                            <span class="fs-18 font-w500 d-block">Total Clients</span>
                                            <span class="d-block fs-16 font-w400"><small class="text-danger">-2%</small> than last month</span>
                                        </div>
                                    </div>
                                    <div id="NewCustomers"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex px-4  justify-content-between">
                                    <div>
                                        <div class="">
                                            <h2 class="fs-32 font-w700">892</h2>
                                            <span class="fs-18 font-w500 d-block">New Projects</span>
                                            <span class="d-block fs-16 font-w400"><small class="text-success">-2%</small> than last month</span>
                                        </div>
                                    </div>
                                    <div id="NewCustomers1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 flex-wrap">
                            <div class="mb-2">
                                <h4 class="fs-20 font-w700">List Perusahaan</h4>
                                <span>Lorem ipsum dolor sit amet</span>
                            </div>
                            <div class="mb-2">
                                <a href="{{ route('perusahaan.create') }}" class="btn btn-primary btn-rounded">+ New Perusahaan</a>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            @foreach ($perusahaans as $perusahaan)
                            <div class="msg-bx d-flex justify-content-between align-items-center">
                                <div class="msg d-flex align-items-center w-100">
                                    <div class="image-box">
                                        <!-- Ganti dengan gambar perusahaan atau placeholder -->
                                        <img src="{{ asset('storage/' . $perusahaan->logo) }}" width="100" alt="Logo" class="gambar-kotak">
                                    </div>
                                    <div class="ms-3 w-100">
                                        <h4 class="fs-18 font-w600">{{ $perusahaan->nama }}</h4>
                                        <div class="d-flex justify-content-between">
                                            <span class="me-auto">{{ $perusahaan->alamat }}</span>
                                            <span class="me-4 fs-12">{{ $perusahaan->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <div class="btn-link" data-bs-toggle="dropdown">
                                        <a href="{{ route('perusahaan.edit', $perusahaan->id_perusahaan) }}" class="btn btn-primary shadow btn-xs sharp me-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('perusahaan.destroy', $perusahaan->id_perusahaan) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- Dropdown menu items can go here if needed -->
                                    </div>
                                </div>
                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card bg-progradient manage-project">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-12">
                                    <h4 class="fs-24 font-w700 text-white">Manage your project in one touch</h4>
                                    <span class="fs-16 text-white d-block">Let Wokrload manage your project automatically with our best AI systems </span>
                                </div>
                                <div class="col-xl-6 col-12 text-end">
                                    <a href="javascript:void(0);" class="btn  bg-white fs-18 btn-rounded">Try Free Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <h4 class="fs-20 font-w700">Project Statistics</h4>
                            <div class="dropdown ">
                                <div class="btn-link" data-bs-toggle="dropdown">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                        <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                        <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <div id="reservationChart" class="reservationChart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div>
                                <h4 class="fs-20 font-w700">Project Categories</h4>
                                <span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit amet</span>
                            </div>
                            <div class="dropdown">
                                <div class="btn-link" data-bs-toggle="dropdown">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                        <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                        <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div>
                                        <span class="fs-18 font-w600 mb-3 d-block">Legend</span>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <span class="fs-18 font-w500">
                                                <svg class="me-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="20" rx="6" fill="#886CC0"></rect>
                                                </svg>
                                                Primary (27%)
                                            </span>
                                            <span class="fs-18 font-w600">763</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between  mb-4">
                                            <span class="fs-18 font-w500">
                                                <svg class="me-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="20" rx="6" fill="#26E023"></rect>
                                                </svg>
                                                Promotion (11%)
                                            </span>
                                            <span class="fs-18 font-w600">321</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between  mb-4">
                                            <span class="fs-18 font-w500">
                                                <svg class="me-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="20" rx="6" fill="#61CFF1"></rect>
                                                </svg>
                                                Forum (22%)
                                            </span>
                                            <span class="fs-18 font-w600">69</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between  mb-4">
                                            <span class="fs-18 font-w500">
                                                <svg class="me-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="20" rx="6" fill="#FFDA7C"></rect>
                                                </svg>
                                                Socials (15%)
                                            </span>
                                            <span class="fs-18 font-w600">154</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between  mb-4">
                                            <span class="fs-18 font-w500">
                                                <svg class="me-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="20" height="20" rx="6" fill="#FF86B1"></rect>
                                                </svg>
                                                Spam (25%)
                                            </span>
                                            <span class="fs-18 font-w600">696</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 text-center">
                                    <div id="emailchart" class="mb-3"></div>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded">Update Progress</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-12">
            <div class="row">

            </div>
        </div>
    </div>
</div>@endsection
