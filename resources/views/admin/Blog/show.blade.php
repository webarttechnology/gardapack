@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="main-content">
        <!-- Page Title Start -->
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-title-wrapper">
                    <div class="page-title-box ad-title-box-use">
                        <h4 class="page-title">Blog Details</h4>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                    <a href="{{ url('admin/blog/add') }}" class="btn btn-primary m-b-5 m-t-5 pull-right"><i class="bx bx-plus"
                            aria-hidden="true"></i>Add New</a>
                </h4>
            </div>
        </div>
        <!-- Table Start -->
        <div class="row">
            <!-- Styled Table Card-->
            
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card table-card">
                    <div class="card-body">
                        <div class="chart-holder">
                            <div class="table-responsive">
                                <table class="table table-styled mb-0">
                                    <thead>
                                        <tr> 
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Sub Heading</th>
                                            <th>Description</th>
                                            <th>Created Date</th>
                                            <th>Updated Date</th>                                                                               
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $blog)

                                    
                                    <tr> 
                                        <td>{{$blog->title}}</td>
                                        <td><img src="{{ asset($blog->image) }}" alt="Your Image" width="100px"></td>  
                                        <td>{{$blog->subheading}}</td>
                                        <td>{!!$blog->description!!}</td>
                                        <td>{{ now()->format('F j, Y') }}</td>
                                        <td>{{ now()->format('F j, Y') }}</td>      
                                        
                                        
                                        <td style="color: black;"><a
                                            href="{{ url ('admin/blog/edit/'.$blog->id)}}" class="btn btn-primary btn-sm">Edit</a> 
                                            
                                            | <a href="{{ url ('admin/blog/delete/'.$blog->id)}}"
                                            onclick="return confirm('Do you really want to delete this data?')" class="btn btn-danger btn-sm">Delete</a>
                                        </td>

                                        {{-- <td class="relative">
                                            <a class="action-btn " href="javascript:void(0); ">
                                                <svg class="default-size " viewBox="0 0 341.333 341.333 ">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M170.667,85.333c23.573,0,42.667-19.093,42.667-42.667C213.333,19.093,194.24,0,170.667,0S128,19.093,128,42.667 C128,66.24,147.093,85.333,170.667,85.333z "></path>
                                                                <path d="M170.667,128C147.093,128,128,147.093,128,170.667s19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 S194.24,128,170.667,128z "></path>
                                                                <path d="M170.667,256C147.093,256,128,275.093,128,298.667c0,23.573,19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 C213.333,275.093,194.24,256,170.667,256z "></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                            <div class="action-option ">
                                                <ul>
                                                    
                                                    <li>
                                                        <a href="{{ url ('admin/blog/edit/'.$blog->id)}} "><i class="far fa-edit mr-2"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url ('admin/blog/delete/'.$blog->id)}}" onclick="return confirm('Are you sure you want to delete this record?')"><i class="far fa-trash-alt mr-2" ></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                
                            </div>
                        </div>
                        <div class="text-right pt-2">
                            <nav class="d-inline-block">
                                {!! $data->links() !!}
                          </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>    
</div>    
</div>  

@endsection