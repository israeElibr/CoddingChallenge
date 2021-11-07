@include('Boot', ['title' => 'Add Product'])
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-5">
    <form method="POST" action="{{ route('product.save') }}" enctype="multipart/form-data">
      @csrf
        <h4 class="text-center">Add Product</h4>
        <div class="mb-3">
          <label for="name" class="form-label">Name :</label>
          <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description :</label>
          <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price :</label>
            <input type="text" class="form-control" id="price" name="price" >
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image :</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
          <div class="dropdown-menu ">
            @foreach ($categories as $item)
            <a class="dropdown-item" >{{ $item['name'] }}</a>
            @endforeach  
          </div>
        </div> 
          
       
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
        </div>
    </div>
    



















 