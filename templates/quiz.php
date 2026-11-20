<!-- Шаблон квиза -->
<div class="quiz-card">
    <div class="quiz-header">
        <div class="quiz-title-tag">Самопроверка</div>
        <div class="quiz-meta">
            <span class="status-badge" id="statusBadge">Верно</span>
        </div>
    </div>

    <div class="quiz-body" id="quizContainer">
        <?php foreach ($quiz_questions as $index => $q): ?>
            <div class="question-block" data-answer="<?php echo $q['correct']; ?>">
                <div class="question-text"><?php echo ($index + 1) . '. ' . $q['question']; ?></div>
                <div class="options-list">
                    <?php foreach ($q['options'] as $key => $text): ?>
                        <div class="option-item" data-value="<?php echo $key; ?>">
                            <div class="radio-circle"></div>
                            <div class="option-text"><?php echo $text; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="action-row">
        <button class="submit-btn" id="checkQuizBtn" disabled>Проверить ответы</button>
    </div>
</div>
