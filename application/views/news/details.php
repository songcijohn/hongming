<!-- Blog details page start -->
<section id="main-container">
    <div class="container">
        <div class="row">

            <!-- Blog start -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                <?php
                if (isset($num)) {
                    $this->view('news/item/' . $num);
                } else {
                    $this->view('news/list');
                }
                ?>
            </div><!--/ Content col end -->

            <!-- sidebar start -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                <div class="sidebar sidebar-right">

                    <!-- Tab widget start-->
                    <div class="widget widget-tab">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#popular-tab" data-toggle="tab">热门</a></li>
                            <!--<li class=""><a href="#comments-tab" data-toggle="tab">comments</a></li>-->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popular-tab">
                                <ul class="posts-list unstyled clearfix">
                                    <li>
                                        <div class="posts-thumb pull-left"> 
                                            <a href="/news/item/1"> 
                                                <img alt="img" src="/public/images/blog/blog1.jpg">
                                            </a> 
                                        </div>
                                        <div class="post-content">
                                            <h4 class="entry-title"><a href="/news/item/1">公司领导对基地视察 </a>
                                            </h4>
                                            <p class="post-meta">
                                                <span class="post-meta-author">发表自 宏明记者</span>
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li><!-- First post end-->
                                    <li>
                                        <div class="posts-thumb pull-left"> 
                                            <a href="/news/item/2"> 
                                                <img alt="img" src="/public/images/blog/blog2.jpg">
                                            </a> 
                                        </div>
                                        <div class="post-content">
                                            <h4 class="entry-title">
                                                <a href="/news/item/2">北大纵横入驻公司启动宏明电子变革咨询 </a>
                                            </h4>
                                            <p class="post-meta">
                                                <span class="post-meta-author">发表自 宏明记者</span>
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li><!-- 2nd post end-->
                                    <li>
                                        <div class="posts-thumb pull-left"> 
                                            <a href="/news/item/3"> 
                                                <img alt="img" src="/public/images/blog/blog3.jpg">
                                            </a> 
                                        </div>
                                        <div class="post-content">
                                            <h4 class="entry-title">
                                                <a href="/news/item/3">宏明村田项目回顾</a>
                                            </h4>
                                            <p class="post-meta">
                                                <span class="post-meta-author">发表自 宏明记者</span>
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li><!-- 3rd post end-->
                                </ul>
                            </div><!-- Popular tabpan end -->

                            <div class="tab-pane" id="recent-tab">
                                <ul class="posts-list unstyled clearfix">
                                    <li>
                                        <div class="posts-thumb pull-left"> 
                                            <a href="#"> 
                                                <img alt="img" src="/public/images/blog/blog3.jpg">
                                            </a> 
                                        </div>
                                        <div class="post-content">
                                            <h4 class="entry-title"><a href="#">宏明村田项目回顾</a>
                                            </h4>
                                            <p class="post-meta">
                                                <span class="post-meta-author">发表自 <a href="#"> 宏明记者</a></span>
                                                <span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> 2016年5月19日</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li><!-- First post end-->
                                    <li>
                                        <div class="posts-thumb pull-left"> 
                                            <a href="#"> 
                                                <img alt="img" src="/public/images/blog/blog1.jpg">
                                            </a> 
                                        </div>
                                        <div class="post-content">
                                            <h4 class="entry-title"><a href="#">公司领导对基地视察</a>
                                            </h4>
                                            <p class="post-meta">
                                                <span class="post-meta-author">发表自 <a href="#"> 宏明记者</a></span>
                                                <span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> 2015年12月29日</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li><!-- 2nd post end-->
                                </ul>
                            </div><!-- Recent tabpan end -->
                            <!-- 
                                                                                <div class="tab-pane" id="comments-tab">
                                                                                    <ul class="posts-list unstyled clearfix">
                                                                                      <li>
                                                                                        <div class="posts-avator pull-left"> 
                                                                                            <a href="#"> 
                                                                                                    <img alt="img" src="/public/images/blog/avator1.png">
                                                                                            </a> 
                                                                                        </div>
                                                                                        <div class="post-content">
                                                                                            <h4 class="entry-title"><a href="#">If you are going to use a passage  of Lorem Ipsum</a>
                                                                                            </h4>
                                                                                            <p class="post-meta">
                                                                                                                            <span class="post-meta-author">Posted by <a href="#"> John</a></span>
                                                                                                                            <span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> November 21</a>
                                                                                                                            </span>
                                                                                                                    </p>
                                                                                        </div>
                                                                                        <div class="clearfix"></div>
                                                                                      </li>
                                                                                      <li>
                                                                                        <div class="posts-avator pull-left"> 
                                                                                            <a href="#"> 
                                                                                                    <img alt="img" src="/public/images/blog/avator2.jpg">
                                                                                            </a> 
                                                                                        </div>
                                                                                        <div class="post-content">
                                                                                            <h4 class="entry-title"><a href="#">you need to be sure there isn’t anything embarra</a>
                                                                                            </h4>
                                                                                            <p class="post-meta">
                                                                                                                            <span class="post-meta-author">Posted by <a href="#"> Tina</a></span>
                                                                                                                            <span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> October 18</a>
                                                                                                                            </span>
                                                                                                                    </p>
                                                                                        </div>
                                                                                        <div class="clearfix"></div>
                                                                                      </li>
                                                                                    </ul>
                                                                                </div>
                            -->

                        </div><!-- Tab content end -->
                    </div><!-- Tab widget end-->

                    <div class="gap-20"></div>
                    <!-- Blog category start -->
                    <div class="widget widget-categories">
                        <h3 class="widget-title">新闻类别</h3>
                        <ul class="category-list clearfix">
                            <li><a href="javascript:void();">公司通告</a><span class="posts-count"> (0)</span></li>
                            <li><a href="/hongming/news">公司动态</a><span class="posts-count"> (2)</span></li>
                            <li><a href="javascript:void();">产品信息</a><span class="posts-count"> (0)</span></li>
                            <li><a href="javascript:void();">员工活动</a><span class="posts-count"> (0)</span></li>
                        </ul>
                    </div><!-- Blog category end -->

                    <div class="gap-20"></div>
                    <!-- Blog tags start -->
                    <div class="widget widget-tags">
                        <h3 class="widget-title">热门标签</h3>
                        <ul class="unstyled clearfix">
                            <li><a href="/hongming/news">元器件</a></li>
                            <li><a href="/hongming/news">军工</a></li>
                            <li><a href="/hongming/news">技术</a></li>
                            <li><a href="/hongming/news">活动</a></li>
                            <li><a href="/hongming/news">人才</a></li>
                        </ul>
                    </div><!-- Blog tags end -->

                </div><!-- sidebar end -->
            </div>
        </div><!--/ row end -->
    </div><!--/ container end -->
</section><!-- Blog details page end -->
