<nav class="navabr navba-expand-lg navbar-light bg-primary">
	<a class="navbar-brand" href="#">Sistem Kepegawaian</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
		aria-expend="false"
		aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul Class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ url('beranda')}}">
						Beranda <span class="sr-only">(current)</span></a>
				</li>
				<li class= "nav-item active">
					<a class="nav-link" href="#">Login</a>
				</li>

			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control = mr-sm-2" type="search"
				placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0"
				type="submit">Search</button>
			</form>
		</div>

		<!-- Search -->

		<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>

		<!-- List Group -->

</nav>
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Daftar Pegawai</a>
      <a class="list-group-item list-group-item-action" id="list-pro-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Daftar Pegawai</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Daftar Prestasi Pegawai</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Logout</a>
    </div>
  </div>
  <!-- <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
</div>
 -->

<!-- <nav class="navbar navbar-dark" style="background-color: #663399;">
	<a class="navbar-brand" href="{{url('home')}}">Sistem Informasi Data Pegawai</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="{{url('home')}}">Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('data')}}">data</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('undangan')}}">Undangan</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
				<a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Login</a>
			</li>
		</ul>
	</div>
</nav>

Modal
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silahkan Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form>
		  <div class="form-group">
			<label for="username">Username</label>
			<input type="username" class="form-control" id="username" placeholder="Enter username">
		  </div>
		  <div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" placeholder="Password">
		  </div>
		  <hr>
		  <button type="submit" class="btn btn-primary">Login</button>
		</form>
      </div>
    </div>
  </div>
</div> -->