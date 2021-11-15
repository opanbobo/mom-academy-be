@extends('layouts.app')
@section('content')
        <main class="edit-profile">
            <div class="card">
                <div class="card-body">
                    <div class="title-area">
                        <h1>Profile</h1>
                        <p>Complete Your Profile</p>
                    </div>
                    <div class="divider"></div>
                    <div class="content">
                        <h3>Information</h3>
                        <form id="edit-profil-form" method="POST" action="#">
                            <div class="row">
                                <div class="col col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" name="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="employee">Status Employee</label>
                                        <i class="fas fa-chevron-down"></i>
                                        <select class="form-control selection" id="employee" name="employee">
                                            <option>Permanent</option>
                                            <option>Intern</option>
                                            <option>Freelance</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullname">Full Name</label>
                                        <input type="text" name="fullname" class="form-control" id="fullname">
                                    </div>
                                </div>
                                <div class="col col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="location">Office Location</label>
                                        <i class="fas fa-chevron-down"></i>
                                        <select class="form-control selection" id="location" name="location">
                                            <option>Jakarta - Pasaraya</option>
                                            <option>Jakarta - Slipi</option>
                                            <option>Depok - Cinere</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="division">Division / Business Section</label>
                                        <i class="fas fa-chevron-down"></i>
                                        <select class="form-control selection" id="division" name="division">
                                            <option>Digital Product</option>
                                            <option>Analog Product</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="position">Position</label>
                                        <i class="fas fa-chevron-down"></i>
                                        <select class="form-control selection" id="position" name="position">
                                            <option>Staff</option>
                                            <option>Supervisor</option>
                                            <option>Manager</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="company">Company / Entity</label>
                                        <i class="fas fa-chevron-down"></i>
                                        <select class="form-control selection" id="company" name="company">
                                            <option>Aplikasi Karya Anak Bangsa</option>
                                            <option>Aplikasi Karya Anak Negeri</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="divider"></div>

                    <div class="content">
                        <h3>Hierarchy Leader</h3>
                        <form id="edit-hierarchy-form" method="POST" action="#">
                            <div class="row">
                                <div class="col col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="email">SPV Email</label>
                                        <input type="email" name="spv_email" class="form-control" id="spv_email">
                                    </div>
                                </div>
                                <div class="col col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="email">VP Email</label>
                                        <input type="email" name="vp_email" class="form-control" id="vp_email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="email">Manager Email</label>
                                        <input type="email" name="manager_email" class="form-control" id="manager_email">
                                    </div>
                                </div>
                                <div class="col col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="email">Supervisor Email</label>
                                        <input type="email" name="supervisor_email" class="form-control" id="supervisor_email">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="divider"></div>

                    <div id="submitForm" class="btn btn-success btn-block">Submit</div>
                </div>
            </div>
        </main>
@stop