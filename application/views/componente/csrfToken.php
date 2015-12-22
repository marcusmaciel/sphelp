<script name="sphelp">
    window.sphelp = [
        '<?php echo $this->security->get_csrf_token_name(); ?>',
        '<?php echo $this->security->get_csrf_hash(); ?>'
    ];
    if (window.sphelp[1].length == 0) {
        delete window.sphelp;
    }
    ;
    document.querySelector('script[name=sphelp]').remove();
</script>
