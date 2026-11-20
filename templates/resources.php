<!-- Шаблон полезных материалов -->
<div class="resources-card">
    <div class="resources-header">
        <h2 class="section-title">Полезные материалы</h2>
    </div>
    <ul class="resources-list">
        <?php foreach ($resources as $resource): ?>
            <li>
                <a href="<?php echo $resource['url']; ?>" target="_blank" rel="noopener">
                    <?php echo $resource['title']; ?>
                </a>
                <?php if (isset($resource['desc'])): ?>
                    <p class="resource-desc"><?php echo $resource['desc']; ?></p>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
