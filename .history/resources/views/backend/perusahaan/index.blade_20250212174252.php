@extends('main');


@section('section');
<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
        </ol>
    </div>
    <!-- row -->

    <div class="row">
       
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Exam Toppers</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    
                                    <th><strong>ROLL NO.</strong></th>
                                    <th><strong>NAME</strong></th>
                                    <th><strong>Email</strong></th>
                                    <th><strong>Date</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong></strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td><strong>542</strong></td>
                                    <td><div class="d-flex align-items-center"><img src="images/1.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div></td>
                                    <td>example@example.com	</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> Successful</div></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                            <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                                            <label class="form-check-label" for="customCheckBox3"></label>
                                        </div>
                                    </td>
                                    <td><strong>542</strong></td>
                                    <td><div class="d-flex align-items-center"><img src="images/2.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div></td>
                                    <td>example@example.com	</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-danger me-1"></i> Canceled</div></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                            <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                                            <label class="form-check-label" for="customCheckBox4"></label>
                                        </div>
                                    </td>
                                    <td><strong>542</strong></td>
                                    <td><div class="d-flex align-items-center"><img src="images/3.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div></td>
                                    <td>example@example.com	</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-warning me-1"></i> Pending</div></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     
    </div>
</div>
@endsection