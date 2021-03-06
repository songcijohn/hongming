<!DOCTYPE html>
<html lang="en">
    <?php $this->view('element/header'); ?>
    <body>
        <div class="body-inner">
            <!-- nav start -->
            <?php $this->view('element/nav'); ?>
            <!--/ nav end -->

            <!-- Slider start -->
            <?php $this->view('element/banner2'); ?>
            <!--/ Slider end -->

            <!-- About tab start -->
            <?php
            if (isset($num)) {
                $this->view('news/details', array('num' => $num));
            } else {
                $this->view('news/details');
            }
            ?>
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