<!DOCTYPE html>
<html lang="en">
    <?php $this->view('element/header'); ?>
    <body>
        <div class="body-inner">
            <!-- nav start -->
            <?php $this->view('element/nav'); ?>
            <!--/ nav end -->

            <!-- Slider start -->
            <?php $this->view('element/banner'); ?>
            <!--/ Slider end -->

            <!-- About tab start -->
            <?php $this->view('news/newsInfo'); ?>
            <!-- About end -->

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