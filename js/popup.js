document.querySelectorAll('.open-popup').forEach(btn => {
  btn.addEventListener('click', () => {
    const popupId = btn.dataset.target;
    document.getElementById(popupId)?.classList.add('show');
  });
});

document.querySelectorAll('.close-popup').forEach(btn => {
  btn.addEventListener('click', () => {
    btn.closest('.popup-overlay').classList.remove('show');
  });
});

document.querySelectorAll('.popup-overlay').forEach(popup => {
  popup.addEventListener('click', (e) => {
    if (e.target === popup) {
      popup.classList.remove('show');
    }
  });
});