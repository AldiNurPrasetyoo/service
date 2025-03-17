@foreach($data as $row)    
<form action="" method="post" name="tambah"
    @csrf
    <label for="">Nama Jenis Kendaraan :</label>
    <input type="text" name="jns_kendaraan" id="" value="{{$row->nm_jns_kendaraan}}">
    <input type="submit" name="simpan" value="simpan">

</form>
@endforeach