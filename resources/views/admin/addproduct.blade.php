@extends('admin.admin_base')

@section('content')
@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{$error}}</p>
@endforeach
<form method="POST" class="container shadow-lg p-3 mb-5 bg-blue rounded" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Category</label>
                <select class="form-control" id="exampleFormControlSelect1" name="gender">
                    <option>Select Category</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Product</label>
                <select class="form-control" id="exampleFormControlSelect1" name="product">
                    <option>Select Product</option>
                    <option value="shirt">Shirt</option>
                    <option value="pant">Pant</option>
                    <option value="salwar">Salwar</option>
                    <option value="jeans">Jeans</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Add A Small Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Select Sizes:  </label>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="small" value="1">
                <label class="form-check-label" for="inlineCheckbox1">Small</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="medium" value="1">
                <label class="form-check-label" for="inlineCheckbox2">Medium</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="large" value="1">
                <label class="form-check-label" for="inlineCheckbox3">Large</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="xl" value="1">
                <label class="form-check-label" for="inlineCheckbox3">XL</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="xxl" value="1">
                <label class="form-check-label" for="inlineCheckbox3">XXL</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Insert Image</label>
                <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <table align="center">
                    <tr>
                        <td>
                            <button type="submit" class="btn btn btn-success btn-lg">Add Product</button>
                            <a href="/admin/home" class="btn btn-primary btn-lg">Cancel</a>
                        </td>
                    </tr>
                </table>
            </div>    
        </div>
    </div>
</form>
@endsection 