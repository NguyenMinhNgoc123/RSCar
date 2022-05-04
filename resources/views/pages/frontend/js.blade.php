<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('AdminLTE-master/build/scss/_alerts.scss')}}"></script>

<script type="text/javascript" src="{{asset('/backend/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/backend/js/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('/backend/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/backend/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('/backend/js/revslider.js')}}"></script>
<script type="text/javascript" src="{{asset('/backend/js/common.js')}}"></script>
<script type="text/javascript" src="{{asset('/backend/js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/backend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('backend/js/cloud-zoom.js')}}"></script>
<script type="text/javascript" src="{{asset('/backend/js/jquery.mobile-menu.min.js')}}"></script>
<script src="{{asset('/backend/js/countdown.js')}}"></script>
{{--wow js--}}
<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
<script>
    var loader = function () {
        setTimeout(function () {
            $('#loader').css({'opacity': 0, 'visibility': 'hidden'});
        }, 1000);
    };
    $(function () {
        loader();
    });
</script>
{{--hiệu ứng woww--}}
<script>
    new WOW().init();
</script>
{{--hiện thị lỗi--}}
<script type="text/javascript">
    window.setTimeout(function () {
        $(".alert").fadeTo(1000, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 4000)
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.btn-cart').on('click', function () {
            var id = $(this).data('id');
            var login = $(this).data('login')
            if (login) {
                if (id) {
                    $.ajax({
                        url: "{{url('user/add-cart')}}/" + id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            alert(data)
                        }
                    })
                    swal({
                        icon: "success",
                        title: "Đã thêm vào giỏ hàng",
                    })
                } else {
                    swal("Lỗi")
                }
            } else {
                swal({
                    icon: "error",
                    title: "Bạn chưa đăng nhập",
                })
            }
            e.preventDefault();
        })
    })
</script>
<script>
    jQuery(document).ready(function () {
        jQuery('#rev_slider_4').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 1170,
            startheight: 650,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',

            touchenabled: 'on',
            onHoverStop: 'on',

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            spinner: 'spinner0',
            keyboardNavigation: 'off',

            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'off',

            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: 'off',

            autoHeight: 'off',
            forceFullWidth: 'on',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,

            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });
    });
</script>
<script type="text/javascript">
    function HideMe() {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
    }

    function ShowMe() {
        jQuery('.popup2').show();
        jQuery('#fade').show();

    }

    function ShowMe1() {
        jQuery('.popup3').show();
        jQuery('#fade').show();

    }

    function HideMe1() {
        jQuery('.popup2').hide();
        jQuery('#fade').hide();


    }

    function HideMe2() {
        jQuery('.popup3').hide();
        jQuery('#fade').hide();


    }
</script>
<script>
    var dthen1 = new Date("12/25/17 11:59:00 PM");
    start = "08/04/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if (CountStepper > 0)
        ddiff = new Date((dnow1) - (dthen1));
    else
        ddiff = new Date((dthen1) - (dnow1));
    gsecs1 = Math.floor(ddiff.valueOf() / 1000);

    var iid1 = "countbox_1";
    CountBack_slider(gsecs1, "countbox_1", 1);
</script>
{{--tim kiếm sản phẩm--}}
<script>
    $(document).ready(function () {
        var action = "search";

        $("#search_name").keyup(function () {
            var search_name = $("#search_name").val();

            $.ajax({
                url: "/search-product",
                method: "POST",
                data: {action: action, search_name: search_name, _token: '{{csrf_token()}}'},
                success: function (data) {
                    //alert(data);
                    $("#category-products").html(data);
                    $(document).ready(function () {
                        $('.btn-cart').on('click', function () {
                            var id = $(this).data('id');
                            var login = $(this).data('login')
                            if (login) {
                                if (id) {
                                    $.ajax({
                                        url: "{{url('user/add-cart')}}/" + id,
                                        type: "GET",
                                        dataType: "json",
                                        success: function (data) {
                                            const Toast = Swal.mixin({
                                                toast: true,
                                                position: 'top-end',
                                                showConfirmButton: false,
                                                timer: 3000,
                                            })
                                            if ($.isEmptyObject(data.error)) {
                                                $('#total-quantity').text($('#total-quantity-cart').val())

                                                Toast.fire({
                                                    type: 'success',
                                                    title: data.success,
                                                })
                                            } else {
                                                Toast.fire({
                                                    type: 'error',
                                                    title: data.error
                                                })
                                            }
                                        }
                                    })
                                    swal({
                                        icon: "success",
                                        title: "Đã thêm vào giỏ hàng",
                                    })
                                } else {
                                    swal("Lỗi")
                                }
                            } else {
                                swal({
                                    icon: "error",
                                    title: "Bạn chưa đăng nhập",
                                })
                            }
                            e.preventDefault();
                        })
                    })
                }
            })
            console.log(action)
        })
    })
</script>
{{--danh mục--}}

<script type="text/javascript">
    $(document).ready(function () {
        $(".product_check").click(function () {
            var action = 'data';
            var type =  get_filter_text('type');
            var brand = get_filter_text('brand');
            var tv_name = get_filter_text('tv_name');

            $.ajax({
               url:"/show-category",
                method:'POST',

                data:{action:action,type:type,brand:brand,tv_name:tv_name, _token: '{{csrf_token()}}'},

                success:function (response){
                   $("#category-products").html(response);
                    $(document).ready(function () {
                        $('.btn-cart').on('click', function () {
                            var id = $(this).data('id');
                            var login = $(this).data('login')
                            if (login) {
                                if (id) {
                                    $.ajax({
                                        url: "{{url('user/add-cart')}}/" + id,
                                        type: "GET",
                                        dataType: "json",
                                        success: function (data) {
                                            const Toast = Swal.mixin({
                                                toast: true,
                                                position: 'top-end',
                                                showConfirmButton: false,
                                                timer: 3000,
                                            })
                                            if ($.isEmptyObject(data.error)) {
                                                $('#total-quantity').text($('#total-quantity-cart').val())

                                                Toast.fire({
                                                    type: 'success',
                                                    title: data.success,
                                                })
                                            } else {
                                                Toast.fire({
                                                    type: 'error',
                                                    title: data.error
                                                })
                                            }
                                        }
                                    })
                                    swal({
                                        icon: "success",
                                        title: "Đã thêm vào giỏ hàng",
                                    })
                                } else {
                                    swal("Lỗi")
                                }
                            } else {
                                swal({
                                    icon: "error",
                                    title: "Bạn chưa đăng nhập",
                                })
                            }
                            e.preventDefault();
                        })
                    })
                }
            });
            console.log(action);
        });

    });
    function get_filter_text(text_id) {
        var filterData = [];
        $('#'+ text_id +':checked').each(function () {
            filterData.push($(this).val());
        });
        return filterData;
    }
</script>
<script type="text/javascript">
    {{--$(document).ready(function (){--}}
    {{--    $(document).on('click',".pagination", function (event){--}}
    {{--        event.preventDefault();--}}
    {{--        var page = $(this).attr('href').split('page=')[1];--}}
    {{--        fetch_data(page);--}}
    {{--    });--}}
    {{--    function fetch_data(page){--}}
    {{--        var _token=$("input[name=_token]").val()--}}
    {{--        $.ajax({--}}
    {{--           url:"{{route('pagination.fetch')}}",--}}
    {{--            method:"POST",--}}
    {{--            data:{_token:_token,page:page},--}}
    {{--           success:function (data){--}}
    {{--               $("#category-products").html(data);--}}

    {{--           }--}}
    {{--        });--}}
    {{--    }--}}
    {{--});--}}
</script>
