<!DOCTYPE html>
<html lang="en">
    <?= $this->view('element/header'); ?>
    <body>
        <!-- Style switcher start -->
        <?= $this->view('element/switcher'); ?>
        <!-- Style switcher end -->

        <div class="body-inner">
            <!-- nav start -->
            <?= $this->view('element/nav'); ?>
            <!--/ nav end -->

            <!-- Slider start -->
            <?= $this->view('element/banner'); ?>
            <!--/ Slider end -->

            <!-- About tab start -->
            <?= $this->view('element/about'); ?>
            <!-- About end -->

            <!-- Counter Strat -->
            <?= $this->view('element/counter'); ?>
            <!--/ Counter end -->

            <!-- Parallax 2 start -->
            <?= $this->view('element/parallax_2'); ?>
            <!-- Parallax 2 end -->

            <!-- Footer start -->
            <?= $this->view('element/footer'); ?>
            <!-- Footer end -->

            <!-- copyright start -->
            <?= $this->view('element/copyright'); ?>
            <!--/ copyright end -->
            
            <!-- js start -->
            <?= $this->view('element/js'); ?>
            <!--/ js end -->
            
        </div><!-- Body inner end -->
    </body>
</html>