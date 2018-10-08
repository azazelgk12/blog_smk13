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
  <div class="clearfix"> </div>
<table id="datatable" class="table table-striped table-bordered">  
  <div class="table-responsive">

<tr>
<th class="head1 sorting_asc bg-red" width="5%" rowspan="1" colspan="1" style= "width: 20px;"><center>No</center></th>

<th class="head0 sorting_asc bg-red" rowspan="1" colspan="1" style="width: 111px;"><center>Nama</center></th>

<th class="head1 sorting_asc bg-red" rowspan="1" colspan="1" style=" width: 355px;"><center>Isi</center></th>

<th class="head0 sorting bg-red" width="11%" rowspan="1" colspan="1" style="width: 88px;"><center>Photo</center></th>

<th class="head1 sorting bg-red" width="10%" rowspan="1" colspan="1" style="width: 52px;"><center>Tools</center></th>


</tr>
 <tr>
                         <td class=" sorting_1">1</td>
                         <td>Markas</td>
                         <td>Mdss</td>
                         
                     
                         <td><img src="../assets/images/files/about/pengurus.jpg" width="95" height="68"></td>
                         <td>
                         <a href="{{URL::to('/edit_ketentuandonor')}}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i> Edit </a>

                         </tr>

                        <tr>
                         <td class=" sorting_1">2</td>
                         <td>Markas</td>
                         <td>Mdss</td>
                         
                   
                         <td><img src="../assets/images/files/about/pengurus.jpg" width="95" height="68"></td>
                         <td>
                         <a href="{{URL::to('/edit_ketentuandonor')}}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i> Edit </a>
                        
                         </tr>


</div>
</table>
</div>
</div>
</div>
</div>

@endsection

