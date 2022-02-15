@extends('layouts.main')

@section('container')

<form>
  <div class="title-top mb-5">
     <h2 class="fw-bold">Contacs Us</h2>
</div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="Nama">
    <label for="inputname">Nama</label>
  </div>
  
  <div class="form floating mb-3">
    <input type="email" class="form-control" id="inputemail" placeholder="Nama">
    <label for="inputemail" class="form-label" >Email</label>
  </div>

  <div class="form floating mb-3">
    <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="floatingTextarea2" >Pesan</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

