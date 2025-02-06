<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RnB - Heroes</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style>
    .sidebar-brand-icon img {
        width: 100%;
        height: auto;
        object-fit: contain;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <x-sidebarnavbar/>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Heroes</h1>
                
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Hero</h6>
                        </div>
                        <div class="card-body" style="max-height: 60vh; overflow-y: auto;">
                            <div class="container">
                                <form action="{{ route('adminheroes.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    {{-- Primary Attribute --}}
                                    <div class="mb-3">
                                        <label for="primary_attribute" class="form-label">Primary Attribute</label>
                                        <select class="form-control" id="primary_attribute" name="primary_attribute" required>
                                            <option value="Strength">Strength</option>
                                            <option value="Agility">Agility</option>
                                            <option value="Intelligence">Intelligence</option>
                                            <option value="Universal">Universal</option>
                                        </select>
                                    </div>
                            
                                    {{-- Nama Hero --}}
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Hero</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    
                                    {{-- Image Upload --}}
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Gambar Hero</label>
                                        <input type="file" class="form-control form-control-sm" id="image" name="image" accept="image/png, image/jpeg, image/jpg">
                                    </div>
                                    
                                    {{-- Bio --}}
                                    <div class="mb-3">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea class="form-control" id="bio" name="bio"></textarea>
                                    </div>

                                    {{-- Lore --}}
                                    <div class="mb-3 mt-3">
                                        <label for="lore" class="form-label">Lore</label>
                                        <textarea class="form-control" id="lore" name="lore"></textarea>
                                    </div>
                            
                                    {{-- Attack Type --}}
                                    <div class="mb-3">
                                        <label for="attack_type" class="form-label">Attack Type</label>
                                        <select class="form-control" id="attack_type" name="attack_type" required>
                                            <option value="Melee">Melee</option>
                                            <option value="Ranged">Ranged</option>
                                        </select>
                                    </div>
                            
                                    {{-- Complexity --}}
                                    <div class="mb-3">
                                        <label for="complexity" class="form-label">Complexity</label>
                                        <select class="form-control" id="complexity" name="complexity" required>
                                            <option value="Easy">Easy</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Hard">Hard</option>
                                        </select>
                                    </div>

                                    <h4>Attributs</h4>
                                    {{-- Health & Mana --}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="health" class="form-label">Health</label>
                                            <input type="number" class="form-control" id="health" name="health" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="health_regen" class="form-label">Health Regen</label>
                                            <input type="number" step="0.01" class="form-control" id="health_regen" name="health_regen" required>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="mana" class="form-label">Mana</label>
                                            <input type="number" class="form-control" id="mana" name="mana" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="mana_regen" class="form-label">Mana Regen</label>
                                            <input type="number" step="0.01" class="form-control" id="mana_regen" name="mana_regen" required>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="primary_strength" class="form-label">Strength</label>
                                            <input type="number" step="0.01" class="form-control" id="primary_strength" name="primary_strength" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="strength_per_lvl" class="form-label">Strength per Level</label>
                                            <input type="number" step="0.01" class="form-control" id="strength_per_lvl" name="strength_per_lvl" required>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="primary_agility" class="form-label">Agility</label>
                                            <input type="number" step="0.01" class="form-control" id="primary_agility" name="primary_agility" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="agility_per_lvl" class="form-label">Agility per Level</label>
                                            <input type="number" step="0.01" class="form-control" id="agility_per_lvl" name="agility_per_lvl" required>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mb-3">
                                        <div class="col-md-4">
                                            <label for="primary_intelligence" class="form-label">Intelligence</label>
                                            <input type="number" step="0.01" class="form-control" id="primary_intelligence" name="primary_intelligence" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="intelligence_per_lvl" class="form-label">Intelligence per Level</label>
                                            <input type="number" step="0.01" class="form-control" id="intelligence_per_lvl" name="intelligence_per_lvl" required>
                                        </div>
                                    </div>
                            
                                    {{-- Roles --}}
                                    <h4>Roles</h4>
                                    <div class="mb-3">
                                        <label for="roles" class="form-label">Roles</label>
                                        <input type="text" class="form-control" id="roles" name="roles" required>
                                    </div>

                                    <h4>Attack</h4>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="attack_dmg_min" class="form-label">Attack Damage Min</label>
                                            <input type="number" class="form-control" id="attack_dmg_min" name="attack_dmg_min" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="attack_dmg_max" class="form-label">Attack Damage Max</label>
                                            <input type="number" class="form-control" id="attack_dmg_max" name="attack_dmg_max" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="attack_rate" class="form-label">Attack Rate</label>
                                        <input type="number" step="0.01" class="form-control" id="attack_rate" name="attack_rate" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="attack_range" class="form-label">Attack Range</label>
                                        <input type="number" class="form-control" id="attack_range" name="attack_range" required>
                                    </div>

                                    <h4>Defense</h4>
                                    <div class="mb-3">
                                        <label for="armor" class="form-label">Armor</label>
                                        <input type="number" step="0.01" class="form-control" id="armor" name="armor" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="magic_resist" class="form-label">Magic Resist (%)</label>
                                        <input type="number" step="0.01" class="form-control" id="magic_resist" name="magic_resist" required>
                                    </div>

                                    <h4>Mobility</h4>
                                    <div class="mb-3">
                                        <label for="movement_speed" class="form-label">Movement Speed</label>
                                        <input type="number" class="form-control" id="movement_speed" name="movement_speed" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="turn_rate" class="form-label">Turn Rate</label>
                                        <input type="number" step="0.01" class="form-control" id="turn_rate" name="turn_rate" required>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="vision_range_day" class="form-label">Vision Range Day</label>
                                            <input type="number" class="form-control" id="vision_range_day" name="vision_range_day" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="vision_range_night" class="form-label">Vision Range Night</label>
                                            <input type="number" class="form-control" id="vision_range_night" name="vision_range_night" required>
                                        </div>
                                    </div>


                                    {{-- Innate Ability --}}
                                    <h4>Innate Ability</h4>
                                    <div class="mb-3">
                                        <label for="innate_title" class="form-label">Innate Title</label>
                                        <input type="text" class="form-control" id="innate_title" name="innate_title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="innate_desc" class="form-label">Innate Description</label>
                                        <textarea class="form-control" id="innate_desc" name="innate_desc"></textarea>
                                    </div>

                                    {{-- Additional Combat Stats --}}
                                    <h4>Additional Combat Stats</h4>
                                    <div class="mb-3">
                                        <label for="projectile_speed" class="form-label">Projectile Speed</label>
                                        <input type="number" class="form-control" id="projectile_speed" name="projectile_speed">
                                    </div>
                                    <div class="mb-3">
                                        <label for="collision_size" class="form-label">Collision Size</label>
                                        <input type="number" step="0.01" class="form-control" id="collision_size" name="collision_size" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="bound_radius" class="form-label">Bound Radius</label>
                                        <input type="number" step="0.01" class="form-control" id="bound_radius" name="bound_radius" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="attack_speed" class="form-label">Attack Speed</label>
                                        <input type="number" step="0.01" class="form-control" id="attack_speed" name="attack_speed" required>
                                    </div>

                                    <h4>Voice</h4>
                                    <div class="mb-3">
                                        <label for="voice_actor" class="form-label">Voice Actor</label>
                                        <input type="text" class="form-control" id="voice_actor" name="voice_actor">
                                    </div>
                            
                                    {{-- Talent Tree --}}
                                    <h4>Talent Tree</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="talent_10_left" class="form-label">Talent lvl 10 Left</label>
                                            <input type="text" class="form-control" id="talent_10_left" name="talent_10_left" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="talent_10_right" class="form-label">Talent lvl 10 Right</label>
                                            <input type="text" class="form-control" id="talent_10_right" name="talent_10_right" required>
                                        </div>
                                    </div>
                            
                                    {{-- Talent 15, 20, 25 --}}
                                    @for ($level = 15; $level <= 25; $level += 5)
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label for="talent_{{ $level }}_left" class="form-label">Talent lvl {{ $level }} Left</label>
                                            <input type="text" class="form-control" id="talent_{{ $level }}_left" name="talent_{{ $level }}_left" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="talent_{{ $level }}_right" class="form-label">Talent lvl {{ $level }} Right</label>
                                            <input type="text" class="form-control" id="talent_{{ $level }}_right" name="talent_{{ $level }}_right" required>
                                        </div>
                                    </div>
                                    @endfor
                            
                                    {{-- Tombol Submit --}}
                                    <button type="submit" class="btn btn-primary mt-4">Simpan Hero</button>
                                    <a href="{{ route('adminheroes.index') }}" class="btn btn-secondary mt-4">Batal</a>
                            
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; RnB 2025</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <x-logoutmodal/>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

</body>

</html>