Key Contacts
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        
                            <div class="row">
                                <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add New Contact</h3></div>
                                <div class="col-md-2"><a href="viewcontact" class="btn btn-primary">View List</a></div>
                            </div>
                        
                    </div>
                    <div class="card-body">
                        @include('errors')

                        <form action="{{('/addnewcontact')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputName" name="name" type="text" placeholder="Enter the Name" />
                                <label for="inputName">Name</label>
                                <span>
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputDepartment" name="department" type="text" placeholder="Enter the respective Department" />
                                    <label for="inputDepartment">Department</label>
                                    <span>
                                         @error('department')
                                            {{$message}}
                                        @enderror
                                    </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputDesignation" name="designation" type="text" placeholder="Enter the respective Designation" />
                                    <label for="inputDesignation">Designation</label>
                                    <span>
                                         @error('designation')
                                            {{$message}}
                                        @enderror
                                    </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputContactNo" name="contact_no" type="text" placeholder="" />
                                <label for="inputContactNo">Contact Number</label>
                                <span>
                                    @error('contact_no')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" name="email" type="text" placeholder="" />
                                <label for="inputEmail">Email</label>
                                <span>
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            
                            
            
                            {{-- <div class="form-floating mb-3">
                                <input class="form-control" id="inputpdf" name="noti_pdf" type="file" placeholder="Upload PDF File" />
                                <label for="inputpdf">Upload PDF</label>
                                <span>
                                    @error('noti_pdf')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                             --}}
                            
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Add</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        {{-- <div class="small"><a href="">Have an account? Go to login</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>