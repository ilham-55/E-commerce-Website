<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public"
    @include('admin.css')
  </head>

  <style type="text/css">

    .div_center
    {
        text-align: center;
        padding-top: 40px;
    }

    .font_size
    {
        font-size:40px;
        padding-bottom: 40px;
    }

    .text-color
    {
        color:black;
        padding-bottom:10px;
    }

    label
    {
      display: inline-block;
      width: 200px;
    }

    .div_design
    {
     padding-bottom: 15px;
    }
    </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            @if (Session::has('message'))
            <div class=" alert alert-success">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">x</button>
                {{Session()->get('message')}}
            </div>

            @endif



          <div class="div_center">
            <h1 class="font_size">Update Product</h2>
          <form action="{{ url('/update_product_confirm',$product->id)}}" method="POST"
          enctype="multipart/form-data">
          @csrf
          <div class="div_design">
            <label>Product Title :</label>
            <input class="text-color" type="text" name="title"
            placeholder="write a title" required="" value="{{$product->title}}">
          </div>

          <div class="div_design">
            <label>Product Description :</label>
            <input class="text-color" type="text" name="description"
            placeholder="write a description" required="" value="{{$product->description}}">
          </div>

          <div class="div_design">
            <label>Product Price :</label>
            <input class="text-color" type="number" name="price"
            placeholder="write a price" required="" value="{{$product->price}}">
          </div>

          <div class="div_design">
            <label>Discount Price :</label>
            <input class="text-color" type="text" name="dis_price"
            placeholder="write a discount if apply" required="" value="{{$product->discount_price}}">
          </div>

          <div class="div_design">
            <label>Product Quantity :</label>
            <input class="text-color" type="number" min="0" name="quantity"
            placeholder="write a quantity" required="" value="{{$product->quantity}}">
          </div>

          <div class="div_design">
            <label>Product Category :</label>
            <select class="text_color" name="category" required="">
              <option value="{{$product->category}}" selected="">
              {{$product->category}}</option>

              @foreach($category as $category)
                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
              @endforeach

            </select>
          </div>

          <div class="div_design">
            <label>Current Product Image :</label>
            <img height="100" width="100" src="/product/{{$product->image}}">
          </div>

          <div class="div_design">
            <label>Change Product Image :</label>
            <input type="file" name="image" >
          </div>


          <div class="div_design">
            <input type="submit" value="Update Product" class="btn
            btn-primary" required="">
          </div>
        </form>



      </div>
     </div>
</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
