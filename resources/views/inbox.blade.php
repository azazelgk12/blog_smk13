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
					<div class="x_content">
					<h2>Tentang Kami</h2>
					<p align ="right">Search :<input type="text"></p>
					<div class="clearfix"> </div>
					<table id="datatable" class="table table-striped table-bordered">  
  					<div class="table-responsive">

					<tr>
					<th class="head1 sorting_asc bg-red" width="5%" rowspan="1" colspan="1" style="width: 20px;"><center>No.</center>
					</th>

					<th class="head0 sorting_asc bg-red" rowspan="1" colspan="1" style=" width: 40%;"><center>Nama</center></th>

					<th class="head1 sorting_asc bg-red" rowspan="1" colspan="1" style=" width: 40%;"><center>Isi</center></th>

					<th class="head0 sorting bg-red"  rowspan="1" colspan="1" style="width:25%;"><center>Kategori</center></th>

					<th class="center bg-red" rowspan="1" colspan="1" style=" width: 25%;"><center>Photo</center></th>

					<th class="head1 sorting bg-red"  rowspan="1" colspan="1" style=" width:25%;"><center>Tools</center></th>


						</tr>
						<tr>
                         <td>1</td>
                         <td>Markas</td>
                         <td>Mdss</td>
                         <td>Mdss</td>
                     	 <td><img src="{{URL::asset('images/ipm.png ')}}" width="95" height="68"></td>
                     	 <td>
                         <a href="{{URL::to('/edit_tentang')}}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i> Edit </a>
                         
                     </td>
                         </tr>

                        <tr>
                         <tr>
                         <td class=" sorting_1">1</td>
                         <td>Markas</td>
                         <td>Mdss</td>
                         <td>Mdss</td>
                         <td><img src="{{URL::asset('images/ipm.png')}} " width="95" height="68"></td>
                     	 <td>
                        <a href="{{URL::to('/edit_tentang')}}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i> Edit </a>
                       
                         
             </td>
                         </tr>

                         <tr>
                	<th class="bg-red" rowspan="12" colspan="6"></th>


                         </tr>
                   
                   
                    </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>



						    </div>
						     </table>
							   </div>
								</table>
								   </div>
									 </div>
									   </div>
									     </div>

@endsection

