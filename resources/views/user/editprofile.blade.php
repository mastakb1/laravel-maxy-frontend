@extends('layouts.main')
@section('content')  
<section id="profile" class="profile">
</section>
        <!-- box section -->
    <section id="box" class="box-profile">
        <div class="container">
            <div class="row justify-content-center position-flex">
                <div class="col-md-10 position-flex">
                            <div class="card-box p-5 position-flex">
                                <div class="row text-center">
                                   <h3>Edit Profile</h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="img-profile">
                                                <img src="/img/instructor1.png" alt="">
                                            </div>
                                            <div class="name">
                                                <p>Nama Pengguna</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 text-start mt-5">
                                        <form class="row g-3">
                                            <div class="col-md-6">
                                                <label for="inputname" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="inputname" placeholder="Masukkan Nama Anda">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputemail" placeholder="name@example.com">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phoneInput" class="form-label">Phone Number</label>
                                                <input type="tel" class="form-control" id="phoneInput">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputCity" class="form-label">City</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputState" class="form-label">Province</label>
                                                <select id="inputState" class="form-select">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputCountry" class="form-label">Country</label>
                                                <input type="text" class="form-control" id="inputCountry">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputZip" class="form-label">Postal Code</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="button-secondary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </section>
@stop