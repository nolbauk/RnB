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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
        <x-sidebarnavbar />
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Heroes</h1>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Hero List</h6>
                    <a href="{{ route('adminheroes.create') }}" class="btn btn-success btn-sm">Tambah Hero</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($heroes as $hero)
                                <tr>
                                    <td>{{ $hero->name }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#heroDetailsModal" onclick="showHeroDetails('{{ $hero->id }}')">Details</button>
                                        <a href="{{ route('adminheroes.edit', $hero->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('adminheroes.destroy', $hero->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus hero ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="text-center">Data kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for hero details -->
        <div class="modal fade" id="heroDetailsModal" tabindex="-1" role="dialog" aria-labelledby="heroDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="heroDetailsModalLabel">Hero Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="heroDetails">
                            <!-- Hero details will be loaded here via JavaScript -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Main Content -->

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
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

<script>
    function showHeroDetails(heroId) {
        $.ajax({
            url: '/adminheroes/' + heroId, // Menyesuaikan rute untuk mendapatkan data hero
            method: 'GET',
            success: function(response) {
                var hero = response.hero;
                var detailsHtml = `
                    <h4>${hero.name}</h4>
                    <img src="/storage/${hero.image}" alt="${hero.name}" class="img-fluid mb-3">
                    <p><strong>Bio:</strong> ${hero.bio || 'N/A'}</p>
                    <p><strong>Primary Attribute:</strong> ${hero.primary_attribute}</p>
                    <p><strong>Attack Type:</strong> ${hero.attack_type}</p>
                    <p><strong>Complexity:</strong> ${hero.complexity}</p>
                    <p><strong>Roles:</strong> ${hero.roles}</p>
                    <p><strong>Primary Strength:</strong> ${hero.primary_strength}</p>
                    <p><strong>Primary Agility:</strong> ${hero.primary_agility}</p>
                    <p><strong>Primary Intelligence:</strong> ${hero.primary_intelligence}</p>
                    <p><strong>Strength per Level:</strong> ${hero.strength_per_lvl}</p>
                    <p><strong>Agility per Level:</strong> ${hero.agility_per_lvl}</p>
                    <p><strong>Intelligence per Level:</strong> ${hero.intelligence_per_lvl}</p>
                    <p><strong>Health:</strong> ${hero.health}</p>
                    <p><strong>Health Regen:</strong> ${hero.health_regen}</p>
                    <p><strong>Mana:</strong> ${hero.mana}</p>
                    <p><strong>Mana Regen:</strong> ${hero.mana_regen}</p>
                    <p><strong>Armor:</strong> ${hero.armor}</p>
                    <p><strong>Attack Damage Min:</strong> ${hero.attack_dmg_min}</p>
                    <p><strong>Attack Damage Max:</strong> ${hero.attack_dmg_max}</p>
                    <p><strong>Attack Speed:</strong> ${hero.attack_speed}</p>
                    <p><strong>Movement Speed:</strong> ${hero.movement_speed}</p>
                    <p><strong>Magic Resist:</strong> ${hero.magic_resist}</p>
                    <p><strong>Attack Rate:</strong> ${hero.attack_rate}</p>
                    <p><strong>Lore:</strong> ${hero.lore || 'N/A'}</p>
                    <p><strong>Innate Title:</strong> ${hero.innate_title || 'N/A'}</p>
                    <p><strong>Innate Description:</strong> ${hero.innate_desc || 'N/A'}</p>
                    <p><strong>Projectile Speed:</strong> ${hero.projectile_speed || 'N/A'}</p>
                    <p><strong>Attack Range:</strong> ${hero.attack_range}</p>
                    <p><strong>Move Speed:</strong> ${hero.move_speed}</p>
                    <p><strong>Turn Rate:</strong> ${hero.turn_rate}</p>
                    <p><strong>Collision Size:</strong> ${hero.collision_size}</p>
                    <p><strong>Bound Radius:</strong> ${hero.bound_radius}</p>
                    <p><strong>Vision Range (Day):</strong> ${hero.vision_range_day}</p>
                    <p><strong>Vision Range (Night):</strong> ${hero.vision_range_night}</p>
                    <p><strong>Voice Actor:</strong> ${hero.voice_actor || 'N/A'}</p>
                    <p><strong>Talent 10 Left:</strong> ${hero.talent_10_left}</p>
                    <p><strong>Talent 10 Right:</strong> ${hero.talent_10_right}</p>
                    <p><strong>Talent 15 Left:</strong> ${hero.talent_15_left}</p>
                    <p><strong>Talent 15 Right:</strong> ${hero.talent_15_right}</p>
                    <p><strong>Talent 20 Left:</strong> ${hero.talent_20_left}</p>
                    <p><strong>Talent 20 Right:</strong> ${hero.talent_20_right}</p>
                    <p><strong>Talent 25 Left:</strong> ${hero.talent_25_left}</p>
                    <p><strong>Talent 25 Right:</strong> ${hero.talent_25_right}</p>
                `;

                // Memasukkan konten detail ke modal
                $('#heroDetails').html(detailsHtml);

                // Menampilkan modal
                $('#heroDetailsModal').modal('show');
            },
            error: function(xhr, status, error) {
                alert('Error fetching hero details');
            }
        });
    }
</script>

</body>

</html>