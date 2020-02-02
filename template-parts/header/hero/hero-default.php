<?php
/**
 * The template for the default hero section, at the top of every page
 * 
 * With some PAGE FAULT modifications by Neil Bickford!
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kawi
 */
?>

<div class="hero default-hero">
    <div class="wrapper hero-wrapper">
        <?php kawi_hero_image(); ?>
        <?php $data = kawi_get_hero_data(); ?>
        <div class="main-info">
            <h1 class="main-title" <?php echo (strlen($data['title']) > 12) ? 'style="transform: translatey(-0.2em) skew(-10deg, 0deg)"' : 'style=""'; ?>  ><?php echo wp_kses_post( $data['title'] ); ?></h1>
            <?php if ( $data['meta'] ) : ?>
                <p class="main-meta caps"><?php echo $data['meta']; ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>