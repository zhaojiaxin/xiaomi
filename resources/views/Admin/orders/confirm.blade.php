@extends('admin.index')
@section('content')

		 <div class="col-xs-12">
			<h3 class="header smaller lighter blue">订单管理</h3>
			<div class="table-header">
				确认收货
			</div>
			<div class="table-responsive">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">
								<label>
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</th>
							<th>订单号</th>
							<th>下单时间</th>
							<th class="hidden-480">金额</th>
							<th class="hidden-480">订单状态</th>
							<th class="hidden-480">订单详情</th>
							<th>操作</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td class="center">
								<label>
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</td>

							<td>
								<a href="#">100010002010</a>
							</td>
							<td>20160626</td>
							<td class="hidden-480">999.00</td>
							<td>已付款</td>
							<td>小米5 双网通16G 5.5英寸 白色 2.3版本</td>
							<td>
								<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
									<a class="blue" href="#">
										<i class="icon-zoom-in bigger-130"></i>
									</a>

									<a class="green" href="#">
										<i class="icon-pencil bigger-130"></i>
									</a>

									<a class="red" href="#">
										<i class="icon-trash bigger-130"></i>
									</a>
								</div>

								<div class="visible-xs visible-sm hidden-md hidden-lg">
									<div class="inline position-relative">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
											<i class="icon-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
											<li>
												<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
													<span class="blue">
														<i class="icon-zoom-in bigger-120"></i>

													</span>
												</a>
											</li>

											<li>
												<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
													<span class="green">
														<i class="icon-edit bigger-120"></i>
													</span>

												</a>
											</li>


											<li>
												<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
													<span class="red">
														<i class="icon-trash bigger-120"></i>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
@include('admin.page');
@endsection