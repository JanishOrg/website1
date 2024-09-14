@extends('admin.layout.master')

@section('title', 'Withdraw Requests')

@section('css')
    <!-- Add any custom styles if needed -->
@endsection

@section('content')
    <!-- BEGIN: Content-->
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="las la-sliders-h"></i> Withdraw Requests</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Amount</th>
                                    <th>Phone</th>
                                    <th>Player ID</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($withdrawRequests as $key => $request)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $request->name }}</td>
                                        <td>{{ $request->email }}</td>
                                        <td>{{ $request->amount }} ₹</td>
                                        <td>{{ $request->phone }}</td>
                                        <td>{{ $request->player_id }}</td>
                                        <td>
                                            @if($request->image_path)
                                                <a href="#" data-toggle="modal" data-target="#imageModal" data-image="{{ asset($request->image_path) }}">
                                                    <img src="{{ asset($request->image_path) }}" alt="Payment Image" width="50" height="50" style="cursor: pointer;">
                                                </a>
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $request->created_at->format('Y-m-d') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No Withdraw Requests Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- Modal for Image Preview -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // JavaScript to update the modal image src attribute
        $('#imageModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var imageUrl = button.data('image'); // Extract info from data-* attributes
            var modal = $(this);
            modal.find('#modalImage').attr('src', imageUrl);
        });
    </script>
@endsection
