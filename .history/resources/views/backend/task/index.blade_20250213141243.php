@extends('main')

@section('section')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card overflow-hidden">
                        <div class="company-profile">
                            <img src="images/back1.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div>
                                        <h4 class="fs-32 font-w700">Workload  Company Profile Websites Development</h4>
                                        <span class="mb-2 d-block">Created by Tommy Hank on June 31, 2020</span>
                                        <div class="workload-button">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-rounded">New<i class="fas fa-caret-down ms-2 scale5"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-primary light btn-rounded"><i class="fas fa-user-plus scale5 me-3"></i>Invite People</a>
                                            <a href="javascript:void(0);" class="btn btn-outline-light btn-rounded">Edit</a>
                                            <a href="javascript:void(0);" class="btn btn-outline-light btn-rounded">Private</a>
                                            <a href="javascript:void(0);" class="btn btn-outline-light btn-rounded"><i class="far fa-envelope scale5 me-3 text-primary"></i>45 Comments</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 info">
                                    <div class="d-flex justify-content-end">
                                        <span><i class="fas fa-info-circle me-3"></i>Project Details</span>
                                        <div class="dropdown ms-3">
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
                                    <div class="justify-content-end d-flex">
                                        <ul class="kanbanimg me-3 mb-3">
                                            <li><img src="images/pic1.jpg" alt=""></li>
                                            <li><img src="images/pic2.jpg" alt=""></li>
                                            <li><img src="images/pic3.jpg" alt=""></li>
                                            <li><img src="images/pic4.jpg" alt=""></li>
                                            <li><img src="images/pic5.jpg" alt=""></li>
                                            <li><span>5+</span></li>
                                        </ul>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row kanban-bx">
                <div class="col">
                    <div class="kanbanPreview-bx">
                        <div class="draggable-zone dropzoneContainer">
                            <div class="sub-card align-items-center d-flex justify-content-between mb-4">
                                <div>
                                    <h4 class="fs-20 mb-0 font-w600">To-Do List (<span class="totalCount">24</span>)</h4>
                                </div>
                                <div class="plus-bx">
                                    <a href="javascript:void(0)"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="sub-title">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#FFA7D7"></circle>
                                            </svg>
                                            Deisgner
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Create wireframe for landing page phase 1</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-design progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-warning">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#FFCF6D"></circle>
                                            </svg>
                                            Important
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Visual Graphic for Presentation to Client</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-warning progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                            <li><img src="images/pic222.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-success">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#09BD3C"></circle>
                                            </svg>

                                            Databse
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Setup database for create API connection</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-success progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                            <li><img src="images/pic222.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kanbanPreview-bx">
                        <div class="draggable-zone dropzoneContainer">
                            <div class="sub-card align-items-center d-flex justify-content-between mb-4">
                                <div>
                                    <h4 class="fs-20 mb-0 font-w600">On Progress(<span class="totalCount">2</span>)</h4>
                                </div>
                                <div class="plus-bx">
                                    <a href="javascript:void(0)"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-sucess">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#09BD3C"></circle>
                                            </svg>
                                            UPDATE
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-success progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-info">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#D653C1"></circle>
                                            </svg>
                                            Video
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-info progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kanbanPreview-bx">
                        <div class="draggable-zone dropzoneContainer">
                            <div class="sub-card align-items-center d-flex justify-content-between mb-4">
                                <div>
                                    <h4 class="fs-20 mb-0 font-w600">Done(<span class="totalCount">3</span>)</h4>
                                </div>
                                <div class="plus-bx">
                                    <a href="javascript:void(0)"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-danger">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#FC2E53"></circle>
                                            </svg>
                                            BUGS FIXING
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-danger progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-danger">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#FC2E53"></circle>
                                            </svg>
                                            BUGS FIXING
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-danger progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="sub-title">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#FFA7D7"></circle>
                                            </svg>
                                            HTML
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Create wireframe for landing page phase 1</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-design progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kanbanPreview-bx">
                        <div class="draggable-zone dropzoneContainer">
                            <div class="sub-card align-items-center justify-content-between d-flex text-white">
                                <div>
                                    <h4 class="fs-20 mb-0 font-w600">Done(<span class="totalCount">3</span>)</h4>
                                </div>
                                <div class="plus-bx">
                                    <a href="javascript:void(0)"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="kanbanPreview-bx">
                        <div class="draggable-zone dropzoneContainer">
                            <div class="sub-card align-items-center d-flex justify-content-between mb-4">
                                <div>
                                    <h4 class="fs-20 mb-0 font-w600">On Progress(<span class="totalCount">2</span>)</h4>
                                </div>
                                <div class="plus-bx">
                                    <a href="javascript:void(0)"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-sucess">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#09BD3C"></circle>
                                            </svg>
                                            UPDATE
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-success progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-info">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#D653C1"></circle>
                                            </svg>
                                            Video
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-info progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kanbanPreview-bx">
                        <div class="draggable-zone dropzoneContainer">
                            <div class="sub-card align-items-center d-flex justify-content-between mb-4">
                                <div>
                                    <h4 class="fs-20 mb-0 font-w600">Done(<span class="totalCount">3</span>)</h4>
                                </div>
                                <div class="plus-bx">
                                    <a href="javascript:void(0)"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-danger">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#FC2E53"></circle>
                                            </svg>
                                            BUGS FIXING
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-danger progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-danger">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#FC2E53"></circle>
                                            </svg>
                                            BUGS FIXING
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-danger progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card draggable-handle draggable">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="sub-title">
                                            <svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="5" r="5" fill="#FFA7D7"></circle>
                                            </svg>
                                            HTML
                                        </span>
                                        <div class="dropdown">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"></circle>
                                                    <circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black">Create wireframe for landing page phase 1</a></p>
                                    <div class="progress default-progress my-4">
                                        <div class="progress-bar bg-design progress-animated" style="width: 45%; height:10px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-center kanban-user">
                                        <ul class="users col-6">
                                            <li><img src="images/pic11.jpg" alt=""></li>
                                            <li><img src="images/pic22.jpg" alt=""></li>
                                            <li><img src="images/pic33.jpg" alt=""></li>
                                        </ul>
                                        <div class="col-6 d-flex justify-content-end">
                                            <span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Task</h4>
                    <a href="{{ route('task.create', ['idProyek' => $id_proyek]) }}" class="btn btn-primary">Tambah Task</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Task</th>
                                    <th>Status</th>
                                    <th>Total Assignment</th>
                                    <th>Total File</th>
                                    <th>Total Message</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $task->nama_task }}</td>
                                        <td>
                                            <form action="{{ route('task.update', $task->id_task) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <select name="status" class="form-control" onchange="this.form.submit()">
                                                    <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="Ongoing" {{ $task->status == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                                                    <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                    <option value="Revised" {{ $task->status == 'Revised' ? 'selected' : '' }}>Revised</option>
                                                </select>
                                            </form>
                                        </td>
                                        <td>{{ $task->assignment_tasks_count }}</td>
                                        <td>{{ $task->file_tasks_count }}</td>
                                        <td>{{ $task->message_tasks_count }}</td>
                                        <td>{{ $task->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <a href="{{ route('task.edit', $task->id_task) }}" class="btn btn-warning btn-xs">Edit</a>
                                            <form action="{{ route('task.destroy', $task->id_task) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/draggable.js') }}"></script>

@endsection
