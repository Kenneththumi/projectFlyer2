@extends('app')
@section('content')
    <h4>Selling your Home</h4>
    <form method="POST" action="/flyers" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Street">Street:</label>
            <input type="text" name="street" class="form-control" value="{{ old('street') }}">
        </div>
        <div class="form-group">
            <label for="City">City:</label>
            <input type="text" name="city" class="form-control" value="{{ old('city') }}">
        </div>
        <div class="form-group">
            <label for="zip">Zip/Pos  tal Code:</label>
            <input type="text" name="zip" class="form-control" value="{{ old('zip') }}">
        </div>
        <div class="form-group">
            <label for="Country">Country:</label>
            <select name="country" class="form-control">
                   @foreach(App\Http\Controllers\Utilities\Country::all() as $country)
                       <option value="{{ $country }}">{{ $country }}</option>
                   @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="State">State:</label>
            <input type="text" name="state" class="form-control" value="{{ old('state') }}">
        </div>
        <hr>
        <div class="form-group">
            <label for="pr ice">Sale price:</label>
            <input type="text" name="price" class="form-control" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <label for="description">Home Description:</label>
            <textarea type="text" name="description" class="form-control" rows="10">
                {{ old('description') }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="photos">Photos:</label>
            <input type="file" name="street" class="form-control" value="{{ old('photos') }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Flyer</button>
        </div>
    </form>
@stop