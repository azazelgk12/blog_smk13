@extends('template')

@section('css')
<style type="text/css">
  #pmi{
    color: #bf1515;
  } 
</style>

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
                   
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>



                      <th class="head1 sorting_asc bg-red">Kategori</th>
                     
                      <th class="head0 sorting bg-red" rowspan="1" colspan="1" style=width: 98px;">Alamat</th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;">Phone</th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;">Fax</th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;">Email</th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;">Facebook</th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;">Twiter</th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;">Google+</th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;">Tools</th>
                         
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                         <td class=" sorting_1">jsnsnc</td>
                         <td>Markas</td>
                         <td>Mdss</td>
                         <td>kdasdm</td>
                         <td>121323</td>
                         <td>Mdss</td>
                         <td>kdasdm</td>
                         <td>121323</td>
                       <td>
                         <a href="{{URL::to('/edit_kotak')}}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i> Edit </a>
                         
                        </tr>

                         <tr>
                         <td class=" sorting_1">hdsdb </td>
                         <td>Markas</td>
                         <td>Mdss</td>
                         <td>kdasdm</td>
                         <td>121323</td>
                         <td>Mdss</td>
                         <td>kdasdm</td>
                         <td>121323</td>
                         <td>
                         <a href="{{URL::to('/edit_kotak')}}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i> Edit </a>
                         
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



	

            <!-- Batas edit konten -->
            

              

              
@endsection