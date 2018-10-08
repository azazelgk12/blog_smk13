@extends('template')

@section('css')

@endsection

@section('script')

@endsection

@section('content')


<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
             
              </div>

       
           
           
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                	<h3>Organisasi PMI</h3>
                	<br></br>
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Markas</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Pengurus</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">UDD</a>
                        </li>
                      </ul>
                          <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                     <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>



                      <th class="head1 sorting_asc bg-red" width="5%" rowspan="1" colspan="1"style=" width: 20px;">No</th>
                     
                     <th class="head0 sorting bg-red" rowspan="1" colspan="1" style= "width:25%;"><center>Kategori</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=" width:40%;"><center>Organisasi</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=" width: 40%;"><center>Photo</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style="width: 10%;"><center>Tools</center></th>
                         
                         
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                         <td class=" ">1 </td>
                         <td>Markas</td>
                         <td>M</td>
                         <td><img src="{{URL::asset('images/ipm.png ')}}" width="95" height="68"></td>
                       <td>
                         <a href="{{URL::to('/edit_organisasi')}}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i> Edit </a>
                        
                        </tr>

                         
                        
               
                      </tbody>
                    </table>
                  </div>
                        
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>



                      <th class="head1 sorting_asc bg-red" width="5%" rowspan="1" colspan="1"style=" width: 20px;">No</th>
                     
                      <th class="head0 sorting bg-red" rowspan="1" colspan="1" style= "width:25%;"><center>Kategori</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=" width:40%;"><center>Organisasi</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=" width: 40%;"><center>Photo</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style="width: 10%;"><center>Tools</center></th>
                         
                         
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                         <td class=" sorting_1">1 </td>
                         <td>Markas</td>
                         <td>M</td>
                        
                         <td><img src="{{URL::asset('images/ipm.png ')}}" width="95" height="68"></td>
                       <td>
                         <a href="{{URL::to('/edit_organisasi')}}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i> Edit </a>
                       
                        </tr> 
                        </tr>
                      </tbody>
                    </table>
                  </div>
                    
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>



                      <th class="head1 sorting_asc bg-red" width="5%" rowspan="1" colspan="1"style=" width: 20px;">No</th>
                     
                      <th class="head0 sorting bg-red" rowspan="1" colspan="1" style= "width:25%;"><center>Kategori</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=" width:40%;"><center>Organisasi</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=" width: 40%;"><center>Photo</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style="width: 10%;"><center>Tools</center></th>
                         
                         
                        </tr>   
                         
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                         <td class=" sorting_1">1 </td>
                         <td>Markas</td>
                         <td>M</td>
                  
                        <td><img src="{{URL::asset('images/ipm.png ')}}" width="95" height="68"></td>
                       <td>
                         <a href="{{URL::to('/edit_organisasi')}}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i> Edit </a>
                        
                        </tr>

                        
                        </tr>
                      </tbody>
                    </table>
                  </div>
 
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
                          

@endsection