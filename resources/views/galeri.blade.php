@extends('template')

@section('css')

@endsection

@section('script')

@endsection

@section('content')

 <!-- page content -->
          <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
             
              </div>

       
           
           
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>



                      <th class="head1 sorting_asc bg-red" width="5%" rowspan="1" colspan="1" style=width: 20px;">No.</th>
                     
                      <th class="head0 sorting bg-red" rowspan="1" colspan="1" style=width: 98px;">Judul</th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;">Photo</th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;">Tools</th>
                         
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                         <td class=" sorting_1">1 </td>
                         <td>Markas</td>
                         <td><img src="../assets/images/files/about/pengurus.jpg" width="95" height="68"></td>
                         <td>
                         <a href="{{URL::to('/edit_galeri')}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                               </tr>

                         <tr>
                         <td class=" sorting_1">1 </td>
                         <td>Markas</td>
                         <td><img src="../assets/images/files/about/pengurus.jpg" width="95" height="68"></td>
                         <td>
                        
                         <a href="{{URL::to('/edit_galeri')}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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



             
        <!-- /page content -->



<!-- Batas edit konten -->
            

              

              
@endsection