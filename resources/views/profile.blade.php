<!DOCTYPE html>
<html>

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>EDIT PROFILE</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }} ">
   <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<style>
    .profile-img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #ddd;
    }
</style>

<body>
    <div class="container rounded mt-5 mb-5">
        <div class="row">
            <!-- Sidebar Profile -->
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    @if(isset($user->profile_picture) && $user->profile_picture)
                    <img id="profile-img" src="{{ asset('storage/' . $user->profile_picture) }}" class="rounded-circle img-fluid profile-img" alt="Profile Picture">
                    @else
                    <div id="default-profile-icon" class="default-profile-icon">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                    @endif
                    
                
                    {{-- <!-- Input file tersembunyi -->
                    <input type="file" id="profile-picture-input" class="d-none" accept="image/*" name="profile_picture">
                
                    <!-- Tombol Upload Gambar -->
                    <div class="mt-3 text-center">
                        <button class="btn btn-primary profile-button" type="button" id="add-profile-picture">
                            Add Profile Picture
                        </button>                    
                    </div> --}}
                
                    <span class="font-weight-bold">{{ $user->username }}</span>
                    <span class="text-black-50">{{ $user->email }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="mt-3 text-center">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
                
            </div>
            
            <!-- Profile Form -->
            <div class="col-md-9 border-right">
                <div class="p-3 py-5">
                    <h4 class="text-left">Profile Settings</h4>
                    <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Username</label>
                                <input type="text" class="form-control" value="{{ $user->username }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Email</label>
                                <input type="text" class="form-control" value="{{ $user->email }}" readonly>
                            </div>
                        </div>
                    
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Display Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Biography</label>
                                <textarea class="form-control" name="bio">{{ $user->bio }}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Birthday</label>
                                <input type="date" class="form-control" name="birth" value="{{ $user->birth }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Phone Number</label>
                                <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                            </div>
                            
                            <!-- Input Upload Gambar -->
                            <div class="col-md-12">
                                <label class="labels">Profile Picture</label>
                                <input type="file" class="form-control" name="profile_picture" accept="image/*">
                            </div>
                        </div>
                    
                        <div class="mt-3 text-center">
                            <button type="submit" class="btn btn-primary profile-button">Save Changes</button>
                            <a href="{{ route('profile.index') }}" class="btn btn-secondary profile-button">Cancel</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
<script>
    document.getElementById('add-profile-picture').addEventListener('click', function () {
        document.getElementById('profile-picture-input').click();
    });

    document.getElementById('profile-picture-input').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                let imgElement = document.getElementById('profile-img');
                let defaultIcon = document.getElementById('default-profile-icon');

                if (!imgElement) {
                    imgElement = document.createElement('img');
                    imgElement.className = "rounded-circle img-fluid profile-img";
                    imgElement.id = "profile-img";
                    defaultIcon.replaceWith(imgElement);
                }
                imgElement.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>

</html>