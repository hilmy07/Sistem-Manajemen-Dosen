@extends('layout.template_select')
@section('title','Data Dosen')


@section('content')
<br>
<a href="/data_dosen/add" class="btn btn-primary btn-sm">Add Data</a><br>

  @if (session('pesan'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success!</h4>
    {{ session('pesan') }}.
  </div>
  @endif

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->
      <!-- /.box -->

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <!-- <div class="col-md-4">
              <label>Filter</label>
              <select id="filter-filter" class="form-control">
                <option value="">Filter</option>
              </select><br>
              
            </div> -->
          </div>
        
          <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                  <th>Id</th>
                  <th>Gelar Depan</th>
                  <th>Nama Lengkap</th>
                  <th>Gelar Belakang</th>
                  <th>Nama + Gelar</th>
                  <th>NIP</th>
                  <th>Jabatan</th>
                  <th>No Telp</th>
                  <th>Mata Kuliah</th>
                  <th>Fakultas</th>
                  <th>Jurusan</th>
                  <th>Semester</th>
                  <th>Foto Dosen</th>
                  <th>Status</th>
                  <th>Action<th>
                </tr>
            </thead>
            <tbody>
          
                @foreach ($dbdosen as $data)
          
                <tr>
                  <td>{{ $data -> id }}</td>
                  <td>{{ $data -> nama }}</td>
                  <td>{{ $data -> gelar_depan }} {{ $data -> nama }} {{ $data -> gelar_belakang }}</td>
                  <td>{{ $data -> nip }}</td>
                  <td>{{ $data -> gelar_depan }}</td>
                  <td>{{ $data -> gelar_belakang }}</td>
                  <td>{{ $data -> jabatan }}</td>
                  <td>{{ $data -> no_telepon }}</td>
                  <td>
                    {{ $data -> mata_kuliah1 }} <br>
                    {{ $data -> mata_kuliah2 }} <br>
                    {{ $data -> mata_kuliah3 }} <br>
                    {{ $data -> mata_kuliah4 }} <br>
                    {{ $data -> mata_kuliah5 }} <br>
                    {{ $data -> mata_kuliah6 }} <br>
                    {{ $data -> mata_kuliah7 }} <br>
                    {{ $data -> mata_kuliah8 }} <br>
                  </td>
                  <td>{{ $data -> my_fakultas -> nama_fakultas }}</td>
                  <td>{{ $data -> my_jurusan -> nama_jurusan }}</td>
                  <td>{{ $data -> semester }}</td>
                  <td><img src="{{ url('foto_dosen/'.$data->foto_dosen) }}" width="120px"></td>
                  <td>{{ $data -> status }}</td>
                  <td>
                      <a href="/data_dosen/edit{{ $data->id }}" class="btn btn-sm btn-warning">Edit</a>
                  </td>
                  <td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}">
                    Delete
                  </button>
                  </td>
          
                </tr>
          
                @endforeach
          
            </tbody>
            <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Gelar Depan</th>
                  <th>Gelar Belakang</th>
                  <th>Jabatan</th>
                  <th>No Telp</th>
                  <th>Mata Kuliah</th>
                  <th>Fakultas</th>
                  <th>Jurusan</th>
                  <th>Semester</th>
                  <th>Foto Dosen</th>
                  <th>Status</th>
                  <th>Action<th>
                </tr>
            </tfoot>
          </table>
          
          @foreach ($dbdosen as $data)
          <div class="modal modal-danger fade" id="delete{{ $data->id }}">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">{{ $data->nama_dosen}}</h4>
                    </div>
                    <div class="modal-body">
                      <p>Apakah anda yakin ingin menghapus data ini ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                      <a href="/data_dosen/delete/{{ $data->id}}" class="btn btn-outline">Yes</a>
                    </div>
                  </div>
                    <!-- /.modal-content -->
                </div>
                  <!-- /.modal-dialog -->
            </div>
            @endforeach
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <script scr="{{asset('template')}}/https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></script>
  <script scr="{{asset('template')}}/https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script scr="{{asset('template')}}/https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript">

      $(data_dosen).ready(function() {
          $('#example').DataTable( {
              "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
          } );
      } );

</script>
 

    
@endsection