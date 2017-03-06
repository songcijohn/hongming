<!-- alpha jquery plugin -->
<script type="text/javascript" src="/public/js/alpha/alpha.js"></script>

<?php $this->view('element/js'); ?>

<script type="text/javascript">
    (function($) { "use strict";
       $(document).ready(function(){
           //enable jquery alpha plugin
           $('#testimonials').alpha();
      });
    })(jQuery);
</script>