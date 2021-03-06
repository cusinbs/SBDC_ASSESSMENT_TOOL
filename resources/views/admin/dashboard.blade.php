@extends('layouts.layout')

@section('title')
    SBDC Assessment Tool
@endsection

@section('content')
    <center><h1>SBDC Assessment Tool</h1></center>
    <br><br>
    <div class="row">
        <div class="col-6" >
            <a href="">
                <div class="col-12 grid-item">
                    <div class="row">
                        <div class="col-sm-3 custom-border-right">
                            <img src="/img/dueProcess.png" class="img-fluid dashboard-logo">
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="grid-item-title">User Management</h3>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="p-dashboard">Open Cases: </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="p-dashboard">Closed Cases: </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="p-dashboard">Extended Cases: </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="p-dashboard">Expedited Cases: </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 d-none d-lg-block">
                            <img src="/img/arrow.png" class="img-arrow">
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-6" >
            <a href="">
                <div class="col-12 grid-item">
                    <div class="row">
                        <div class="col-sm-3 custom-border-right">
                            <img src="/img/complaint.png" class="img-fluid dashboard-logo">
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="grid-item-title">Assessments Management</h3>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="p-dashboard">Open Cases: </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="p-dashboard">Closed Cases: </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="p-dashboard">Extended Cases: </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="p-dashboard">Expedited Cases: </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 d-none d-lg-block">
                            <img src="/img/arrow.png" class="img-arrow">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
    </div>
    


    </div>
@endsection