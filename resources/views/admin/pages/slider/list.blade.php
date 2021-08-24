<div class="x_content">
    <div class="table-responsive">
       <table class="table table-striped jambo_table bulk_action">
          <thead>
             <tr class="headings">
                <th class="column-title">#</th>
                <th class="column-title">Slider Info</th>
                <th class="column-title">Trạng thái</th>
                <th class="column-title">Tạo mới</th>
                <th class="column-title">Chỉnh sửa</th>
                <th class="column-title">Hành động</th>
             </tr>
          </thead>
          <tbody>
              @if (count($items) > 0)
              @foreach ($items as $key => $val)
                    @php
                       $name        =$val["name"] ; 
                       $index        =$key +1 ;
                       $description =$val['description'];
                       $link =$val['link'];
                       $image =$val['image'];
                       $status =$val['status'];
                       $created =$val['created'];
                       $created_by =$val['created_by'];
                       $modified =$val['modified'];
                       $modified_by =$val['modified_by'];

                    @endphp                     
                <tr class="odd pointer">
                    <td>{{$index}}</td>
                    <td width="40%">
                    <p><strong>Name:</strong> {{$name}}</p>
                    <p><strong>Description:</strong> {{$description}}</p>
                    <p><strong>Link:</strong>{{$link}}</p>
                    <p><img src="http://proj_news.xyz/images/slider/LWi6hINpXz.jpeg" alt="Ưu đãi học phí" class="zvn-thumb"></p>
                    </td>
                    <td><a href="http://proj_news.xyz/admin123/slider/change-status-active/3" type="button" class="btn btn-round btn-success">Kích hoạt</a></td>
                    <td>
                    <p><i class="fa fa-user"></i> {{$created}}</p>
                    <p><i class="fa fa-clock-o"></i> {{$created_by}}</p>
                    </td>
                    <td>
                    <p><i class="fa fa-user"></i>{{$modified}}</p>
                    <p><i class="fa fa-clock-o"></i>{{$modified_by}}</p>
                    </td>
                    <td class="last">
                    <div class="zvn-box-btn-filter"><a href="http://proj_news.xyz/admin123/slider/form/3" type="button" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                        <i class="fa fa-pencil"></i>
                        </a><a href="http://proj_news.xyz/admin123/slider/delete/3" type="button" class="btn btn-icon btn-danger btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                        <i class="fa fa-trash"></i>
                        </a>
                    </div>
                    </td>
                </tr>
              @endforeach              
              @else                  
                   @include('admin.templates.list_emty',['colspan' => 6])
              @endif
            </tbody>     
       </table>
   </div>   
 </div>
 <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Phân trang
                </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <div class="row">
                    <div class="col-md-6">
                        <p class="m-b-0">Số phần tử trên trang: <b>2</b> trên <span
                                class="label label-success label-pagination">3 trang</span></p>
                        <p class="m-b-0">Hiển thị<b> 1 </b> đến<b> 2</b> trên<b> 6</b> Phần tử</p>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination zvn-pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">«</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">»</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>