@extends('layouts.app')

@section('content')
<div class="content-wrapper">
      <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-9 col-12">
                    <div class="row">

                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body py-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="text-fade">Project</h5>
                                            <h2 class="font-weight-500 mb-0">15</h2>
                                        </div>
                                        <div>
                                            <div id="revenue1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body py-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="text-fade">Representative</h5>
                                            <h2 class="font-weight-500 mb-0">110</h2>
                                        </div>
                                        <div>
                                            <div id="revenue2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body py-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="text-fade">Client</h5>
                                            <h2 class="font-weight-500 mb-0">03.1k</h2>
                                        </div>
                                        <div>
                                            <div id="revenue3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xxxl-8 col-xl-7 col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Projects Status</h4>
                                    <ul class="box-controls pull-right d-md-flex d-none">
                                      <li class="dropdown">
                                        <button class="btn btn-primary px-10 " data-toggle="dropdown" href="#">View List</button>
                                      </li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div id="active_jobs"></div>
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-xxxl-4 col-xl-5 col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Total Summary </h4>
                                </div>
                                <div class="box-body">
                                    <div class="d-flex w-p100 rounded100 overflow-hidden">
                                        <div class="bg-danger h-10" style="width: 8%;"></div>
                                        <div class="bg-warning h-10" style="width: 12%;"></div>
                                        <div class="bg-success h-10" style="width: 22%;"></div>
                                        <div class="bg-info h-10" style="width: 58%;"></div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover media-list-divided">
                                        <a class="media media-single rounded-0" href="#">
                                          <span class="badge badge-xl badge-dot badge-info"></span>
                                          <span class="title">Total Projects </span>
                                          <span class="badge badge-pill badge-info-light">58%</span>
                                        </a>

                                        <a class="media media-single rounded-0" href="#">
                                          <span class="badge badge-xl badge-dot badge-success"></span>
                                          <span class="title">Inprogress Projects</span>
                                          <span class="badge badge-pill badge-success-light">22%</span>
                                        </a>

                                        <a class="media media-single rounded-0" href="#">
                                          <span class="badge badge-xl badge-dot badge-warning"></span>
                                          <span class="title">Timeout Projects</span>
                                          <span class="badge badge-pill badge-warning-light">12%</span>
                                        </a>

                                        <a class="media media-single rounded-0" href="#">
                                          <span class="badge badge-xl badge-dot badge-danger"></span>
                                          <span class="title">Completed Projects</span>
                                          <span class="badge badge-pill badge-danger-light">08%</span>
                                        </a>


                                        <a class="media media-single rounded-0" href="#">
                                          <span class="badge badge-xl badge-dot badge-info"></span>
                                          <span class="title">Total Tasks</span>
                                          <span class="badge badge-pill badge-info-light">58%</span>
                                        </a>

                                        <a class="media media-single rounded-0" href="#">
                                          <span class="badge badge-xl badge-dot badge-success"></span>
                                          <span class="title">Doing Tasks</span>
                                          <span class="badge badge-pill badge-success-light">22%</span>
                                        </a>

                                        <a class="media media-single rounded-0" href="#">
                                          <span class="badge badge-xl badge-dot badge-warning"></span>
                                          <span class="title">Timeout Tasks</span>
                                          <span class="badge badge-pill badge-warning-light">12%</span>
                                        </a>

                                    


                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>              
                <div class="col-xl-3 col-12">
                    <div class="box">
                        <div class="box-body">                          
                            <div class="box no-shadow">
                                <div class="box-body px-0 pt-0">
                                    <div id="calendar" class="dask evt-cal min-h-350"></div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            
            
            
            </div>
        </section>
        <!-- /.content -->
      </div>
</div>
@endsection
