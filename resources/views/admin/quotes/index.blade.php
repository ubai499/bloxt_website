@extends('layouts.dashboard')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bloxt</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Quotes List</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Quotes List</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Quotes</h4>
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Quote Type</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($quotes as $quote)
                                        <tr>
                                            <td>{{$quote->full_name }}</td>
                                            <td>{{$quote->address }}</td>
                                            <td>{{$quote->email }}</td>
                                            <td>{{$quote->transaction_type }}</td>
                                            <td>{{$quote->status }}</td>
                                            <td>{{ $quote->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <a href="{{ route('admin.quotes.view', $quote->id) }}"
                                                    class="btn btn-primary btn-sm">View</a>
                                                <button class="btn btn-sm btn-secondary" data-bs-toggle="modal"
                                                    data-bs-target="#qcStatusModal" data-id="{{ $quote->id }}"
                                                    data-status="{{ $quote->status }}">
                                                    Update Status
                                                </button>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                    <div class="modal fade" id="qcStatusModal" tabindex="-1" aria-labelledby="qcStatusModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="qcStatusForm" method="POST" action="{{ route('admin.quotes.update_status') }}">
                                    @csrf
                                    <input type="hidden" name="quote_id" id="quote_id">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="qcStatusModalLabel">Update Status</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select name="status" id="quote_status" class="form-control" required>
                                                <option value="">Select Status</option>
                                                <option value="pending">Pending</option>
                                                <option value="approved">Approved</option>
                                                <option value="rejected">Rejected</option>
                                                <option value="completed">Completed</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

        </div>
        <!-- container -->

    </div>
    <!-- content -->



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var qcModal = document.getElementById('qcStatusModal');

            qcModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var bookingId = button.getAttribute('data-id');
                var qcStatus = button.getAttribute('data-status');

                document.getElementById('quote_id').value = bookingId;
                document.getElementById('quote_status').value = qcStatus;
            });
        });
    </script>

@endsection