<!DOCTYPE html>
<html lang="en">
    <?php $this->view('element/header'); ?>
    <body>
        <div class="body-inner">
            <!-- nav start -->
            <?php $this->view('element/nav'); ?>
            <!--/ nav end -->

            <!-- Slider start -->
            <?php $this->view('index/banner'); ?>
            <!--/ Slider end -->

            <!-- About tab start -->
            <?php $this->view('element/about'); ?>
            <!-- About end -->

            <!-- Counter Strat -->
            <?php $this->view('element/counter'); ?>
            <!--/ Counter end -->

            <!-- Parallax 2 start -->
            <?php $this->view('element/parallax_2'); ?>
            <!-- Parallax 2 end -->

            <!-- Footer start -->
            <?php $this->view('element/footer'); ?>
            <!-- Footer end -->

            <!-- copyright start -->
            <?php $this->view('element/copyright'); ?>
            <!--/ copyright end -->
            
            <!-- js start -->
            <?php $this->view('element/js'); ?>
            <!--/ js end -->
            
        </div><!-- Body inner end -->
    </body>
</html>