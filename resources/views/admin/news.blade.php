@extends('layouts.app')

@section('content')
    <div class="col">
        <h1>{{ __('menu.sidebar-4') }}</h1>
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#createNewsModal">
            <i class="bi bi-plus-circle"></i> {{ __('menu.Create news') }}
        </button>

        <!-- Create News Modal -->
        <div class="modal fade" id="createNewsModal" tabindex="-1" aria-labelledby="createNewsModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createNewsModalLabel">{{ __('menu.Create news') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <select name="category_id" class="form-control" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ is_array($category->name) ? $category->name[session('locale', 'uz')] : json_decode($category->name, true)[session('locale', 'uz')] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="title[uz]" required placeholder="Sarlavha O'zbek">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="title[ru]" required placeholder="Заголовок Русский">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="title[en]" required placeholder="Title English">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="description[uz]" required placeholder="Tavsif O'zbek"></textarea>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="description[ru]" required placeholder="Описание Русский"></textarea>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="description[en]" required placeholder="Description English"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="image">
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

        <!-- News Table -->
        <table class="table table-striped table-hover table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>{{ __('menu.title') }}</th>
                    <th>{{ __('menu.description') }}</th>
                    <th>{{ __('menu.category') }}</th>
                    <th>{{ __('menu.image') }}</th>
                    <th>{{ __('menu.options') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $newsItem)
                    <tr>
                        <td>{{ $newsItem->id }}</td>
                        <td>{{ is_array($newsItem->title) ? $newsItem->title[session('locale', 'uz')] : json_decode($newsItem->title, true)[session('locale', 'uz')] }}
                        </td>
                        <td>{{ is_array($newsItem->description) ? $newsItem->description[session('locale', 'uz')] : json_decode($newsItem->description, true)[session('locale', 'uz')] }}
                        </td>
                        <td>
                            @php
                                $categoryName = is_array($newsItem->category->name)
                                    ? $newsItem->category->name[session('locale', 'uz')]
                                    : json_decode($newsItem->category->name, true)[session('locale', 'uz')];
                            @endphp
                            {{ $categoryName }}
                        </td>
                        <td>
                            @if ($newsItem->image)
                                <img src="{{ asset('storage/' . $newsItem->image) }}" alt="Image" width="100">
                            @else
                                <span>No image</span>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#edit{{ $newsItem->id }}">
                                <i class="bi bi-pencil"></i> {{ __('menu.edit') }}
                            </button>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="edit{{ $newsItem->id }}" tabindex="-1"
                                aria-labelledby="editModalLabel{{ $newsItem->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $newsItem->id }}">{{ __('menu.Edit news') }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('news.update', $newsItem->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <select name="category_id" class="form-control" required>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                {{ $newsItem->category_id == $category->id ? 'selected' : '' }}>
                                                                {{ is_array($category->name) ? $category->name[session('locale', 'uz')] : json_decode($category->name, true)[session('locale', 'uz')] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="title[uz]"
                                                        value="{{ is_array($newsItem->title) ? $newsItem->title['uz'] : json_decode($newsItem->title, true)['uz'] }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="title[ru]"
                                                        value="{{ is_array($newsItem->title) ? $newsItem->title['ru'] : json_decode($newsItem->title, true)['ru'] }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="title[en]"
                                                        value="{{ is_array($newsItem->title) ? $newsItem->title['en'] : json_decode($newsItem->title, true)['en'] }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" name="description[uz]" required>{{ is_array($newsItem->description) ? $newsItem->description['uz'] : json_decode($newsItem->description, true)['uz'] }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" name="description[ru]" required>{{ is_array($newsItem->description) ? $newsItem->description['ru'] : json_decode($newsItem->description, true)['ru'] }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" name="description[en]" required>{{ is_array($newsItem->description) ? $newsItem->description['en'] : json_decode($newsItem->description, true)['en'] }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="file" class="form-control" name="image">
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

                            <!-- Delete Form -->
                            <form action="{{ route('news.destroy', $newsItem->id) }}" method="post"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this news?')">
                                    <i class="bi bi-trash3"></i> {{ __('menu.delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $news->links() }}
    </div>
@endsection
