<?php
// Preload theme settings
$notice_enable =  get_theme_mod('notice_enable', true);
$notice_type = get_theme_mod('notice_type', 'danger');
$notice_content = get_theme_mod('notice_content', 'Eine Buchung wird möglich sein, sobald die allgemeine Lage eine zuverlässige Planung zulässt. Gerne könnt ihr uns schon per Mail einen Termin schicken und wir reservieren den Zeitraum unverbindlich.');
?>
<?php if ($notice_enable) : ?>
<div class="container">
    <div class="alert alert-<?php echo $notice_type; ?> alert-dismissible front_page_alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Hinweis:</strong> <?php echo $notice_content; ?>
    </div>
</div>
<?php endif; ?>