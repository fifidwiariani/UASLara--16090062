{{-- File : home.blade.php,disimpan di views/pages. --}}
@extends('template')

@section('main')
<div id='data'>
	<br>
	<br>
	<div class="container">
		<div class="card">
			<div class="card-header">Data Prestasi Pegawai</div>
			<div class="card-body">
				<form>
					  <div class="form-group row">
						<label for="id" class="col-sm-2 control-label">No.Prestasi </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="id" placeholder="Enter No Prestasi">
						</div>
					</div>
					  <div class="form-group row">
						<label for="nip" class="col-sm-2 control-label">NIP</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nip" placeholder="Enter NIP">
						</div>
					</div>
					<div class="form-group row">
						<label for="namapegawai" class="col-sm-2 control-label">Nama Pegawai</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="namapegawai" placeholder="Enter Nama Pegawai">
						</div>
					</div>
					<div class="form-group row">
						<label for="namaprestasi" class="col-sm-2 control-label">Nama Prestasi</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="namaprestasi" placeholder="Enter Nama Prestasi">
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>

		<!-- 
		<br>
		<div class="card">
			<div class="card-header">Data Anak Yatim & Piatu</div>
				<div class="card-body">
					<table class="table table-bordered text-center">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nama</th>
								<th scope="col">Umur</th>
								<th scope="col">Rt</th>
								<th scope="col">Sekolah</th>
								<th scope="col">Jeniskelamin</th>
								<th scope="col">pilihan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>malik</td>
								<td>7thn</td>
								<td>15</td>
								<td>Paud ceria</td>
								<td>lakilaki</td>
								<td>
									<button type="button" class="btn btn-primary btn-sm">Edit</button>
									<button type="button" class="btn btn-secondary btn-sm">Delete</button>
								</td>
							
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>nuhud</td>
								<td>12</td>
								<td>13thn</td>
								<td>Smp ada</td>
								<td>lakilaki</td>
								<td><button type="button" class="btn btn-primary btn-sm">Edit</button>
									<button type="button" class="btn btn-secondary btn-sm">Delete</button>
									</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>ani</td>
								<td>14</td>
								<td>9thn</td>
								<td>Sd pelita</td>
								<td>perempuan</td>
								<td>
								<button type="button" class="btn btn-primary btn-sm">Edit</button>
									<button type="button" class="btn btn-secondary btn-sm">Delete</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
		</div>	
	</div>
</div>
@stop
 -->
@section('footer')
<div id="footer">
	<p>&copy; 2019 | Framework programming poltek tegal</p>	
</div>
@stop