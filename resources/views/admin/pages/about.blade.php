@extends('layouts.admin')
@section('content_admin')
  @extends('layouts._sidebar')
  @section('content')
    @if(session()->has('msg'))
      <b style="color: green">{{session()->get('msg')}}</b>
      <br>
  @endif
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Submit update ')}}{{ $com }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('admin.about.update',['id'=>$about[0]['id']])}}" enctype="multipart/form-data">
                        @csrf
                        <?php 
                          if (!empty($about[0]['images'])) {
                            $image = $about[0]['images'];
                            $alt = "";
                          }else{
                            $image = "images\avatar/no-avatar.jpg";
                            $alt = "no-images";
                          }

                        ?>

                        <div class="form-group row">
                          <label for="images" class="col-md-4 col-form-label text-md-right ">{{ __('Old_images') }}</label>
                          <div class="col-md-4 col-form-label text-md-right border">
                          <img src="{{asset( $image) }}" height="150px" width="150px" title="{{ $alt }}">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                          <label for="images" class="col-md-4 col-form-label text-md-right">{{ __('Images') }}</label>
                          <div class="col-md-6">
                              <input id="images" type="file" name="images" accept="image/*" value="{{ $about[0]['images'] }}">
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }} {{ $list }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $about[0]['name'] }}" autocomplete="name" placeholder="{{ $about[0]['name'] }}" autofocus required>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $validator }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }} {{ $com }}</label>
                            <div class="col-md-6">
                                <textarea id="" type="text" class="form-control @error('content') is-invalid @enderror" rows="5" name="content" value="{{ $about[0]['content'] }}" >{{ $about[0]['content'] }}</textarea>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
@endsection