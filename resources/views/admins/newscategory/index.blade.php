@extends('layouts.admin')

@section('main')

<div class="row">
	<div cslass="col-xs-12 col-md-12">
	    <div class="widget">
	        <div class="widget-header ">
	            <span class="widget-caption">Danh sách news categor</span>
	            <div class="widget-buttons">
	                <a href="#" data-toggle="maximize">
	                    <i class="fa fa-expand"></i>
	                </a>
	                <a href="#" data-toggle="collapse">
	                    <i class="fa fa-minus"></i>
	                </a>
	                <a href="#" data-toggle="dispose">
	                    <i class="fa fa-times"></i>
	                </a>
	            </div>
	        </div>
	        <div class="widget-body">
	            <table class="table table-striped table-hover table-bordered" id="editabledatatable">
	                <thead>
	                    <tr role="row">
	                        <th>
	                            Username
	                        </th>
	                        <th>
	                            Full Name
	                        </th>
	                        <th>
	                            Points
	                        </th>
	                        <th>
	                            Notes
	                        </th>
	                        <th>

	                        </th>
	                    </tr>
	                </thead>

	                <tbody>
	                    <tr>
	                        <td>alex</td>
	                        <td>Alex Nilson</td>
	                        <td>1234</td>
	                        <td class="center ">power user</td>
	                        <td>
	                            <a href="#" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
	                            <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            gist124
	                        </td>
	                        <td>
	                            Nick Roberts
	                        </td>
	                        <td>
	                            62
	                        </td>
	                        <td class="center ">
	                            new user
	                        </td>
	                        <td>
	                            <a href="#" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
	                            <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            goldweb
	                        </td>
	                        <td>
	                            Sergio Jackson
	                        </td>
	                        <td>
	                            132
	                        </td>
	                        <td class="center ">
	                            elite user
	                        </td>
	                        <td>
	                            <a href="#" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
	                            <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            lisa
	                        </td>
	                        <td>
	                            Lisa Wong
	                        </td>
	                        <td>
	                            434
	                        </td>
	                        <td class="center ">
	                            new user
	                        </td>
	                        <td>
	                            <a href="#" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
	                            <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            nick12
	                        </td>
	                        <td>
	                            Nick Roberts
	                        </td>
	                        <td>
	                            232
	                        </td>
	                        <td class="center ">
	                            power user
	                        </td>
	                        <td>
	                            <a href="#" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
	                            <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            webriver
	                        </td>
	                        <td>
	                            Antonio Sanches
	                        </td>
	                        <td>
	                            462
	                        </td>
	                        <td class="center ">
	                            new user
	                        </td>
	                        <td>
	                            <a href="#" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
	                            <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
	                        </td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
</div>

@endsection