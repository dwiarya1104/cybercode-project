{{-- MODAL ADD --}}
<div class="modal fade text-left" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Add application</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add.application') }}" method="POST" class="needs-validation"
                    enctype="multipart/form-data">
                    @csrf
                    <label>Application Name : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                            value="{{ old('name') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    </div>

                    <label>Application Image : </label>
                    <div class="form-group">
                        <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image"
                            value="{{ old('image') }}" type="file" accept="image/*">
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    </div>

                    <label>App Url : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Application Url"
                            class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" name="url"
                            value="{{ old('url') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('url') }}
                        </div>
                    </div>

                    <label>App Description : </label>
                    <div class="form-group">
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"
                            placeholder="Application Description"></textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('category_id') }}
                            </div>
                    </div>

                    <label>Application Category : </label>
                    <div class="form-group">
                        <select name="category_id" class="form-select">
                            <option value="" disabled selected>-- Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            {{ $errors->first('category_id') }}
                        </div>
                    </div>

                    <label>Application Type : </label>
                    <div class="form-group">
                        <select name="type" class="form-select">
                            <option value="" disabled selected>-- Type --</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Web">Web</option>
                            <option value="Desktop">Desktop</option>
                        </select>
                        <div class="invalid-feedback">
                            {{ $errors->first('category_id') }}
                        </div>
                    </div>

                    <label>Year's Made : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Year's Made"
                            class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" name="year"
                            value="{{ old('year') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('year') }}
                        </div>
                    </div>

                    <label>Created By : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Year's Made"
                            class="form-control {{ $errors->has('created_by') ? 'is-invalid' : '' }}" name="created_by"
                            value="{{ old('created_by') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('created_by') }}
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="submit" class="btn btn-primary ml-1">
                    <span class="d-none d-sm-block">Add</span>
                </button>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- MODAL EDIT --}}
@foreach ($applications as $application)
    <div class="modal fade text-left" id="edit{{ $application->id }}" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Edit application</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('edit.application', $application->id) }}" method="POST"
                        class="needs-validation">
                        @csrf
                        @method('put')
                        <label>Name : </label>
                        <div class="form-group">
                            <input type="text" placeholder="Name"
                                class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                value="{{ $application->name }}" name="name">
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <span class="d-none d-sm-block">Update</span>
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
