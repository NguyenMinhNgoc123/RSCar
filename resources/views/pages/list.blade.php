@extends('pages.layout')
@section('content1')
    <div class="col-main col-sm-9 col-sm-push-3 product-grid">
        <div class="pro-coloumn" id="table_data">
            <article class="col-main">
                <div class="toolbar">
                    <div id="sort-by">
                        <label class="left">Sort By: </label>
                        <ul>
                            <li><a href="#">Position<span class="right-arrow"></span></a>
                                <ul>
                                    <li><a href="#">Name</a></li>
                                    <li><a href="#">Price</a></li>
                                    <li><a href="#">Position</a></li>
                                </ul>
                            </li>
                        </ul>
                        <a class="button-asc left" href="#" title="Set Descending Direction"><span
                                class="top_arrow"></span></a></div>
                    <div class="pager">
                        @include('pages.search')
                    </div>
                </div>
                <div class="category-products wow backInRight" id="category-products">
                    @include('pages.formList')
                </div>
                {{ csrf_field() }}
                <div class="toolbar bottom">
                    {!! $product->links()  !!}
                </div>
            </article>
        </div>
        <!--	///*///======    End article  ========= //*/// -->
    </div>

@endsection
