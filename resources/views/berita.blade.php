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
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">View</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Insert</a>
                        </li>
                      
                      </ul>
                          <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                     <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>



                      <th class="head1 sorting_asc bg-red" width="5%" rowspan="1" colspan="1"style=" width: 20px;">No</th>
                     
                      <th class="head0 sorting bg-red" rowspan="1" colspan="1" style=width: 98px;"><center>Judul</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;"><center>Isi</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;"><center>Post</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;"><center>Tanggal</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;"><center>Photo</center></th>
                      <th class="head1 sorting bg-red" rowspan="1" colspan="1" style=width: 67px;"><center>Tools</center></th>
                         
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                         <td class=" sorting_1">1 </td>
                         <td>Markas</td>
                         <td>M</td>
                         <td>kdasdm</td>
                         <td>121323</td>
                         <td><img src="{{URL::asset('images/ipm.png ')}}" width="95" height="68"></td>
                       <td>
                         <a href="{{URL::to('/edit_berita')}}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i> Edit </a>
                        
                        </tr>

                         <tr>
                         <td class=" sorting_1">1 </td>
                         <td>Markas</td>
                         <td>M</td>
                         <td>kdasdm</td>
                         <td>121323</td>
                         <td><img src="{{URL::asset('images/ipm.png ')}}" width="95" height="68"></td>
                       <td>
                         <a href="{{URL::to('/edit_berita')}}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-pencil"></i> Edit </a>
                     
                        </tr>
                        
                        </tr>
                      </tbody>
                    </table>
                  </div>
                        
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="clearfix"></div>
<div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <p>
                        <label>Judul  :</label>
                      <span class="field"><input type="text" name="txttittle" id="" class="" placeholder="Lainnya"></span>
                      </p>
                      </div>



 <div class="x_content">
                  <div id="alerts"></div>
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li>
                          <a data-edit="fontSize 5">
                            <p style=font-size:17px">Huge</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 3">
                            <p style=font-size:14px">Normal</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 1">
                            <p style=font-size:11px">Small</p>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                      <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                      <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                      <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                      <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                      <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                      <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                      <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                      <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                      <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                      <div class="dropdown-menu input-append">
                        <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                        <button class="btn" type="button">Add</button>
                      </div>
                      <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                     
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                      <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                    </div>
                  </div>

                  <div id="editor-one" class="editor-wrapper"></div>

                  <textarea name="descr" id="descr" style=display:none;"></textarea>
                  
                  <br />
          <img src="../assets/images/files/about/1.php.jpg" width="118" height="78">
                  <br></br>

                    <span class="field"> <input type="file" class="input" size="50" name="files"></span>
                    <br></br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
 </form>
     
@endsection