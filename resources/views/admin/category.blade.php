@extends('layouts.app')

@section('content')
    <div class="col">
        <h1>{{ __('menu.sidebar-3') }}</h1>
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#createCategoryModal">
            <i class="bi bi-plus-circle"></i> {{ __('menu.Create category') }}
        </button>
        <div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createCategoryModalLabel">{{ __('menu.Create category') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name_uz" class="form-label">{{ __('menu.name') }} (Uzbek)</label>
                                <input type="text" class="form-control" name="name[uz]" required>
                            </div>
                            <div class="mb-3">
                                <label for="name_ru" class="form-label">{{ __('menu.name') }} (Russian)</label>
                                <input type="text" class="form-control" name="name[ru]" required>
                            </div>
                            <div class="mb-3">
                                <label for="name_en" class="form-label">{{ __('menu.name') }} (English)</label>
                                <input type="text" class="form-control" name="name[en]" required>
                            </div>
                            <div class="mb-3">
                                <label for="sort" class="form-label">{{ __('menu.sort') }}</label>
                                <input type="number" class="form-control" name="sort" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('menu.cancel') }}</button>
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
                    <th>{{ __('menu.sort') }}</th>
                    <th>{{ __('menu.options') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>
                            {{ is_array($category->name) ? $category->name[session('locale')] : json_decode($category->name, true)[session('locale')] }}
                        </td>
                        <td>{{ $category->sort }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#edit{{ $category->id }}">
                                <i class="bi bi-pencil"></i> {{ __('menu.edit') }}
                            </button>
                            <div class="modal fade" id="edit{{ $category->id }}" tabindex="-1"
                                aria-labelledby="editModalLabel{{ $category->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $category->id }}">{{ __('menu.Edit category') }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('categories.update', $category->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="name[uz]"
                                                        value="{{ is_array($category->name) ? $category->name['uz'] : json_decode($category->name, true)['uz'] }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="name[ru]"
                                                        value="{{ is_array($category->name) ? $category->name['ru'] : json_decode($category->name, true)['ru'] }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="name[en]"
                                                        value="{{ is_array($category->name) ? $category->name['en'] : json_decode($category->name, true)['en'] }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="number" class="form-control" name="sort"
                                                        value="{{ $category->sort }}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">{{ __('menu.cancel') }}</button>
                                                <button type="submit" class="btn btn-primary">{{ __('menu.edit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this category?')">
                                    <i class="bi bi-trash3"></i> {{ __('menu.delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
@endsection
