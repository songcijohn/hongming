<!-- Header start -->
<header id="header" class="navbar-fixed-top header2" role="banner">
    <div class="container">
        <div class="row">
            <!-- Logo start -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="/">
                        <img class="img-responsive" src="/public/images/logo.png" alt="logo">
                    </a> 
                </div>                   
            </div><!--/ Logo end -->
            <nav class="collapse navbar-collapse clearfix" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown <?php if($this->uri->uri_string == 'about'){ ?> active <?php }?>">
                        <a href="/about" class="dropdown-toggle" data-toggle="dropdown">关于宏明 <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li <?php if($this->uri->uri_string == 'about'){ ?>class="active" <?php }?>><a href="/about/index">宏明简介</a></li>
                                <li <?php if($this->uri->uri_string == 'about/advantage'){ ?>class="active" <?php }?>><a href="/about/advantage">宏明优势</a></li>
                                <li <?php if($this->uri->uri_string == 'about/group'){ ?>class="active" <?php }?>><a href="/about/group">宏明集团</a></li>
                            </ul>
                        </div>
                    </li>
                    <li <?php if($this->uri->uri_string == 'hongming/product'){ ?>class="active" <?php }?>><a href="/hongming/product">产品中心</a></li>
                    <li <?php if($this->uri->uri_string == 'hongming/news'){ ?>class="active" <?php }?>><a href="/hongming/news">新闻动态</a></li>
                    <li class="dropdown <?php if($this->uri->uri_string == 'contact'){ ?> active <?php }?>">
                        <a href="/contact" class="dropdown-toggle" data-toggle="dropdown">联系我们 <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li <?php if($this->uri->uri_string == 'contact/hr'){ ?>class="active" <?php }?>><a href="/contact/hr">人才招聘</a></li>
                                <li <?php if($this->uri->uri_string == 'contact'){ ?>class="active" <?php }?>><a href="/contact/index">联系我们</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav><!--/ Navigation end -->
        </div><!--/ Row end -->
    </div><!--/ Container end -->
</header><!--/ Header end -->