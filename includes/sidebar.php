<aside class="sidebar">
    <div class="sidebar-header">
        <div class="course-category">Курс</div>
        <div class="course-title">Архитектор решений</div>
        
        <div class="progress-container">
            <div class="progress-text-block">
                Прогресс курса
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill" style="width: 15%;"></div>
                </div>
            </div>
            <div class="progress-percentage">15%</div>
        </div>
    </div>

    <nav class="sidebar-nav">
        <div class="nav-section-title">План маршрута</div>
        
        <?php
        $nav_items = [
            ['id' => '01', 'title' => 'Старт маршрута', 'url' => '/chapters/01-start.php'],
            ['id' => '02', 'title' => 'Фундамент', 'url' => '/chapters/02-foundation.php'],
            ['id' => '03', 'title' => 'Проектирование системы', 'url' => '/chapters/03-system-design.php'],
            ['id' => '04', 'title' => 'Архитектурные решения', 'url' => '/chapters/04-decisions.php'],
            ['id' => '05', 'title' => 'Эксплуатация', 'url' => '/chapters/05-operations.php'],
            ['id' => '06', 'title' => 'Практика и проект', 'url' => '/chapters/06-project.php'],
        ];

        $current_page = $_SERVER['REQUEST_URI'];
        
        foreach ($nav_items as $item): 
            $active_class = (strpos($current_page, $item['url']) !== false) ? 'active' : '';
        ?>
            <a href="<?php echo $item['url']; ?>" class="nav-item <?php echo $active_class; ?>">
                <div class="status-dot"></div>
                <span class="nav-text"><?php echo $item['id'] . '. ' . $item['title']; ?></span>
            </a>
        <?php endforeach; ?>
    </nav>
</aside>
