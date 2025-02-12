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
   <title>PROFILE</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
   <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }} ">
   <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>

<body>
   <div class="container rounded mt-5 mb-5">
      <div class="row">
         <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
               @if(isset($user->profile_picture) && $user->profile_picture)
               <img src="{{ asset('images/' . $user->profile_picture) }}" class="rounded-circle img-fluid profile-img" alt="Profile Picture">
               @else
               <div class="default-profile-icon">
                  <i class="fa-solid fa-circle-user"></i>
               </div>
               @endif
               <div class="mt-6 text-center"><button class="btn btn-primary profile-button" type="button">Add Profile Picture</button></div>
               <span class="font-weight-bold">Edogaru</span>
               <span class="text-black-50">edogaru@mail.com.my</span>
            </div>
            <div class="mt-6 text-center"><button class="btn btn-primary profile-button" type="button">Save Change</button></div>
            <div class="mt-6 text-center"><button class="btn btn-primary profile-button" type="button">Cancel Change</button></div>
         </div>
         <div class="col-md-9 border-right">
            <div class="p-3 py-5">
               <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-right">Profile Settings</h4>
               </div>
               <div class="row mt-2">
                  <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                  <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" value="" placeholder="surname"></div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                  <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                  <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                  <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                  <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                  <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                  <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                  <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                  <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>