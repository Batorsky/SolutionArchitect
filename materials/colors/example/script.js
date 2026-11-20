document.addEventListener("DOMContentLoaded", () => {
  const options = document.querySelectorAll(".option-item");
  const submitBtn = document.getElementById("submitBtn");
  const feedbackBox = document.getElementById("feedbackBox");
  const statusBadge = document.getElementById("statusBadge");
  const targetCorrect = document.getElementById("targetCorrect");
  let isSubmitted = false;

  options.forEach((option) => {
    option.addEventListener("click", () => {
      if (isSubmitted) return;

      options.forEach((opt) => opt.classList.remove("selected"));
      option.classList.add("selected");
      submitBtn.disabled = false;
    });
  });

  submitBtn.addEventListener("click", () => {
    isSubmitted = true;
    submitBtn.classList.add("hidden");

    // Находим, какой вариант был выбран пользователем на момент клика
    const selectedOption = document.querySelector(".option-item.selected");

    options.forEach((opt) => {
      opt.classList.add("disabled");
      opt.classList.remove("selected");
    });

    // Подсвечиваем выбранный пользователем ответ
    if (selectedOption) {
      const isCorrect = selectedOption.getAttribute("data-correct") === "true";

      if (isCorrect) {
        // Если пользователь угадал — плашка становится зеленой
        selectedOption.classList.add("correct-reveal");
        statusBadge.textContent = "Верно";
        statusBadge.style.color = "#10B981";
      } else {
        // Если ошибся — выбранная плашка становится красной
        selectedOption.classList.add("incorrect-reveal");
        statusBadge.textContent = "Неверно";
        statusBadge.style.color = "#801C2D";
      }
    }

    // Правильный ответ в любом случае подсвечиваем зеленым
    targetCorrect.classList.add("correct-reveal");

    // Показываем блок разбора и статус ответа
    feedbackBox.style.display = "block";
    statusBadge.style.display = "inline";
  });
});
