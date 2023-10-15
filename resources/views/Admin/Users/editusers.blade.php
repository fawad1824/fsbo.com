@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="{{ url('addCreateUser') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" required name="name" id="name" value="{{ $user->name }}"
                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required
                        autocomplete="name" autofocus>
                    <input hidden type="text" required name="id" id="ud" value="{{ $user->id }}"
                        class="form-control">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" required name="email" id="email" value="{{ $user->email }}"
                        class="form-control
                        @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">phone</label>
                    <input type="number" name="phone" id="phone" value="{{ $user->phone }}"
                        class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required
                        autocomplete="phone" autofocus>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" autocomplete="password" autofocus>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" name="address" id="address" value="{{ $user->address }}"
                        class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" required
                        autocomplete="address" autofocus>
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @if (Auth::user()->role_id == '1')
                    <div class="form-group">
                        <label for="">Select Role</label>
                        <select name="role_id" id="role_id" required value="{{ old('role_id') }}"
                            class="form-control @error('role_id') is-invalid @enderror">
                            @if ($user->role_id == 2)
                                <option value="2">Agent</option>
                                <option value="3">Dealer</option>
                                <option value="4">User</option>
                            @elseif($user->role_id == 3)
                                <option value="2">Agent</option>
                                <option selected value="3">Dealer</option>
                                <option value="4">User</option>
                            @elseif($user->role_id == 4)
                                <option value="2">Agent</option>
                                <option value="3">Dealer</option>
                                <option selected value="4">User</option>
                            @endif
                        </select>

                        @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="status" required value="{{ old('status') }}"
                            class="form-control @error('status') is-invalid @enderror">
                            @if ($user->status == 2)
                                <option value="1">Deactive</option>
                                <option selected value="2">Active</option>
                            @else
                                <option selected value="2">Active</option>
                                <option value="1">Deactive</option>
                            @endif

                        </select>

                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                @endif

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="preview_image">Preview Image</label>
                    <img id="preview_image" src="" alt="Preview Image" class="img-thumbnail" style="display: none;" width="200">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Updatd</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#image').change(function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#preview_image').attr('src', e.target.result);
                    $('#preview_image').css('display', 'block');
                };
                reader.readAsDataURL(file);
            } else {
                $('#preview_image').attr('src', '');
                $('#preview_image').css('display', 'none');
            }
        });
    });
</script>

@endsection
