@extends('layouts.app_master_admin')
@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Kiểm xuất kho 30 ngày trong tháng</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="">  Xuất kho </a></li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				{{-- <div class="box-title">
					<form class="form-inline">
						<input type="text" class="form-control" value="{{ Request::get('id') }}" name="id" placeholder="ID">
						<input type="text" class="form-control" value="{{ Request::get('name') }}" name="name" placeholder="Name ...">
						<button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Search</button>
						<button type="submit" name="export" value="true" class="btn btn-info">
							<i class="fa fa-save"></i> Export
						</button>
					</form>
				</div> --}}
				<div class="box-body">
					<div class="col-md-12">
						<table class="table">
							<tbody>
							<tr>
								<th>Ngày</th>
								<th>Số lượng</th>
								<th>Tổng tiền</th>
							</tr>

							</tbody>
							@if (isset($inventoryExport))
								@foreach($inventoryExport as $item)
									<tr>
										<td>{{ $item['day'] }}</td>
										<td>{{ $item['quantity'] }}</td>
										<td>{{ number_format($item['money'],0,',','.') }} VNĐ</td>
									</tr>
								@endforeach
							@endif
						</table>
					</div>
				</div>
			</div>
			<!-- /.box -->
		</div>
	</section>
	<!-- /.content -->
@stop