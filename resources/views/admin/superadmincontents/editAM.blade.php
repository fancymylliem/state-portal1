
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit About Meghalaya</h3></div>
                <div class="card-body">
                    @include('errors')
                    <form action="{{('/editaboutmeghalaya')}}" method="POST">
                        @csrf
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputArea" type="text" name="area" placeholder="" required>
                                    <label for="inputArea">Area</label>
                                    <span class="error-message">
                                        @error('area')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPopulation" type="text" name="population" placeholder="" required>
                                    <label for="inputPopulation">Population</label>
                                    <span class="error-message">
                                        @error('population')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputCapital" type="text" name="capital" placeholder="" required>
                                    <label for="inputCapital">Capital</label>
                                    <span class="error-message">
                                        @error('capital')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputLanguage" type="text" name="language" placeholder="" required>
                                    <label for="inputLanguage">Language</label>
                                    <span class="error-message">
                                        @error('language')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputDensity" type="text" name="density" placeholder="" required>
                                    <label for="inputDensity">Density</label>
                                    <span class="error-message">
                                        @error('density')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputLiteracy" type="text" name="literacy" placeholder="" required>
                                    <label for="inputLiteracy">Literacy Rate</label>
                                    <span class="error-message">
                                        @error('literacy')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                                <div class="form-floating mb-6 mb-md-0">
                                    <textarea class="form-control" type="text" name="about" id="" cols="60" rows="10"></textarea>
                                    <label for="inputAbout">About Meghalaya</label>
                                    <span class="error-message">
                                        @error('about')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                        </div>
                        
                        <div class="mt-4 mb-0">
                            <button class="btn btn-primary btn-block" type="submit">Save</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"></div>
                </div>
            </div>
        </div>
    </div>
