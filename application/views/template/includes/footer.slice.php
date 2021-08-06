

<!-- JS Libraries here! -->
<script src="<?php echo base_url(); ?>assets/lib/jquery/jquery-3.2.1.slim.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/popper/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>

<!-- ==========================================================================================> -->

<!-- Custom JS [Functions/Methods Only] -->
<script type="module" src="<?php echo base_url(); ?>assets/js/auth_custom_scripts.js"></script>
<script type="module" src="<?php echo base_url(); ?>assets/js/admin_custom_scripts.js"></script>
<script type="module" src="<?php echo base_url(); ?>assets/js/user_custom_scripts.js"></script>
<script type="module" src="<?php echo base_url(); ?>assets/js/guest_custom_scripts.js"></script>

<!-- Custom JS [JQuery Events] -->
@yield('custom_scripts')