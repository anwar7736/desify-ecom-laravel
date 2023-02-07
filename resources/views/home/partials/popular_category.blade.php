@foreach($categories as $category)
<div class="col-sm-6 col-md-4 item_box item_box_id_53">
<div class="category_item">

    <div class="category_item_bottom">

    <div class="category_item_bottom_inner">
        <h2 class="title">
            <a href="{{ route('shop', ['category'=> $category['name']]) }}" title="">
                    {{ $category['name'] }}
                <img alt="" src="{{ $category['image_url'] }}" title="" />
                </a>
            </h2>
        </div>

    </div>

</div>
</div>
@endforeach