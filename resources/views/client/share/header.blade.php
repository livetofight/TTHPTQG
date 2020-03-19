<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset ('client/lib/bootstrap/dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset ('client/lib/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset ('client/css/site.css')}}" />

</head>
<body>
    <header>
    <div style="min-height:67px; background-image:linear-gradient(to top, #dbdbdb, #ffffff);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="/" style="text-decoration:none">
                        <img src="{{ asset ('client/img/logo.png')}}" alt="Logo" id="logo-img" />
                        <p style="margin:0; color:#920009; font-size:13px; line-height:1.38; text-transform:uppercase; margin-top:14px; margin-bottom:3px">Sở gD&ĐT Thành phố hà nội</p>
                        <h4 class="top-header-caption">Hệ thống thi trắc nghiệm trực tuyến</h4>
                    </a>
                </div>
                <div class="col-md-6 text-right" style="margin-bottom:10px">
                    <a href="/login/" id="login-btn" class="btn btn-primary"> Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>

</header>
