

<?php foreach ($gr_colors as $key => $value) { ?>

<ul>
    <li>
        <button style="background-color: #<?php echo $key; ?>" data-color-key="<?php echo $value; ?>">
            <span><?php echo $value; ?></span>
        </button>
    </li>
</ul>

<?php } ?>