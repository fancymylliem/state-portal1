<div class="row justify-content-center">
<div class="col-lg-7">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Add New Block</h3>
            <div class="class-body">
                @include('errors')
                <form action="{{('/editblock')}}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <select class="form-select" name="dist_name" id="dept" aria-label="select District">
                                    <option selected>select District</option>
                                    @foreach ($dists as $dist)
                                    <option value="{{$dist->dist_id}}">{{$dist->district_name}}</option>  
                                    @endforeach
                                  </select>
                                  <span class="error-message">
                                    @error('depat_name')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                    </div>
                    
                    
                    
                    <table class="table table-bordered" id="dynamicAddRemove">
                        <tr>
                            <th>Block Name</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="addMoreInputFields[0][block]" placeholder="Enter Block name" class="form-control block-name" />
                            </td>
                            <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Block</button></td>
                        </tr>
                    </table>
                    
                    <div class="mt-4 mb-0">
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
