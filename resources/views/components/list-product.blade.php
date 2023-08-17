<div class="aa-product-catg-body">
    <ul class="aa-product-catg">
    @foreach($data as $product)
        <li>
            <figure>
            <a class="aa-product-img" href="productdetail/{{$product->id}}"><img src="public/images/{{ $product->image }}" alt="polo shirt img" style="width:250px;height:300px"></a>
            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
            <figcaption>
                <h4 class="aa-product-title"><a href="#">{{ $product->pro_name }}</a></h4>
                <span class="aa-product-price">VND {{ $product->price }}</span><span class="aa-product-price">
                    @if($product['saleprice'])
                    <del>VND {{ $product->saleprice }}</del>
                    @endif
                </span>
                <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
            </figcaption>
            </figure>                         
            <div class="aa-product-hvr-content">
            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
            </div>
            <!-- product badge -->
            <span class="aa-badge aa-sale" href="#">SALE!</span>
        </li>   
    @endforeach                            
    </ul>
</div>