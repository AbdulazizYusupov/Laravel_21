@extends('layouts.app')

@section('content')
    <div class="col">
        <h1>{{ __('menu.sidebar-2') }}</h1>

        <!-- Create Button -->
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#createUserModal">
            <i class="bi bi-plus-circle"></i> {{ __('menu.Create user') }}
        </button>

        <!-- Create Modal -->
        <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createUserModalLabel">{{ __('menu.Create user') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('menu.name') }}</label>
                                <input type="text" class="form-control" name="name" {{ old('name') }}>
                            </div>
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('menu.email') }}</label>
                                <input type="email" class="form-control" name="email" {{ old('email') }}>
                            </div>
                            @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('menu.password') }}</label>
                                <input type="password" class="form-control" name="password" {{ old('password') }}>
                            </div>
                            @error('password')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">{{ __('menu.cancel') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('menu.save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <table class="table table-striped table-hover table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>{{ __('menu.name') }}</th>
                    <th>{{ __('menu.email') }}</th>
                    <th>{{ __('menu.options') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($models as $model)
                    <tr>
                        <td>{{ $model->id }}</td>
                        <td>{{ $model->name }}</td>
                        <td>{{ $model->email }}</td>
                        <td>
                            <!-- Edit Button -->
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#edit{{ $model->id }}">
                                <i class="bi bi-pencil"></i> {{ __('menu.edit') }}
                            </button>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="edit{{ $model->id }}" tabindex="-1"
                                aria-labelledby="editModalLabel{{ $model->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $model->id }}">
                                                {{ __('menu.Edit user') }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('users.update', $model->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ $model->name }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" name="email"
                                                        value="{{ $model->email }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="******">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">{{ __('menu.cancel') }}</button>
                                                <button type="submit"
                                                    class="btn btn-primary">{{ __('menu.edit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Form -->
                            <form action="{{ route('users.destroy', $model->id) }}" method="post" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this user?')">
                                    <i class="bi bi-trash3"></i> {{ __('menu.delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $models->links() }}
    </div>
@endsection
