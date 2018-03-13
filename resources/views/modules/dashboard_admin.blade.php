@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')

    <div class="page-header">
        <div class="page-header-title">
            <h4>Project Dashboard</h4>
        </div>
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Project</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="page-body">
        <div class="row">
            <!-- Documents card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card client-blocks dark-primary-border">
                    <div class="card-block">
                        <h5>New Documents</h5>
                        <ul>
                            <li>
                                <i class="icofont icofont-document-folder"></i>
                            </li>
                            <li class="text-right">
                                133
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Documents card end -->
            <!-- New clients card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card client-blocks warning-border">
                    <div class="card-block">
                        <h5>New Clients</h5>
                        <ul>
                            <li>
                                <i class="icofont icofont-ui-user-group text-warning"></i>
                            </li>
                            <li class="text-right text-warning">
                                23
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- New clients card end -->
            <!-- New files card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card client-blocks success-border">
                    <div class="card-block">
                        <h5>New Files</h5>
                        <ul>
                            <li>
                                <i class="icofont icofont-files text-success"></i>
                            </li>
                            <li class="text-right text-success">
                                240
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- New files card end -->
            <!-- Open Project card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card client-blocks">
                    <div class="card-block">
                        <h5>Open Projects</h5>
                        <ul>
                            <li>
                                <i class="icofont icofont-ui-folder text-primary"></i>
                            </li>
                            <li class="text-right text-primary">
                                169
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Open Project card end -->
            <!-- Todo card start -->
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Create Your Daily Task</h5>
                        <label class="label label-success">Today</label>
                    </div>
                    <div class="card-block">
                        <div class="input-group input-group-button">
                            <input type="text" class="form-control add_task_todo" placeholder="Create your task list" name="task-insert">
                            <span class="input-group-addon" id="basic-addon1">
                              <button id="add-btn" class="btn btn-primary">Add Task</button>
                          </span>
                      </div>
                      <div class="new-task">
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                    <span>Hey.. Attach your new file</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete" ></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                    <span>New Attachment has error</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                    <span>Have to submit early</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                    <span>10 pages has to be completed</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                    <span>Navigation working</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                    <span>Files submited successfully</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary">
                                <label class="check-task">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                    <span>Work Complete Before Time</span>
                                </label>
                            </div>
                            <div class="f-right">
                                <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Todo card end -->
        <!-- Horizontal Timeline start -->
	    <div class="col-md-12 col-xl-8">
	        <div class="card">
	            <div class="card-header">
	                <h5>Steps To Follow</h5>
	            </div>
	            <div class="card-block">
	                <div class="cd-horizontal-timeline">
	                    <div class="timeline">
	                        <div class="events-wrapper">
	                            <div class="events">
	                                <ol>
	                                    <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
	                                    <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
	                                    <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
	                                    <li><a href="#0" data-date="20/05/2014">20 May</a></li>
	                                    <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
	                                    <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
	                                    <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
	                                    <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
	                                    <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
	                                    <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
	                                    <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
	                                </ol>
	                                <span class="filling-line" aria-hidden="true"></span>
	                            </div>
	                            <!-- .events -->
	                        </div>
	                        <!-- .events-wrapper -->
	                        <ul class="cd-timeline-navigation">
	                            <li><a href="#0" class="prev inactive">Prev</a></li>
	                            <li><a href="#0" class="next">Next</a></li>
	                        </ul>
	                        <!-- .cd-timeline-navigation -->
	                    </div>
	                    <!-- .timeline -->
	                    <div class="events-content">
	                        <ol>
	                            <li class="selected" data-date="16/01/2014">
	                                <h2>Horizontal Timeline</h2>
	                                <em>January 16th, 2014</em>
	                                <p class="m-b-0">
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
	                                </p>
	                                <div class="m-t-20 d-timeline-btn">
	                                    <button class="btn btn-danger">Read More</button>
	                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
	                                </div>
	                            </li>
	                            <li data-date="28/02/2014">
	                                <h2>Event title here</h2>
	                                <em>February 28th, 2014</em>
	                                <p class="m-b-0">
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
	                                </p>
	                                <div class="m-t-20 d-timeline-btn">
	                                    <button class="btn btn-danger">Read More</button>
	                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
	                                </div>
	                            </li>
	                            <li data-date="20/04/2014">
	                                <h2>Event title here</h2>
	                                <em>March 20th, 2014</em>
	                                <p class="m-b-0">
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
	                                </p>
	                                <div class="m-t-20 d-timeline-btn">
	                                    <button class="btn btn-danger">Read More</button>
	                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
	                                </div>
	                            </li>
	                            <li data-date="20/05/2014">
	                                <h2>Event title here</h2>
	                                <em>May 20th, 2014</em>
	                                <p class="m-b-0">
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
	                                </p>
	                                <div class="m-t-20 d-timeline-btn">
	                                    <button class="btn btn-danger">Read More</button>
	                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
	                                </div>
	                            </li>
	                            <li data-date="09/07/2014">
	                                <h2>Event title here</h2>
	                                <em>July 9th, 2014</em>
	                                <p class="m-b-0">
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
	                                </p>
	                                <div class="m-t-20 d-timeline-btn">
	                                    <button class="btn btn-danger">Read More</button>
	                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
	                                </div>
	                            </li>
	                            <li data-date="30/08/2014">
	                                <h2>Event title here</h2>
	                                <em>August 30th, 2014</em>
	                                <p class="m-b-0">
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
	                                </p>
	                                <div class="m-t-20 d-timeline-btn">
	                                    <button class="btn btn-danger">Read More</button>
	                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
	                                </div>
	                            </li>
	                            <li data-date="15/09/2014">
	                                <h2>Event title here</h2>
	                                <em>September 15th, 2014</em>
	                                <p class="m-b-0">
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
	                                </p>
	                                <div class="m-t-20 d-timeline-btn">
	                                    <button class="btn btn-danger">Read More</button>
	                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
	                                </div>
	                            </li>
	                            <li data-date="01/11/2014">
	                                <h2>Event title here</h2>
	                                <em>November 1st, 2014</em>
	                                <p class="m-b-0">
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
	                                </p>
	                                <div class="m-t-20 d-timeline-btn">
	                                    <button class="btn btn-danger">Read More</button>
	                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
	                                </div>
	                            </li>
	                            <li data-date="10/12/2014">
	                                <h2>Event title here</h2>
	                                <em>December 10th, 2014</em>
	                                <p class="m-b-0">
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
	                                </p>
	                                <div class="m-t-20 d-timeline-btn">
	                                    <button class="btn btn-danger">Read More</button>
	                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
	                                </div>
	                            </li>
	                            <li data-date="19/01/2015">
	                                <h2>Event title here</h2>
	                                <em>January 19th, 2015</em>
	                                <p class="m-b-0">
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
	                                </p>
	                                <div class="m-t-20 d-timeline-btn">
	                                    <button class="btn btn-danger">Read More</button>
	                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
	                                </div>
	                            </li>
	                            <li data-date="03/03/2015">
	                                <h2>Event title here</h2>
	                                <em>March 3rd, 2015</em>
	                                <p class="m-b-0">
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
	                                </p>
	                                <div class="m-t-20 d-timeline-btn">
	                                    <button class="btn btn-danger">Read More</button>
	                                    <button class="btn btn-primary f-right"><i class="icofont icofont-plus m-r-0"></i></button>
	                                </div>
	                            </li>
	                        </ol>
	                    </div>
	                    <!-- .events-content -->
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- Horizontal Timeline end -->
    </div>
    <!-- User chat box end -->

@endsection