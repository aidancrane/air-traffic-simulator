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
        Sessions go here.
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