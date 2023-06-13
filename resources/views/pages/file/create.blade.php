@extends('layouts.master')

@section('title')
    تحميل الملفات
@endsection

@section('css')
    @notifyCss
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>تحميل الملفات</h5>
        </div>
        <form action="{{ route('files.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="card-body p-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-3">
                    <label> الموظفين : <span class="required" style="color: red">*</span></label>
                    <select name="employee_id" class="form-select mb-3 @error('employee_id') is-invalid @enderror"
                            required>
                        <option selected disabled>اختر الموظف</option>
                        @foreach($employees as $employee)
                            <option
                                value="{{$employee->id}}" {{ (old('employee_id') == $employee->id ? 'selected':'') }}>
                                {{ $employee->full_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('employee_id')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="resume" class="form-label">تحميل الملفات: <span class="required"
                                                                                style="color: red">*</span></label>
                    <input name="file[]" type="file" class="form-control @error('file') is-invalid @enderror"
                           multiple="multiple" required>
                    @error('file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">تحميل</button>
            </div>
        </form>
    </div>
@endsection

@section('script')

@endsection

@section('script-bottom')
@endsection
