@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ADD Company</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                      <form method="post" action="{{url('store')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="row mb-3">
                              <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                                  @error('name')
                                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="row mb-3">
                              <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>

                                  @error('email')
                                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="row mb-3">
                              <label for="web" class="col-md-4 col-form-label text-md-end">Website</label>

                              <div class="col-md-6">
                                  <input id="web" type="text" class="form-control @error('web') is-invalid @enderror" name="web" value="{{ old('web') }}" autofocus>

                                  @error('web')
                                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="row mb-3">
                              <label for="logo" class="col-md-4 col-form-label text-md-end">Logo</label>

                              <div class="col-md-6">
                                  <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror"
                                         name="logo" value="{{ old('logo') }}" autofocus  accept="image/png, image/jpeg">

                                  @error('logo')
                                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="row mb-0">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                   ADD
                                  </button>
                              </div>
                          </div>

                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
