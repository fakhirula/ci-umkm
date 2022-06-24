<ol class="breadcrumb">
    <?php foreach ($this->uri->segments as $segment) : ?>
        <?php
        $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
        $is_active =  $url == $this->uri->uri_string;
        ?>

        <li class="breadcrumb-item <?= $is_active ? 'active' : '' ?>">
            <?php if ($is_active) : ?>
                <?= str_replace("_", " ", ucfirst($segment)) ?>
            <?php else : ?>
                <a href="<?= base_url($url) ?>"><?= str_replace("_", " ", ucfirst($segment)) ?></a>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ol>