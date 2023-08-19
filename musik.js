// Получаем элементы уведомления и кнопок
var notificationContainer = document.getElementById("notification-container");
var yesButton = document.getElementById("yes-button");
var noButton = document.getElementById("no-button");
var backgroundMusic = document.getElementById("background-music");

// При клике на кнопку "Да"
yesButton.addEventListener("click", function() {
  // Проигрываем музыку
  backgroundMusic.play();
  // Скрываем уведомление
  notificationContainer.style.display = "none";
});

// При клике на кнопку "Нет"
noButton.addEventListener("click", function() {
  // Скрываем уведомление
  notificationContainer.style.display = "none";
});
