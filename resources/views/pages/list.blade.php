@extends('pages.layout')
@section('content1')
    <div class="col-main col-sm-9 col-sm-push-3 product-grid">
        <div class="pro-coloumn" id="table_data">
            <article class="col-main">
                <div class="toolbar">
                    <div id="sort-by">
                    </div>
                    <div class="pager">
                        @include('pages.search')
                    </div>
                </div>
                <div class="category-products wow backInRight" id="category-products">
                    @include('pages.formList')
                </div>
                {{ csrf_field() }}
                <div class="toolbar bottom ">
                    {{ $product->links() }}
{{--                    {{ $product->links()  }}--}}

                </div>
            </article>
        </div>
        <!--	///*///======    End article  ========= //*/// -->
    </div>

@endsection
