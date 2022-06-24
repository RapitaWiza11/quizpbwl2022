@extends('layouts.app') 

 @section('content') 
 
 <div class="container"> 
 
 <h3>Daftar Pelanggan</h3> 
 <a class="btn btn-danger btn-sm float-end" href="{{ url('pelanggan/create') }}">Tambah Data</a>
 
 <table class="table table-danger"> 
 <tr> 
 <td>NO</td> 
 <td>NO PELANGGAN</td> 
 <td>NAMA</td> 
 <td>ALAMAT</td>
 <td>NO HP</td>
 <td>NO KTP</td>
 <td>NO SERI</td>
 <td>NO METERAN</td>
 <td>Edit</td>
 <td>Delete</td>
 </tr> 
 @foreach($rows as $row) 
 <tr class="table-info"> 
 <td>{{ $row->pel_id }}</td> 
 <td>{{ $row->pel_no }}</td> 
 <td>{{ $row->pel_nama }}</td> 
 <td>{{ $row->pel_alamat }}</td> 
 <td>{{ $row->pel_hp }}</td> 
 <td>{{ $row->pel_ktp }}</td>
 <td>{{ $row->pel_seri }}</td>
 <td>{{ $row->pel_meteran }}</td>
 <td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}"><button type="button" class="btn btn-success">Edit</button></a></td>
 <td><form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
@method('DELETE')
@csrf
<button type="button" class="btn btn-success">Hapus</form>
</td>
 </tr> 
 @endforeach 
 </table> 
</div> 
 
@endsection 