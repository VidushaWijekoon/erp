@section('title', 'Create Designations')
@extends('layouts.admin.app')
@section('content')
    <div class="row justify-content-between">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Create New Designation') }}</h4>
                    </span>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
                            @foreach ($errors->all() as $error)
                                <div class="">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('designation.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>{{ __('Designation Name') }}</span>
                                    </label>
                                    <input type="text" class="form-control rounded-0" name="designation_name"
                                        placeholder="Designation Name" required>
                                    @error('designation_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">{{ __('Description') }}</label>
                                    <textarea type="password" class="form-control rounded-0" name="description" placeholder="Description" rows="3"
                                        required></textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <a href="{{ route('designation.index') }}" type="button"
                                    class="btn btn-secondary btn-sm">{{ __('Close') }}</a>
                                <button type="submit" class="btn btn-primary btn-sm">{{ __('Save Changes') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Existing Designation') }}</h4>
                    </span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        @forelse ($designation as $designationItem)
                            <div class="d-flex justify-content-between">

                                <span
                                    class="d-flex align-items-center text-capitalize mb-2">{{ $designationItem->designation_name }}</span>
                                <span
                                    class="d-flex align-items-center text-capitalize mb-2">{{ $designationItem->description }}</span>
                            </div>
                        @empty
                            <span class="text-danger">{{ __('Data Not Found') }}</span>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
