@extends('layouts.admin')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>

    <style>
        #dropzone {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        #preview {
            display: flex;
            flex-wrap: wrap;
        }

        .preview-image {
            position: relative;
            width: 150px;
            height: 100px;
            margin: 10px;
        }

        .preview-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .preview-image .remove-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
        }

        #dropzone1 {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        #preview1 {
            display: flex;
            flex-wrap: wrap;
        }

        .preview-image {
            position: relative;
            width: 150px;
            height: 100px;
            margin: 10px;
        }

        .preview-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .preview-image .remove-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
        }
    </style>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form action="{{ url('updateProperty') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $property->id }}"> {{-- Add a hidden input for the ID --}}
            <label style="width: 100%" for="">What do you want to do?</label>
            <select name="TypeProperty" required style="width: 100%" id="TypeProperty" class="form-control">
                <option {{ $property->type == 'rent' ? 'selected' : '' }} value="rent">Rent</option>
                <option {{ $property->type == 'sell' ? 'selected' : '' }} value="sell">Sell</option>
            </select>
        </div>



        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label style="width: 100%" for="">Please select your Sector?</label>
                    <select name="sectors" required style="width: 100%" id="sectors" class="form-control sectors">
                        @foreach ($propertysector as $item)
                            <option {{ $property->sectors == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                {{ $item->sectors }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <label style="width: 100%" for="">Featured</label>
                    <input type="checkbox" class="form-control" name="feature">
                </div>
            </div>
        </div>



        <div class="form-group">
            <div class="row">
                <label for="" style="width: 100%">What kind of property do you have?</label>
                <div class="d-flex" style="width: 100%">
                    <select style="width: 50%;" required name="types" id="types" class="types form-control">
                        @foreach ($propertyKinds as $item)
                            @if ($item->is_heading == '1' && $item->is_propertykind == '1')
                                <option {{ $property->ptype == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                    {{ $item->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <select style="width: 50%" required name="types2" id="types2" class="types2 form-control">
                        @foreach ($propertyKinds as $item)
                            @if ($item->is_heading != '1' && $item->is_propertykind == '1')
                                <option {{ $property->ptype2 == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                    {{ $item->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="">What is the size of your property?</label>
            <div class="d-flex" style="width: 100%">
                <input  value="{{ $property->size }}" style="width: 70%"type="text" required class="form-control" name="area">
                <select style="width: 30%" required name="size" id="size" class="size form-control">
                    <option {{ $property->sizeM == 'sqlft' ? 'selected' : '' }} value="sqlft">Sq. Ft.</option>
                    <option {{ $property->sizeM == 'sqlM' ? 'selected' : '' }} value="sqlM">Sq. M.</option>
                    <option {{ $property->sizeM == 'sqlYD' ? 'selected' : '' }} value="sqlYD">Sq. YD.</option>
                    <option {{ $property->sizeM == 'marla' ? 'selected' : '' }} value="marla">Marla</option>
                    <option {{ $property->sizeM == 'kanal' ? 'selected' : '' }} value="kanal">Kanal</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="">What is the asking price?</label>
            <input value=" {{ $property->price }}" type="text" name="price" required id="name"
                class="name form-control">
        </div>
        <div class="form-group">
            <label for="">What is Your Area Name?</label>
            <input type="text" value=" {{ $property->areaname }}" name="areaname" required id="areaname"
                class="areaname form-control">
        </div>


        <div class="form-group">
            <label for="">How Many bedrooms does it have?</label>
            <select name="bedroom" id="bedroom" required class="bedroom form-control">
                @for ($i = 1; $i <= 10; $i++)
                    <option {{ $property->bedrooms == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}
                    </option>
                @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="">How Many bathrooms does it have?</label>
            <select name="bathroom" id="bathroom" required class="bathroom form-control">
                @for ($i = 1; $i <= 10; $i++)
                    <option {{ $property->bathrooms == $i ? 'selected' : '' }} value="{{ $i }}">
                        {{ $i }} </option>
                @endfor
            </select>
        </div>


        <div class="form-group">
            <label for="">Name your property</label>
            <input type="text" value="{{ $property->name }}" name="namep" required class="namep form-control" id="namep">
        </div>
        <div class="form-group">
            <div class="d-flex" style="width: 100%">
                <div style="width: 70%" id="dropzone1" ondragover="handleDragOver1(event)" ondrop="handleDrop1(event)">
                    <label for="fileinput1">Drag and drop images here for feature image</label>
                    <input type="file" id="fileinput1" name="fileinput1" class="fileinput1">
                </div>
                <div style="width: 30%" id="preview1">
                    <img style="    width: 102px;
                    margin: 0px 16px;" src="{{ asset('/images/' . $property->image) }}" alt="ss">
                </div>
            </div>

        </div>

        <div class="form-group">
            <label for="">What is the condition of your property?</label>
            <select name="condition" required id="condition" class="condition form-control">
                <option {{ $property->condition == 'Brand New' ? 'selected' : '' }} value="Brand New">Brand New</option>
                <option {{ $property->condition == 'Execllent' ? 'selected' : '' }} value="Execllent">Execllent</option>
                <option {{ $property->condition == 'Good' ? 'selected' : '' }} value="Good">Good</option>
                <option {{ $property->condition == 'Need Minor work' ? 'selected' : '' }} value="Need Minor work">Need Minor
                    work</option>
                <option {{ $property->condition == 'Need Major work' ? 'selected' : '' }} value="Need Major work">Need Major
                    work</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">What do you love about the place?</label>
            <textarea name="desc" required id="desc" class="form-control desc" cols="30" rows="10">{{ $property->desc }}</textarea>
        </div>

        <div class="form-group">
            <div id="dropzone" ondragover="handleDragOver(event)" ondrop="handleDrop(event)">
                <label for="fileinput">Drag and drop images here for Gallery</label>
                <input type="file" id="fileinput" multiple name="fileinput[]" class="fileinput">
            </div>
            <div id="preview" class="mt-3">
                @foreach ($gallery as $item )

                <img style=" width: 102px;
                margin: 0px 16px;" src="{{ asset('/images/' . $item->image) }}" alt="ss">

                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-2 mb-5">Update property</button>
    </form>

    <script>
        $(document).ready(function() {
            function handleDragOver(event) {
                event.preventDefault();
                event.stopPropagation();
                event.dataTransfer.dropEffect = "copy";
            }

            function handleDrop(event) {
                event.preventDefault();
                event.stopPropagation();

                let files = event.dataTransfer.files;
                handleFiles(files);

                hideFileInput();
            }

            document.getElementById('fileinput').addEventListener('change', function(e) {
                let files = e.target.files;
                handleFiles(files);

                hideFileInput();
            });

            function handleFiles(files) {
                let previewDiv = document.getElementById('preview');

                for (let i = 0; i < files.length; i++) {
                    let file = files[i];
                    if (file.type.startsWith('image/')) {
                        let reader = new FileReader();

                        reader.onload = function(e) {
                            let previewImage = document.createElement('div');
                            previewImage.classList.add('preview-image');

                            let img = document.createElement('img');
                            img.src = e.target.result;
                            previewImage.appendChild(img);

                            let removeBtn = document.createElement('button');
                            removeBtn.classList.add('remove-btn');
                            removeBtn.textContent = 'X';
                            removeBtn.addEventListener('click', function() {
                                previewDiv.removeChild(previewImage);
                            });
                            previewImage.appendChild(removeBtn);

                            previewDiv.appendChild(previewImage);
                        }

                        reader.readAsDataURL(file);
                    }
                }
            }
            hideFileInput();

            function hideFileInput() {
                let fileInput = document.getElementById('fileinput');
                fileInput.style.display = 'none';
            }

        });
    </script>

    <script>
        function handleDragOver1(event) {
            event.preventDefault();
            event.stopPropagation();
            event.dataTransfer.dropEffect = "copy";
        }

        function handleDrop1(event) {
            event.preventDefault();
            event.stopPropagation();

            let file = event.dataTransfer.files[0];
            handleFile1(file);

            hideFileInput1();
        }

        document.getElementById('fileinput1').addEventListener('change', function(e) {
            let file = e.target.files[0];
            handleFile1(file);

            hideFileInput1();
        });

        function handleFile1(file) {
            let previewDiv = document.getElementById('preview1');

            // Clear previous preview
            previewDiv.innerHTML = '';

            if (file.type.startsWith('image/')) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    let previewImage = document.createElement('div');
                    previewImage.classList.add('preview-image');

                    let img = document.createElement('img');
                    img.src = e.target.result;
                    previewImage.appendChild(img);

                    let removeBtn = document.createElement('button');
                    removeBtn.classList.add('remove-btn');
                    removeBtn.textContent = 'X';
                    removeBtn.addEventListener('click', function() {
                        previewDiv.removeChild(previewImage);
                        updateFileInput1();
                    });
                    previewImage.appendChild(removeBtn);

                    previewDiv.appendChild(previewImage);
                }

                reader.readAsDataURL(file);
            }
        }
        hideFileInput1();

        function hideFileInput1() {
            let fileInput = document.getElementById('fileinput1');
            fileInput.style.display = 'none';
        }

        function updateFileInput1() {
            let fileInput = document.getElementById('fileinput1');
            fileInput.value = '';
            fileInput.style.display = 'block';
            hideFileInput1();
        }
    </script>
@endsection
