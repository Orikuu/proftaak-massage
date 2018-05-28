<div id="footer">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/bootstrap/css/bootstrap.css') ?>">
    <div id="footer-content" class="col-xs-12 col-sm-6">
        <span id="select-language" class="label label-dark">
        	<?= ucfirst($this->config->item('language')) ?>
        </span>
        |
        <a href="<?= site_url('') ?>">
            <?= lang('go_to_booking_page') ?>
        </a>
    </div>

    <div id="footer-user-display-name" class="col-xs-12 col-sm-6">
        <?= lang('hello') . ', ' . $user_display_name ?>!
    </div>
</div>

<script src="<?= asset_url('assets/js/backend.js') ?>"></script>
<script src="<?= asset_url('assets/js/general_functions.js') ?>"></script>
</body>
</html>
