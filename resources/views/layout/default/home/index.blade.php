@extends('layout.default.layouts.app')
@include('layout.default.layouts.slider')
@section('content')
<main class="container" style="height: auto !important; margin-top:70px; margin-bottom: 20px;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="https://tweb.com.vn"><i class="fa fa-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </nav>

    <div class="page-header">
        <h1 class="page-title">
            Blog</h1>

        <p>Hướng dẫn, chia sẻ kinh nghiệm, thủ thuật PHP.</p>
    </div>

    <div class="row" style="height: auto !important;">
        <div class="col-lg-9 col-sm-12">
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <article class="item-post-blog row">
                            <div class="thumbnail col-lg-3 col-sm-12">
                                <a class="thumbnail-link" href="{{route('chitiet')}}">
                                    <img width="200" height="150"
                                        src="https://tweb.com.vn/storage/upload/2021/07/03/upload_20210703180758_60e04d7ee8b6a.png"
                                        class="entry-thumbnail wp-post-image" alt="INET ưu đãi tháng 7/2021">
                                </a>
                            </div>
                            <div class="entry-wrapper col-lg-9 col-sm-12">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="{{route('chitiet')}}" rel="bookmark">
                                            INET ưu đãi tháng 7/2021
                                        </a>
                                    </h2>
                                </div>
                                <div class="entry-meta">
                                    <span class="fa fa-calendar"></span>
                                    <time class="entry-date">Jul, 03 2021</time>
                                    <span class="entry-author">
                                        <span class="fa fa-eye"></span>
                                        <span>34</span>
                                    </span>
                                    <span class="fa fa-comments"></span>
                                    <span class="entry-comments">
                                        <a href="https://tweb.com.vn/inet/inet-uu-dai-thang-72021.html#comments">
                                            2
                                        </a>
                                    </span>
                                </div>
                                <div class="entry-summary">
                                    <p style="font-size: 15px;">- Ưu đãi tên miền quốc tế .COM/ .NET:
                                        + Đăng ký 1 năm: .COM chỉ còn 189K &amp; .NET chỉ còn 169K
                                        + Đăng ký từ 2 năm: Đồng giá .COM / .NET chỉ 99K cho năm đầu tiên</p>
                                </div>
                            </div>
                        </article>

                        <article class="item-post-blog row">
                            <div class="thumbnail col-lg-3 col-sm-12">
                                <a class="thumbnail-link" href="{{route('chitiet')}}">
                                    <img width="200" height="150"
                                        src="https://tweb.com.vn/storage/upload/2021/07/03/upload_20210703180758_60e04d7ee8b6a.png"
                                        class="entry-thumbnail wp-post-image" alt="INET ưu đãi tháng 7/2021">
                                </a>
                            </div>
                            <div class="entry-wrapper col-lg-9 col-sm-12">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="{{route('chitiet')}}" rel="bookmark">
                                            INET ưu đãi tháng 7/2021
                                        </a>
                                    </h2>
                                </div>
                                <div class="entry-meta">
                                    <span class="fa fa-calendar"></span>
                                    <time class="entry-date">Jul, 03 2021</time>
                                    <span class="entry-author">
                                        <span class="fa fa-eye"></span>
                                        <span>34</span>
                                    </span>
                                    <span class="fa fa-comments"></span>
                                    <span class="entry-comments">
                                        <a href="https://tweb.com.vn/inet/inet-uu-dai-thang-72021.html#comments">
                                            2
                                        </a>
                                    </span>
                                </div>
                                <div class="entry-summary">
                                    <p style="font-size: 15px;">- Ưu đãi tên miền quốc tế .COM/ .NET:
                                        + Đăng ký 1 năm: .COM chỉ còn 189K &amp; .NET chỉ còn 169K
                                        + Đăng ký từ 2 năm: Đồng giá .COM / .NET chỉ 99K cho năm đầu tiên</p>
                                </div>
                            </div>
                        </article>

                        <article class="item-post-blog row">
                            <div class="thumbnail col-lg-3 col-sm-12">
                                <a class="thumbnail-link" href="{{route('chitiet')}}">
                                    <img width="200" height="150"
                                        src="https://tweb.com.vn/storage/upload/2021/07/03/upload_20210703180758_60e04d7ee8b6a.png"
                                        class="entry-thumbnail wp-post-image" alt="INET ưu đãi tháng 7/2021">
                                </a>
                            </div>
                            <div class="entry-wrapper col-lg-9 col-sm-12">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="{{route('chitiet')}}" rel="bookmark">
                                            INET ưu đãi tháng 7/2021
                                        </a>
                                    </h2>
                                </div>
                                <div class="entry-meta">
                                    <span class="fa fa-calendar"></span>
                                    <time class="entry-date">Jul, 03 2021</time>
                                    <span class="entry-author">
                                        <span class="fa fa-eye"></span>
                                        <span>34</span>
                                    </span>
                                    <span class="fa fa-comments"></span>
                                    <span class="entry-comments">
                                        <a href="https://tweb.com.vn/inet/inet-uu-dai-thang-72021.html#comments">
                                            2
                                        </a>
                                    </span>
                                </div>
                                <div class="entry-summary">
                                    <p style="font-size: 15px;">- Ưu đãi tên miền quốc tế .COM/ .NET:
                                        + Đăng ký 1 năm: .COM chỉ còn 189K &amp; .NET chỉ còn 169K
                                        + Đăng ký từ 2 năm: Đồng giá .COM / .NET chỉ 99K cho năm đầu tiên</p>
                                </div>
                            </div>
                        </article>

                        



                        <div class="text-center" style="margin-top: 30px">
                            <a style="max-width: 400px; width: 100%; display: block; margin: 0 auto"
                                class="btn btn-primary" href="http://tweb.com.vn/blog?page=2">
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                LOAD MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12" style="height: auto !important;">
            <div class="banner" style="height: auto !important;">
                <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Vertical -->
                <ins class="adsbygoogle" style="display: block; height: 600px;" data-ad-client="ca-pub-2133388326821128"
                    data-ad-slot="1485986610" data-ad-format="auto" data-full-width-responsive="true"
                    data-adsbygoogle-status="done" data-ad-status="filled"><ins id="aswift_0_expand" tabindex="0"
                        title="Advertisement" aria-label="Advertisement"
                        style="border: none; height: 600px; width: 261px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-table;"><ins
                            id="aswift_0_anchor"
                            style="border: none; height: 600px; width: 261px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: block; overflow: visible;"><iframe
                                id="aswift_0" name="aswift_0"
                                style="left:0;position:absolute;top:0;border:0;width:261px;height:600px;"
                                sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation"
                                width="261" height="600" frameborder="0"
                                src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-2133388326821128&amp;output=html&amp;h=600&amp;slotname=1485986610&amp;adk=2433303874&amp;adf=1246748749&amp;pi=t.ma~as.1485986610&amp;w=261&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1626419529&amp;rafmt=1&amp;psa=1&amp;format=261x600&amp;url=https%3A%2F%2Ftweb.com.vn%2Finet%2Finet-uu-dai-thang-72021.html&amp;flash=0&amp;fwr=0&amp;fwrattr=true&amp;rpe=1&amp;resp_fmts=4&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMCIsIng4NiIsIiIsIjkxLjAuNDQ3Mi4xMjQiLFtdLG51bGwsbnVsbCxudWxsXQ..&amp;tt_state=W3siaXNzdWVyT3JpZ2luIjoiaHR0cHM6Ly9hdHRlc3RhdGlvbi5hbmRyb2lkLmNvbSIsInN0YXRlIjo3fV0.&amp;dt=1626419528987&amp;bpp=3&amp;bdt=160&amp;idt=112&amp;shv=r20210712&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D4c1d6b601d8c4554-22de675745ca00a7%3AT%3D1626020538%3ART%3D1626020538%3AS%3DALNI_MZJj7rM2bP3MiX7NA4nGlu7mTiVaw&amp;correlator=5991592814158&amp;frm=20&amp;pv=2&amp;ga_vid=684961488.1626407274&amp;ga_sid=1626419529&amp;ga_hid=632160142&amp;ga_fc=0&amp;u_tz=420&amp;u_his=9&amp;u_java=0&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=972&amp;ady=112&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=42530672%2C31060957%2C21067496&amp;oid=3&amp;pvsid=166031090154118&amp;pem=70&amp;ref=https%3A%2F%2Ftweb.com.vn%2Fblog&amp;eae=0&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;xpc=sDAnbTvnOK&amp;p=https%3A//tweb.com.vn&amp;dtd=142"
                                marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true"
                                scrolling="no" allowfullscreen="true" data-google-container-id="a!1"
                                data-google-query-id="CLmonuaE5_ECFQAltwAdj3IOIw"
                                data-load-complete="true"></iframe></ins></ins></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Vertical -->
                <ins class="adsbygoogle" style="display: block; height: 522px; width: 261px;"
                    data-ad-client="ca-pub-2133388326821128" data-ad-slot="1485986610" data-ad-format="auto"
                    data-full-width-responsive="true" data-adsbygoogle-status="done" data-ad-status="filled"><ins
                        id="aswift_1_expand"
                        style="border: none; height: 522px; width: 261px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-table;"
                        tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_1_anchor"
                            style="border: none; height: 522px; width: 261px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: block; overflow: hidden;"><iframe
                                id="aswift_1" name="aswift_1"
                                style="left: 0px; position: absolute; top: 0px; border: 0px; width: 261px; height: 522px;"
                                sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation"
                                width="261" height="522" frameborder="0"
                                src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-2133388326821128&amp;output=html&amp;h=600&amp;slotname=1485986610&amp;adk=2433303874&amp;adf=2670628365&amp;pi=t.ma~as.1485986610&amp;w=261&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1626419529&amp;rafmt=1&amp;psa=1&amp;format=261x600&amp;url=https%3A%2F%2Ftweb.com.vn%2Finet%2Finet-uu-dai-thang-72021.html&amp;flash=0&amp;fwr=0&amp;fwrattr=true&amp;rpe=1&amp;resp_fmts=4&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMCIsIng4NiIsIiIsIjkxLjAuNDQ3Mi4xMjQiLFtdLG51bGwsbnVsbCxudWxsXQ..&amp;tt_state=W3siaXNzdWVyT3JpZ2luIjoiaHR0cHM6Ly9hdHRlc3RhdGlvbi5hbmRyb2lkLmNvbSIsInN0YXRlIjo3fV0.&amp;dt=1626419528990&amp;bpp=4&amp;bdt=163&amp;idt=197&amp;shv=r20210712&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D4c1d6b601d8c4554-22de675745ca00a7%3AT%3D1626020538%3ART%3D1626020538%3AS%3DALNI_MZJj7rM2bP3MiX7NA4nGlu7mTiVaw&amp;prev_fmts=261x600&amp;correlator=5991592814158&amp;frm=20&amp;pv=1&amp;ga_vid=684961488.1626407274&amp;ga_sid=1626419529&amp;ga_hid=632160142&amp;ga_fc=0&amp;ga_cid=1873509553.1626407274&amp;u_tz=420&amp;u_his=9&amp;u_java=0&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=972&amp;ady=712&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=42530672%2C31060957%2C21067496&amp;oid=3&amp;pvsid=166031090154118&amp;pem=70&amp;ref=https%3A%2F%2Ftweb.com.vn%2Fblog&amp;eae=0&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7CeEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;xpc=t8AoctV5zF&amp;p=https%3A//tweb.com.vn&amp;dtd=205"
                                marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true"
                                scrolling="no" allowfullscreen="true" data-google-container-id="a!2"
                                data-google-query-id="CIamq-aE5_ECFYaP3godpCEJdA"
                                data-load-complete="true"></iframe></ins></ins></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
</main>
@endsection