@extends('front/layout')

@section('container')


  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>T-Shirt</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li><a href="#">Product</a></li>
          <li class="active">T-shirt</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category 
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">-->
                <!--Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="{{asset('storage/media/'.$product[0]->image)}}" class="simpleLens-lens-image"><img src="{{asset('storage/media/'.$product[0]->image)}}" class="simpleLens-big-image"></a></div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                
                <div class="col-md-7 col-sm-7 col-xs-12">
                  
                  <div class="aa-product-view-content">
                    
                    <h3>{{$product[0]->name}}</h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">Rs {{$product_attr[$product[0]->id][0]->price}}&nbsp;&nbsp;</span>
                      <span class="aa-product-view-price"><del>Rs {{$product_attr[$product[0]->id][0]->mrp}}</del></span>

                      
                    </div>
                    <p>
                      <h4>Product Description</h4>  
                    {!!$product[0]->short_desc!!}
                    </p>
                    <h4>Size</h4>
                    <div class="aa-prod-view-size">
                    @foreach($product_attr[$product[0]->id] as $attr)  

                    @if($attr->size!='')
                      <a href="#">{{$attr->size}}</a>
                      @endif  

                      @endforeach  
                    </div>
                    <h4>Color</h4>
                    <div class="aa-color-tag">
                      @foreach($product_attr[$product[0]->id] as $attr)  

                      @if($attr->color!='')
                      <a href="#" class="aa-color-{{strtolower($attr->color)}}"></a>
                      @endif  

                      @endforeach  
                    </div>
                    <div class="aa-prod-quantity">
                      <form action="">
                        <select id="" name="">
                          <option selected="1" value="0">1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                          <option value="5">6</option>
                        </select>
                      </form>
                      <p class="aa-prod-category">
                      Model: <a href="#">{{$product[0]->model}}</a>
                      </p>
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="#">Add To Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
 <!--               <li><a href="#description" data-toggle="tab">Description</a></li> -->

              </ul>

              <!-- Tab panes -->
                            
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection