@extends('layouts.admin')

@section('title', 'Heroes')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Data Heroes</h1>
    <x-allert/>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <a href="{{ route('adminheroes.create') }}" class="btn btn-success btn-sm">Tambah Hero</a>
        </div>
        <div class="card-body" style="max-height: 60vh; overflow-y: auto;">
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

    <!-- Modal hero details -->
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
@endsection


@push('scripts')
    <script>
        function showHeroDetails(heroId) {
            $.ajax({
                url: '/admin/adminheroes/' + heroId,
                method: 'GET',
                success: function(response) {
                    var hero = response.hero;
                    var detailsHtml = `
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">${hero.name}</h4>
                                <div class="text-center mb-3">
                                    <img src="/storage/${hero.image}" alt="${hero.name}" class="img-fluid img-thumbnail" style="max-width: 250px;">
                                </div>
                                <div class="table-bordered mb-3 p-2">
                                    <h5 class="text-center">General Information</h5>
                                    <p><strong>Primary Attribute:</strong> ${hero.primary_attribute}</p>
                                    <p><strong>Attack Type:</strong> ${hero.attack_type}</p>
                                    <p><strong>Complexity:</strong> ${hero.complexity}</p>
                                    <div class="table-bordered mb-3 p-2">
                                        <p><strong>Bio:</strong></p>
                                        <p> {!! nl2br(e($hero->bio ?? 'N/A')) !!}
                                    </div>
                                    <div class="table-bordered mb-3 p-2">
                                        <p><strong>Lore:</strong></p>
                                        <p> {!! nl2br(e($hero->lore ?? 'N/A')) !!}
                                    </div>
                                    <div class="table-bordered mb-3 p-2">
                                        <p><strong>Innate: </strong>${hero.innate_title || 'N/A'}</p>
                                        <p> {!! nl2br(e($hero->innate_desc ?? 'N/A')) !!}
                                    </div>
                                    <p class="mt-3"><strong>Voice Actor:</strong> ${hero.voice_actor || 'N/A'}</p>
                                </div>

                                <div class="table-bordered mb-3 p-2">
                                    <h5>Attributes</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Health:</strong> ${hero.health} (Regen: ${hero.health_regen})</p>
                                            <p><strong>Mana:</strong> ${hero.mana} (Regen: ${hero.mana_regen})</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Strength:</strong> ${hero.primary_strength} (+${hero.strength_per_lvl}/lvl)</p>
                                            <p><strong>Agility:</strong> ${hero.primary_agility} (+${hero.agility_per_lvl}/lvl)</p>
                                            <p><strong>Intelligence:</strong> ${hero.primary_intelligence} (+${hero.intelligence_per_lvl}/lvl)</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-bordered mb-3 p-2">
                                    <h5>Roles</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><strong>Carry:</strong> ${hero.carry}</p>
                                            <p><strong>Support:</strong> ${hero.support}</p>
                                            <p><strong>Nuker:</strong> ${hero.nuker}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><strong>Disabler:</strong> ${hero.disabler}</p>
                                            <p><strong>Jungler:</strong> ${hero.jungler}</p>
                                            <p><strong>Durable:</strong> ${hero.durable}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><strong>Escape:</strong> ${hero.escape}</p>
                                            <p><strong>Pusher:</strong> ${hero.pusher}</p>
                                            <p><strong>Initiator:</strong> ${hero.initiator}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-bordered mb-3 p-2">
                                    <h5>Stats</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6>Attack</h6>
                                            <p><strong>Attack Damage:</strong> ${hero.attack_dmg_min} - ${hero.attack_dmg_max}</p>
                                            <p><strong>Attack Rate:</strong> ${hero.attack_rate}</p>
                                            <p><strong>Attack Range:</strong> ${hero.attack_range}</p>
                                            <p><strong>Projectile Speed:</strong> ${hero.projectile_speed}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h6>Defense</h6>
                                            <p><strong>Armor:</strong> ${hero.armor}</p>
                                            <p><strong>Magic Resist:</strong> ${hero.magic_resist}%</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h6>Mobility</h6>
                                            <p><strong>Movement Speed:</strong> ${hero.movement_speed}</p>
                                            <p><strong>Turn Rate:</strong> ${hero.turn_rate}</p>
                                            <p><strong>Vision Range:</strong> ${hero.vision_range_day} / ${hero.vision_range_night}</p>
                                        </div>
                                    </div>                                    
                                </div>

                                <div class="table-bordered mb-3 p-2">
                                    <h5>Additional Combat Stats</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><strong>Collision Size:</strong> ${hero.collision_size}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><strong>Bound Radius:</strong> ${hero.bound_radius}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><strong>Attack Speed:</strong> ${hero.attack_speed}</p>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="mt-3">Hero Talents</h5>
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>Left Talent</th>
                                            <th>Level</th>
                                            <th>Right Talent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>${hero.talent_10_left}</td>
                                            <td>10</td>
                                            <td>${hero.talent_10_right}</td>
                                        </tr>
                                        <tr>
                                            <td>${hero.talent_15_left}</td>
                                            <td>15</td>
                                            <td>${hero.talent_15_right}</td>
                                        </tr>
                                        <tr>
                                            <td>${hero.talent_20_left}</td>
                                            <td>20</td>
                                            <td>${hero.talent_20_right}</td>
                                        </tr>
                                        <tr>
                                            <td>${hero.talent_25_left}</td>
                                            <td>25</td>
                                            <td>${hero.talent_25_right}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    `;
                    $('#heroDetails').html(detailsHtml);

                    $('#heroDetailsModal').modal('show');
                },
                error: function(xhr, status, error) {
                    alert('Error fetching hero details');
                }
            });
        }
    </script>
@endpush