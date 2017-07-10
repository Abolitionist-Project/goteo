<?php

$this->layout('auth/layout', [
    'alt_title' => $this->text('meta-title-register'),
    'alt_description' => $this->text('meta-title-register')
]);

$this->section('inner-content');
?>
    <h2 class="col-md-offset-1 padding-bottom-6"> <?= $this->text('register-form-title') ?></h2>

    <?= $this->supply('sub-header', $this->get_session('sub-header')) ?>

    <form class="form-horizontal" role="form" method="post" action="/signup?return=<?= urlencode($this->raw('return')) ?>">

    <?= $this->insert('auth/partials/form_signup') ?>

    <?= $this->insert('auth/partials/social_login') ?>

    </form>
<?php $this->replace() ?>


<?php $this->section('content') ?>
    <?= $this->insert('auth/partials/openid_modal') ?>
<?php $this->append() ?>

<?php $this->section('footer') ?>

<script type='text/javascript'>

$(function() {

  $('#register_accept').change(function() {
        $('#register_continue').attr('disabled', !this.checked);

  });

  $('#openid').change(function() {
        $('#openid-link').attr('href', '/login/openid?return=<?= urlencode($this->raw('return')) ?>&u='+$(this).val());

  });

})

</script>

<?php $this->append() ?>
