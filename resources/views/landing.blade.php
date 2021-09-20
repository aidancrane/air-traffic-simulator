@extends('layouts.master')

@section('title', 'Terrain, Terrain, Pull Up')

@section('content')
<div class="text-white container">
    <!-- Current Sessions -->
    <div class="pt-1">
        <div class="lead p-0 b-0 g-0">
            Current Sessions
        </div>
        Sessions in the table below are available to join.
        <hr class="p-0 b-0 g-0">
        <table class="set-table table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Flashcards</th>
                    <th>Creation Date</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
        <script>
            $(function() {
                var table = $('.set-table').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    // ajax: '{s{ route("landing.datatable-current-sessions") }}',
                    order: [0, 'desc'],
                    language: {
                        "emptyTable": "You don't have any flashcards yet!"
                    },
                    columns: [{
                            data: 'id',
                            name: 'set.id',
                            width: '5%',
                        },
                        {
                            data: 'set_title',
                            name: 'set.set_title',
                            width: '50%',
                            render: function(data, type, row) {
                                let renderedResponse = "";
                                if (row.set_title != "") {
                                    renderedResponse += row.set_title;
                                } else {
                                    renderedResponse += "No Title";
                                }
                                if (row.set_description != "") {
                                    renderedResponse += ' <small class="text-muted">' + row.set_description + '</small>';
                                }
                                if (row.category != "") {
                                    renderedResponse += ' <span class="rounded text-white ps-1 pe-1" style=\"background-color: #007bff; font-size: small\">' + row.category + '</span>';
                                }
                                return renderedResponse;
                            },
                        },
                        {
                            data: 'flashcard_count',
                            name: 'flashcard_count',
                            width: '5%',
                            searchable: false,
                            sortable: false,
                        },
                        {
                            data: 'creation_date',
                            name: 'set.creation_date',
                        },
                        {
                            data: null,
                            render: function(data, type, row) {
                                return '<div class="btn-group" role="group"><a type="button" href="/' + row.id +
                                    '/" class="btn btn-sm btn-primary text-white">Study</a><a type="button" href="/' + row.id +
                                    '/edit" class="btn btn-sm btn-primary text-white">Edit</a><button type="button" class="btn btn-sm btn-danger text-white"' +
                                    'data-bs-toggle="modal" data-bs-target="#deleteSetModal" data-bs-id="' + row.id + '" data-bs-title="' + row.set_title + '">Delete</button></div>';
                            },
                            searchable: false,
                            sortable: false,
                        }
                    ],
                });
            });
        </script>
        <hr class="p-0 b-0 g-0">
    </div>

    <!-- Start new Session -->
    <div class="pt-1">
        <div class="lead p-0 b-0 g-0">
            Start A New Session
        </div>
        Start a new session in one of the following worlds.
        <hr class="p-0 b-0 g-0">
        New session options go here.
        <hr class="p-0 b-0 g-0">
    </div>

    <p>Welcome to ATCS (Air Traffic Control Simulator) this is a flight simulation
        and navigation game.</p>
    <p>None of the flights are real but you will be expected
        to land aircraft at airports around the map. You can choose from many maps
        and the game is generally best played on a desktop. An account is not required
        to control the flights.</p>


    {{-- <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#launchModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="launchModal" tabindex="-1" aria-labelledby="launchModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title gray-900" id="launchModalLabel">
                        <div class="text-dark">Modal title</div>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-dark">Modal title</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Cool</button>
                </div>
            </div>
        </div>
    </div> --}}

</div>
@stop

@push('scripts')
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/datatables.js') }}"></script>
@endpush